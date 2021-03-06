<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"> 
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> 
    <script src="javascript/scroll.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Michael Schwartz</title>
</head>
<body>
    <div class="bg">
        <section class="jumbotron">
            <header class="headerContainer">  
                <div class="logo_wrapper">
                    <a class="logo" href="index.php"><img src="pictures/html-5.svg" alt="html_logo" width="60" height="60"></a> 
                </div>
                    <ul class="navigation_ul">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Maps</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
            </header>
            <div class="info">
                <h1 class="slogan_h1">Web Development / PHP & MySQL</h1> <br>
                <button class ="more_info">Show me more</button>
            </div>
        </section>
    </div>
    
    <section class="services">
        <div class="service-title-container">
            <h2 class="services-title">Services</h2>
        </div>
            <div class="development-container">
                <div class="mobile-container">
                <img class="mobile-image" src="pictures/mobile-dev.png" alt="">
                    <h3 class="mobile">Mobile Optimization</h3>
                        <p class="mobile-summary">There is no need to drop features on a smaller screen. Good content needs to be accessible on the go <br> Mobile Optimization is the key.  </p>
                </div>
                <div class="desktop-container">
                    <img class="desktop-image" src="pictures/web-dev.png" alt="">
                    <h3 class="desktop">Web Development</h3>
                        <p class="desktop-summary">We develop beautifully crafted sites that are more than just plain text. HTML, CSS Javascript, PHP and other technologies come together to create a site that is truly yours.</p>
                </div>

                <div class="ui-container">
                    <img class="ui-image" src="pictures/product-design.png" alt="">
                    <h3 class="ui">Product Design</h3>
                        <p class="ui-summary">The most functional and best engineered website can be boring to look at and unapealing. A pleasant user experience is just as important to us as a functioning website.</p>
                </div>
            </div>
            <button class ="services-button">See More Services</button>
    </section>

    <section class="technologies">
    <div class="technologies-title-container">
            <h2 class="technologies-title">Main Technologies</h2>
        </div>
        <div class="technologies-container">
            <div class="html-container">
                <img class="html-image" src="pictures/html-5.svg" alt="html-img">
            <h3 class="html">Html</h3>
                <p class="html-summary"></p>
            </div>

            <div class="css-container">
                <img class="css-image" src="pictures/css-3.svg" alt="css-img">
            <h3 class="css">Css</h3>
                <p class="css-summary"></p>
            </div>

            <div class="javascript-container">
                <img class="javascript-image" src="pictures/javascript.png" alt="javascript-img">
            <h3 class="javascript">Javascript</h3>
                <p class="javascript-summary"></p>
            </div>

            <div class="php-container">
                <img class="php-image" src="pictures/php-7.svg" alt="php-img">
            <h3 class="php">PHP</h3>
                <p class="php-summary"></p>
            </div>
        </div>
    </section>
    <!-- a tag für php-->
    <a name="contact"></a>
    <section class="contact">
        <div class="contact-title-container">
            <h2 class="contact-title">Please leave a message</h2>
            <h3>Become our client and get the best services and emotions with us</h3>
        </div>

        <div class="contact-container">
            <div class="image-wrapper">
                <img src="pictures/profile.jpg" width="200" height="200" alt="" class="profile-pic">
                <p class="image-name"><strong>Nathalie Nürnberger</strong></p>
                <p class="image-description">Engagement manager</p>
            </div>
            <div class="form">
            <div class="form-wrapper">
                <form action="uploads.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="input-container">
                            <input type="text" name="name" class="form-control form-control-name" placeholder="Name">
                            <input type="email" name="email" class="form-control form-control-email" placeholder="Email">
                        </div>
                            <textarea name="message" class="form-control" id="message" cols="70" rows="9"></textarea>
                            <input type="file" name="file" id="file-input">
                            <button type="submit" class="file btn btn-lg btn-primary" name="upload">Submit</button>
                    </div>  
                </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="contact-title-container">
                <div class="contact-title">Contact us</div>
            </div>
            <div class="contact-details-container">
                <div class="visit"><h4>Location</h4>
                    <p>Dornbacherstraße 30, 1170 Wien</p>
                </div>
                <div class="email"><h4>Email</h4>
                    <p>random.email@adress.com</p>
                </div>
                <div class="phone"><h4>Phone</h4>
                    +43 123 78 49 50
                </div>
            </div>
            <div id="map"></div>
            <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 48.228427, lng: 16.299481},
                    zoom: 15
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgy0750Kxqz-x9G3QAgRCPZeUFvYNNJGM&callback=initMap" async defer></script>
            <div class="copyright">All rights reserved CompanyName 2018</div>
            <img src="pictures/html-5.svg" width="30" height="30" alt="logo-footer" class="logo-footer">
        </div>
    </footer>
</body>
</html>