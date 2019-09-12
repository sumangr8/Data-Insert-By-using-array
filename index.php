<?php
if(isset($_POST["l"]))
{
$data=array(
	'name'=>$_POST['name'],
	'password'=>$_POST['password']
);
foreach ($data as $key => $value) {
	$k[]=$key;
	$v[]="'".$value."'";
}
$k=implode(",", $k);
$v=implode(",", $v);
echo $v;


$con=mysqli_connect("localhost","root","","demo");
$qry=mysqli_query($con,"INSERT INTO `login`($k) VALUES ($v)");
}
?>
<form method="post" action="">
	Name:-<input type="text" name="name"><br>
	Password:-<input type="text" name="password"><br>
	<input type="submit" name="l" value="Login">
</form>
