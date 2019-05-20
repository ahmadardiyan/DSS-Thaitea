<div class="jumbotron jumbotron-fluid">
<div class="container">
	
	<div class="row justify-content-center mt-5">
		<div class="col-md-4 content text-left">
				<h3 class="text-center " >Administrator</h3>
			<form action="" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username"
						value="<?=set_value('username')?>">
					<small id="username" class="form-text text-danger">
						<?=form_error('username')?></small>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password"
						value="<?=set_value('password')?>">
				</div>
				<small id="password" class="form-text text-danger">
					<?=form_error('password')?></small>

				<div class="form-group">
					<a href="<?php base_url();?>forgotPassword">Lupa password ?</a>
				</div>
				<div class="text-center">
					<button type="submit" name="login" class="btn btn-primary tombol">LogIn</button>
				</div>
			</form>
		</div>
	</div>

</div>

</div>