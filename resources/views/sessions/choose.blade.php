<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="cotn_principal">
    <div class="cont_centrar">
        <h3 class="">INTCORE</h3>
        <div class="cont_login">
            <div class="cont_info_log_sign_up">

                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">
                        <h2>LOGIN</h2>
                        <a class="btn_login" href="login"> Login </a>
                    </div>
                </div>

                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>SIGN UP</h2>
                        <a class="btn_sign_up" href="register"> Sign Up</a>
                    </div>
                </div>
            </div>

            <div class="cont_forms" >
            </div>

        </div>
    </div>
</div>

<style>

    * {
        margin: 0px auto;
        padding: 0px;
        text-align: center;
        font-family: 'Open Sans', sans-serif;
    }

    .cotn_principal {
        position: absolute;
        width: 100%;
        height: 100%;
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cfd8dc+0,607d8b+100,b0bec5+100 */
        background: #cfd8dc; /* Old browsers */
        background: -moz-linear-gradient(-45deg,  #cfd8dc 0%, #607d8b 100%, #b0bec5 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(-45deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(135deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfd8dc', endColorstr='#b0bec5',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    }


    .cont_centrar {
        position: relative;
        float: left;
        width: 100%;
    }

    .cont_login {
        position: relative;
        width: 640px;
        left: 50%;
        margin-left: -320px;

    }


    .cont_forms {
        position: absolute;
        overflow: hidden;
        top:100px;
        left: 0px;
        width: 320px;
        height: 280px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }


    .cont_img_back_grey > img {
        width: 100%;
        -webkit-filter: grayscale(100%);     filter: grayscale(100%);
        opacity: 0.2;
        animation-name: animar_fondo;
        animation-duration: 20s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;

    }

    .cont_img_back_ > img {
        width: 100%;
        opacity: 0.3;
        animation-name: animar_fondo;
        animation-duration: 20s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .cont_forms_active_login > .cont_img_back_ {
        top:0px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_forms_active_sign_up > .cont_img_back_ {
        top:0px;
        left: -435px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }


    .cont_info_log_sign_up {
        position: absolute;
        width: 640px;
        height: 280px;
        top: 100px;
        z-index: 1;
    }

    .col_md_login {
        position: relative;
        float: left;
        width: 50%;
    }

    .col_md_login > h2 {
        font-weight: 400;
        margin-top: 70px;
        color: #757575;
    }

    .col_md_login > p {
        font-weight: 400;
        margin-top: 15px;
        width: 80%;
        color: #37474F;
    }

    .btn_login {
        background-color: #26C6DA;
        border: none;
        padding: 10px;
        width: 200px;
        border-radius:3px;
        box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
    }

    .col_md_sign_up {
        position: relative;
        float: left;
        width: 50%;
    }

    .cont_ba_opcitiy > h2 {
        font-weight: 400;
        color: #fff;
    }

    .cont_ba_opcitiy > p {
        font-weight: 400;
        margin-top: 15px;
        color: #fff;
    }
    /* ----------------------------------
    background text
    ------------------------------------
     */
    .cont_ba_opcitiy {
        position: relative;
        background-color: rgba(120, 144, 156, 0.55);
        width: 80%;
        border-radius:3px ;
        margin-top: 60px;
        padding: 15px 0px;
    }

    .btn_sign_up {
        background-color: #ef5350;
        border: none;
        padding: 10px;
        width: 200px;
        border-radius:3px;
        box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
    }


    @-webkit-keyframes animar_fondo {
        from { -webkit-transform: scale(1) translate(0px);
            -moz-transform: scale(1) translate(0px);
            -ms-transform: scale(1) translate(0px);
            -o-transform: scale(1) translate(0px);
            transform: scale(1) translate(0px); }
        to { -webkit-transform: scale(1.5) translate(50px);
            -moz-transform: scale(1.5) translate(50px);
            -ms-transform: scale(1.5) translate(50px);
            -o-transform: scale(1.5) translate(50px);
            transform: scale(1.5) translate(50px); }
    }
    @-o-keyframes identifier {
        from { -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
        to { -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }

    }
    @-moz-keyframes identifier {
        from { -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
        to { -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }

    }
    @keyframes identifier {
        from { -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
        to { -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }
    }

    .cont_form_sign_up > input {
        text-align: left;
        padding: 15px 5px;
        margin-left: 10px;
        margin-top: 20px;
        width: 260px;
        border: none;
        color: #757575;
    }

    .cont_form_sign_up > h2 {
        margin-top: 50px;
        font-weight: 400;
        color: #757575;
    }


    .cont_form_login > input {
        padding: 15px 5px;
        margin-left: 10px;
        margin-top: 20px;
        width: 260px;
        border: none;
        text-align: left;
        color: #757575;
    }

    .cont_form_login > h2 {
        margin-top: 110px;
        font-weight: 400;
        color: #757575;
    }
    .cont_form_login > a,.cont_form_sign_up > a  {
        color: #757575;
        position: relative;
        float: left;
        margin: 10px;
        margin-left: 30px;
    }

</style>
