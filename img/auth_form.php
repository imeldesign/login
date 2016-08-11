<?php
/**
 * Created by PhpStorm.
 * User: Imel
 * Date: 08-Aug-16
 * Time: 16:34
 */
?>
<form name="form_auth" id="form_auth" class="form" method="post" target="_top" action="/auth/">
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="AUTH">
			<input type="hidden" name="backurl" value="/?user_lang=la">

	<div class="form_group " style="margin-bottom: 21px;">
		<input class="form_control w100p ffg big" type="text" name="USER_LOGIN" value="jbibang@imperio-yembi.gq" maxlength="255" placeholder="E-mail">
	</div>
	<div class="form_group ">
		<input class="form_control w100p ffg big" type="password" name="USER_PASSWORD" maxlength="255" placeholder="Contraseña">
	</div>

						<div class="checkreg form_group inline b_12">
				<input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" checked="checked">
				<label for="USER_REMEMBER" class="custon_style"></label>
				<label class="login-item-checkbox-label" for="USER_REMEMBER">Recuérdeme</label>
			</div>
			<div style="clear: both; height: 5px;"></div>

		<div class="form_group inline b_4" style="margin-bottom: 0;">
			<input type="submit" id="AUTH_SUBMIT" onclick="BX.addClass(this, 'wait');" class="bx-btn big blue bdr50 cm-padding" value="LOGIN">
		</div>
		<div class="reg_link b_8 tar posr" style="margin-bottom: 0;"><a href="/?forgot_password=yes&amp;user_lang=la">Recuperar contraseña</a></div>

	<div style="clear: both;"></div>
</form>