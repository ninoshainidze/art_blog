<!DOCTYPE html>
<html>

<body style="background-image: url(images/bg.png); background-size: 100%;">
  <div class="title" style="text-align: center !important;">
    <h1>
      <?php include 'mainIcon.php'; ?>
      <span>A</span>
      <span>R</span>
      <span>T</span>
      <span>B</span>
      <span>L</span>
      <span>O</span>
      <span>G</span>
    </h1>
  </div>
  <?php include 'header.php'; ?>
  
  <!----------------------------------------------Main img--------------------------------- -->

  <div class="parallax parallax1 text-white "></div>

  <!-- --------------------------------------------/Main img--------------------------------- -->

  <!--------------------------------------/Category--------------------------------------------->
  <div class="row" id="category">
    <div data-aos="fade-right">
      <svg width="<?php echo $svgCategoryWidth ?>" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $category ?>
        </text>
      </svg>
    </div>
  </div>
  <div class="row" style="margin-left: 14vh !important; margin-right: 14vh !important">
    <div class="col-xl-6 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-free-creative-stuff-1193743.jpg" style="width: 100% !important;" class="image" />
      <div class="middle">
        <div class="text">
          <a href="gallery.php"> <?php echo $viewPaintings ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-jaspereology-3119709.jpg" style="width: 100% !important;" class="image" />
      <div class="middle">
        <div class="text">
          <a href="photography.php"> <?php echo $viewPhotograpy ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-cottonbro-3692625.jpg" style="width: 100% !important;" class="image" />
      <div class="middle">
        <div class="text">
          <a href="directing.php"> <?php echo $viewDirecting ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-zack-jarosz-1727658.jpg" style="width: 100% !important;" class="image" />
      <div class="middle">
        <div class="text">
          <a href="actors.php"> <?php echo $viewActors ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-nsu-mon-3922352.jpg" style="width: 100% !important;" class="image" />
      <div class="middle">
        <div class="text">
          <a href="writing.php"> <?php echo $viewWritings ?></a>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------/Category--------------------------------------------->


  <!------------------------------------------------About--------------------------------------->
  <div class="row" id="about">
    <div data-aos="fade-right">
      <svg width="280" height="80">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $whatwedo ?>
        </text>
      </svg>
    </div>
    <div data-aos="zoom-in">
    <div class="col-xl-12 col-lg-12 col-sm-12">
      <div class="card cardbody ml-4">
        <div class="card-body card-border card_text">
          <?php echo $aboutDescription ?>
        </div>
      </div>
    </div>
  </div>
</div>
  <!------------------------------------------------/About--------------------------------------->

  <!--------------------------------------exhibitions--------------------------------------------->
  <div class="row" id="events">
    <div data-aos="fade-right">
      <svg width="<?php echo $svgEventWidth ?>" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $event ?>
        </text>
      </svg>
    </div>
  </div>



<!-- -------------------------------------------exhibitions---------------------------- -->
  <div class="exhibiotions m-5">
    
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }' >

     
  
      <div class="col-lg-4 " >
<div class="flip-card" style="margin:auto !important;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/events/event_image1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <p class="card-text  m-2" style="margin-left: auto !important; margin-right: auto !important;">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
      </p>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4" >
<div class="flip-card" style="margin:auto !important;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/events/event_image1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
      </p>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4" >
<div class="flip-card" style="margin:auto !important;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/events/event_image1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
      </p>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4" >
<div class="flip-card" style="margin:auto !important;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/events/event_image1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
      </p>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4" >
<div class="flip-card" style="margin:auto !important;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/events/event_image1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
      </p>
    </div>
  </div>
</div>
</div>
  
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> 

  <!-- -------------------------------------------/exhibitions---------------------------- -->

  <!--------------------------------------/Events--------------------------------------------->



  <!--------------------------------------Contact--------------------------------------------->
  <div class="row" id="contact">
    <div data-aos="fade-right">
      <svg width="<?php echo $svgContactWidth ?>" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $contact ?>
        </text>
      </svg>
    </div>
  </div>

<div class="parallax parallax2">
  <div class="row" style=" margin-left: 14vh !important; margin-right: 14vh !important">
    <div class="col-xl-12 col-lg-12 col-sm-12  text-center" style="margin-top: 50px !important;"> 
      <h3>
      <?php echo $interested ?><br>
       <?php echo $getInTouch ?>:
      </h3>
    </div>
  </div>
  <div class="row contact-center contact_style" style="margin-left: 14vh !important;margin-right: 14vh !important">
     <div class="m-5">
      <form id="form" class="topBefore">
          <input id="name" type="text" placeholder="<?php echo $fullName ?>">
          <input id="email" type="text" placeholder="<?php echo $email ?>">
          <input id="email" type="text" placeholder="<?php echo $phone ?>">
          <textarea id="message" type="text" placeholder="<?php echo $message ?>"></textarea>
          <input id="submit" type="submit" value="<?php echo $send ?>">
    </form>
    </div>
    </div>
</div>




  <!--------------------------------------/Contact--------------------------------------------->

  <!--------------------------------------Footer--------------------------------------------->
  <?php include 'footer.php'; ?>
  <!--------------------------------------/Footer--------------------------------------------->


  <script>
    AOS.init();
  </script>

 
</body>

</html>















