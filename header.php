<?php
// არჩეული ენის შესაბამისად ფაილის ჩატვირთა
$lang = "ge";
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
require_once("language/" . $lang . ".php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Artblog</title>
    <link rel="shortcut icon" href="icons/img2.png" />
    <link rel="stylesheet" href="css/test.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- /AOS -->

    <!-- ---------------------------------Bootstrap----------------------------------- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- ----------------------------------/Bootstrap--------------------------- -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

</head>

<body>

    <!-------------------------------------------------Navbar------------------------------------------>
    
    


     <nav class="navbar navbar-expand-lg  sticky-top navbar-fixed-top">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <img src="icons/icons8-pull-down-60.png" />
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class=" nav-link ml-4 " href="index.php?lang=<?php echo $lang ?>"><?php echo $home ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-4 " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $category ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ml-4" href="gallery.php?lang=<?php echo $lang ?>"><?php echo $paintings ?></a>
                        <a class="dropdown-item  ml-4" href="photography.php?lang=<?php echo $lang ?>"><?php echo $photograpy ?></a>
                        <a class="dropdown-item  ml-4" href="directing.php?lang=<?php echo $lang ?>"><?php echo $directing ?></a>
                        <a class="dropdown-item  ml-4" href="writing.php?lang=<?php echo $lang ?>"><?php echo $writings ?></a>
                        <a class="dropdown-item  ml-4" href="actors.php?lang=<?php echo $lang ?>"><?php echo $actors ?></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4 " href="index.php?lang=<?php echo $lang ?>#about"><?php echo $about ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4 " href="index.php?lang=<?php echo $lang ?>#events"><?php echo $event ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4 " href="index.php?lang=<?php echo $lang ?>#contact"><?php echo $contact ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-4 text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="icons/icons8-globe-20.png" />
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item  ml-4" href="?lang=ge"><img src="icons/georgia-flag-3d-round-icon-16.png" /> GE</a>
                        <a class="dropdown-item ml-4" href="?lang=en"><img src="icons/icons8-usa-20.png" />EN</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- --------------------------------------------/Navbar--------------------------------- -->

 <script type="text/javascript">
  $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>

</body>
</html>
