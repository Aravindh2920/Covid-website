<html>
<?php
    session_start();   
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoWIN</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet " integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC " crossorigin="anonymous ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <style>
        .w3-button {
            width: 150px;
        }
    </style>
</head>
<section class="top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse justify-content" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="home.php">Home</a>
                        <?php if(isset($_SESSION['username'])):?>
                        <a class="nav-link" href="search.php">Vaccination centers</a>
                        <?php else:?>
                        <a class="nav-link" href="login.php">Vaccination centers</a>
                        <?php endif;?>
                        <?php if(isset($_SESSION['username'])):?>
                        <a class="nav-link" href="booking.php">Book Your slots</a>
                        <?php else:?>
                        <a class="nav-link" href="login.php">Book Your Slots</a>
                        <?php endif;?>
                        <?php if(!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Login</a>
                        <?php else : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['username']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-content ">
            <h1>With CoWIN, Book your slots easily</h1><br>
            <div class="bt-sec ">
                <?php if(isset($_SESSION['username'])):?>
                <a href="booking.php" target="_blank "><button class="bt bg-transparent">Click To Book your Slots</button></a>
                <?php else:?>
                <a href="register.php" target="_blank "><button class="bt bg-transparent">Click To Book your Slots</button></a>
                <?php endif; ?>
            </div>
        </div>
</section>
<a href="" id="what"></a>
    <section class="what ">
        <div class="container text-center what ">
            <h1 class="title ">WHAT IS CoWIN?</h1>
            <hr>
            <div class="row ">
                <div class="col zr ">
                    <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/buy-cryptocurrencies-2848617-2369255.png ">
                    <p>For several years now under its universal immunisation programme, India has been using a vaccine intelligence system called eVIN (electronic vaccine intelligence network), 
                        which provides real-time feedback of vaccine stocks, power outages, temperature fluctuations etc. 
                        CoWIN is essentially an extension of eVIN. It is a cloud-based IT solution for planning, implementation, monitoring, and evaluation of Covid-19 vaccination in India.</p>
                </div>
            </div>
        </div>
    </section>
    <a href=" " id="why"></a>
    <section class="why ">
        <div class="container why ">
            <h1 class="title text-center ">WHY CoWIN?</h1>
            <hr>
            <div class="row ">
                <div class="dis col">
                    <ul>
                        <li>User-friendly.</li>
                        <li>Easy to book a vaccination slot.</li>
                        <li>Cash free.</li>
                        <li>Get details of any registered vaccination centres.</li>
                        <li>Can use anytime and anywhere</li>
                    </ul>
                </div>
                <div class="dis col">
                    <img src="https://productimize.com/wp-content/uploads/2018/12/Productimize-UI.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <br>
        <div class="container goal ">
            <h1 class="title text-center ">OUR GOAL</h1>
            <hr class="hr1 ">
            <div class="row ">
                <div class="col zr">
                    
                    <p>Since its inception in January 2021, CoWIN has helped 90 percent of India’s population get vaccinated with at least one dose, as of December 2021. The platform’s widespread utility can be attributed to several key factors, 
                            including the adaptation of existing technology and architecture for quick integration and scale; proactive and collaborative decision making by the government and its partners; 
                            modular designs that can be quickly modified to meet emerging needs in a rapidly changing pandemic context; and India’s ongoing commitment to expanding and improving its digital health infrastructure in general.
                    </p><br>
                </div>
                <div class="col ">
                    <img src="https://png.pngtree.com/png-vector/20200319/ourmid/pngtree-target-business-web-banner-concept-design-people-holding-an-arrow-aimed-png-image_2158057.jpg " width="400px ">
                </div>
            </div>
        </div>
    </section>
</html>
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>