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
                        <li><a href="#aboutme">About Me</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#workexp">Work Expierence</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="#contacts">Contacts</a></li>
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
    <section class="aboutme" id="aboutme">
        <div class="container flex-container ">
            <div class="section-left ">
                <div class="flex-container">
                    <h2> About Me</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, ectetuer nonurnmy nibh euismod tir cicdunt ut laoreet magna laoreet aliquam erat volutpat.</p>
                <table class="infomation">  <!--Neislyginta--> 
                    <tr>
                        <td><b>Name</b>: Al Rayhan</td>
                    </tr>
                    <tr>
                        <td><b>Age</b>: 23 Years</td>
                    </tr>
                    <tr>
                        <td><b>Email</b>: mail@deviserweb.com</td>
                    </tr>
                    <tr>
                        <td><b>Web</b>: Deviserweb.com</td>
                    </tr>
                    <tr>
                        <td><b>Address</b>: 24, Golden Street, New </td>
                    </tr>
                </table>
            </div>
            <div class="section-right column">
                <div class="abselfy flex-container">
                    <img src="images/baikerisDevas-min.jpg" alt="Al Rayhan">
                </div>
            </div>
        </div>
    </section>
    <hr> 

    <section class="workexp" id="workexp">
        <div class="container">
            <h2>Work Experience</h2>
           <div class="flex-container mobile-row">
                <div class="row justend">
                    <div>
                        <div class="bubble bubbl1 bubble-left row mobile-row">
                            <h3>CEO & Founder</h3><div class="where">@DeviserWeb</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                    <div>
                        <div class="bubble bubbl2 bubble-left row mobile-row">
                            <h3>Marketing Manas</h3><div class="where">@StarLab</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                </div>
                <div class="sticker hide-mobile">
                    <img src="images/chatline.png" alt="Seperator">
                </div>
                <div class="row ">
                    <div>
                        <div class="bubble bubbl3 bubble-right row mobile-row">
                            <h3>UI/UX Designer</h3><div class="where">@Academy</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                    <div>
                        <div class="bubble bubbl4 bubble-right row mobile-row">
                            <h3>Creative Director</h3><div class="where">@Academy</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    
    <section class="education" id="education">
        <div class="container">
            <h2>Education</h2>
            <div class="flex-container mobile-row">
                <div class="row justend">
                    <div>
                        <div class="bubble bubbl1 bubble-left row mobile-row">
                            <h3>Art & Multimedia</h3><div class="where">@Oxford University</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et   dolorea</p>
                        </div>
                    </div>
                    <div>
                        <div class="bubble bubbl2 bubble-left row mobile-row">
                            <h3>Post Graduation</h3><div class="where">@Lusofona College</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                </div>
                <div class="sticker hide-mobile">
                    <img src="images/chatline.png" alt="Seperator">
                </div>
                <div class="row">
                    <div>
                        <div class="bubble bubbl3 bubble-right row mobile-row">
                            <h3>High Schoolas</h3><div class="where">@AIUBSss</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                    <div>
                        <div class="bubble bubbl4 bubble-right row mobile-row">
                            <h3>Bachelor Degree</h3><div class="where">@Leading University</div>
                            <div class="moretxt">JAN 2013-     DEC 2014</div>
                            <p> Lorem ipsum dolor sit amet, consectetur et  incididunt ut labore et dolorea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    
    <section class="myskills" id="skills">
        <div class="container">
            <h2>My Skills</h2>
            <div class="flex-container">
                <div class="column">
                    <h3>User Experience</h3>
                    <div id="progressBar" ><div></div></div>
                    <h3>User Interface</h3>
                    <div id="progressBar1" ><div></div></div>
                    <h3>Web Design</h3>
                    <div id="progressBar2" ><div></div></div>
                </div>
                <div class="column">
                    <h3>User Experience</h3>
                    <div id="progressBar3" ><div></div></div>
                    <h3>User Interface</h3>
                    <div id="progressBar4" ><div></div></div>
                    <h3>Web Design</h3>
                    <div id="progressBar5" ><div></div></div>
                </div>
            </div>
        </div>
    </section>
    
<?php
    include_once 'web/contact.php';
    include_once 'web/footer.php';
?>

<script src="jS/jquery.min.js"></script>
<script src="jS/custom.js"></script>
</body>
</html>


             
                          