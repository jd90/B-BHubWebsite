<!DOCTYPE html>
<html lang="en">
<head>
    <title>Picture Slider</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <p><h1>theB&Bhub picture carousel</h1></p>
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

            <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../../untitledcarousel/img/1.jpg" width="460" height="345">
            </div>

            <div class="item">
                <img src="../../untitledcarousel/img/2.jpg" width="460" height="345">
            </div>

            <div class="item">
                <img src="../../untitledcarousel/img/3.jpg" width="460" height="345">
            </div>

            <div class="item">
                <img src="../../untitledcarousel/img/4.jpg" width="460" height="345">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="sr-only"><img src="../../untitledcarousel/img/previous3.png"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="sr-only"><img src="img/next3.png"></span>
        </a>
    </div>
</div>

</body>
</html>
