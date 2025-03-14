<?php
session_start();
include("connect.php");
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
    while($row=mysqli_fetch_array($query)){
        echo $row['firstname'].' '.$row['lastname'];
    }
   }
   ?>

?>


<!DOCTYPE html>
<html lang="en">
<head>
   

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hands</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

<div class="fixed-top">
   

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#home">Helping Hands Foundation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#donation">Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mission-id">Missions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a href="index.php" style="background-color:antiquewhite;color:red;border-radius:10%;margin:40x;width:60px;display:flex;">Logout</a>
                    </li>
                    </div>
        </nav>

</div>

</header>

<div class="cont-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>Contact No: <a href="tel: +917709322988">+91 7709322988</a></p>
            </div>
            <div class="col-lg-6">
                <div class="social">
                    <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                    <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                    <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="img/icons/gmail.png" alt="gmail"></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<section class="home-sec" id="home">
<div class="container">
    <div class="home-content">
        <div class="row">
            <div class="col-lg-6 align-item-center">
                <div class="home-info">
                    <h1>Alone we can do little, together we can do so much</h1>
                    <h2>We <span>Helping Hands</span> manage wastage and raise funds for needy peoples</h2>
                    <p>We deliver love and trust among our donars and needy people.</p>
                    <div class="buttons">
                        <a href="#contact" class="btn1">Donate now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <div class="img-sec">
                    <img src="img\img-1.png" alt="home-image">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="don-sec" id="donation">
<div class="container">
    <div class="heading">
        <h2>We Manage Wastage or Donation like..</h2>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="don-box">
                <img src="img/don/clothing.png" alt="img">
                <h3>Clothes</h3>
                <p>Donate the clothes you don't use much.</p>
                <a href="#contact" class="btn1">Donate Now</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="don-box">
                <img src="img/don/sneakers.png" alt="img">
                <h3>Footware</h3>
                <p>Let us protect the feet of poor poeple</p>
                <a href="#contact" class="btn1">Donate Now</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="don-box">
                <img src="img/don/salary.png" alt="img">
                <h3>Fund</h3>
                <p>10% of your income can make someones life change</p>
                <a href="#contact" class="btn1">Donate Now</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="don-box">
                <img src="img/don/gadgets.png" alt="img">
                <h3>Gadgets</h3>
                <p>Get us old Gadgets and you get new blessings</p>
                <a href="#contact" class="btn1">Donate Now</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="don-box">
                <img src="img/don/book.png" alt="img">
                <h3>Stationary</h3>
                <p>You got a lot of thinngs!!?doante some here</p>
                <a href="#contact" class="btn1">Donate Now</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="don-box">
                <img src="img/don/shopping-bag.png" alt="img">
                <h3>Food</h3>
                <p>Good people donate food!!You can try</p>
                <a href="#contact" class="btn1">Donate Now</a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="mission" id="mission-id">
<div class="container">
    <div class="heading">
        <h2>Our Missions</h2>
        <p>We have delivered <span>Wastage</span> or <span>Donations</span> to needy Peoples</p>
    </div>
    <div class="gallery-sec">
        <div class="container">
            <div class="image-container">
                <div class="image"><img src="img/miss/1.jpg" alt="img"></div>
                <div class="image"><img src="img/miss/2.jpg" alt="img"></div>
                <div class="image"><img src="img/miss/3.jpg" alt="img"></div>
                <div class="image"><img src="img/miss/4.jpg" alt="img"></div>
                <div class="image"><img src="img/miss/5.jpg" alt="img"></div>
                <div class="image"><img src="img/miss/6.jpg" alt="img"></div>
            </div>
        </div>
        <div class="pop-image">
            <span>&times;</span>
            <img src="img/gallery/1.jpg" alt="gallery-img">
        </div>
        </di v>
    </div>
</section>

<section class="about-sec" id="about">
<div class="container">
    <div class="row">
        <div class="col-lg-4 about-img">
            <img src="img/img-2.jpeg" alt="about">
        </div>
        <div class="col-lg-8 order-first order-lg-last">
            <div class="heading">
                <h2>What We Do & Why We Do</h2>
            </div>
            <p>At Helping hands, our foundation is built on a deep commitment to giving back. We are dedicated 
                to making a positive impact through charitable donations and community-focused initiatives. Our mission 
                is to support those in need by contributing to causes that promote education, health, poverty alleviation, and overall well-being. </p>
            <p>Through various fundraising campaigns and partnerships, we aim to create a ripple effect of kindness, helping to empower individuals and 
                uplift communities. We believe that every small act of generosity can spark larger change, and our team works tirelessly to ensure that 
                our donations make a real difference.Together,we can bring hope and opportunity to those who need it most. Join us in our mission to create 
                a better tomorrow.</p>
        </div>
    </div>
</div>
</section>
<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="heading">
            <h2>Connect With Us</h2>
            <p>Fill this form, our team will collect your <span>Donation</span> or <span>Wastage</span> from your place.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <form class="contact-form" id="contactForm" method="POST" action="process_form.php" onsubmit="return validatePhone()">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Mobile No."
                                            pattern="^[0-9]{10}$" maxlength="10" required>
                                        <small id="phoneError" style="color: red; display: none;">Please enter a valid 10-digit phone number.</small>
                                    </div>
                                    <div class="form-group">
                                        <select name="donation" id="donation" required>
                                            <option value="">Choose Donation or Wastage</option>
                                            <option value="food">Food</option>
                                            <option value="clothes">Clothes</option>
                                            <option value="footware">Footwear</option>
                                            <option value="books">Books</option>
                                            <option value="fund">Fund</option>
                                            <option value="gadget">Ele. Gadgets</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="1" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-5">Submit Details</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function validatePhone() {
        var phoneInput = document.getElementById("mobile").value;
        var phoneError = document.getElementById("phoneError");

        // Check if phone number is exactly 10 digits
        if (phoneInput.length !== 10 || !/^[0-9]{10}$/.test(phoneInput)) {
            phoneError.style.display = "inline";  // Show error message
            return false; // Prevent form submission
        }

        phoneError.style.display = "none"; // Hide error message
        return true; // Allow form submission
    }
</script>

</section>




<footer>
<div class="container">
    <div class="row">

        <div class="col-lg-4">
            <div class="col-one">
                <h4>Code Convent foundation</h4>
                <p>Address : 4,arihant college under bank of baroda,camp-411 067(landmark-opposite suzuki shworoom)</p>
                <p>Contact No : <a href="tel: +91 7709322988">+91 7709322988</a></p>
                <p>Email : <a href="mailto:helping@hands.com">helping@hands.com</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="col-two">
                <h4>Important Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#donation">Donations</a></li>
                    <li><a href="#mission-id">Missions</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#contact">Contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="col-one">
                <h4>Social Media</h4>
                <div class="social">
                    <a href="#"><img src="img/icons/facebook.png"alt="facebook"></a>
                    <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                    <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                    <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                </div>
                <p>Copyright &copy; 2025 | All Right Reserved</p>
            </div>
        </div>
    </div>
</div>

</footer>

<script src="js/script.js"></script>

    
</body>
</html>