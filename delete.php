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

    $user = new Users($db);
    $user->id = $user_id;
    $user->delete();
}
?>