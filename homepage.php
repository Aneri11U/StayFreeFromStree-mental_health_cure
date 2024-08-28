<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="logo.jpg" class="d-block w-90" alt="...">
            </div>
            <div class="carousel-item">
            <img src="logo2.jpg" class="d-block w-80" alt="...">
            </div>
            <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html> -->


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stay Free</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* Custom CSS to center the carousel */
        .carousel-container {
            position: relative;
            top: 50px; /* Adjust the top spacing to align it with the navbar height */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust the height as needed */
        }

        /* Make the carousel size parallel to the navbar */
        .carousel {
            width: 100%;
            max-width: 1080px; /* Adjust the max-width to fit your design */
        }

        /* footer {
            position: relative;
            top: 150px;
            background-color: #1c2331;
            color: #fff;
            padding: 20px;
            text-align: center;
        } */

    .footer{
        background: #dfccf1;
        color: #9b59b6;
        font-size: 16px;
        padding: -10px 0 20px;
        position: relative;
        top: 150px;
    }
    .footer p{
        color: #8a8a8a;
    }
    .footer h3{
        color: #8a8a8a;
        margin-bottom: 20px;
    }
    .footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
        min-width: 250px;
        margin-bottom: 10px;
    }
    .footer-col-1{
        flex-basis: 30%;
    }
    .footer-col-2{
        flex: 1;
        text-align: center;
    }
    .footer-col-2 img{
        width: 100px;
        margin-bottom: 20px;
    }
    .footer-col-3, .footer-col-4{
        flex-basis: 12%;
        text-align: center;
    }

    ul{
        list-style-type: none;
    }
    .app-logo{
        margin-top: 20px;
    }
    .app-logo img{
        width: 140px;
    }
    .footer hr{
        border: none;
        background: #dfccf1;
        height: 1px;
        margin: 20px 0;
    }
    .copyright{
        text-align: center;
        font-size: 
    }

    .menu-icon{
        width: 28px;
        margin-left: 20px;
        display: none;
    }

</style>
</head>
<body>
    <!-- Navbar -->
    <?php require 'partials/_nav.php' ?>

    <div class="carousel-container">
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="stayfree.png" class="d-block w-100" style="width: 150px; height:170px object-fit: contain;" alt="...">
        </div>
            <div class="carousel-item">
                <a href="#">    <img src="freeport.png"class="d-block w-100" alt="..." usemap="#freeporthotspots"></a>
                <map name="freeporthotspots">
                <area href="redirect.php?id=1" coords="248,505,430,582" shape="rect">
                </map>
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <p>Contact: +123 454-889-543</p>
                    <p>Email: stay_free@gmail.com</p><br>
                    <h3>Download Our App</h3>
                    <!-- change -->
                    <div class="app-logo">
                        <a href="http://play.google.com" target="_blank"><img src="play-store.png" alt="Google Play Store"></a>
                        <a href="http://www.apple.com" target="_blank"><img src="app-store.png" alt="Apple App Store"></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="logo.jpg">
                    <!-- change -->
                    <p>Stay free, break the chains, and set your soul free. </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4" >
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.youtube.com/" target="_blank">YouTube</a></li>
                    </ul>
            </div>
        </div>
        <hr>
        <!-- change -->
        <p class="copyright">&copy; 2023 Stay Free. All rights reserved.</p>
    </div>
    </div>


</body>
</html>
