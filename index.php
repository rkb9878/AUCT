<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auct | Home </title>
    <?php include 'headerfile.php' ?>
</head>
<body>
<?php include 'navbar.php' ?>

<br>
<div>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide box-shadow1 carousel-border" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 carousel-image" src="images/carousel/1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-image" src="images/carousel/2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-image" src="images/carousel/1.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-image" src="images/carousel/2.jpeg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<section class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center">
                <h2 class="font-weight-bold">Wellcome</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card box-shadow1 p-3 mb-3">
                        <div class="text-center">
                            <img class="borderedpicture image-style"
                                 src="images/members/praneetKaur(presedient).jpeg"
                                 width="" alt="putyourpicturesalttexthere"/>
                            <h5 class="font-weight-bold pt-2">Prof.Praneet Kaur</h5>
                            <h6 class="font-weight-bold">(President)</h6>
                            <p>
                                It gives me immense pleasure to float AUCT website which is in fact the culmination of a
                                dream that was born some years ago...a dream to have a name; a palpable identity; a
                                representation! And this dream was visualised in the eyes of countless unaided college
                                teachers! <a href=""></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card box-shadow1 p-3">
                        <div class="text-center">
                            <img class="borderedpicture image-style"
                                 src="images/members/gurpinderSingh(general%20securitry).jpeg" width=""
                                 alt="putyourpicturesalttexthere"/>
                            <h5 class="font-weight-bold pt-2">Prof.Gurpinder Singh</h5>
                            <h6 class="font-weight-bold">(Gen.Secretary)</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deserunt id illo libero
                                minus
                                temporibus veniam? Debitis dignissimos dolore doloribus eligendi eos incidunt nihil nisi
                                quis veniam voluptas. Accusantium, repellat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-3 col-12">
            <br>
            <div class="newsEvent-wrapper box-shadow1">
                <div class="newsEvent-head">
                    <div class="text-center">
                        <h5 class="font-weight-bold">News & Event</h5>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="holder">
                            <ul id="ticker01">
                                <li>The first thing that most Javascript programmers</li>
                                <li>End up doing is adding some code</li>
                                <li>The code that you want to run</li>
                                <li>Inside of which is the code that you want to run</li>
                                <li>Right when the page is loaded</li>
                                <li>Problematically, however, the Javascript code</li>
                                <li>The first thing that most Javascript programmers</li>
                                <li>End up doing is adding some code</li>
                                <li>The code that you want to run</li>
                                <li>Inside of which is the code that you want to run</li>
                                <li>Right when the page is loaded</li>
                                <li>Problematically, however, the Javascript code</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>