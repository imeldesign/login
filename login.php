<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> - Login</title>
        
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <style type="text/css">
            .has-shade{box-shadow: 1px 2px 9px 4px rgba(0, 0, 0, .1); -moz-box-shadow: 1px 2px 9px 4px -moz-rgba(0, 0, 0, .1); -webkit-box-shadow:  1px 2px 9px 4px rgba(0, 0, 0, .1);}
.has-content-shade{box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, .15); -moz-box-shadow: 0px 4px 6px 2px -moz-rgba(0, 0, 0, .15); -webkit-box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, .15)}

            form {padding: 0 18px; width: 535px}
form label {border: 1px solid transparent; float: left; padding: 8px 9px 5px}
form strong {float: left; padding: 9px 0; width: 90px}
input[type=text], input[type=password] {background: #fff; border: 1px solid #B40A04; border-radius: 3px; height: 24px}
input[type=checkbox] {margin: 0}
input:disabled {background: #F7F7F7; color: #999; font-weight: normal;text-align: left}
select {background: #fff;  border: 1px solid #B40A04; border-radius: 3px; color: #545454; height: 28px; width: 151px}
select:disabled {background: #e6e6e6; color: #999; font-weight: normal;text-align: left}
button, .button, .qq-upload-button {color: #FFF; cursor: default; font-weight: bold; margin: 6px 0 0 10px; padding: 7px 15px; text-align: center}
button.simple:active, button.default:active,  .button.default:active, button.caution:active, .button.caution:active, button.confirm:active, .button.confirm:active, .qq-upload-button:active
{box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3); -moz-box-shadow: inset 0 1px 2px -moz-rgba(0, 0, 0, .3); -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3)}
button.default, .button.default ,.qq-upload-button, .ui-dialog-buttonset button {
    background: rgb(178,0,11); border: none; border-radius: 2px; background: rgb(122,188,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(122,188,255,1) 0%, rgba(96,171,248,1) 44%, rgba(64,150,238,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(122,188,255,1)), color-stop(44%,rgba(96,171,248,1)), color-stop(100%,rgba(64,150,238,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee',GradientType=0 ); /* IE6-9 */

}
button.default:hover, .button.default:hover, .qq-upload-button-hover {background: rgb(37,141,200); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(37,141,200,1) 0%, rgba(37,141,200,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(37,141,200,1)), color-stop(100%,rgba(37,141,200,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#258dc8', endColorstr='#258dc8',GradientType=0 ); /* IE6-9 */
}
            
            
            html {padding: 0}
            form {background: #fafafa; border: 1px solid #CCC;  float: right;margin: 80px 100px 0 0; padding: 24px 60px 20px; width: 280px}
            form input {}
            input[type=text], input[type=password] {border: 1px solid #2fc6f7; height: 28px; margin-top: 20px; width: 260px}
            input[type=checkbox] {height: 16px; margin-top: 10px; width: 16px}
            form .socials {width: 100%}
            form .socials .icon {background-image: url('img/gui_7.png'); background-size: 100px auto; float: left; height: 30px; margin-left: 20px; width: 30px}
        </style>
    </head>
    <body style="background: #2fc6f7">
        <div id="wrapper">
            <h1 style="color:#FFF; font-size: 35px; text-align: center">GEPETROL Login</h1>
            <div style="float: left; width: 40%">
                <img src="img/take-to-internet.png" style="margin:140px 40px">
                <div style="color: #fff;margin-top: -110px; margin-left: 50px">
                    <h2>Enjoy the way you work and communicate!</h2>
                    <p>GEPETROL is a free service that lets you communicate and collaborate
with your customers, partners and colleagues instantly.</p>
                </div>
            </div>
            <form class="has-shade" name="login" method="post" action=>
                <h2>Log In</h2>
                <div class="socials">
                    <div class="icon" style="margin-left:0; background-position: -124px 395px"></div>
                    <div class="icon" style="background-position: -124px 366px"></div>
                    <div class="icon" style="background-position: -124px 337px"></div>
                    <div class="icon" style="background-position: -124px 307px"></div>
                    <div class="icon" style="background-position: -124px 249px"></div>
                    <div class="icon" style="background-position: -124px 219px"></div>
                </div>
                
                <input name="login" type="text"  placeholder="E-mail"/> </label>
                <input name="pwd" type="password" placeholder="Password"/> </label>
                <div><input type="checkbox" checked> Remember me</div>
                <button type="submit" id="submit" class="default" style="margin-top: 12px"> Connexion </button>
                <div>
                    <a href="#" style="clear: both; color: #999; float: right; font-size: 10px; font-weight: bold; margin: 20px -45px 0 0">Forgotten password? </a>
                </div>
<!--                <div id="login-result" style="color: #eb1c16; height: 24px; padding: 6px 10px"> --><?php //echo $notice ?><!--</div>-->
                <a href="#" style="clear: both; color: #999; float: right; font-size: 10px; font-weight: bold; margin: 20px -45px 0 0"> A propos </a>
            </form>
        </div>
    </body>
</html>
