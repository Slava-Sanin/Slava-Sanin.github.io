<?php
if (empty($_POST['name'])) exit("Type your name!");
if (empty($_POST['email'])) exit("Type your email!");

$_POST['name'] = htmlspecialchars(stripslashes($_POST['name']));
$name = $_POST['name'];

$_POST['email'] = htmlspecialchars(stripslashes($_POST['email']));
if (!preg_match("/^[0-9a-z_.]+@[0-9a-z_^\.]+\.[a-z]{2,3}$/i", $_POST['email'])) exit("Email must be like: somebody@server.com");
$email = $_POST['email'];

$tel = "";
if (isset($_POST['tel'])) {
    $_POST['tel'] = htmlspecialchars(stripslashes($_POST['tel']));
    $tel = $_POST['tel'];
}

$comments = "";
if (isset($_POST['comments'])) {
    $_POST['comments'] = htmlspecialchars(stripslashes($_POST['comments']));
    $comments = $_POST['comments'];
}

$news_updating = "לא מעוניין לקבל עידכונים וחדשות";
if (isset($_POST['news-updating'])) $news_updating = "ארצה לקבל עידכונים וחדשות";

$text = $name . "</br>" . $email . "</br>" . $tel . "</br>" . $comments . "</br>" . $news_updating;

$header = @header("Content-Type: text/html; charset=utf-8");
$subject = "Safari";

if (mail($email, $subject, $text, $header)) {
    echo "<font color='green'>Your message was sended!</font>";
    echo "<br/>" . $text . "<br/>" . $header;
}else{
    echo "<font color='red'>Your message wasn't sended!</font>";
}

//header('location: contact-us-thank-you.php');
