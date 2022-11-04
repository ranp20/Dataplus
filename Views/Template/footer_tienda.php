<?php 
	$catFotter = getCatFooter();
 ?>
    <style type="text/css">
    img{
        max-width: 100%;
        height: auto;
    }
    .catalog-footer-event{
        background-color: #fff;
    }
    .footer-sup {}

    .texto-seo {
        min-height: 20px !important;
        margin: 0px;
    }

    .btnfooter {
        display: flex;
        justify-content: center !important;
        align-items: center !important;
        flex-flow: row wrap !important;
    }

    .btnfooter img {
        margin: 0px !important;
        width: 20px !important;
        height: 20px !important;
        padding-right: 5px;
    }
    #footer-evento {
        background-color: #F3F3F3;
        display: inline-block;
        width: 100%;
        position: relative;
    }

    #footer-evento>.container {
        max-width: 1400px;
    }

    #footer-evento .content-bloques {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    #footer-evento .title-footer {
        color: #007aff;
        font-size: 14px;
        font-weight: bold;
        display: block;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

    #footer-evento .text-footer {
        color: #5d5d5d;
        font-size: 12px;
        text-align: justify;
    }
    #footer-evento .text-footer a{
        text-decoration: none;
        color: #000000;
        font-weight: bold;
    }
    #footer-evento .text-footer a:hover{
        color: #007aff;
        text-decoration: underline;
        cursor: pointer;
    }
    .rhbanndcontenido a{
        text-decoration: none !important;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column nowrap;
    }
    .rhbanndcontenido a img{
        margin: 0 auto;
        display: block;
        height: 70px;
    }
    .rhbanndcontenido a .txt-title{
        font-size: 1rem;
        padding: 0;
        margin: 0;
        color: #007aff;
    }
    .rhbanndcontenido a .txt-desc{
        font-size: 12px;
        min-height: 36px;
        color: rgba(93, 93, 93, 1);
        text-decoration: none;
        text-align: center;
        line-height: 18px;
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
    .rhbanndcontenido a .texto-seo{
        min-height: 20px !important;
        margin: 0px;
    }
    .txt-desc-fbottom-paragraph{
        padding:5px 0; 
        text-align:center; 
        font-size:10px; 
        line-height:14px;
    }
    .txt-desc-fbottom-paragraph p{
        color: #333;
        font-size:10px;
    }
    #rhbannd{
        max-width: 1400px;
        padding-top: 40px;
        padding-bottom: 20px;
    }
    #rhbannd .row{
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        flex: 0 0 100%;
        flex-flow: row wrap;
    }
    @media only screen and (max-width: 768px){
        #rhbannd .row .col-md-2 {
            width: calc(100% / 2);
        }
    }
    #rhbannd .row .col-md-2 {
        width: calc(100% / 7);
        flex: auto;
    }
    .ripley-footer__banner {
        width: 100%;
        background: #007aff;
        max-height: 40px;
        overflow: hidden;
        -webkit-transition: all .25s ease;
        transition: all .25s ease;
    }
    .ripley-footer__links-container {
        display: block;
        margin: 0 auto;
        padding: 10px 15px;
        background: 0 0;
    }
    .texto-seoa{
        color: #ffffff;
        text-decoration: none !important;
    }
    .btnfooterv2{
        display: flex !important;
        justify-content: center;
    }
    .ripley-footer__links-container .mobile-list-label {
        text-align: left;
        color: #fff;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 5px;
        padding-bottom: 10px;
        font-size: 3.75vw;
    }
    .mobile-list-menu{
        display: flex;
        flex-wrap: wrap;
        align-content: center;
        align-items: center;
        justify-content: center;
        flex: 0 0 100%;
    }
    .ripley-footer__links-container .link {
        display: inline-block;
        margin: 5px 0;
        padding: 10px 0;
        width: 100%;
        color: #fff;
        background: 0 0;
        overflow: hidden;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-flow: column nowrap;
        flex: auto;
    }
    .ripley-footer__links-container .link:hover{
        color: #0056b3;
    }
    .ripley-footer__links-container .link__icon-container {
        display: inline-block;
        width: 18%;
        text-align: center;
    }
    .ripley-footer__links-container .link__content {
        padding: 2px 0;
        line-height: 1;
        display: inline-block;
        position: relative;
        vertical-align: top;
    }
    .ripley-footer__links-container .link__content span{
        display: block;
    }
    .ripley-footer__links-container .link__title {
        font-weight: 700;
        font-size: 14px;
        margin-bottom: 5px;
    }
    .ripley-footer__links-container .link__text {
        line-height: 1.2;
        font-weight: 200;
        font-size: 11px;
    }
    .ripley-footer__main-section {
        width: 100%;
        background: #2f2f2f;
        overflow: hidden;
        padding-bottom: 25px;
    }
    .ripley-footer__main-section-inner {
        width: 100%;
        color: #fff;
        max-width: 1140px;
        margin: 0 auto;
    }
    .ripley-footer__marketing {
        width: 100%;
    }
    .ripley-footer__marketing-2 {
        margin-bottom: 25px;
    }
    .ripley-footer__main-section .main-links {
        background: 0 0;
        padding: 0 15px;
        margin-bottom: 25px;
    }
    .ripley-footer__main-section .main-links .row {
        margin: 0 auto;
    }
    .ripley-footer__main-section .main-links__column {
        display: inline-block;
        border-bottom: 1px solid gray;
        padding: 5px 0;
    }
    .ripley-footer__main-section .main-links__title {
        padding-top: 6px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
    }
    .ripley-footer__main-section .mobile-list-label {
        text-align: left;
        color: #fff;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 5px;
    }
    .ripley-footer__main-section .main-links__list {
        display: block;
        max-height: 0;
        overflow: hidden;
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    .ripley-footer__main-section .mobile-list-label__icon, .ripley-footer__main-section .mobile-list-label__text {
        pointer-events: none;
    }
    .ripley-footer__main-section .mobile-list-label__text {
        display: inline-block;
        width: 95%;
    }
    .ripley-footer__main-section .main-links__text {
        line-height: 3;
    }
    .ripley-footer__main-section .mobile-list-label__icon, .ripley-footer__main-section .mobile-list-label__text {
        pointer-events: none;
    }
    .ripley-footer__main-section .mobile-list-label__icon {
        display: inline-block;
        width: 5%;
        height: 10px;
        position: absolute;
    }
    .ripley-footer__main-section .main-links__list a {
        text-decoration: none;
        color: inherit;
    }
    .ripley-footer__main-section .main-links__list a:hover{
        color: gray;
    }
    .ripley-footer__main-section .right-column {
        padding: 0 15px;
    }
    .ripley-footer__main-section .right-column__container {
        width: 100%;
        padding: 15px 0;
    }
    .ripley-footer__main-section .right-column__payment {
        margin-bottom: 15px;
    }
    .ripley-footer__main-section .right-column__social {
        overflow: hidden;
        margin: 0;
        padding: 0;
        float: left;
    }
    .ripley-footer__main-section .right-column__title {
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 10px;
        display: block;
    }
    .ripley-footer__main-section .right-column__subscribe-form-container {
        height: 40px;
        overflow: visible;
        margin-bottom: 30px;
    }
    .ripley-footer__main-section .right-column__subscribe-form-container--peru {
        margin-bottom: 50px;
    }
    .ripley-footer__main-section .right-column__subscribe-form {
        display: inline;
    }
    .ripley-footer__main-section .right-column__subscribe-form .cont-frmgroupinput{
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        flex-flow: row wrap;
        line-height: 35px;
    }
    .ripley-footer__main-section .right-column__subscribe-form .invalid-legal-agreement, .ripley-footer__main-section .right-column__subscribe-form .invalid-mail {
        background: #e65253;
        color: #fff;
        padding: 5px 15px;
        border-radius: 5px;
        position: absolute;
        top: 80px;
        left: 16px;
        text-align: center;
        display: none;
    }
    .ripley-footer__main-section .right-column__subscribe-input-field {
        width: 60%;
        color: #222;
        height: 100%;
        vertical-align: top;
        border: none;
        border-radius: 5px 0 0 5px;
        border: none;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
    }
    .ripley-footer__main-section .right-column__subscribe-input-button {
        text-decoration: none;
        color: inherit;
        border: none;
        font-weight: 400;
        padding: 5px 10px;
        color: #fff;
        border-radius: 2px;
        text-align: center;
        cursor: pointer;
        line-height: 27px;
        width: 40%;
        height: 100%;
        vertical-align: top;
        border-radius: 0 5px 5px 0;
        background: #007aff;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement {
        display: block;
        font-size: 11px;
        margin-top: 10px;
        position: relative;
    }
    input[type=checkbox], input[type=radio] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement__check, .ripley-footer__main-section .right-column__subscribe-form .legal-agreement input {
        position: absolute;
        left: 0;
        height: 14px;
        width: 14px;
        top: 0;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement input {
        opacity: 0;
        z-index: -1;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement__check, .ripley-footer__main-section .right-column__subscribe-form .legal-agreement input {
        position: absolute;
        left: 0;
        height: 14px;
        width: 14px;
        top: 0;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement__check {
        border: 1px solid #70578b;
        border-radius: 2px;
        background: #fff;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement__check svg {
        display: none;
        background: inherit;
        fill: #70578b;
        width: 10px;
        height: 10px;
        top: 1px;
        left: 1px;
        position: absolute;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement span {
        margin-left: 22px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .ripley-footer__main-section .right-column__subscribe-form .legal-agreement a {
        color: #007aff;
    }
    .ripley-footer__main-section .right-column__payment {
        margin-bottom: 15px;
    }
    .ripley-footer__main-section .right-column__title {
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 10px;
        display: block;
    }
    .ripley-footer__main-section .right-column__payment-method {
        display: inline-block;
        background: 0 0;
        height: 35px;
        width: 45px;
        margin: 0 2px;
        border: none;
        border-radius: 5px;
        overflow: visible;
    }
    .ripley-footer__main-section .right-column__payment ul{
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        flex: 0 0 100%;
    }
    .ripley-footer__main-section .right-column__payment ul li{
        flex: auto;
    }
    .ripley-footer__main-section .right-column__payment-method--pagoefectivo {
        width: 90px;
    }
    .ripley-footer__main-section .right-column__payment-icon {
        height: 100%;
        width: 100%;
        margin: 0 2px;
        fill: #fff;
    }
    .ripley-footer__main-section .right-column__social {
        overflow: hidden;
        margin: 0;
        padding: 0;
        float: left;
    }
    .ripley-footer__social-icons a {
        display: inline-block;
        margin: 0 10px;
        text-decoration: none !important;
    }
    .ripley-footer__social-icons a:first-of-type {
        margin-left: 0;
    }
    .ripley-footer__social-icons a i {
        display: block;
        text-decoration: none;
        height: 32px;
        width: 32px;
        line-height: 32px;
        text-align: center;
        font-size: 18px;
        overflow: hidden;
        border-radius: 100%;
        background: #fff;
        color: #6a6a6a;
    }
    .ripley-footer__social-icons a:hover i.fa-facebook {
        background: #3b5998;
        color: #fff;
    }
    .ripley-footer__social-icons a:hover i.fa-twitter {
        background: #55acee;
        color: #fff;
    }
    .ripley-footer__social-icons a:hover i.fa-youtube {
        background: red;
        color: #fff;
    }
    .ripley-footer__main-section .bottom-legal {
        font-weight: 400;
        text-align: left;
        padding: 10px 15px;
        margin-top: 30px;
    }
    .ripley-footer__main-section .bottom-legal__separator {
        width: 100%;
        margin: 10px 0;
        border: none;
        font-size: 12px;
    }
    .ripley-footer__main-section .bottom-legal__legal-text {
        color: gray;
        font-size: 11px;
    }
    /* MEDIA QUERIES */
    @media (min-width: 400px){
        .ripley-footer__links-container {
            text-align: center;
        }
        .ripley-footer__links-container .link {
            height: auto;
            vertical-align: top;
            width: 50%;
            padding: 0 10px 2vw;
        }
        .ripley-footer__links-container .link {
            float: left;
        }
        .ripley-footer__links-container .link__content {
            display: inline-block;
        }
        .ripley-footer__links-container .link__icon-container {
            display: block;
            padding: 10px;
            margin: 0 auto;
            height: 70px;
            width: 70px;
        }
        .ripley-footer__links-container .link__text {
            padding: 0 10px;
            font-size: 13px;
        }
    }
    @media (min-width: 768px){
        .ripley-footer__links-container {
            width: 100%;
            overflow: hidden;
            background: 0 0;
        }
        .ripley-footer__banner {
            max-height: 700px;
        }
        .ripley-footer__links-container .mobile-list-label {
            text-align: center;
            margin-bottom: 25px;
            display: none
        }
        .ripley-footer__links-container .link {
            width: 30%;
            height: 100%;
            margin: 0 0 6px;
            vertical-align: top;
            padding: 0 5px;
            -webkit-transition: color .15s ease;
            transition: color .15s ease;
        }
        .ripley-footer__links-container .link__content {
            font-size: 14px;
        }
        .ripley-footer__links-container .link__text {
            padding: 0;
        }
        .ripley-footer__main-section {
            padding: 35px 0;
            font-size: 12px;
        }
        .ripley-footer__main-section .main-links {
            padding: 0;
            padding-left: 30px;
            margin-bottom: 0;
        }
        .ripley-footer__main-section .main-links__column {
            vertical-align: top;
            border: none;
            float: none;
        }
        .ripley-footer__main-section .main-links__column:nth-of-type(2) {
            -webkit-transform: translateX(-30px);
            transform: translateX(-30px);
        }
        .ripley-footer__main-section .main-links__column--peru:nth-of-type(2) {
            -webkit-transform: translateX(15px);
            transform: translateX(15px);
        }
        .ripley-footer__main-section .main-links__column:nth-of-type(3), .ripley-footer__main-section .main-links__column:nth-of-type(4) {
            display: inline-block;
            margin-top: 0;
        }
        .ripley-footer__main-section .mobile-list-label {
            text-align: center;
            margin-bottom: 25px;
        }
        .ripley-footer__main-section .main-links__title {
            text-align: left;
            padding-top: 0;
            display: block;
            font-size: 14px;
            margin-bottom: 25px;
            pointer-events: none;
        }
        .ripley-footer__main-section .main-links__list {
            max-height: 700px;
            text-align: left;
        }
        .ripley-footer__main-section .mobile-list-label__text {
            display: inline;
            font-size: 15px;
            font-weight: 700;
        }
        .ripley-footer__main-section .main-links__text {
            font-size: 14px;
            line-height: 2;
        }
        .ripley-footer__main-section .mobile-list-label__icon {
            display: none;
        }
        .ripley-footer__main-section .right-column__container {
            padding-top: 5px;
        }
        .ripley-footer__main-section .right-column__title {
            font-size: 14px;
        }
        .ripley-footer__main-section .right-column__subscribe-form-container {
            height: 35px;
            font-size: 10px;
        }
        .ripley-footer__main-section .right-column__subscribe-input-field {
            width: 60%;
        }
        .ripley-footer__main-section .right-column__subscribe-input-button {
            width: 40%;
        }
        .ripley-footer__main-section .right-column__title {
            font-size: 14px;
        }
        .ripley-footer__social a {
            margin: 0 3px;
        }
        .ripley-footer__main-section .bottom-legal {
            text-align: center;
            padding-top: 25px;
        }
    }
    @media (min-width: 991px){
        .ripley-footer__links-container {
            width: 90%;
            max-width: 1140px;
            width: 100%;
        }
        .ripley-footer__links-container .link {
            width: 20%;
        }
        .ripley-footer__links-container .link {
            width: 16.66%;
            float: left;
        }
        .ripley-footer__main-section-inner {
            width: 90%;
            padding: 0 30px;
        }
        .ripley-footer__main-section .main-links {
            padding-left: 0;
        }
        .ripley-footer__main-section .main-links__column:nth-of-type(2) {
            margin-left: -25px;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
        .ripley-footer__main-section .main-links__column--peru:nth-of-type(2) {
            -webkit-transform: translateX(45px);
            transform: translateX(45px);
        }
        .ripley-footer__main-section .main-links__column:nth-of-type(3) {
            padding-left: 50px;
        }
        .ripley-footer__main-section .right-column {
            padding-right: 0;
        }
        .ripley-footer__main-section .right-column__subscribe-form-container {
            font-size: 12px;
        }
    }
    </style>
    <div class="catalog-footer-event catalog-footer-cyber_wow">
        <div id="rhbannd" class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-2 rhbanndcontenido">
                    <a href="javascript:void(0);">
                        <img class="img-responsive ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/solicita.png" alt="Retiro en Tienda" src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/solicita.png">
                        <p class="txt-title"><strong>Obtén tu Tarjeta DataPlus</strong></p>
                        <p class="txt-desc">y aprovecha los descuentos en DataPlus.com.pe</p>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 rhbanndcontenido">
                    <a href="javascript:void(0);">
                        <img class="img-responsive ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/efex.png" alt="Retiro en Tienda" src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/efex.png">
                        <p class="txt-title"><strong>Pide online un Efectivo Express</strong></p>
                        <p class="txt-desc">Con abono directo a tu cuenta</p>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 rhbanndcontenido">
                    <a href="javascript:void(0);">
                        <img class="img-responsive ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/d1.png" alt="Retiro en Tienda" src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/d1.png">
                        <p class="txt-title"><strong>Retiro en tienda</strong></p>
                        <p class="txt-desc">Compra online y recoge en tienda</p>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 rhbanndcontenido">
                    <a href="javascript:void(0);">
                        <img class="img-responsive ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/d2.png" alt="Seguimiento de compras" src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/d2.png">
                        <p class="txt-title"><strong>Seguimiento de compras</strong></p>
                        <p class="txt-desc">Solo con tu número de orden de compra</p>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 rhbanndcontenido footer-sup">
                    <a href="javascript:void(0);">
                        <img class="img-responsive ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/21/02/24/btn5-v1.svg" alt="Fonocompras" src="https://home.ripley.com.pe/minisitios/home/d/21/02/24/btn5-v1.svg">
                        <p class="txt-title"><strong>Servicio al cliente</strong></p>
                    </a>
                    <a class="btnfooter" href="https://wa.me/51970311999" target="_top">
                        <img src="https://home.ripley.com.pe/minisitios/home/d/21/02/24/btn5-w.svg" alt="">
                        <p class="txt-desc texto-seo">+51 970311999</p>
                    </a>
                    <a href="tel:016115959" target="_top" rpl_sp="footer-_-help1-_-tel:016115959">
                        <p class="txt-desc texto-seo">01 611 59 59</p>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 rhbanndcontenido">
                    <a href="javascript:void(0);">
                        <img class="img-responsive ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/soluciones.png" alt="Ventas Coorporativas" src="https://home.ripley.com.pe/minisitios/home/d/18/01/30/soluciones.png">
                        <p class="txt-title"><strong>Soluciones Empresas</strong></p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 rhbanndcontenido">
                    <a href="javascript:void(0);">
                        <img src="https://home.ripley.com.pe/minisitios/home/artes/libro_reclamaciones.jpeg" style="max-width: 80%;margin-top: 6%;">
                    </a>
                </div>
            </div>
            <div class="row txt-desc-fbottom-paragraph">
                <p class="col-sm-12">* Precios solo disponibles en www.ripley.com.pe y Fonocompras. | ** Precios Internet publicados incluyen descuento adicional. | *** Precios sujetos a variaciones sin previo aviso. | **** Imágenes referenciales.</p>
            </div>
        </div>
        <section id="footer-evento">
            <div class="container">
                <div class="row content-bloques">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">DataPlus.com.pe</h2>
                        <p class="text-footer">
                        Nuestra tienda online DataPlus.com.pe tiene lo que necesitas de tus marcas favoritas. Mira todo nuestro catálogo y encuentra lo que te hace falta. Llegamos a todo el Perú.
                        </p>
                        <p class="text-footer">
                        Aquí encontrarás las últimas novedades de todos los productos que te puedes imaginar. Tecnología, electrohogar, moda, limpieza, licores, bebidas, calzado, deporte, juguetería, mudo bebé, carteras, accesorios, belleza y hasta tus <a href="javascript:void(0);" target="_top">productos de supermercado</a>. Lo tenemos todo.
                        </p>
                        <p class="text-footer">
                        Aceptamos todos los medios de pago y también puedes pagar tus compras de hasta S/.50 con Yape, Lukita y Tunki. ¡Aprovecha las ofertas imperdibles y compra online!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">Conectado desde donde estés</h2>
                        <p class="text-footer">
                        Los mejores <a href="javascript:void(0);" target="_top">celulares y smartphones</a> de Samsung, iPhone, Huawei, Xiaomi y muchas marcas más DataPlus.com.pe. Llegamos a todo el Perú llevándote el equipo que necesitas.
                        </p>
                        <p class="text-footer">
                        Todos los descuentos que imaginaste en televisores, laptops impresoras, parlantes, teclados, cámaras fotográficas, mouses; accesorios y más, todo lo que necesitas para tu oficina, casa o centro de juegos lo encuentras en DataPlus.com.
                        </p>
                        <p class="text-footer">
                        Tenemos todo lo ideal para los amantes de la tecnología y la innovación, asi que también contamos con <a href="javascript:void(0);" target="_top">tablets</a>, ipads, smartphones, smartwatchs y smartbands de diferentes marcas y generaciones, colores y funciones.
                        </p>
                        <p class="text-footer">
                        Además, encuentra los mejores gadgets que no te pueden faltar como lentes de realidad virtual con control bluetooth, cargadores, audífonos y muchos más accesorios tecnológicos.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">Oficina en Casa</h2>
                        <p class="text-footer">
                        Implementa tu home office con las mejores <a href="javascript:void(0);" target="_top">laptops y computadoras</a>, además de los mejores complementos como: escritorios, sillas, mouse inalámbricos, impresoras y mucho más. HP, Lenovo, Acer, Dell son algunas de las marcas que encontrarás. Renueva tu espacio y hazlo ideal para trabajar.
                        </p>
                        <p class="text-footer">
                        También puedes decorar y ambientar tu espacio de trabajo con adornos, wall art, cuadros, luces decorativas, lámparas y más accesorios necesarios para un ambiente de trabajo óptimo.
                        </p>
                        <p class="text-footer">
                        ¡Mejora tu imagen y prepárate para tus reuniones! Aquí encuentras la iluminación ideal, aros de luz led, cámara web y micrófonos. Además, acompaña tu mañana con una buena taza de café y un planner de actividades para organizarte mejor.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">Renueva tu hogar</h2>
                        <p class="text-footer">
                        Renueva los espacios de tu hogar. En DataPlus.com.pe tenemos lo que necesitas: <a href="javascript:void(0);" target="_top">licuadoras</a>, congeladoras, <a href="javascript:void(0);" target="_top">refrigeradoras</a> y más para tu cocina. <a href="javascript:void(0);" target="_top">Lavadoras y lavasecas</a> para tu lavandería. Cubrecamas, zapatera y muebles para tu dormitorio y mucho más.
                        </p>
                        <p class="text-footer">
                        Si lo que quieres es darle un nuevo aspecto a tu sala pues tenemos los mejores sofás, centros de entretenimiento y demás accesorios de decoración que sumarán al estilo de este espacio.
                        </p>
                        <p class="text-footer">
                        Y si te hace muchísima falta encontrar lo mejor para personalizar tu habitación, contamos camas, almohadas, box tarimas y más de nuestro repertorio que te ayudarán a renovar tu cuarto.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">Conviértete en el mejor Gamer</h2>
                        <p class="text-footer">
                        Conviértete en el mejor gamer. Lo último en juegos de <a href="javascript:void(0);" target="_top">PS5</a> y <a href="javascript:void(0);" target="_top">Nintendo Switch</a>, los tenemos para ti. Además de consolas, controles, mouses, audífonos y muchos más. Verifica nuestra cobertura de despacho en Perú o busca tu tienda DataPlus más cercana.
                        </p>
                        <p class="text-footer">
                        Disfruta en casa con los mejores videojuegos. Tenemos consolas Play Station, Xbox; además de juegos para PS5, Nintendo Switch y Xbox X series. Accede a geniales juegos como PES2021, Fifa2021, Dragon Ball FighterZ, Grand Theft Auto V, Mortal Kombat X, Call of Duty Black Ops 4, etc. Disfrútalo todo con mandos, joycons, controles y más.
                        </p>
                        <p class="text-footer">
                        Recuerda también que con nuestras ofertas tomarás el control de tus juegos de computadora con los mejores accesorios para pc gamer. Disfruta de una mejor calidad de juego con los mouse gamer, teclados gamer, audífonos gamer y demás productos que te ayudarán a ser el mejor.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">Retiro en Tambo</h2>
                        <p class="text-footer">
                        Puedes recoger tus compras como ropa, calzado, juguetes pequeños, laptops y todos los productos de <a href="javascript:void(0);" target="_top">DataPlus.com.pe</a> en las tiendas de Tambo afiliadas. El recojo de tus pedidos es gratis, fácil y seguro. ¡Revisa que tu compra tenga la opción de retiro en Tambo y listo!
                        </p>
                        <p class="text-footer">
                        Una vez realizada la compra debes esperar el correo de confirmación que indica que tu producto está listo para recoger. Este llegará después del mail de confirmación de tu pedido.
                        </p>
                        <p class="text-footer">
                        Para recoger tus productos es necesario que muestres tu documento de identidad original, en físico y vigente ((solo son validados DNI, pasaporte o CE), y el código QR desde tu celular que te llegará en el correo que recibirás cuando tu pedido esté listo para retira en el Tambo de tu preferencia.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">Smart TVs y Audio</h2>
                        <p class="text-footer">
                        Organiza las maratones de tus series favoritas de Netflix y Amazon en calidad insuperable. Tenemos <a href="javascript:void(0);" target="_top">los mejores televisores Smart TV</a> Led Full HD, Ultra HD UHD, Resolución 4K y más con Parlantes Bluetooth para armar tu ambiente de cine en la sala de tu hogar para renovar tus equipos!
                        </p>
                        <p class="text-footer">
                        Disfruta de tu playlist favorito de Spotify y mucho más con los mejores parlantes y barras de sonido Samsung, Sony, LG, Philips y más.
                        </p>
                        <p class="text-footer">
                        Además de repotenciar tu centro de entretenimiento con los mejores home theather, vivirás la experiencia de una alta resolución de televisores Samsung, Phillips, LG, Panasonic y más marcas que brindan una alta calidad de imagen.
                        </p>
                        <p class="text-footer">
                        Todo lo que necesitas para vivir el cine en casa lo encontrarás aquí. Llegamos a todo el Perú llevándote los equipos que añadas a tus compras.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-footer">¡Eventos Online 2022 en DataPlus Perú!</h2>
                        <p class="text-footer">
                        En DataPlus tenemos los mejores eventos online con las mejores ofertas durante todo el año como el <a href="javascript:void(0);">Cyber Wow</a>. Prepárate para las mejores ofertas con descuentos exclusivos en tus marcas favoritas en nuestras categorías de Electro, Tecnología, Hogar, Moda, Hogar, Belleza y mucho más.
                        </p>
                        <p class="text-footer">
                        Conoce nuestras nuevas categorías y las categorías de siempre al mejor precio: Muebles de dormitorio, <a href="javascript:void(0);" target="_top">Laptops</a> Gamer, Lavadoras, Cocinas, Accesorios de deporte, <a href="javascript:void(0);" target="_top">Juguetes para niños</a> y miles de productos más.
                        </p>
                        <p class="text-footer">
                        ¡Esta vez las mejores marcas nos acompañan en DataPlus Perú! <a href="javascript:void(0);" target="_top">Colchones Paraíso</a>, Forli y Rosen; Smart TVs, Refrigeradoras y <a href="javascript:void(0);" target="_top"> aparatos tecnológicos de las marcas Samsung</a>, LG y Sony; <a href="javascript:void(0);" target="_top"> zapatillas deportivas</a> y <a href="javascript:void(0);" target="_top"> zapatillas urbanas</a> Nike, Reebok y Adidas, además de electrodomésticos marca Bosch, Indurama y Mabe.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="footer-help-banner" class="marketing-zone is-idle ripley-footer__banner">
        <div class="cbar_banner" id="cbar_banner_1857074669" rule_id="40058" style="z-index: 1; width: auto; height: auto; top: 0px; left: 0px; display: block; margin: 0px; position: relative; visibility: visible;">
            <img src="https://userimages.barilliance.com/b/4809303_PREFOOTER_CW_OCTUBRE22.jpg" style="border: none; cursor: pointer; cursor: hand; "> 
        </div>
        <div class="ripley-footer__links-container">
            <div class="mobile-list-label help-banner-label footer-list-title" id="mobile-help-banner-button">
                <span class="mobile-list-label__text">¿Dudas y consultas? Comunícate al 611-5959</span>
                <span class="mobile-list-label__icon">
                    <svg role="img" title="arrow_menu" class="svg-icon svg-icon-arrow_menu">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow_menu"></use>
                    </svg>
                </span>
            </div>
            <div class="mobile-list-menu">
                <a class="link" href="javascript:void(0);">
                    <div class="link__icon-container">
                        <img class=" ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/iconos/retiro-en-tienda.svg" alt="retiro en tienda" src="https://home.ripley.com.pe/minisitios/home/d/iconos/retiro-en-tienda.svg">
                    </div>
                    <div class="link__content">
                        <span class="link__title">Retiro en Tienda</span>
                        <span class="link__text">Más de 30 tiendas a lo largo de Perú</span>
                    </div>
                </a>
                <div class="link" target="_top">
                    <a href="javascript:void(0);">
                        <div class="link__icon-container sin-padding">
                            <img class=" ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/21/02/24/btn5-v2.svg" alt="atención al cliente y fonocompras" src="https://home.ripley.com.pe/minisitios/home/d/21/02/24/btn5-v2.svg">
                        </div>
                    </a>
                    <div class="link__content">
                        <span class="link__title">Atención al Cliente </span>
                        <span class="link__text btnfooter btnfooterv2">
                            <img src="https://home.ripley.com.pe/minisitios/home/d/21/02/24/btn5-wv2.svg" alt="">
                            <a href="https://wa.me/51970311999" class="texto-seoa" target="_blank" rpl_sp="footer-_-help2-_-https://wa.me/51970311999">+51 970311999</a>
                        </span>
                        <span class="link__text">
                            <a href="tel:016115959" class="texto-seoa" target="_blank" rpl_sp="footer-_-help2-_-tel:016115959">(01) 611-5959</a>
                        </span>
                    </div>
                </div>
                <a class="link" href="javascript:void(0);">
                    <div class="link__icon-container sin-padding">
                        <img class=" ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/iconos/extra-garantia.svg" alt="Extragarantía" src="https://home.ripley.com.pe/minisitios/home/d/iconos/extra-garantia.svg">
                    </div>
                    <div class="link__content"><span class="link__title">Extragarantía</span><span class="link__text">Prolonga la garantía de tus productos</span></div>
                </a>
                <a class="link" href="javascript:void(0);">
                    <div class="link__icon-container sin-padding">
                        <img class=" ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/iconos/devolucion.svg" alt="Devolución" src="https://home.ripley.com.pe/minisitios/home/d/iconos/devolucion.svg">
                    </div>
                    <div class="link__content"><span class="link__title">Devolución</span><span class="link__text">Cambios y Devoluciones</span></div>
                </a>
                <a class="link" href="javascript:void(0);">
                    <img src="https://home.ripley.com.pe/minisitios/home/artes/libro_reclamaciones.jpeg" style="max-width: 80%;">
                </a>
                <a class="link" href="javascript:void(0);">
                    <div class="link__icon-container sin-padding">
                        <img class=" ls-is-cached lazyloaded" data-src="https://home.ripley.com.pe/minisitios/home/d/iconos/servicio-al-cliente.svg" alt="Libro de reclamaciones" src="https://home.ripley.com.pe/minisitios/home/d/iconos/servicio-al-cliente.svg">
                    </div>
                    <div class="link__content"><span class="link__title">Servicio al cliente </span><span class="link__text"></span></div>
                </a>
            </div>
        </div>
    </div>
    <div class="ripley-footer__main-section">
        <div class="ripley-footer__main-section-inner row">
            <div class="marketing-zone is-idle ripley-footer__marketing ripley-footer__marketing-2"></div>
            <div class="main-links col-xs-12 col-sm-12 col-md-8 col-lg-7">
                <div class="row">
                    <div class="marketing-zone is-idle main-links__column col-xs-12 col-md-4 main-links__column--peru">
                        <div class="main-links__title mobile-list-label footer-list-title" data-target="footer-list-confianza">
                            <span class="mobile-list-label__text">Compra con Confianza</span>
                            <span class="mobile-list-label__icon">
                                <svg role="img" title="arrow_menu" class="svg-icon svg-icon-arrow_menu"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow_menu"></use></svg>
                            </span>
                        </div>
                        <ul class="main-links__list" id="footer-list-confianza">
                            <li class="main-links__text"><a href="javascript:void(0);">¿Cómo comprar en DataPlus.com?</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Gúias de Compra</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Términos y condiciones</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Cambios y Devoluciones</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Bases Legales</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Seguridad y privacidad</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Seguimiento de despacho</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Política de privacidad de datos</a></li>
                        </ul>
                    </div>
                    <div class="marketing-zone is-idle main-links__column col-xs-12 col-md-4 main-links__column--peru">
                        <div class="main-links__title mobile-list-label footer-list-title" data-target="footer-list-sobre-ripley">
                            <span class="mobile-list-label__text">Sobre DataPlus</span>
                            <span class="mobile-list-label__icon">
                                <svg role="img" title="arrow_menu" class="svg-icon svg-icon-arrow_menu"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow_menu"></use></svg>
                            </span>
                        </div>
                        <ul class="main-links__list" id="footer-list-sobre-ripley">
                            <li class="main-links__text"><a href="javascript:void(0);">Portal de Personas</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">¿Quiénes Somos?</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Nuestras Tiendas</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Trabaja con nosotros</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Comprobante Electrónico</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Reporte de Sostenibilidad 2020</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Reporte de Sostenibilidad 2021</a></li>
                        </ul>
                    </div>
                    <div class="marketing-zone is-idle main-links__column col-xs-12 col-md-4 main-links__column--peru">
                        <div class="main-links__title mobile-list-label footer-list-title" data-target="footer-list-mas-ripley">
                            <span class="mobile-list-label__text">Más de DataPlus</span>
                            <span class="mobile-list-label__icon">
                                <svg role="img" title="arrow_menu" class="svg-icon svg-icon-arrow_menu"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow_menu"></use></svg>
                            </span>
                        </div>
                        <ul class="main-links__list" id="footer-list-mas-ripley">
                            <li class="main-links__text"><a href="javascript:void(0);">Banco DataPlus</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Tarjeta DataPlus</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Efectivo Express</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">DataPlusPuntos</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Seguros DataPlus</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Extra Garantía</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Cyber Wow</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">Cyber Day Chile</a></li>
                            <li class="main-links__text"><a href="javascript:void(0);">DataPlus Chile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-column col-xs-12 col-sm-12 col-md-4 col-lg-offset-1">
                <div class="right-column__container">
                    <div class="right-column__subscribe">
                        <span class="right-column__title ">Suscríbete</span>
                        <div class="right-column__subscribe-form-container right-column__subscribe-form-container--peru">
                            <form action="" class="right-column__subscribe-form" id="footer-subscribe-form">
                                <span class="invalid-mail" aria-label="Este correo no es válido">Este correo no es válido</span>
                                <div class="cont-frmgroupinput">                                
                                    <input type="email" class="right-column__subscribe-input-field" placeholder="Ingresa tu correo" id="footer-subscribe-input" aria-label="Ingresa tu correo" required="">
                                    <button class="right-column__subscribe-input-button">Suscríbete</button>
                                </div>
                                <label class="legal-agreement" for="legal-agreement">
                                    <input type="checkbox" id="legal-agreement" name="legal-agreement" required="">
                                    <div class="legal-agreement__check">
                                        <svg role="img" title="check-mark" class="svg-icon svg-icon-check-mark"><title>check-mark</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#check-mark"></use></svg>
                                    </div>
                                    <span>Acepto los<!-- --> <a target="_blank" href="https://simple.ripley.com.pe/minisitios/especial/servicio-cliente#terminos-condiciones">Términos y condiciones</a>
                                    </span>
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="right-column__payment">
                        <span class="right-column__title">Medios de Pago</span>
                        <ul>
                            <li class="right-column__payment-method">
                                <svg role="img" width="35px" height="35px" title="payment-ripley-peru" class="svg-icon svg-icon-payment-ripley-peru right-column__payment-icon"><title>payment-ripley-peru</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#payment-ripley-peru"></use></svg>
                            </li>
                            <li class="right-column__payment-method">
                                <svg role="img" width="35px" height="35px" title="payment-visa" class="svg-icon svg-icon-payment-visa right-column__payment-icon"><title>payment-visa</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#payment-visa"></use></svg>
                            </li>
                            <li class="right-column__payment-method">
                                <svg role="img" width="35px" height="35px" title="payment-mastercard" class="svg-icon svg-icon-payment-mastercard right-column__payment-icon"><title>payment-mastercard</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#payment-mastercard"></use></svg>
                            </li>
                            <li class="right-column__payment-method">
                                <svg role="img" width="35px" height="35px" title="payment-american" class="svg-icon svg-icon-payment-american right-column__payment-icon"><title>payment-american</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#payment-american"></use></svg>
                            </li>
                            <li class="right-column__payment-method">
                                <svg role="img" width="35px" height="35px" title="payment-diners" class="svg-icon svg-icon-payment-diners right-column__payment-icon"><title>payment-diners</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#payment-diners"></use></svg></li><li class="right-column__payment-method right-column__payment-method--pagoefectivo"><svg role="img" title="payment-pagoefectivo" class="svg-icon svg-icon-payment-pagoefectivo right-column__payment-icon"><title>payment-pagoefectivo</title><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#payment-pagoefectivo"></use></svg>
                            </li>
                        </ul>
                    </div>
                    <div class="ripley-footer__social right-column__social">
                        <span class="right-column__title">Síguenos</span>
                        <div class="ripley-footer__social-icons">
                            <div class="rilpley-footer__social-icons">
                                <a href="javascript:void(0);" title="Facebook" aria-label="Link Facebook"><i class="fa fa-facebook"></i>
                                </a>
                                <a href="javascript:void(0);" title="Twitter" aria-label="Link Twitter"><i class="fa fa-twitter"></i>
                                </a>
                                <a href="javascript:void(0);" title="Youtube" aria-label="Link Youtube"><i class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-legal col-xs-12">
                <div class="bottom-legal__security-text">
                    <span>Por tu seguridad, recuerda revisar siempre en tu navegador que el sitio que visitas sea la versión oficial. La dirección https://simple.ripley.com.pe es la única del sitio oficial de DataPlus.</span>
                </div>
                <hr class="bottom-legal__separator">
                <div class="bottom-legal__legal-text">
                    <span>Precios solo disponibles en www.ripley.com.pe y Fonocompras. Precios Internet publicados incluyen descuento adicional. Precios sujetos a variaciones sin previo aviso. Productos sujetos a disponibilidad de stock. Solo consumo familiar. Stock mínimo 1 unidad por producto. Ofertas se rigen de acuerdo a los términos y condiciones. Despacho de producto se realizará una vez confirmada la compra.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-box">
                                <div class="tab-content" id="modalTabContent">
                                    <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/quick-view/quick-view-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/quick-view/quick-view-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/quick-view/quick-view-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/quick-view/quick-view-4.jpg" alt="">
                                        </div>
                                    </div>
                                    </div>
                                <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                            <img src="assets/img/quick-view/quick-nav-1.jpg" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                        <img src="assets/img/quick-view/quick-nav-2.jpg" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                        <img src="assets/img/quick-view/quick-nav-3.jpg" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                        <img src="assets/img/quick-view/quick-nav-4.jpg" alt="">
                                        </button>
                                    </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-content">
                                <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                <div class="product__review d-sm-flex">
                                    <div class="rating rating__shop mb-10 mr-30">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    </div>
                                    <div class="product__add-review mb-15">
                                    <span>01 review</span>
                                    </div>
                                </div>
                                <div class="product__price">
                                    <span>$109.00 – $307.00</span>
                                </div>
                                <div class="product__modal-des mt-20 mb-15">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                        <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                        <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Memory, Storage & SIM: 12GB RAM, 256GB.</a></li>
                                        <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                    </ul>
                                </div>
                                <div class="product__stock mb-20">
                                    <span class="mr-10">Availability :</span>
                                    <span>1795 in stock</span>
                                </div>
                                <div class="product__modal-form">
                                    <form action="#">
                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                        <div class="product-quantity mr-20 mb-25">
                                            <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                        </div>
                                        <div class="pro-cart-btn mb-25">
                                            <button class="cart-btn" type="submit">Add to cart</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="product__stock mb-30">
                                    <ul>
                                        <li><a href="javascript:void(0);">
                                            <span class="sku mr-10">SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span></a>
                                        </li>
                                        <li><a href="javascript:void(0);">
                                            <span class="cat mr-10">Categories:</span>
                                            <span>iPhone, Tablets</span></a>
                                        </li>
                                        <li><a href="javascript:void(0);">
                                            <span class="tag mr-10">Tags:</span>
                                            <span>Smartphone, Tablets</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
	<script>
	    const base_url = "<?= base_url(); ?>";
		const smony = "<?= SMONEY; ?>";
	</script>
<!--===============================================================================================-->	
	<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media();?>/js/fontawesome.js"></script>
	<script src="<?= media() ?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/js/functions_admin.js"></script>
	<script src="<?= media() ?>/js/functions_login.js"></script>
	<script src="<?= media() ?>/tienda/js/functions.js"></script>

	<script src="<?= media();?>/js/vendor/jquery.js"></script>    
      <script src="<?= media();?>/js/vendor/waypoints.js"></script>
      <script src="<?= media();?>/js/bootstrap-bundle.js"></script>
      <script src="<?= media();?>/js/meanmenu.js"></script>
      <script src="<?= media();?>/js/swiper-bundle.js"></script>
      <script src="<?= media();?>/js/tweenmax.js"></script>
      <script src="<?= media();?>/js/owl-carousel.js"></script>
      <script src="<?= media();?>/js/magnific-popup.js"></script>
      <script src="<?= media();?>/js/parallax.js"></script>
      <script src="<?= media();?>/js/backtotop.js"></script>
      <script src="<?= media();?>/js/nice-select.js"></script>
      <script src="<?= media();?>/js/countdown.min.js"></script>
      <script src="<?= media();?>/js/counterup.js"></script>
      <script src="<?= media();?>/js/ui-slider-range.js"></script>
      <script src="<?= media();?>/js/wow.js"></script>
      <script src="<?= media();?>/js/isotope-pkgd.js"></script>
      <script src="<?= media();?>/js/imagesloaded-pkgd.js"></script>
      <script src="<?= media();?>/js/ajax-form.js"></script>
      <script src="<?= media();?>/js/main-web.js"></script>

</body>
</html>