<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahanis Trading - Contact Us</title>
    <link rel="icon" href="../imgs/favicon.png" sizes="32x32">
    <link rel="icon" href="../imgs/favicon.png" sizes="192x192">
    <link rel="apple-touch-icon" href="../imgs/favicon.png">
    <meta name="msapplication-TileImage" content="../imgs/favicon.png">
    <link rel="canonical" href="">
     <meta name="keywords" content="">
    <meta property="og:description" name="description"
        content=" At Bahanis Trading, we offer a comprehensive selection of hardware products that cater to all your construction and repair needs.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/headerfooter.css" rel="stylesheet" type="text/css">
    <link href="../css/product.css" rel="stylesheet" type="text/css">
    <link href="../css/contact.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" id="astra-google-fonts-css"
        href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C%2C500&#038;display=fallback&#038;ver=4.3.1"
        media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.1"
        media="all">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .message-success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
        .message-error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
          .error {
        color: red;
        font-size: 14px;
    }
    #resultMessage {
        margin-top: 15px;
        font-weight: bold;
        color: green;
    }
    </style>

</head>

<body>
    
      <div class="amg-floating-contact-wrap amg-orange">

        <div class="amg-floating-icon">
            <img src="../imgs/customer-service.png" class="cusicon w-100" alt="" title="" />
            <p class="float-text">Contact&nbsp;Us</p>

        </div>

        <div class="amg-floating-link amg-floating-email">
            <div class="emailsec" onclick="sendEmailDefault()">
                <div class="float-iconsec">
                    <img src="../imgs/envelope-solid.svg" class="flicon w-100" alt="" title="" />
                </div>
                <!--<div class="float-textsec">-->
                <!--    <p class="float-text-1">-->
                <!--        Email-->
                <!--    </p>-->
                <!--    <p class="float-text-2"> Send us your requirement on mail</p>-->
                <!--</div>-->
            </div>

            <div class="whatssec">
                <a class="links" href="https://api.whatsapp.com/send?phone=+96898081925&text=Welcome to Bahanis Trading Company LLC !  
How can we assist you?" target="_blank">
                    <div class="float-iconsec">
                        <img src="../imgs/whatsapp-brands.svg" class="flicon w-100" alt="" title="" />
                    </div>
                </a>
                <!--<div class="float-textsec">-->
                <!--    <p class="float-text-1">-->
                <!--        WhatsApp-->
                <!--    </p>-->
                <!--    <p class="float-text-2">Let's discuss over WhatsApp</p>-->
                <!--</div>-->
            </div>
            <div class="callsec">
                <a class="links" href="tel:+96824504938" target="_blank">
                    <div class="float-iconsec">
                        <img src="../imgs/phone-solid.svg" class="flicon  w-100" alt="" title="" />

                    </div>
                </a>
                <!--<div class="float-textsec">-->
                <!--    <p class="float-text-1">-->
                <!--        Direct Call-->
                <!--    </p>-->
                <!--    <p class="float-text-2">Let's connect directly now!</p>-->
                <!--</div>-->
            </div>
        </div>

    </div>
    <div class="main">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="../">
                        <img src="../imgs/logo.png" class="logo w-100" alt="BAHANIS" title="BAHANIS" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navsec mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about-us">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../product/">Product</a>
                            </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="../gallery/">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./">Contact Us</a>
                            </li>
                        </ul>
                        <!--<div class="d-flex">-->
                        <!--    <button class="btn btn-danger" onclick="cont()">CONTACT US</button>-->
                        <!--</div>-->
                    </div>
                </div>
            </nav>
        </header>




        <div class="maincontsec">

           
<div class="bannersec" >
                    
                    <style>
                        .bannersec {
    background-color: transparent !important;
    align-items: center;
    justify-content: center !important;
    display: flex
;
    padding: 0px 0px !important;
    border-radius: 0 !important;
    margin-bottom: 50px;
   
}
                    </style>
                    
                    <img src="../imgs/Contact.jpg" class="w-100 about-banner" alt="About Us" title="About Us"/>
                    <h1 class="bannertext " style="display:none">
                      Contact Us
                    </h1>
                </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5">
                    //  contactForm
                        <form id="" method="post" action="send_form.php">
                            <div class="form-item mb-4" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                                <input type="text" class="form-control" id="name" name="name" required>
                                <label for="name">Name</label>
                                <div class="error" id="nameError"></div>
                            </div>
                            <div class="form-item mb-4" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                                <input type="text" class="form-control" id="phno" name="phno" required>
                                <label for="phno" class="form-label">Phone Number</label>
                                <div class="error" id="phnoError"></div>
                            </div>
                            <div class="form-item  mb-4" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label for="email" class="form-label">Email address</label>
                                <div class="error" id="emailError"></div>
                            </div>
                            <div class="form-item mb-4" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                                <input type="text" class="form-control" id="loc" name="loc" required>
                                <label for="loc" class="form-label">Location</label>
                                <div class="error" id="locError"></div>
                            </div>
                            <div class="form-item mb-4" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                                <textarea class="form-control" id="enquiry" name="enquiry" required></textarea>
                                <label for="enquiry" class="form-label">Enquiry</label>
                                <div class="error" id="enquiryError"></div>
                            </div>
                            <div class="btnsec1" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                        <div id="resultMessage"></div>
                    <?php if ($status === 'success'): ?>
                        <div class="message-success">Mail Sent.</div>
                    <?php elseif ($status === 'error'): ?>
                        <div class="message-error">There was a problem sending your message. Please try again.</div>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5" data-aos="zoom-in" data-aos-delay="50" data-aos-offset="0"
                                data-aos-duration="1000" data-aos-easing="linear" data-aos-once="false">
                        <!--<iframe-->
                        <!--    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1453281288937!2d58.5487413761759!3d23.599120394565695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91f9d709058865%3A0x65d41e62634a915a!2sAl%20Hosni%20Group%20International!5e0!3m2!1sen!2sin!4v1739608738970!5m2!1sen!2sin"-->
                        <!--    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"-->
                        <!--    referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                            
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3656.630284388714!2d58.34720997533075!3d23.5817183787859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDM0JzU0LjIiTiA1OMKwMjAnNTkuMiJF!5e0!3m2!1sen!2sin!4v1741843214012!5m2!1sen!2sin" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

            </div>

        </div>

        <footer>
          <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <img src="../imgs/logo.png" class="footlogo w-100" alt="Bahanis" title="Bahanis" />
                         <p class="foottext">
                            <strong>Bahanis Trading Company LLC</strong>, your one-stop solutions for premium building materials and
                            sanitary
                            ware, tailored to your project requirements. Dedicated to providing exceptional service and
                            support for all your construction requirements.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-4 co-sm-6 col-6" id="link">
                        <dl>
                            <dt class="mb-3 link">Quick links</dt>
                            <dd><a href="../">Home</a></dd>
                            <dd><a href="../about-us/">About us</a></dd>
                            <dd><a href="../product/">Products</a></dd>
                            <dd><a href="../gallery/">Gallery</a></dd>
                            <dd><a href="../contact-us/">Contact us</a></dd>
                        </dl>
                    </div>

                    <div class="col-lg-5 col-md-12 co-sm-12" id="contactsec">
                        <dl>
                            <dt class="mb-3">Contact</dt>
                            <dd class="flexsec">
                                <div class="iconbg">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="textsec1" id="loctext">
                                    <p>
                                        <b>Corporate Office: </b> Al Hosni Group International, Building No 599, Way No
                                        4010, MBD
                                        East - Ruwi,
                                        Sultanate of Oman <br>
                                        <b>Sales Office & Store: </b> Ghala Industrial Area, Sultanate of Oman
                                        <br>
                                        Post Box 371, Postal Code 114, Muttrah, Sultanate of Oman
                                    </p>
                                </div>

                            </dd>

                            <dd class="flexsec">
                                <div class="iconbg">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="textsec1" id="numtext">
                                    <p> <b>Head Office: </b> Telephone +968 24 791 680 <br>
                                        Fax +968 24 791 685 <br>
                                        <b> Store Office: </b> Telephone +968 24508225<br>
                                        Fax +968 24 504 953
                                    </p>
                                </div>
                            </dd>
                            <dd class="flexsec">
                                <div class="iconbg">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="textsec1" id="emailtext">
                                    <p> bahanistrading@alhosnigroup.com</p>
                                </div>

                            </dd>
                          
                        </dl>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="rights">
                            @2024 Bahanis Trading - All Rights Reserved
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 privsec">
                        <div class="flexsec">
                            <p class="rights">
                                <a href="../Privacy-Policy/" target="_blank">
                                    Privacy Policy
                                </a>

                            </p>
                            <p class="rights">
                                <a href="../Terms-and-Conditions/" target="_blank">
                                    Terms & Conditions
                                </a>

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function cont() {
            document.querySelector(".popupcont").style.cssText = "display:block;";
        }

        function closeFn() {
            document.querySelector(".popupcont").style.cssText = "display:none;";

        }
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(function () {
            // Floating Contact Widget Trigger
            $(".amg-floating-icon").on("mouseenter", function () {
                $(this).closest(".amg-floating-contact-wrap").addClass("hover")
            });
            $(".amg-floating-contact-wrap").on("mouseleave", function () {
                $(this).removeClass("hover");
            });
        })



        function sendEmailDefault() {
            var email = "ronald@alhosnigroup.com, bahanistrading@alhosnigroup.com";
            var subject = "Test Email";
            var msgBody = "Thank you for contacting us, we will get back to you in 24 hours!";
            window.open(`mailto:${email}?subject=${subject}&body=${msgBody}`);
        }
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    const validateField = (id, validator) => {
        const field = document.getElementById(id);
        const errorDiv = document.getElementById(id + "Error");
        field.addEventListener("blur", () => {
            const value = field.value.trim();
            const error = validator(value);
            if (error) {
                errorDiv.textContent = error;
            } else {
                errorDiv.textContent = "";
            }
        });
    };

    validateField("name", value => value === "" ? "Name is required" : "");
    validateField("phno", value => {
        if (value === "") return "Phone number is required";
        if (!/^[0-9]{7,15}$/.test(value)) return "Invalid phone number";
        return "";
    });
    validateField("email", value => {
        if (value === "") return "Email is required";
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return !emailPattern.test(value) ? "Invalid email" : "";
    });
    validateField("loc", value => value === "" ? "Location is required" : "");
    validateField("enquiry", value => value === "" ? "Enquiry is required" : "");

    // Optional: Prevent form submit if errors exist
    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Stop form from submitting

        let hasError = false;
        const fields = ["name", "phno", "email", "loc", "enquiry"];
        fields.forEach(id => {
            const field = document.getElementById(id);
            field.dispatchEvent(new Event("blur")); // Trigger validation
            if (document.getElementById(id + "Error").textContent !== "") {
                hasError = true;
            }
        });

        if (!hasError) {
            // Optionally submit via AJAX
            document.getElementById("resultMessage").textContent = "";
        }
    });
});
</script>

    <script>
// function sendEmailcontact() {
//     const formData = new FormData(document.getElementById('contactForm'));

//     fetch('send_mail.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.text())
//     .then(result => {
//         alert(result); // Show success message from PHP
//     })
//     .catch(error => {
//         alert('Error sending email.');
//         console.error(error);
//     });
// }
</script>

</body>

</html>