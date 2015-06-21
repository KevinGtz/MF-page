<?php



			echo '<section class="our-team" id="team">';


				echo '<div class="container">';


					echo '<div class="section-header">';


						$zerif_ourteam_title = get_theme_mod('zerif_ourteam_title',__('¡Bienvenidos inversionistas!','zerif-lite'));
					
						if( !empty($zerif_ourteam_title) ):
							echo '<h2 class="dark-text">'.__($zerif_ourteam_title,'zerif-lite').'</h2>';
						endif;
						
						?>
						
						<div class="row">

					<?php

						if(isset($emailSent) && $emailSent == true) :

							echo '<div class="notification success"><p>'.__('Thanks, your email was sent successfully!','zerif-lite').'</p></div>';

						elseif(isset($_POST['submitted'])):

							echo '<div class="notification error"><p>'.__('Sorry, an error occured.','zerif-lite').'</p></div>';

						endif;



						if(isset($nameError) && $nameError != '') :

							echo '<div class="notification error"><p>'.esc_html($nameError).'</p></div>';

						endif;

						if(isset($emailError) && $emailError != '') :

							echo '<div class="notification error"><p>'.esc_html($emailError).'</p></div>';

						endif;

						
						
						if(isset($subjectError) && $subjectError != '') :

							echo '<div class="notification error"><p>'.esc_html($subjectError).'</p></div>';

						endif;
						
						

						if(isset($messageError) && $messageError != '') :

							echo '<div class="notification error"><p>'.esc_html($messageError).'</p></div>';

						endif; 
						
						
						
					

					?>

					<form role="form" method="POST" action="" onSubmit="this.scrollPosition.value=(document.body.scrollTop || document.documentElement.scrollTop)" class="contact-form">

						<input type="hidden" name="scrollPosition">
						
						<div class="col-lg-6 col-sm-6" data-scrollreveal="enter left after 0s over 1s">

							<input required="required" class ="perro" type="text" name="mysubject" placeholder="Nombre de la Startup" class="form-control input-box" value="<?php if(isset($_POST['mysubject'])) echo esc_attr($_POST['mysubject']);?>">


						</div>


						<input type="hidden" name="submitted" id="submitted" value="true" />

						<div class="col-lg-6 col-sm-6" data-scrollreveal="enter left after 0s over 1s">

							<input required="required" class ="perro" type="text" name="myname" placeholder="Página Web" class="form-control input-box" value="<?php if(isset($_POST['myname'])) echo esc_attr($_POST['myname']);?>">

						</div>


						<div class="col-lg-6 col-sm-6" data-scrollreveal="enter right after 0s over 1s">
						
							<input required="required" class ="perro" type="text" name="mymessage" placeholder="Nombre del Emprendedor" class="form-control input-box" value="<?php if(isset($_POST['mymessage'])) echo esc_attr($_POST['mymessage']);?>">

						</div>


						<div class="col-lg-6 col-sm-6" data-scrollreveal="enter left after 0s over 1s">

							<input required="required" class ="perro" type="email" name="myemail" placeholder="Correo del Emprendedor" class="form-control input-box" value="<?php if(isset($_POST['myemail'])) echo is_email($_POST['myemail']) ? $_POST['myemail'] : ""; ?>">

						</div>
						
						
						

	
						<?php
							$zerif_contactus_button_label = get_theme_mod('zerif_contactus_button_label','Enviar');
							if( !empty($zerif_contactus_button_label) ):
								echo '<button class="btn btn-primary custom-button red-btn" type="submit" data-scrollreveal="enter left after 0s over 1s">'.$zerif_contactus_button_label.'</button>';
							endif;
						?>
						
						<?php 

							$zerif_contactus_sitekey = get_theme_mod('zerif_contactus_sitekey');
							$zerif_contactus_secretkey = get_theme_mod('zerif_contactus_secretkey');
							$zerif_contactus_recaptcha_show = get_theme_mod('zerif_contactus_recaptcha_show');

							if( isset($zerif_contactus_recaptcha_show) && $zerif_contactus_recaptcha_show != 1 && !empty($zerif_contactus_sitekey) && !empty($zerif_contactus_secretkey) ) :

								echo '<div class="g-recaptcha" data-sitekey="' . $zerif_contactus_sitekey . '"></div>';

							endif;

						?>

					</form>

				</div>
				
				<?php

/*
						$zerif_ourteam_subtitle = get_theme_mod('zerif_ourteam_subtitle',__('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.','zerif-lite'));


						if( !empty($zerif_ourteam_subtitle) ):


							echo '<h6>'.__($zerif_ourteam_subtitle,'zerif-lite').'</h6>';


						endif;
*/

					echo '</div>';

/*
					if(is_active_sidebar( 'sidebar-ourteam' )):
						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
							dynamic_sidebar( 'sidebar-ourteam' );
						echo '</div> ';
					else:
						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
							the_widget( 'zerif_team_widget','name=ASHLEY SIMMONS&position=Project Manager&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team1.png', array('before_widget' => '', 'after_widget' => '') );
							the_widget( 'zerif_team_widget','name=TIMOTHY SPRAY&position=Art Director&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team2.png', array('before_widget' => '', 'after_widget' => '') );
							the_widget( 'zerif_team_widget','name=TONYA GARCIA&position=Account Manager&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team3.png', array('before_widget' => '', 'after_widget' => '') );
							the_widget( 'zerif_team_widget','name=JASON LANE&position=Business Development&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team4.png', array('before_widget' => '', 'after_widget' => '') );
						echo '</div>';
					endif;

*/

				echo '</div>';


			echo '</section>';

?>