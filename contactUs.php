<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContactUs | AUCT</title>

    <link rel="stylesheet" type="text/css" href="contactus/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactus/css/util.css">
    <link rel="stylesheet" type="text/css" href="contactus/css/main.css">
    <?php include "headerfile.php"; ?>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcr6hcaAAAAAPO5uUzPWwD7KBO3JfqfdnzWqhVh"></script>

</head>
<body>
<?php include "navbar.php"; ?>
<div class="text-center" style="padding-top: 40px">
    <h2 class="font-weight-bold" style="font-size: 35px">Contact Us</h2>
</div>
<div class="container-fluid mb-4">
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="bg-white rounded box-shadow1 p-4">
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i>
                    </b>Prof.Praneet Kaur (President)</p>
                <p><b><i class=" fas fa-at text-warning" aria-hidden="true"></i>
                    </b>auct.teacher@gmail.com</p>
                <p><b><i class=" text-success fas fa-phone-square-alt"></i>
                        93168 19379</b></p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i>
                    </b>Prof.Prabal Kumar Joshi (Vice President)</p>
                <p><b><i class=" text-success fas fa-phone-square-alt"></i>
                        9814058851</b></p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b>Prof. Harjeet Singh
                    (Gen.Secretary)</p>

                <p><b><i class=" text-success fas fa-phone-square-alt"></i> 98766 71690</b></p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b>Dr. Gopal Krishan
                    (Joint Secretary)</p>

                <p><b><i class=" text-success fas fa-phone-square-alt"></i> 97799 36126</b></p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b>Prof. Parveen Ansari
                    (Finance Secretary)</p>

                <p><b><i class=" text-success fas fa-phone-square-alt"></i> 94173 00730</b></p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b>Prof. Tarun Ghai (Member of
                    Governing Body)</p>

                <p><b><i class=" text-success fas fa-phone-square-alt"></i>98721 11224 </b></p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b>Prof. Gaurav Vij (DAV
                    College Abhoar)</p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b>Prof. Dr. Parminder Kaur (
                    BD Arya College Jalandhar)</p>
                <hr>
                <p class="font-weight-bold"><b><i class=" fas fa-user text-primary"></i> </b> Prof. Jagpinder Singh (
                    SGTP Khalsa College Anandpur Sahib).</p>
                <div class="card">
                    <div class="card-header bg-primary">
                        <b>Convener ( University wise)</b>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>
                                1. Punjab University Chandigarh
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;Prof. Gaurav Vij <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;(DAV College Abhoar)
                            </li>
                            <li>
                                2. Guru Nanak Dev University, Amritsar
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;Prof. Dr. Parminder Kaur <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;( BD Arya College Jalandhar)
                            </li>
                            <li>
                                3. Punjabi University, Patiala
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;Prof. Jagpinder Singh<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;( SGTP Khalsa College Anandpur Sahib)
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 mt-2">
            <div class="p-2 rounded bg-white">
                <div class="container-contact100 box-shadow1">
                    <div class="wrap-contact100">
                        <form class="contact100-form validate-form" method="post" action="emailSending/contactUs.php">
                            <span class="contact100-form-title text-center">
                                Get in Touch
                            </span>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                                <input class="input100" id="name" required type="text" name="name" placeholder="Name">
                                <label class="label-input100" for="name">
                                    <span class="lnr lnr-user"></span>
                                </label>
                            </div>

                            <div class="wrap-input100 validate-input"
                                 data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" id="email" required type="email" name="email"
                                       placeholder="Email">
                                <label class="label-input100" for="email">
                                    <span class="lnr lnr-envelope"></span>
                                </label>
                            </div>

                            <div class="wrap-input100 validate-input"
                                 data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" id="number" required type="number" name="number"
                                       placeholder="Mobile Number">
                                <label class="label-input100" for="number">
                                    <i class="fa fa-phone"></i>
                                </label>
                            </div>


                            <div class="wrap-input100 validate-input" data-validate="Message is required">
                                <textarea class="input100" name="message" placeholder="Your message..."
                                          required></textarea>
                            </div>

                            <div class="container-contact100-form-btn ">
                                <div class="wrap-contact100-form-btn">
                                    <div class="contact100-form-bgbtn"></div>
                                    <button class="contact100-form-btn">
                                        Send Email
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>
<!--===============================================================================================-->
<script src="contactus/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="contactus/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="contactus/vendor/bootstrap/js/popper.js"></script>
<script src="contactus/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="contactus/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="contactus/vendor/daterangepicker/moment.min.js"></script>
<script src="contactus/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="contactus/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="contactus/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lcr6hcaAAAAAPO5uUzPWwD7KBO3JfqfdnzWqhVh', {action: 'submit'}).then(function (token) {
                // Add your logic to submit to your backend server here.
                console.log(token);
            });
        });
    }
</script>
</body>
</html>