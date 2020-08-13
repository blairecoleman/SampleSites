<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post Draft</title>
</head>
<link rel = "stylesheet" href ="">
<body>
<?php
$title = filter_input(INPUT_POST, "title");
$author = filter_input(INPUT_POST, "author");
$thumbImg = filter_input(INPUT_POST, "thumbnail");
$headerImg = filter_input(INPUT_POST, "header");
$footerImg = filter_input(INPUT_POST, "footer");
$description = filter_input(INPUT_POST, "description");
$content = filter_input(INPUT_POST, "content");
$insta = filter_input(INPUT_POST, "instagram");
$blog = filter_input(INPUT_POST, "blog");
$linkedIn = filter_input(INPUT_POST, "linkedIn");
$medium = filter_input(INPUT_POST, "medium");
$postStatus = filter_input(INPUT_POST, "postStatus");
$date = date("d.m.y"); //try to change to string, using js? or in php strtotime
//post preview
print "<h1>$title</h1>";
print"<h2>By: $author</h2>";
print "<h3>$date</h3>";
print "<img src = '$headerImg' alt ='headerImage'>";
print "<p>$content</p>";
print <<<HERE
<div>
<h4>Support $author!</h4>
<h4>Follow on Social Media</h4>
<nav>
<ul>
<li><a href = "$insta">Instagram</a></li>
<li><a href = "$blog">Blog</a></li>
<li><a href = "$linkedIn">LinkedIn</a></li>
<li><a href = "$medium">Medium</a></li>
</ul>
</nav>
</div>
HERE;
print "<img src = '$footerImg' alt ='footerImage'>";


//thumbnail preview
print "<img src = '$thumbImg' alt ='thumbImage'>";
print "<h4>$title</h4>";
print "<blockquote>$description</blockquote>";
?>
</body>
</html>
