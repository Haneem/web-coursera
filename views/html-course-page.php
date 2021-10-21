<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/course-page-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../courses.json"></script>
    <script src="../courses_script.js"></script>
    <title>Web Coursera</title>
</head>
<body>
    <!---------------- Navigation Bar --------------->
    <header>
        <h1 class="logo"><a href="index.html">WebCoursera</a></h1>
      <ul class="main-nav">
        <li><a href="index.html">Home</a></li>
          <li><a href="login.html">Sign out</a></li>
      </ul>
        
    </header>
    <!----------------  Web Coursera Intro  --------------->
    <section id="banner">
        <div class="banner1">
            <div class="slider">
                <img src="../assets/wp2564226-orange-background.png" id="slideImg">
            </div>
            <div class="overlay">
                <div class="content">
                    <p class="promo-title">HTML</p>
                    <p>HTML is the standard markup language for Web pages.</p>
                    <p>With HTML you can create your own Website.</p>
                    <!-----
                    <a href="https://www.youtube.com/watch?v=F-flvgL3huk"><img src="images/play-button-overlay-png-transparent.png" class="play-btn">Watch Videos</a>
                    --->
                </div>
            </div>
        </div>
    </section>

    <!-- Reference Section -->
    <section id="reference">
        <div class="th">
            <h2>References</h2>
        </div>
        <table>
            <tr>
                <td><i class="fas fa-file-alt"></i><a class="links" href="https://www.w3schools.com/html/">W3 School</a></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><i class="fas fa-file-alt"></i><a class="links" href="https://developer.mozilla.org/en-US/docs/Web/HTML">MDN Web Docs</a></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><i class="fas fa-file-alt"></i><a class="links" href="https://html.com">HTML For Beginners The Easy Way</a></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            
        </table>
    </section>

    <!-- Videos Section -->
    
    <section id="lectures">
        <div class="th">
            <h2>Recorded Lectures</h2>
            <h3>Short Videos (Less than 30 min duration)</h3>
        </div>
        <table>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/88PXJAA6szs">HTML Tutorial For Beginners | Designing A Web Page Using HTML</a></td>
                <td>20 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/bWPMSSsVdPk">Learn HTML in 12 Minutes</a></td>
                <td>12 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            
        </table>
        <div class="th">
            <h3>Medium Videos (30 - 120 min duration)</h3>
        </div>
        <table>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/qz0aGYrrlhU">HTML Tutorial for Beginners: HTML Crash Course [2021]
                </a></td>
                <td>70 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/PlxWf493en4">HTML Tutorial - How to Make a Super Simple Website</a></td>
                <td>60 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/UB1O30fR-EE">HTML Crash Course For Absolute Beginners</a></td>
                <td>60 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            
        </table>
        <div class="th">
            <h3>Long Videos (Greater than 120 min duration)</h3>
        </div>
        <table>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/QXPWs00RD3A">HTML Tutorial in Hindi | Complete HTML Course For Beginners to Advanced
                </a></td>
                <td>70 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><i class="fas fa-film"></i><a class="links" href="https://youtu.be/pQN-pnXPaVg">HTML Full Course - Build a Website Tutorial</a></td>
                <td>125 min</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            
        </table>
    </section>

    <!----------------- Footer Section -------------------->

    <footer>
        <div class = "footer-box">
            <div class="footer-links">
                <div>
                    <a href="termsAndConditions.html">Terms & Conditions</a>
                </div>
                <div>
                    <a href = "privacyPolicy.html">Privacy Policy</a>
                </div>
                <div>
                    <a href = "help-and-support.html">Help and Support</a>
                </div>
                <div>
                    <a href = "aboutUs.html">About Us</a>
                </div>
                <div>
                    <a href = "mailto:info@webcoursera.com">Contact Us</a>
                </div>
            </div>
            <div>
                <p>&copy; 2021 Web Coursera All rights reserved </p>
            </div>
            
        </div>
    </footer>
    
</body>
</html>