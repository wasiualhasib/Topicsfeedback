

<?php
/*$profile_pic=$_GET['profile_picture'];*/
$msg=0;

if (isset($_GET['register'])) {
$profile_pic="image/hasib.png";
$fname= ucwords($_GET['fname']) ;
$lname= ucwords($_GET['lname']) ;
$dob=$_GET['dob_date'];
$address=ucwords($_GET['address']);
$education= strtoupper($_GET['education_institute']);
$subject=ucwords($_GET['major_subject']);
$yourCourse=ucwords($_GET['course_name']);
$phoneNo=$_GET['phone_number'];
$emergencyNo=$_GET['emergency_number'];
$moneySend=$_GET['send_amount'];
$moneySendFrom=$_GET['send_from_mfs'];
$moneySendTo=$_GET['send_to_mfs'];
$moneySendDate=$_GET['date_of_payment'];
$email=strtolower($_GET['email']);
$password=$_GET['password'];
 

echo $msgCollect="<br> I am inside isset";

$sql = "INSERT INTO student_success_registration 
		(
				student_photo_reg, 
				student_fname_reg, 
				student_lname_reg,
				student_dob_reg,
				student_address_reg,
				student_edu_reg,
				student_won_sub_reg,
				student_our_course_reg,
				student_phone_no_reg,
				student_emergency_no_reg,
				student_send_money_reg,
				student_send_money_from_reg,
				student_send_money_to_reg,
				student_send_money_date_reg,
				student_email_reg,
				student_pass_reg
		)
VALUES (
				'$profile_pic', 
				'$fname', 
				'$lname',
				'$dob',
				'$address',
				'$education',
				'$subject',
				'$yourCourse',
				'$phoneNo',
				'$emergencyNo',
				'$moneySend',
				'$moneySendFrom',
				'$moneySendTo',
				'$moneySendDate',
				'$email',
				'$password'
		)";

		if ($dbConnect->query($sql) === TRUE) {
			$msg=1;
    	 echo $msgCollect="Data Insert Failed";
		} 
		else {
			$msg=2;
    		echo $msgCollect="Data Insert Successfully";
		}

}

?>