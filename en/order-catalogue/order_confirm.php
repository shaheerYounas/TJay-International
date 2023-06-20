<?php


$connection = mysqli_connect('localhost', 'jvglgksy_order_catalogue', 'Vt;)oZ1pM,$^', 'jvglgksy_order_catalogue');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'jvglgksy_order_catalogue');

if($connection){
    echo"connection successful";
}

// get the post records
$house_size = $_POST['house_size'];
$land_owner = $_POST['land_owner'];
$build_year = $_POST['build_year'];
$build_invest = $_POST['build_invest'];

$ads = $_POST['ads'];
$have_drawing = $_POST['have_drawing'];
$have_permission = $_POST['have_permission'];
$full_name = $_POST['full_name'];

$street_name = $_POST['street_name'];
$post_code = $_POST['post_code'];
$city_name = $_POST['city_name'];
$phone = $_POST['phone'];

$email = $_POST['email'];
$agree = $_POST['agree'];
$subscribe = $_POST['subscribe'];

// database insert SQL code
$sql = "INSERT INTO catalogue_order (id, house_size, land_owner, build_year, build_invest, ads, have_drawing, have_permission, full_name, street_name, post_code, city_name, phone, email, agree, subscribe) VALUES ('','$house_size', '$land_owner', '$build_year', '$build_invest', '$ads', '$have_drawing', '$have_permission', '$full_name', '$street_name', '$post_code', '$city_name', '$phone', '$email', '$agree', '$subscribe')";



// insert in database 
$rs = mysqli_query($connection, $sql);

if($rs)
{
	echo "Records Inserted - Successfully";
	header("Location: /en/order-catalogue/thank-you.html");
}
else{
echo"Error: Records not inserted";
}



?>