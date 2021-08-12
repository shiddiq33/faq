<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body
	style="background-image: url('asset/vendor/images/GKP.jpg');background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
	<div class="container">
		<div class="row">
			<div class="card position-absolute top-50 start-50 translate-middle" style="width: 400px;">
				<div class="card-body rounded-3">
					<h5 class="card-title text-center">Sign Up</h5>
					<?php
                $errors = $this->session->flashdata('errors');
                if(!empty($errors)){
                ?>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-danger text-center">
								<?php foreach($errors as $key=>$error){ ?>
								<?php echo "$error<br>"; ?>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php } ?>

					<form class="form-signin" action="<?php echo base_url('index.php/Home/proses_register'); ?>"
						method="post">

                        <div class="form-floating my-3">
							<input type="text" class="form-control" id="floatingUsername" placeholder="Username">
							<label for="floatingInput">Username</label>
						</div>
						<div class="form-floating my-3">
							<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
							<label for="floatingInput">Email address</label>
						</div>

						<div class="form-floating mb-5" style="margin-bottom : 50px;">
							<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
							<label for="floatingPassword">Password</label>
						</div>

                        <div class="form-floating mb-5" style="margin-bottom : 50px;">
							<input type="password" class="form-control" id="floatingConfirmPassword" placeholder="ConfirmPassword">
							<label for="floatingPassword">ConfirmPassword</label>
						</div>

						<button class="btn btn-primary col-md-1" type="submit">Signup</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>