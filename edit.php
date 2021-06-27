<?php include("includes/ini_three.php"); ?>
<?php include("includes/header.php"); ?>

<?php
if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $database = new Database();
    $db = $database->connect();
    $sql = "SELECT * FROM users WHERE id = $user_id";
	$result = $db->prepare($sql);
	$result->execute();
	while($row = $result->fetch()){
        $username = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];
}
}

if(isset($_POST['edit'])){
	$username = $_POST['username'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    
    
	if(!empty($username) && !empty($email)&& !empty($phone)){
		$database = new Database();
		$db = $database->connect();

        $user = new Users($db);
        $user->username = $username;
        $user->email = $email;
        $user->phone = $phone;
        $user->id = $user_id;
		$user->update();

	} if (empty($username)){
		$username_error = 'Please enter username';
	} if (empty($email)){
		$email_error = 'Please enter an email';
	} if (empty($phone)){
		$email_error = 'Please enter an email';
	} 
}

?>
<div class="col-md-4 col-md-offset-3">
<?php global $warning; if($warning != ''){?>
<h4 class="bg-danger"><?php echo $warning; }?></h4>

<form id="login-id" action="" method="post" class="needs-validation customFormLogin">
<div class="form-group col-lg-12">
	<label for="username">Username</label>
	<input class="form-control" type="text" name="username" value="<?php echo $username;?>">
	<?php if(!empty($username_error)){?><p><?php echo $username_error; }?></p>
</div>
<div class="form-group col-lg-12">
	<label for="email">email</label>
	<input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
	<?php if(!empty($email_error)){?><p><?php echo $email_error; }?></p>
</div>
<div class="form-group col-lg-12">
	<label for="phone">Phone</label>
	<input class="form-control" type="number" name="phone" value="<?php echo $phone;?>">
	<?php if(!empty($phone_error)){?><p><?php echo $phone_error; }?></p>
</div>
<div class="form-group col-lg-12">
<button type="submit" name="edit" class="btn btn-warning">Update</button>
</div>
<div class="form-group col-lg-12">
<button class="btn btn-warning"><a href="member.php">Cancel</a></button>
</div>
</form>
