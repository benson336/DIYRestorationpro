<?php include("includes/ini_two.php"); ?>
<?php include("includes/header.php"); ?>


<div class="col-md-4 col-md-offset-3">
<?php global $warning; if($warning != ''){?>
<h4 class="bg-danger"><?php echo $warning; }?></h4>

<form id="login-id" action="" method="post" class="needs-validation customFormLogin">
<div class="form-group col-lg-12">
	<label for="username">Username</label>
	<input class="form-control" type="text" name="username" value="<?php echo isset($_POST['username'])? $username : '';?>" >
	<?php if(!empty($username_error)){?>
				<p><?php echo $username_error?></p>
				<?php } if (!empty($login_error)){?>
				<p><?php echo $login_error?></p><?php } ?>
</div>
<div class="form-group col-lg-12">
	<label for="password">Password</label>
	<input class="form-control" type="password" name="password" value="">
	<?php if(!empty($password_error)){?>
				<p><?php echo $password_error?></p>
				<?php } ?>
</div>
<div class="form-group col-lg-12">
<button type="submit" name="submit" class="btn btn-warning">Log In</button>
</div>
</form>




