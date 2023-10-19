<?php
    $pageTtle='Contact';
    include_once('../include/header.php');
    include_once('navbar.php');
    include_once('../config/session_validation.php');
?>
<link rel="stylesheet" href="../css/style.css">
<!--  Contact FORM  -->
<div class="container py-5">
    <div class="row py-5 g-3">
        <!-- contact form -->
        <div class="col-md-6 first_col bg-light">
            <h1 class="text-center mt-4">Contact Us</h1>
            <form action="#" class="form p-4 mt-2">
                <div class="form-group mb-3">
                    <label for="name" class="form-label fw-bold"><i class="fa-solid fa-user"></i> Name</label>
                    <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-bold"><i class="fa-solid fa-envelope"></i> Email</label>
                    <input type="email" name="email" placeholder="Enter your email" id="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="message" class="form-label fw-bold"><i class="fa-solid fa-message"></i> Message</label>
                    <textarea type="text" name="message" placeholder="Enter your message" id="message" class="form-control" rows="5"></textarea>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-dark">Send Now</button>
                </div>
            </form>
        </div>

        <div class="col-md-6 sec_col">
            <img src="https://images.pexels.com/photos/1006293/pexels-photo-1006293.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img-contact" class="img-fluid">
        </div>
    </div>

    <div class="row-last mb-5 bg-dark">
        <div class="row row-cols-1 row-cols-md-3 p-3 text-white">
            <div class="col">
                <h4><i class="fa-solid fa-phone"></i> Call Us</h4>
                <p>+55 985679586758</p>
            </div>
            <div class="col">
                <h4><i class="fa-solid fa-location-dot"></i> Location</h4>
                <p>Mex, col 453, av.center 8459, EdoMex</p>
            </div>
            <div class="col">
                <h4><i class="fa-solid fa-envelope"></i> Email</h4>
                <p>contact@contact.com.mx</p>
            </div>
        </div>
    </div>

</div>
<?php  include_once('../include/footer.php');?>