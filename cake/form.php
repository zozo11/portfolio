<?php 
$host="localhost";
$username="zoe";
$password="zoe";
$db="zoe";
$connect=mysql_connect($host,$username,$password);
mysql_select_db($db)or die(mysql_error());

$name = $_POST['name'];
$order = $_POST['order'];
$date = $_POST['date'];
$email = $_POST['email'];

echo "<h2>Order Result</h2>";


if ($name == null && $order == null && $date == null && $email == null){
	
	echo "your didn't order anythings!";
}
else {
	echo "This is your order list:";

	while($name!=""){
		echo "Name:".$name."<br/>";
		break;
	}
	while($order!=""){
		echo "Order:".$order."<br/>";
		break;
	}
	while($date!=""){
		echo "Date:".$date."<br/>";
		break;
	}
	while($email=""){
		echo "Email:".$email."<br/>";
		break;
	}
	mysql_query("INSERT INTO `zoe`.`love_cup` (`name`, `order`, `date`, `email`) VALUES ('$name', '$order', '$date', '$email');");
	}

?>