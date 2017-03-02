<?php 
	include 'header.php';
?>
	<body class="img-cover" style="background-image: url(img/photos-1/2.jpg);">
		
		<div class="container-fluid">
			<div class="sign-form">
				<div class="row">
					<div class="col-md-4 offset-md-4 p-x-3">
						<div class="box b-a-0">
							<div class="p-a-2 text-xs-center">
								<h5>Welcome</h5>
							</div>
							<form class="form-material m-b-1">
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
								</div>
								<div class="p-x-2 form-group m-b-0">
									<button type="submit" class="btn btn-purple btn-block text-uppercase">Sign in</button>
								</div>
							</form>
							<div class="p-x-2">
								<div class="row">
									<div class="col-xs-6">
										<button type="button" class="btn bg-facebook btn-block label-left m-b-0-25">
											<span class="btn-label"><i class="ti-facebook"></i></span>
											Facebook
										</button>
									</div>
									<div class="col-xs-6">
										<button type="button" class="btn bg-googleplus btn-block label-left m-b-0-25">
											<span class="btn-label"><i class="ti-google"></i></span>
											Google+
										</button>
									</div>
								</div>
							</div>
							<div class="p-a-2 text-xs-center text-muted">
								Don't have an account? <a class="text-black" href="#"><span class="underline">Sign up</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php 
	include 'footer.php';
?>
