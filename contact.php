<html>
<head>
<title>Contact Us!</title>
</head>
<body>
<form method='POST'>
<table align='center'>
<tr>
<td>Name:</td>
<td><input type='text' name='name'></td>
</tr>
<tr>
<td>Email:</td>
<td><input type='text' name='email'></td>
</tr>
<tr>
<td>Message:</td>
<td><textarea name='message' cols='35' rows='10'></textarea></td>
</tr>
<tr>
<td><input type='reset' value='Reset Fields' name='reset'></td>
<td><input type='submit' value='Submit' name='submit'></td>
</tr>
</table>
</form>
<?php

if(isset($_POST['submit']))
{
$name = htmlentities(stripslashes($_POST['name']));
$email = htmlentities(stripslashes($_POST['email']));
$message = htmlentities(stripslashes($_POST['message']));
$body = "Name: $name
Email: $email
Message: $message";
$headers = "From: $name <$email>";
if($name && $email && $message)
{
mail('aditya@saky.in', 'Contact Form Submission', $body, $headers);
echo "Thatnks! I'll get back to you ASAP!";
}
}
?>
</body>
</html>
