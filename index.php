<!DOCTYPE html>
<html>
<head>
<title>Shannon's IT162 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<main class="wrapper">

<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Shannon Massaquoi-Atkins SCC IT162 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
<h2 class="pageID">Welcome</h2>

<img src="pumpkinpatch.jpeg" alt="Family at Pumpkin Patch" class="floatright" vertical-align="text-top">
<img src="MommyandAJ.png" alt="Mother and Son" class="floatright" vertical-align="text-top">
</section>
<p>My name is Shannon Massaquoi-Atkins. I am 27 and fairly new to coding. I just started my journey in August, by attending a few introductory coding workshops. I understand the concept of the coding languages, but have minimal hands on practice. That is why I am so happy about getting into this class! My previous job was in Worker's Compensation. I moved up rather quickly in the company, but never felt like it was a forever job for me. I moved to Washington and decided it was time to start working towards my goals, or at least figuring it out. I always enjoyed technology, but I did not want to have to do another 4 year degree. Finding this program was just perfect timing. At the end of the year my husband and I talked about our goals and mine was to go back to school and find my passion. Enrolling in this program was a goal of mine! My career plans are in more front end web development. I currently am working part-time as a web designer and I enjoy the creative aspect of the designing, but I want to dig more into developing and being able to design from start to finish.</p>


<aside>
<h3>Right Column</h3>
    <img src="weddinglaughing.png" alt="Laughing at Wedding" class="floatright" vertical-align="text-top">
    <p> Here is a picture from my wedding</p>
    </aside>
    <footer>
        <p><small>&copy; 2022 - <?=date(' Y' )?> by 
        <a href=""contactme.php" target="_blank">Shannon Massaquoi-Atkins</a> All Rights Reserved ~ 
        <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href ="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
    <script>
        //https://tinyurl.com/dynamic-html-checker
	        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools

        function myFunction() {
            var x = document.getElemenById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
        
            }
    </script>
    </body>
    </html>