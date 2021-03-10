<?php include 'globalVariable.php'; ?>

<?php
$imageType = "both";
$select_query = "";
if (isset($_GET['imageType'])) {
  $imageType = $_GET['imageType'];
}
if ($imageType == "blackwhite") {
  $imageType = "blackwhite";
} elseif ($imageType == "colored") {
  $imageType = "colored";
} elseif ($imageType == "both") {
  $imageType = "both";
}

#connect
$conn = mysqli_connect("localhost", $dbUser, $dbPassword, $DbName);
$select_query = "SELECT `photography_title`, `photography_image_path`, image_type, photography_author.author_name, photography_category.category_name FROM photography 
LEFT JOIN  photography_author on photography_author.author_ID = photography.photography_author_id
left JOIN photography_category on photography_category.category_ID = photography.photography_category_id";
mysqli_query($conn, 'SET CHARACTER SET utf8');
$res = mysqli_query($conn, $select_query);
$data = array();
while ($row = mysqli_fetch_all($res)) {
  $data = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
</head>

<body  style="background-image: url(images/bg.png); background-size: 100%;">
  
   <div style="width: 100%; height: 2px; background-color: black;"></div>
<?php include 'header.php'; ?>
<div style="width: 100%; height: 2px; background-color: black;"></div><br>


  <!-- ------------------------------------gallery------------------------ -->
  <div class="row mb-2" style="margin-right: 14vh !important; margin-left: 14vh !important">
    <svg width="350" height="100">
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
        <?php echo $photography ?>
      </text>

    </svg>
  </div>
  <div class="row  mb-5 main_gallery">
    <div class="col-xl-2" style=" padding: 20px !important;">
      <h2> <?php echo $category ?></h2>
      <div style="width: 150px; height: 2px; background-color: #234140;"></div><br>
      <a href="photography.php?lang=<?php echo $lang ?>&imageType=blackwhite"> <?php echo $blackwhite ?></a><br>
      <a href="photography.php?lang=<?php echo $lang ?>&imageType=colored"> <?php echo $colored ?></a><br>
      <label for="myCheck3"> <?php echo $portrait ?>:</label>
      <input type="checkbox" id="myCheck3" onclick="generateGallery()"><br>
      <label for="myCheck4"> <?php echo $landscape ?>:</label>
      <input type="checkbox" id="myCheck4" onclick="generateGallery()"><br>
      <label for="myCheck5"> <?php echo $abstract ?>:</label>
      <input type="checkbox" id="myCheck5" onclick="generateGallery()"><br>
      <label for="myCheck6"> <?php echo $other ?>:</label>
      <input type="checkbox" id="myCheck6" onclick="generateGallery()"><br>
    </div>
    <!--  start -->
    <div class="col-xl-10">
      <div id="test"></div>
    </div>
    <!-- endd -->
    <script>
      var portrait = document.getElementById("myCheck3");
      var landscape = document.getElementById("myCheck4");
      var abstract = document.getElementById("myCheck5");
      var other = document.getElementById("myCheck6");
      var imageType = "<?php echo $imageType ?>";


      function generateGallery() {
        var categoryArray = [];
        var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        if (portrait.checked) categoryArray.push("პორტრეტი");
        if (landscape.checked) categoryArray.push("პეიზაჟი");
        if (abstract.checked) categoryArray.push("აბსტრაქცია");
        if (other.checked) categoryArray.push("სხვა");

        var html = '<div class="gallery "style="padding: 20px !important;">';
        html += '<div id="test1">';
        // თუ გვერდი პირველად იტვირთება ჩეკბოქსები ავტომატურად ითვლება მონიშნულად
        if (!categoryArray.length) categoryArray = ["პორტრეტი", "პეიზაჟი", "აბსტრაქცია", "სხვა"];
        for (i = 0; i < data.length; i++) {
          var photographyName = data[i][0];
          var photographyPath = data[i][1];
          var photographyImageType = data[i][2];
          var photographyAuthor = data[i][3];
          var paintCategory = data[i][4];
          console.log(photographyImageType);
          console.log(imageType);
          if (imageType != "both") {
            if (photographyImageType != imageType) continue;
          }
          for (category of categoryArray) {
            if (paintCategory == category) {
              html += '<a  href="' + photographyPath + '" data-lightbox="mygallery" data-title="' + photographyName + " " + 'ავტორი: ' + photographyAuthor + '">';
              html += '<img src="' + photographyPath + '"></a>';
            }
          }
        }
        html += '</div></div></div>';
        document.getElementById("test").innerHTML = html;
      }
      generateGallery();
    </script>
  </div>
  <!------------------------------------/gallery------------------------------------------->

  <!-------------------------------------Footer------------------------------------------->
  <?php include 'footer.php'; ?>
  <!------------------------------------/Footer------------------------------------------->
</body>

</html>