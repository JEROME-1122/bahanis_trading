<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $loc = $_POST['loc'];
    $enquiry = $_POST['enquiry'];

     $to = 'ronald@alhosnigroup.com, bahanistrading@alhosnigroup.com';
    //$to = 'ginu@alhosnigroup.com';
    //$to = 'tgtamil434@gmail.com';
    $subject = 'New Enquiry from Contact Form';

    $message = "
Name: $name
Phone Number: $phno
Email: $email
Location: $loc

Enquiry:
$enquiry
";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.php?status=success");
        exit;
    } else {
        header("Location: index.php?status=error");
        exit;
    }
}
?>
