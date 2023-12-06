<?php
$fullname=$_POST['fullname'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$doctorsname=$_POST['doctorsname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$timeslots=$_POST['timeslots'];
$doa=$_POST['doa'];



if(!empty($fullname) || !empty($phonenumber)|| !empty($email)|| !empty($doctorsname) || !empty($gender)|| !empty($age)|| !empty($dob) || !empty($timeslots) || !empty($doa))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="info";


	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	} 
	else
	{
		
		$SELECT="SELECT email From patients_info where email=? Limit 1";
		$INSERT="INSERT Into patients_info (fullname,phonenumber,email,doctorsname,gender, age, dob,timeslots,doa) values (?,?,?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0)
		{
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("sssssssss",$fullname,$phonenumber,$email,$doctorsname,$gender,$age, $dob,$timeslots,$doa);
			$stmt->execute();
			echo "Your data is recorded successfully";

		}
		else
		{
			echo "Please try again with different email";
		}
		$stmt->close();
		$conn->close();
	}
}
else
{
	echo "All fields are required";
	die();
}


?>
