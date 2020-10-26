<footer class="container-fluid pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <a href="index.php"><img class="" src="images/header-logo.png" width="70px" alt=""></a>
                <p style="font-size: 13px">
                    Today on June 18, 2020, AUCT is releasing its logo which denotes the strength of the Unaided teachers of
                    colleges of Punjab. It will always inspire, motivate and boost the morale of the educators who are
                    determined to fight <a href="logo.php">Read More -></a>
                </p>
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <h5 class="font-weight-bold">Quick Link</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="quick-link">
                                <li><a href="aboutUnion.php">About Association</a></li>
                                <li><a href="Constitution.php">Constitution</a></li>
                                <li><a href="officeBeareres.php">Office Bearers</a></li>
                                <li><a href="#">Actvities</a></li>
                                <li><a href="Memorandum.php">Memorandum</a></li>
                                <li><a href="#">Notifiction</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="quick-link">
                                <li><a href="serviceMatters.php">Service Matters</a></li>
                                <li><a href="archive.php">Archive</a></li>
                                <li><a href="rti_act.php">RTI Act</a></li>
                                <li><a href="#">Links</a></li>
                                <li><a href="contactUs.php">Contact Us</a></li>
                                <li><a href="#">Financial Statements</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pt-5">
                    <div class="text-center">
                        <h4 class="text-dark font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="social-icon">
                        <div class=" text-center">
                            <a href="#"><i class="fa-2x fab fa-facebook"></i></a>
                        </div>
                        <div class=" text-center">
                            <a href="#"><i class="fa-2x fab fa-linkedin"></i></a>
                        </div>
                        <div class=" text-center">
                            <a href="#"><i class="fa-2x fab fa-twitter"></i></a>
                        </div>
                        <div class=" text-center">
                            <a href="#"><i class="fa-2x fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" style="border-top: 1px solid gray ;">
        <p style="color: black;font-size: 14px">Copyright © 2020 AUCT | This template is made by <a target="_blank" href="http://rkbharti.ml/">RkBharti</a></p>
    </div>
</footer>


<script src="bootstrap-4.5.1-dist/js/jquery-3.4.1.js"></script>
<script src="bootstrap-4.5.1-dist/js/popper.min.js"></script>
<script src="bootstrap-4.5.1-dist/js/bootstrap.js"></script>
<script src="fontawesome/js/all.js"></script>
<script src="lightbox/dist/js/lightbox.js"></script>

<script>
    // $(document).ready(function (){
    //    $('.nav-link').on('click',function (){
    //        var name=$(this).parent().attr('class');
    //        alert(name)
    //    })
    // });

    $(".nav-link").on("click", function(){
        console.log(this);
        $(".nav-link").find(".active").removeClass("active");
        $(this).addClass("active");
    });
</script>
