<?php
require_once '../../Models/db/ext_connection.php';
require_once '../../Config/Config.php';
require_once '../../Helpers/Helpers-2.php';
class AddCartToSession extends Connection{
  // ------------- OBTENER EL PRODUCTO A PARTIR DEL ID
  public function getProductoIDT(int $idproducto){
    $this->intIdProducto = $idproducto;
    $sql = "SELECT p.idproducto,
        p.codigo,
        p.nombre,
        p.descripcion,
        p.categoriaid,
        c.nombre as categoria,
        p.precio,
        p.ruta,
        p.stock
    FROM producto p 
    INNER JOIN categoria c
    ON p.categoriaid = c.idcategoria
    WHERE p.status != 0 AND p.idproducto = '{$this->intIdProducto}'";
    $stm = $this->con->prepare($sql);
    $stm->execute();
    $request = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($request) && count($request) > 0){
      for($c=0; $c < count($request) ; $c++){
        $intIdProducto = $request[0]['idproducto'];
        $sqlImg = "SELECT img FROM imagen WHERE productoid = $intIdProducto";
        $arrImg = $this->con->prepare($sqlImg);
        $arrImg->execute();
        $arrImg = $arrImg->fetchAll(PDO::FETCH_ASSOC);
        if(count($arrImg) > 0){
          for ($i=0; $i < count($arrImg); $i++) { 
            $arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
          }
        }else{
          $arrImg[$c]['url_image'] = media().'/images/uploads/product.png';
        }
        $request[$c]['images'] = $arrImg;
      }
    }
    return $request;
  }
  public function addToCart(){
    if($_POST){
      $arrCarrito = array();
      $cantCarrito = 0;
      $idproducto = openssl_decrypt($_POST['id'], METHODENCRIPT, KEY);
      $cantidad = $_POST['cant'];

      if(is_numeric($idproducto) and is_numeric($cantidad)){
        $arrInfoProducto = $this->getProductoIDT($idproducto);
        if(!empty($arrInfoProducto)){
          $arrProducto = array('idproducto' => $idproducto,
            'producto' => $arrInfoProducto[0]['nombre'],
            'cantidad' => $cantidad,
            'precio' => $arrInfoProducto[0]['precio'],
            'imagen' => $arrInfoProducto[0]['images'][0]['url_image']
          );
          session_start();
          if(isset($_SESSION['arrCarrito'])){
            $on = true;
            $arrCarrito = $_SESSION['arrCarrito'];
            for ($pr=0; $pr < count($arrCarrito); $pr++) {
              if($arrCarrito[$pr]['idproducto'] == $idproducto){
                $arrCarrito[$pr]['cantidad'] += $cantidad;
                $on = false;
              }
            }
            if($on){
              array_push($arrCarrito,$arrProducto);
            }
            $_SESSION['arrCarrito'] = $arrCarrito;
          }else{
            array_push($arrCarrito, $arrProducto);
            $_SESSION['arrCarrito'] = $arrCarrito;
          }

          foreach ($_SESSION['arrCarrito'] as $pro) {
            $cantCarrito += $pro['cantidad'];
          }
          $htmlCarrito ="";
          $htmlCarrito = getFile('../../Views/Template/Modals/modalCarrito',$_SESSION['arrCarrito']);
          $arrResponse = array("status" => true, 
            "msg" => '¡Se agrego al corrito!',
            "cantCarrito" => $cantCarrito,
            "htmlCarrito" => $htmlCarrito
          );

        }else{
          $arrResponse = array("status" => false, "msg" => 'Producto no existente.');
        }
      }else{
        $arrResponse = array("status" => false, "msg" => 'Dato incorrecto.');
      }
      echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
    }
    die();
  }
}

$carlisttemp = new AddCartToSession();
echo $carlisttemp->addToCart();
