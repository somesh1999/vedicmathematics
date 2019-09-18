<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   include '../dbconfig.php';
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $tel=$_POST['phone'];
        $messages=$_POST['message'];

//if ($conn->query($sql) === TRUE) {
			$to_email = 'vedaganita11@gmail.com';
			//$to_email = 'ankita.anks94@gmail.com';
			$subject = 'Mail from vedaganita.com-'.$fname.' '.$lname;
			$message = '<b><center><h2>Mail from vedaganita.com</h2></center></b><br><br> Name:- '.$fname.' '.$lname.'<br><br>Email:- '.$email.'<br><br>Contact number:- '.$tel.'<br><br>Message:- '.$messages;
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers .= 'From: vedaganita.com<noreply@vedaganita.com>';
	if(mail($to_email,$subject,$message,$headers)){
    echo "Message sent successfully";
	}
	else{
	echo "Something went wrong";
    }
    

}
else{
    header("location:/");
}
?>
