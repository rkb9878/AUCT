<?php
//session_start();
require_once('class.phpmailer.php');


$name =$_POST['pre']." ".$_POST['name'];
$collegename = $_POST['collegename'];
$subject = $_POST['subject'];
$phone = $_POST['mobile'];
$dateofjoining = $_POST['dateofjoining'];
$presentjob = $_POST['presentjob'];
$experience = $_POST['experience'];

//database connection work

date_default_timezone_set("Asia/Kolkata");

$currentdateTime = date("l jS \of F Y h:i:s A");

$adminemail = "python.vmm.2020@gmail.com";


$msg = "<style>a
    {
    text-decoration:none !important;color:black !important;
    }p
    {
    margin: 1px 0px !important;
    padding:0px !important;
    }</style>
    <h2 style='text-align:center;background-color: #ff914d; color: white;padding: 10px 0px;'>
   New Member Form <small style='color: white;text-decoration:none;'>http://auct.in/</small></h2><h3 style='text-align:left;color: black'>Dear Team Auct.in</h3>
   <p style='text-align:left;color: black'>Congratulations you have received a new Member from your website <span style='color: black;text-decoration:none;'>http://auct.in/</span></p>
<p ><strong style='text-align:left;color: black'>Name : " . $name . "</strong></p>
<p><strong style='text-align:left;color: black'>College Name : " . $collegename . "</strong></p>
<p><strong style='text-align:left;color: black'>Mobile :" . $phone . " </strong></p>
<p style='text-align:left;color: black'><strong>Subject: </strong>" . $subject . "</p>
<p style='text-align:left;color: black'><strong>Date of Joining: </strong>" . $dateofjoining . "</p>
<p style='text-align:left;color: black'><strong>Present Job: </strong>" . $presentjob . "</p>
<p style='text-align:left;color: black'><strong>Experience: </strong>" . $experience . "</p>
<h3 style='text-align:left;color: black'>Thanks & Regards</h3>
<h4 style='text-align:left;color: black'>Website Development Team</h4>
";
date_default_timezone_set('Asia/Kolkata');
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug = 1;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";            // enable SMTP authentication
// sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "python.vmm.2020@gmail.com";  // GMAIL username
$mail->Password = "pythonVmm2020";            // GMAIL password

$mail->SetFrom('python.vmm.2020@gmail.com', "AUCT");


$mail->AddReplyTo("python.vmm.2020@gmail.com", "pythonvmm2020");

$mail->Subject = "New Enquiry";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($msg);


$address = 'rkb9878@gmail.com';
$mail->AddAddress($address);

if (!$mail->Send()) {
    echo "No";
} else {
    header("Location: ../thankyou.php?d=Your Application");
}