<?php
require_once("../includes/functions.php");
require_once("../includes/database.php");
require_once("../includes/user.php");
?>

<?php include 'layout/header.php';
$user = User::find_by_id(1);
echo $user->full_name();

echo "<hr />";

$users = User::find_all();
foreach($users as $user) {
  echo "User: ". $user->username ."<br />";
  echo "Name: ". $user->full_name() ."<br /><br />";
}

?>

 

		<h2>Menu</h2>		
	</div>
		
<?php include 'layout/footer.php';?>