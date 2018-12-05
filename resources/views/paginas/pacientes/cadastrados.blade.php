<!DOCTYPE html>
<html lang="en">
<head>
<title>Pacientes Cadastrados</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.html">Pagina Inicial</a></li>
				<li class="menu_item"><a href="ficha.html">Ver Ficha</a></li>
				<li class="menu_item"><a href="Actualizar_Ficha.html">Actualizar Ficha</a></li>
				
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">Health<span>+</span></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="#">Help Desk</a></li>
												<li><a href="#">Emergency Services</a></li>
												<li><a href="#">Appointment</a></li>
											</ul>
										</div>
										<div class="header_top_phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>845707868</span>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													
													<li><a href={{"inicio"}}>Pagina Inicial</a></li>
												<li><a href={{"cadastro"}}><span class="glyphicon glyphicon-plus"></span>Cadastrar</a></li>
													
											        
													
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Procurar Paciente" required="required">
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Pacientes Cadastrados</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<!-- Header -->

	
    
	<!-- Services -->
	 
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"></div>
					
				</div>
			</div>
			<div class="row icon_boxes_row">
		
		<!-- Tabela -->
	
				
		<table class="table table-stripped" >
				<tr>
					<th>Nome</th>
					<th>Nome do Pai</th>
					<th>Nome da Mae</th>
					<th>Data de Nascimento</th>
					<th>Peso</th>
					<th>Local de Parto</th>
					<th>Sexo</th>
					<th>Tipo de Parto</th>
					<th width="100px">Acoes</th>
				</tr>
				@foreach($pacientes as $Paciente)
				<tr>
					<td>{{$Paciente->nome}}</td>
					<td>{{$Paciente->nome_do_pai}}</td>
					<td>{{$Paciente->nome_da_mae}}</td>
					<td>{{$Paciente->data_de_nascimento}}</td>
					<td>{{$Paciente->peso_nascimento}}</td>
					<td>{{$Paciente->local_do_parto}}</td>
					<td>{{$Paciente->sexo}}</td>
					<td>{{$Paciente->tipo_de_parto}}</td>
					<td>
					<a href="" class=" actions edit "><span class="glyphicon glyphicon-pencil"></a>
					<a href="" class=" actions delete "><span class="glyphicon glyphicon-trash"></a>
					</td>
				</tr>
		
				@endforeach
		
			</table>

		<!-- Tabela -->
		
		

	<!-- Tabs -->

	<div class="tabs_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">

					<!-- Tabs -->
					<div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
						<div class="tab active">
							<div class="tab_title">Discuss</div>
							<div class="tab_text">Lorem ipsum dolor sit amet, consectetur adipis voelta.</div>
						</div>
						<div class="tab">
							<div class="tab_title">Create</div>
							<div class="tab_text">Lorem ipsum dolor sit amet, consectetur adipis voelta.</div>
						</div>
						<div class="tab">
							<div class="tab_title">Brainstorm</div>
							<div class="tab_text">Lorem ipsum dolor sit amet, consectetur adipis voelta.</div>
						</div>
						<div class="tab">
							<div class="tab_title">The Project</div>
							<div class="tab_text">Lorem ipsum dolor sit amet, consectetur adipis voelta.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">

					<!-- Panels -->
					<div class="tab_panels">

						<!-- Panel -->
						<div class="tab_panel active">
							<div class="tab_panel_content">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image"><img src="images/tabs.jpg" alt=""></div>
									</div>
									<div class="col-lg-7">
										<div class="tab_list">
											<ul>
												<li>
													<div class="tab_list_title">Cardiology</div>
													<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
												</li>
												<li>
													<div class="tab_list_title">Gastroenterology</div>
													<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
												</li>
												<li>
													<div class="tab_list_title">Medical Lab</div>
													<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content">
								<div class="tab_list">
									<ul>
										<li>
											<div class="tab_list_title">Cardiology</div>
											<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Gastroenterology</div>
											<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Medical Lab</div>
											<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content">
								<div class="tab_list">
									<ul>
										<li>
											<div class="tab_list_title">Cardiology</div>
											<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Gastroenterology</div>
											<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Medical Lab</div>
											<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content">
								<div class="tab_list">
									<ul>
										<li>
											<div class="tab_list_title">Cardiology</div>
											<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Gastroenterology</div>
											<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Medical Lab</div>
											<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
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

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">health<span>+</span></a>	
							</div>
							<div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
									<button class="footer_contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">Help Desk</a></li>
									<li><a href="#">Emergency Services</a></li>
									<li><a href="#">Appointment</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+34 586 778 8892</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>