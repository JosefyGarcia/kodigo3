<!DOCTYPE html>
<html lang="en">
<head>
<title>KODIGO</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="KODIGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap4/bootstrap.min.css">
<link href="../assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link href="../assets/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../assets/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/responsive.css">
<link rel="shortcut icon" href="<?php echo $this->_helpers->linkTo('img/KodiGoIco.png', 'Assets') ?>" />

</head>
<?php require_once "views/partials/_menu.php"; ?>
<body>

<div class="super_container">
	

	<!-- Menu -->

			<div class="menu_container">
			
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="float-lg-right">
			<li style="padding-left:30px"><a href="<?php echo $this->_helpers->linkTo('web/home') ?>">Home</a></li>
				<li style="padding-top:10px;padding-left:30px"><a href="<?php echo $this->_helpers->linkTo('web/programas') ?>">Programas</a></li>

				<li style="padding-top:10px;padding-left:30px"><a href="<?php echo $this->_helpers->linkTo('web/involucrate') ?>">Involucrate</a></li>
				<li style="padding-top:10px;padding-left:30px"><a href="<?php echo $this->_helpers->linkTo('web/contacto') ?>">Contacto</a></li>
				<li style="padding-top:90px;padding-left:30px" > 
					<div class="btn btn-default btn-lg " style="background-color: #ff6600;">
						<a href="<?php echo $this->_helpers->linkTo('index/pre_formulario') ?>" class="trans_200">Aplica Ahora</a>
					</div>
				</li>
			</ul>

		</div>


	<!-- Home -->


	<div class="home2">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" class="img-fluid"  style="background-image:url(../assets/images/contact.jpg)"></div>
		</div><!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="owl-carousel owl-theme hero_slider">
				<!-- Slider Item -->
				<div class=" owl-item hero_slider_item item_1 d-flex flex-column align-items-right justify-content-center" style="width:40%; margin-left:5%; " >
					<span></span>
					<span><img src="" alt=""></span>
					<h1 style="color:#ffffff" class="arriba centrro">Si tienes cualquier duda, o necesitas cualquier aclaración,
					puedes contáctarnos</h1>
			<div style=" text-align: justify ">
						<p class="invierte "></p>
						</div> 
				</div>
			</div>
		</div>
		<div class="next_section_scroll">
			<div class="next_section nav_links" data-scroll-to=".contact2">
				<i class="fas fa-chevron-down trans_200"></i>
				<i class="fas fa-chevron-down trans_200"></i>
			</div>
		</div>
	
	</div>




	<!-- Contact -->

	<div class="contact2">
		
		<div class="container" >
			<div class="row ">
				<div class="col-lg-8">
			<div class="google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.4026196989853!2d-89.21748058595423!3d13.69404799038484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63305a660ccd87%3A0x17321feecf0825b!2sKodigo.org!5e0!3m2!1ses!2ssv!4v1574968690181!5m2!1ses!2ssv" width="2000" height="400" frameborder="0" style="border:0;"  allowfullscreen=""></iframe>
		</div>
			</div>
			<div class="col-lg-4">
					
					<!-- Contact Info -->

					<div class="contact_info">

						<div class="contact_title">Puedes visitar nuestras instalaciones :</div>
						
						<div class="contact_info_container">

							<div class="address_container clearfix">
								<div class="contact_info_icon2">
								</div>
								<div class="contact_info_content">
									<ul>
										<?php echo GlobalValuesPage::AddressGlobal; ?>
										<?php echo GlobalValuesPage::EmailGlobal; ?>
									</ul>									
								</div>
							</div>
						</div>
					</div>

				</div>
			

		</div>
		</div>
			
	</div>
	<!-- Contact -->

	<div class="contact3" style="text-align: center;">
		
		<div class="container">
	
			<div class="row contact_row" >
				<div class="col-lg-12">
					
					<div class="reply">
						<div class="logo contact_logo2">
								<a href="#">CONTÁC<span>tanos</span></a>
							</div>
						
						<div class="reply_form_container">
							
			                    <div class="cf-msg"></div>
			                    <div class="alert alert-danger" role="alert" style="display: none;" id="noenviado">
			                        Mensaje no enviado
			                    </div>
			                    <div class="alert alert-success" role="alert" style="display: none;" id="enviado">
			                        Mensaje enviado
			                    </div>
								<input name="firstname" type="text" id="firstname" class="hide-robot" style="visibility: hidden;">
								<form id="enviar_mensaje" >
								<div>
									
									<input  class="input_field2 reply_form_name" type="text" placeholder="Nombre" id="fname" name="fname" >
									<input class="input_field2 reply_form_email" type="email" placeholder="E-mail" id="email" name="email">
									<input class="input_field2 reply_form_subject" type="text" placeholder="Asunto" id="subject" name="subject">
									<textarea class="text_field2 reply_form_message2" name="msg"  placeholder="En que podemos ayudarte" rows="4"  id="msg" name="msg" ></textarea>
								</div>
								<div class="see-all-btn">
			                        <a href="#!" onclick="enviarMensaje()">Enviar mensaje</a>
			                    </div>

							</form>

						</div>
					</div>

				</div>

			
			</div>

		</div>

		
	</div>
	<?php require_once "views/partials/_footer.php"; ?>

<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/styles/bootstrap4/popper.js"></script>
<script src="../assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../assets/plugins/greensock/TweenMax.min.js"></script>
<script src="../assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="../assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="../assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../assets/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../assets/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../assets/js/CustomGoogleMapMarker.js"></script>
<script src="../assets/plugins/easing/easing.js"></script>
<script src="../assets/js/contact_custom.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script>

    function enviarMensaje() {

        $("#enviar_mensaje").validate({
            rules: {
                fname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true
                },
                msg: {
                    required: true
                }
            },

            messages: {
                fname: {
                    required: "Requerido"
                },
                email: {
                    required: "Requerido",
                    email: "email válido"
                },
                subject: {
                    required: "Requerido"
                },
                msg: {
                    required: "Requerido"
                }
            }
        });

        $("#loading").removeAttr("style");
        var fname = $("#fname").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var msg = $("#msg").val();
        var rootLocation ='/web/enviar';
        if ($("#enviar_mensaje").valid()) {
            $.ajax({
                method: 'POST',
                dataType: 'json',
                url: rootLocation,
                data: {
                    fname: fname,
                    email: email,
                    subject: subject,
                    msg: msg,
                    firstname: $("#firstname").val(),
                },
                success: function (dt) {
                    if (dt.mensaje == 'success') {
                        $("#noenviado").hide();
                        $("#enviado").removeAttr("style");
                        cleanParams();
                    } else {
                        $("#enviado").hide();
                        $("#noenviado").removeAttr("style");
                    }

                    $("#loading").hide();
                },
                error: function (d) {
                    $("#enviado").hide();
                    $("#noenviado").removeAttr("style");
                    $("#loading").hide();
                }
            });
        }

    }

    function cleanParams(){
        $("#fname").val('');
        $("#email").val('');
        $("#subject").val('');
        $("#msg").val('');
    }
</script>
</body>

</html>

