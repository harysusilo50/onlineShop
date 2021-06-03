<body style="background-image: url(<?php echo base_url('assets/scene2.jpeg') ?>); background-size: cover; background-repeat: no-repeat;">
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
											Welcome!
										</h1>
									</div>
									<?php echo $this->session->flashdata('pesan') ?>
									<form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="Username" placeholder="Enter Your Username..." name="username">
											<?php echo form_error('username', '<div class="text-danger text-small ml-2">', '</div'); ?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="Password" placeholder="Enter Your Password..." name="password">
											<?php echo form_error('password', '<div class="text-danger text-small ml-2">', '</div'); ?>
										</div>
										<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
										<br>
										<button type="submit" class="btn btn-primary form-control">Login</button>

									</form>
									<hr>
									<div class="text-center">
										<a class="small btn btn-outline-primary" href="<?= base_url('registrasi/index') ?> ">Create an Account!</a>
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