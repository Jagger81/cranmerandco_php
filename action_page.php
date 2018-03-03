<?

$firstname = $_POST('firstname');
$lastname = $_POST('lastname');
$email = $_POST('email');
$category = $_POST('category');
$message = $_POST('message');

$email_message = "

First Name: ".$firstname."
Last Name: ".$lastname."
Email: ".$email."
Category: ".$category."
Message: ".$message."
";

mail("eddiejcranmer@gmail.com", "New Website Enquiry", $email_message)
header("Location: email_success.html")
?>