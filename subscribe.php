<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscribe Form</title>
</head>
<body>
<header>
    <h1>Home</h1>
</header>
<hr>
<div>
    <!--About US-->
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias assumenda aut dignissimos dolorem
        doloremque eius, libero modi nemo, repudiandae sit, sunt vero. Eligendi facere id magnam optio qui repudiandae.</p>
</div>
<div>
    <!--Image Feature-->
    <h2>What we Do</h2>
</div>
<div>
<?php
$email = filter_input(INPUT_POST, "email");
$name = filter_input(INPUT_POST, "name");
$validEmail = "@";


if (strpos($email, $validEmail)){
    print "<blockquote> Thank you for your Subscription $name!</blockquote>";
} else {
    print <<<HERE
    <!--Subscription Form-->
    <form action = "subscribe.php" method = "post">
        <label for = subname>Name: </label>
        <input id = "subname" type = "text" name = "name">
        <label for = "subemail">Enter Your Email Below</label>
        <input type = "email" id = "subemail" name ="email" placeholder = "youremail@email.com">
        <button type = "submit">Subscribe</button>
    </form>
</div>
HERE;
}
?>
</div>
<footer>
    <p class = "note">Proudly Designed and Developed by <span class = "tabeiBrand">Tabei</span> Design 2020</p>
    <small>&copy 2020 Haitian Hope Humanitarian Efforts Inc.</small>
</footer>
</body>
</html>
