

<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="slideshow.css">
    <style>
        footer {
            position: page;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("./Image/tax1.jpg");
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php include_once
        ('navigation_bar.php');
    ?>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./Image/tax3.jpg" id="cover1" >
        <div class="text">Caption One</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./Image/tax2.jpg" id="cover2"  >
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="./Image/tax1.jpg" id="cover3" >
        <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>




<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p>

    <footer>
        <br/>
        Call us: 0112345678<br/>
        Email us: mytaxi@gmail.com<br/>
        Follow us on Facebook: MyTaxi<br/>

    </footer>
</body>
</html>