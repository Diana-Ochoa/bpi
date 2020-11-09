<?php include_once("inc.core.php"); ?>
<?php include(_includes_."inc.head.php"); ?>
<?php //include(_includes_."inc.top.php"); ?>
<?php //include(_includes_."inc.slidercredito.php"); ?>


<style type="text/css">
.accesox {position:relative; border:0px solid red; width:100%; height:100%; background:#f1f1f1;}
.loginx {background:#FFF; width:400px; height:450px; position:absolute; top:0; left:0; right:0; bottom:0; margin:auto; border-radius:10px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);}
.contenedor_loginx{margin:0 auto; max-width:350px; height:450px; padding:40px;}
.contenedor_loginx .logox{text-align:center; margin:0 auto;}
.contenedor_loginx .form{padding-top:50px; text-align:center;}
.contenedor_loginx .form .input_login{width:100%; padding-bottom:10px; border:0px; border-bottom:2px solid #afafaf;}
.contenedor_loginx .form .enviarx{width:70%; padding-bottom:10px; padding-top:10px; border:0px; background:#053d8e; text-align:center; margin:0 auto; margin-top:30px; color:#FFF; border-radius:5px;}
.contenedor_loginx .form .nouno{font-size:12px; padding-top:10px; text-align:right;}
.contenedor_loginx .nodos{font-size:12px; padding-top:20px;}
#element_to_pop_up{font-size:12px; margin-top:25px; color:#FF0000;}

@media screen and (max-device-width: 480px){
	.accesox {background:#FFF;}
	.loginx {background: #FFF; width: auto; height: auto; position: initial; border-radius:0px; box-shadow:initial;}

}


textarea:focus, input:focus{outline:none;}

</style>
		
<div class="accesox" data-aos="fade-down">
	<div class="loginx">
		
		<div class="contenedor_loginx">
			<div class="logox"><a href="<?=_base_?>"><img src="<?=_images_?>icono_inversiones.png" /></a></div>
			<div class="form">
				<form action="" method="POST" name="formx_2020">
					<input type="email" name="email" required class="input_login" placeholder="Email">
					<input type="password" name="password" required class="input_login" placeholder="Password" style="margin-top:40px;">
					<div class="nouno">¿Olvidaste tu contraseña?</div>
					<input type="submit" name="" value="Ingresar" class="enviarx" onclick="return view_error();">
				</form>

				<div id="element_to_pop_up" style="display:none;">Email o Password incorrecto!. Favor de intentar nuevamente.</div>
				<div class="nodos">¿No tienes una cuenta? <u>Regístrate</u></div>
			</div>
		</div>

	</div>
</div>


<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
function view_error() {
	document.getElementById('element_to_pop_up').style.display = 'block';
}
</script>


<?php //include(_includes_."inc.footer.php"); ?>

</body>
</html>