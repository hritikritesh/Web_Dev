<?php

$connection = mysql_connect("localhost", "root", ""); 

Connection with Server

$db = mysql_select_db("college", $connection); 

Server

if(isset($_POST['submit']))
{ 

	URL

	$fname = $_POST['fname'];

	$lname = $_POST['lname'];

	$phoneNumber = $_POST['phoneNumber'];

	$city = $_POST['city']

	$state = $_POST['state']

	$address = $_POST['address'];

	if($name !='' && $lname !='' && $phoneNumber != '' && $city != '' && $state != '' && $address != '')
	{


		$query = mysql_query("insert into students(student_name, student_lname,

		student_phoneNumber, student_city, student_state, student_address) values ('$name', '$lname', '$phoneNumber, '$city','$state', '$address')");

		echo "<br/><br/><span>Data Inserted successfully...!!</span>";

	}

	else
	{
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
	}

}

mysql_close($connection);

?>