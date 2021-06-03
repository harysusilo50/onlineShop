<body style="background-image: url(<?php echo base_url('assets/scene2.jpeg')?>); background-size: cover; background-repeat: no-repeat;">
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-xl-5 col-lg-12 col-md-9">
			
				<div class="card o-hidden border-0 shador-lg my-5">
					<div class="card-body p-0">

						<div class="row">
							<div class="col-lg">
								<div class="p-5">
									<div class="text-center">
									<h1 class="h3 text-black-900 mb-4">
									Create an Account!
									</h1>
									</div>
								<form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="Nama" placeholder="Enter Your Name..." name="nama" required>
									</div>	
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="Username" placeholder="Enter Your Username..." name="username" required>
										</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="Password" placeholder="Enter Your Password..." name="password" required>
										</div>

									<button type="submit" class="btn btn-primary form-control">Register</button>

								</form>
								<hr>
								<div class="text-center">
										<a class="small btn btn-outline-primary" href="<?= base_url('auth/login')?> ">Already have an account? Login now!</a>
								</div>
							</div>
							
							</div>
						
						</div>
					
					</div>
				
				</div>
				
			</div>	
			
		</div>
		
	

	</div>
		


</body>
