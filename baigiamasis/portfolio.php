<?php
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baigiamasis darbas</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfoliostyle.css">
    <script src="https://kit.fontawesome.com/3bdb85ccfe.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="top-header">
        <div class="leftbaras hide-mobile hidefordesktop">
            <div class="portret">
                <a href="#"><img src="images/portretas_01.png" alt="Al Rayhan"> </a>
            </div>
            <p><span id="dots"></span><span id="more">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>
            <button class="mybtn "onclick="myFunction()" id="myBtn">More about me</button> 
        </div>
        <div class="container flex-container">
            <nav class="top-nav">
                <div class="menu hide-mobile">
                    <ul class="flex-container">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">About Me</a></li>
                        <li><a href="index.php">Education</a></li>
                        <li><a href="index.php">Work Expierence</a></li>
                        <li><a href="index.php">Skills</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="index.php">Contacts</a></li>
                    </ul>
                </div>
            </nav>
            <div class="menu-toggle hide-desktop">
                <a><i class="fa fa-angle-double-down menu-size"></i></a>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1>Lets Make Something Great</h1>
            <p>Im an UI designer that provides ourself on being strategic brand partners and awesome product providers</p>
            <a href="#contacts"><button class="hireme"> Hire Me!</button></a>
        </div>
    </section>
    <section class="porfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <ul class="tab_navigation flex-container mobile-row">
                <li>Branding</li>
                <li>Web Desing</li>
                <li>Animation</li>
                <li>UI/ UX</li>
            </ul>
            <div class="tab_container_area">
                <div class="tab_container">
                    <div class="flex-container">
                        <div class="column">
                            <div class="portpic portpic1">
                                <img src="images/marketing1.png" alt="Marketing" >
                                <h3 class="contformat">Marketing Partner</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                            </div>
                            <div class="portpic portpic2">
                                <img src="images/music3.png" alt="Web Design">
                                <h3 class="contformat">Website Design</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                            </div>
                            <div class="portpic portpic3">
                                <img src="images/marketingpartners5.png" alt="Music">
                                <h3 class="contformat">Music Player Design</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                            </div>
                        </div>
                        <div class="column">
                            <div class="portpic portpic4">
                                <img src="images/webdesign2.png" alt="Partners">
                                <h3 class="contformat">Marketing Partner</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                            </div>
                            <div class="portpic portpic5">
                                <img src="images/partners4.png" alt="Marketing Partners">
                                <h3 class="contformat">Marketing Partner</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                            </div>
                            <div class="portpic portpic6">
                                <img src="images/software6.png" alt="Software">
                                <h3 class="contformat">Software Develpment</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab_container">
                    <div class="portpic portpic6">
                        <img src="images/software6.png" width="100%" alt="Huge Software">
                        <h3 class="contformat">Software Develpment</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                    </div>
                </div>
                <div class="tab_container">
                    <div class="portpic portpic4">
                        <img src="images/partners4.png" width="100%" alt="Huge Partners">
                        <h3 class="contformat">Marketing Partner</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                    </div>
                </div>
                <div class="tab_container">
                    <div class="portpic portpic2">
                        <img src="images/webdesign2.png" width="100%" alt="Huge Web Design">
                        <h3 class="contformat">Website Design</h3><label>Branging UI/UX Article</label><a href="#"><p class="contformat1">View project ></p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    
<?php
    include_once 'web/contact.php';
    include_once 'web/footer.php';
?>
    
<script src="jS/jquery.min.js"></script>
<script src="jS/custom.js"></script>
</body>
</html>