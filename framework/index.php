<?php 
	session_start();
	include 'header.php';
?>
<?php 

?>
<?php 
	/*VARIABLES*/
	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$edad = $_POST['edad'];
	$talla = $_POST['talla'];
	$peso = $_POST['peso'];

	/*LÓGICA*/
	$log_talla = $talla/100;
	$logica = pow($log_talla,2);
	$imc = number_format(($peso/$logica),2);
	$img = '';

	// echo "<br>"; 
	// echo "LOGICA ".$logica."<br>";
	// echo "IMC ".number_format($imc
	if($sexo == "Hombre"){
		if($imc < 16.00){
			$resultado = "Infrapeso: Delgadez Severa"; 
			$img = 'img/silueta-hombre-1.jpg';
		}
		else if ($imc >= 16.00 && $imc < 16.99) {
			$resultado = "Infrapeso: Delgadez moderada";
			$img = 'img/silueta-hombre-2.jpg';
		}
		else if ($imc >= 16.99 && $imc < 18.49) {
			$resultado = "Infrapeso: Delgadez aceptable";
			$img = 'img/silueta-hombre-3.jpg';
		}
		else if ($imc >= 18.50 && $imc < 24.99) {
			$resultado = "Peso Normal";
			$img = 'img/silueta-hombre-4.jpg';
		}
		else if ($imc >= 25.00 && $imc < 29.99) {
			$resultado = "Sobrepeso";
			$img = 'img/silueta-hombre-5.jpg';
		}
		else if ($imc >= 30.00 && $imc < 34.99) {
			$resultado = "Obeso: Tipo I";
			$img = 'img/silueta-hombre-6.jpg';
		}
		else if ($imc >= 35.00 && $imc < 40.00) {
			$resultado = "Obeso: Tipo II";
			$img = 'img/silueta-hombre-7.jpg';
		}
		else if ($imc > 40.00) {
			$resultado = "Obeso: Tipo III";
			$img = 'img/silueta-hombre-8.jpg';
		}
		else{
			$resultado = "No se encuentro IMC, intentelo denuevo";
			$img = '9';
		}
	}
	else if($sexo == "Mujer"){
		if($imc < 18.50){
			$resultado = "Peso Bajo"; 
			$img = 'img/silueta-mujer-1.jpg';
		}
		elseif ($imc >= 18.50 && $imc < 24.90) {
			$resultado = "Peso Saludable";
			$img = 'img/silueta-mujer-2.jpg';
		}
		elseif ($imc >= 24.90 && $imc < 30) {
			$resultado = "Sobre Peso";
			$img = 'img/silueta-mujer-3.jpg';
		}
		elseif ($imc >= 30) {
			$resultado = "Obesidad";
			$img = 'img/silueta-mujer-4.jpg';
		}
		else{
			$resultado = "No se encuentro IMC, intentelo denuevo";
			$img = '9';
		}
		
	}
	else{ 
		$resultado = "FALTAN DATOS";
	}

	include 'config/conexion.php';
    $sql = "INSERT INTO usuarios (nombre,sexo,edad,talla,peso,imc,img,resultado) VALUES ('$nombre','$sexo',$edad,$talla,$peso,$imc,'$img','$resultado')";  
    $conexion -> query($sql); 
    //echo $sql;
	// echo "<br>"."ATENDIENDO EL IMC, TIENE: ".$resultado;
?>
	<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			<div class="site-overlay"></div>
			<?php 
				include 'menu.php';
			?>
			
			<!-- Sidebar second -->
			<div class="site-sidebar-second custom-scroll custom-scroll-dark">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Chat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Activity</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Todo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">Settings</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-1" role="tabpanel">
						<div class="sidebar-chat animated fadeIn">
							<div class="sidebar-group">
								<h6>Favorites</h6>
								<a class="text-black" href="#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">John Doe</span>
									<span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
								</a>
								<a class="text-black" href="#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">Vance Osborn</span>
								</a>
								<a class="text-black" href="#">
									<span class="sc-status bg-danger"></span>
									<span class="sc-name">Wolfe Stevie</span>
									<span class="tag tag-primary">7</span>
								</a>
								<a class="text-black" href="#">
									<span class="sc-status bg-warning"></span>
									<span class="sc-name">Jonathan Mel</span>
								</a>
								<a class="text-black" href="#">
									<span class="sc-status bg-secondary"></span>
									<span class="sc-name">Carleton Josiah</span>
								</a>
							</div>
							<div class="sidebar-group">
								<h6>Work</h6>
								<a class="text-black" href="#">
									<span class="sc-status bg-secondary"></span>
									<span class="sc-name">Larry Hal</span>
								</a>
								<a class="text-black" href="#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">Ron Carran</span>
									<span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
								</a>
							</div>
							<div class="sidebar-group">
								<h6>Social</h6>
								<a class="text-black" href="#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">Lucius Skyler</span>
									<span class="tag tag-primary">3</span>
								</a>
								<a class="text-black" href="#">
									<span class="sc-status bg-danger"></span>
									<span class="sc-name">Landon Graham</span>
								</a>
							</div>
						</div>
						<div class="sidebar-chat-window animated fadeIn">
							<div class="scw-header clearfix">
								<a class="text-grey pull-xs-left" href="#"><i class="ti-angle-left"></i> Back</a>
								<div class="pull-xs-right">
									<strong>Jonathan Mel</strong>
									<div class="avatar box-32">
										<img src="img/avatars/5.jpg" alt="">
										<span class="status bg-success top right"></span>

									</div>
								</div>
							</div>
							<div class="scw-item">
								<span>Hello!</span>
							</div>
							<div class="scw-item self">
								<span>Meeting at 16:00 in the conference room. Remember?</span>
							</div>
							<div class="scw-item">
								<span>No problem. Thank's for reminder!</span>
							</div>
							<div class="scw-item self">
								<span>Prepare to be amazed.</span>
							</div>
							<div class="scw-item">
								<span>Good. Can't wait!</span>
							</div>
							<div class="scw-form">
								<form>
									<input class="form-control" type="text" placeholder="Type...">
									<button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-2" role="tabpanel">
						<div class="sidebar-activity animated fadeIn">
							<div class="notifications">
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
												<span class="n-icon bg-danger"><i class="ti-pin-alt"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">uploaded <a class="text-black" href="#">monthly report</a></div>
											<div class="text-muted font-90">12 minutes ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
												<span class="n-icon bg-success"><i class="ti-comment"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">Vance Osborn</a> <span class="text-muted">commented </span> <a class="text-black" href="#">Project</a></div>
											<div class="n-comment m-y-0-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
											<div class="text-muted font-90">3 hours ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
												<span class="n-icon bg-danger"><i class="ti-email"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">Ron Carran</a> <span class="text-muted">send you files</span></div>
											<div class="row row-sm m-y-0-5">
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/1.jpg" alt="">
												</div>
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/2.jpg" alt="">
												</div>
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/3.jpg" alt="">
												</div>
											</div>
											<div class="text-muted font-90">30 minutes ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
												<span class="n-icon bg-primary"><i class="ti-plus"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">Larry Hal</a> <span class="text-muted">invited you to </span><a class="text-black" href="#">Project</a></div>
											<div class="text-muted font-90">10:58</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-3" role="tabpanel">
						<div class="sidebar-todo animated fadeIn">
							<div class="sidebar-group">
								<h6>Important</h6>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Mock up</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Prototype iPhone</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Build final version</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Approval docs</span>
									</label>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Secondary</h6>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Website redesign</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Skype call</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Blog post</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-4" role="tabpanel">
						<div class="sidebar-settings animated fadeIn">
							<div class="sidebar-group">
								<h6>Main</h6>
								<div class="ss-item">
									<div class="text-truncate">Anyone can register</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Allow commenting</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Allow deleting</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Notificatiоns</h6>
								<div class="ss-item">
									<div class="text-truncate">Commits</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Messages</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Security</h6>
								<div class="ss-item">
									<div class="text-truncate">Daily backup</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">API Access</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
 

			<!-- Header -->
			<div class="site-header">
				<nav class="navbar navbar-light">
					<div class="navbar-left">
						<a class="navbar-brand" href="index.html">
							<div class="logo"></div>
						</a>
						<div class="toggle-button dark sidebar-toggle-first pull-xs-left hidden-md-up">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second dark pull-xs-right hidden-md-up">
							<i class="ti-arrow-left"></i>
						</div>
						<div class="toggle-button dark pull-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
							<span class="more"></span>
						</div>
					</div>
					<div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
						<div class="toggle-button light sidebar-toggle-second pull-xs-left hidden-sm-down">
							<span class="hamburger"></span>
						</div> 
						<ul class="nav navbar-nav pull-md-right">
							 
							<li class="nav-item dropdown hidden-sm-down">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="img/avatars/1.jpg" alt="">

									</span>
									 Hola ,<?php echo $nombre; ?>
								</a>
								<div class="dropdown-menu dropdown-menu-right animated fadeInUp">
									<a class="dropdown-item" href="#">
										<i class="ti-email m-r-0-5"></i> Inbox
									</a>
									<a class="dropdown-item" href="#">
										<i class="ti-user m-r-0-5"></i> Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="ti-settings m-r-0-5"></i> Settings
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-help m-r-0-5"></i> Help</a>
									<a class="dropdown-item" href="#"><i class="ti-power-off m-r-0-5"></i> Sign out</a>
								</div>
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="nav-item hidden-sm-down">
								<a class="nav-link toggle-fullscreen" href="#">
									<i class="ti-fullscreen"></i>
								</a>
							</li> 
						</ul> 
					</div>
				</nav>
			</div>

			<div class="site-content">
				<!-- Content -->
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="row row-md">
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="fa fa-balance-scale"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Tu Peso</h6>
										<h1 class="m-b-1"><?php echo $peso; ?></h1>
										
										<span class="text-muted font-90">KG</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="fa fa-male"></i></div>
									<div class="t-content">
										<h6 sclass="text-uppercase m-b-1">Tu Talla</h6>
										<h1 class="m-b-1"><?php echo $talla; ?></h1>
										<i class="fa fa-caret-up text-success m-r-0-5"></i><span>cm</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="fa fa-calendar"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Tu Edad</h6>
										<h1 class="m-b-1"><?php  echo $edad; ?></h1>
										<span class="text-muted font-90">Años</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="fa fa-heartbeat"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Tu Imc</h6>
										<h1 class="m-b-1"><?php echo number_format($imc,2); ?></h1>
										<span class="text-muted font-90">Masa corporal</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6" style="padding: 0 !important;">
								<div class="col-lg-12 col-md-6 col-xs-12">
									<div class="box box-block bg-white tile tile-1 m-b-2">
										
										<div class="t-content">
											<div id="container-speed" style="width: 100%; height: 200px; float: left"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6 col-xs-12">
									<div class="box box-block bg-white tile tile-1 m-b-2">
										
										<div class="t-content">
											<div id="peso" style="width: 100%; height: 200px; float: left"></div>
										</div>
									</div>
								</div>
							</div>
							 <div class="col-lg-6 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									
									<div class="col-lg-6">
										<div style="
										width: 100%;
										background: url('<?php echo $img; ?>');
										height: 450px;
									    background-size: auto 100%;
									    background-position: 10%;
									    background-repeat: no-repeat;
										">
										</div>
									</div>
									<div class="col-lg-6">
										USTED TIENE: <h2><?php echo $resultado; ?></h2>
										<br>
										RECOMENDACIONES:
										<a href="http://www.fundaciondelcorazon.com/images/stories/file/dieta_sobrepeso.pdf" target="_blank">
											Click Aqui!
										</a>
									</div>
								</div>
							</div>
						</div> 

					</div>
				</div>
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-xs-center">
							<div class="col-sm-4 text-sm-left m-b-0-5 m-sm-b-0">
								2016 © Grupo Aizen
							</div>
							<div class="col-sm-8 text-sm-right">
								<ul class="nav nav-inline l-h-2">
									<li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

		</div>
<?php 
	include 'footer.php';
?>



