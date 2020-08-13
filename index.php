<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Haitian Hope Humanitarian Effort</title>
</head>
<body>
<div class="headingBackground">
    <header>
        <img src="" alt="haitian hope logo" width="200">
        <h1>Haitian Hope Humanitarian Efforts Inc.</h1>
    </header>
    <nav>
        <ul>
            <li><a href="blogpostentryform.html">Blog entry</a></li>
            <li><a href="subscribe.php">Subscribe</a></li>
            <li><a href="blogdraft.php">Blog Draft</a></li>
            <li><a href=""></a></li>
        </ul>
    </nav>
    <div>
        <blockquote class="statement">
            Restoring Haitian Hope and Dignity
        </blockquote>
        <em>Empowering Haitian Citizens through
            Education, Healthcare and Nutrition</em>
        <button class="callToAction">Get Involved</button>
    </div>
</div>
<div class="video">
    <iframe>

    </iframe>
</div>
<div>
    <h2>About Us</h2>
    <p>HHHE is a non-for-profit organization established with the goal
        of positively impacting the lives of those in Haiti by restoring hope
        and dignity and sharing the love of Christ with them. We provide resources for
        education, health care and businesses. HHHE does regular mission trips every
        other year, and does remote work.
    </p>
    <blockquote class="regQuote">
        “We want to alleviate the suffering of Haitian people and share the love of Christ
        with them by providing resources for education, healthcare, and nutrition.
        We carry out this mission through community services, evangelistic efforts,
        and mission trips. Haitian Hope Humanitarian’s Board of Directors, along with
        volunteers and advocates will work to restore hope and dignity to the people of Haiti.”
    </blockquote>
</div>
<div class="subscriptionFeature">
    <blockquote class="statement">
        Stay Up-to-Date
    </blockquote>
    <em>Subscribe to our Newsletter and Blog</em>
<?php
$email = filter_input(INPUT_POST, "email");
$name = filter_input(INPUT_POST, "name");
$validEmail = "@";


if (strpos($email, $validEmail)) {
    print "<blockquote> Thank you for your Subscription $name!</blockquote>";
} else {
    print <<<HERE
    <!--Subscription Form-->
    <form action = "subscribe.php" method = "post">
        <label for = subname>Name: </label>
        <input id = "subname" type = "text" name = "name">
        <label for = "subemail">Enter Your Email Below</label>
        <input type = "email" id = "subemail" name ="email" placeholder = "youremail@email.com">
        <button type = "submit" class = "callToAction">Subscribe</button>
    </form>
HERE;
}
?>
</div>
<div class="secondaryNav">
    <div class="secondaryNavItem">
        <img src="" alt="" class="secondaryNavImg">
        <h3>Our Impact</h3>
    </div>
    <div class="secondaryNavItem">
        <img src="" alt="" class="secondaryNavImg">
        <h3>Our Trips</h3>
    </div>
    <div class="secondaryNavItem">
        <img src="" alt="" class="secondaryNavImg">
        <h3>Our Blog</h3>
    </div>
</div>
<div class="currentProjects">
    <div class="featurePostcard">
        <h4>Project Title</h4>
        <button class="callToAction">Find out More</button>
    </div>
    <div class="featurePostcard">
        <h4>Project Title</h4>
        <button class="callToAction">Find out More</button>

    </div>
    <div class="featurePostcard">
        <h4>Project Title</h4>
        <button class="callToAction">Find out More</button>

    </div>
    <div class="featurePostcard">
        <h4>Project Title</h4>
        <button class="callToAction">Find out More</button>
    </div>
</div>
<footer>
    <div class="socialFooter">
        <button></button>
        <button class="callToAction"></button>
        <button></button>
    </div>
    <div class="sponsors">
        <h4>Thank you to Our Sponsors</h4>
        <ul>
            <li></li>
        </ul>
    </div>
    <p class="note">Proudly Designed and Developed by <span class="tabeiBrand">Tabei</span> Design 2020</p>
    <small>&copy 2020 Haitian Hope Humanitarian Efforts Inc.</small>
</footer>
</body>
</html>
