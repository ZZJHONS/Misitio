<?php
/*

	## Programado por Sergio Sobrevela Guaita
	## 12-09-2013
	## @BetterSergio
	## bettersergiosg@gmail.com

*/
?>
					<p class="pad_bot1"><?php echo $lang['contacto_text']; ?></p>
				</div>
			</div>
		</header>
		<!-- / header -->
		<!-- content -->
		<section id="content">
			<article class="col1">
				<h3>&nbsp;</h3>
				<h3><?php echo $lang['nuestro_contacto']; ?></h3>
				<div class="wrapper pad_bot1">
					<div class="cols pad_bot1">
						<strong>
							<?php echo $lang['direccion']; ?>:<br>
							<?php echo $lang['ciudad']; ?>:<br>
							<?php echo $lang['telefono']; ?>:<br>
							<?php echo $lang['email']; ?>:
						</strong>
					</div>
					<?php echo $lang['direccion_1']; ?><br>
					<?php echo $lang['ciudad_1']; ?><br>
					<?php echo $lang['telefono_1']; ?><br>
					<a href="mailto:<?php echo $lang['email_1']; ?>"><?php echo $lang['email_1']; ?></a>
				</div>
				<h3>&nbsp;</h3>
				<p>&nbsp;</p>
			</article>
			<article class="col2">
				<?php
					if($_POST){
						$email = $_POST['email'];
						$destinatario = $lang['email_1'];
						$asunto = $_POST['asunto'];
						$texto = $_POST['textarea'];
						$cabeceras = "From: $email\n";
						mail($destinatario, $asunto, $texto, $cabeceras);
						echo '<h3 class="index">'.$lang['enviado'].'</h3>';
					}
				?>
				<h3><?php echo $lang['escribenos']; ?></h3>
					<form action="index.php?contacto" id="ContactForm" method="post">
						<div>
							<div class="wrapper">
								<span><?php echo $lang['asunto']; ?>:</span>
								<input type="text" class="input" id="asunto" name="asunto">
							</div>
							<div class="wrapper">
								<span><?php echo $lang['email']; ?>:</span><input type="email" class="input" id="email" name="email">
							</div>
							<div class="textarea_box">
								<span><?php echo $lang['mensaje']; ?>:</span>
								<textarea name="textarea" cols="1" rows="1" id="textarea"></textarea>
							</div>
							<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><?php echo $lang['enviar']; ?></a>
							<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><?php echo $lang['borrar']; ?></a>
						</div>
					</form>
				</article>
			</section>
		</div>
	</div>
</div>
<div class="body3">
	<div class="main"><!-- / content -->