<?php include 'globalVariable.php'; ?>

<?php
#connect
$conn = mysqli_connect("localhost", $dbUser, $dbPassword, $DbName);
$select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, paintings_category.Category_Name , `Paint_Date`, `Paint_Type`, `Paint_Author` FROM `paintings`
left JOIN paintings_category on paintings_category.Category_ID = paintings.Paint_Category_ID";
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
    <svg width="220" height="100">
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
        <?php echo $gallery ?>
      </text>
    </svg>
  </div>

  <div class="row  mb-5 main_gallery">
    <div class="col-xl-2" style=" padding: 20px !important;">
      <h2> <?php echo $category ?></h2>
      <div style="width: 150px; height: 2px; background-color: #234140;"></div><br>
      <label for="myCheck1"> <?php echo $oil ?>:</label>
      <input type="checkbox" id="myCheck1" onclick="generateGallery()"><br>
      <label for="myCheck2"> <?php echo $guache ?>:</label>
      <input type="checkbox" id="myCheck2" onclick="generateGallery()"><br>
      <label for="myCheck3"> <?php echo $acrylic ?>:</label>
      <input type="checkbox" id="myCheck3" onclick="generateGallery()"><br>
      <label for="myCheck4"> <?php echo $coal ?>:</label>
      <input type="checkbox" id="myCheck4" onclick="generateGallery()"><br>
      <label for="myCheck5"> <?php echo $acuarel ?>:</label>
      <input type="checkbox" id="myCheck5" onclick="generateGallery()"><br>
      <label for="myCheck6"> <?php echo $graphic ?>:</label>
      <input type="checkbox" id="myCheck6" onclick="generateGallery()"><br>
      <label for="myCheck7"> <?php echo $mixed ?>:</label>
      <input type="checkbox" id="myCheck7" onclick="generateGallery()"><br>
      <label for="myCheck8"> <?php echo $other ?>:</label>
      <input type="checkbox" id="myCheck8" onclick="generateGallery()"><br>
    </div>
    <!--  start -->
    <div class="col-xl-10">
      <div id="GalleryDiv"></div>
    </div>
    <!-- endd -->
    <script>
      function generateGallery() {
        var oil = document.getElementById("myCheck1");
        var gouache = document.getElementById("myCheck2");
        var acrylic = document.getElementById("myCheck3");
        var coal = document.getElementById("myCheck4");
        var acuarel = document.getElementById("myCheck5");
        var graphic = document.getElementById("myCheck6");
        var mixed = document.getElementById("myCheck7");
        var other = document.getElementById("myCheck8");

        var categoryArray = [];
        var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        if (oil.checked) categoryArray.push("ზეთი");
        if (gouache.checked) categoryArray.push("გუაში");
        if (acrylic.checked) categoryArray.push("აკრილი");
        if (coal.checked) categoryArray.push("ნახშირი");
        if (acuarel.checked) categoryArray.push("აკვარელი");
        if (graphic.checked) categoryArray.push("გრაფიკული");
        if (mixed.checked) categoryArray.push("შერეული");
        if (other.checked) categoryArray.push("სხვა");

        var html = '<div class="gallery "style="padding: 20px !important;">';
        if (!categoryArray.length) categoryArray = ["ზეთი", "გუაში", "აკრილი", "ნახშირი", "აკვარელი", "გრაფიკული", "შერეული", "სხვა"];
        for (i = 0; i < data.length; i++) {
          var paintName = data[i][0];
          var paintDescription = data[i][1];
          var paintPath = data[i][2];
          var paintCategory = data[i][3];
          var paintDate = data[i][4];
          var paintType = data[i][5];
          var paintAuthor = data[i][6];
          for (category of categoryArray) {
            if (paintCategory == category) {
              html += '<a  href="' + paintPath + '" data-lightbox="mygallery" data-title="' + paintName + " " + paintDescription + 'ავტორი :' + paintAuthor + '">';
              html += '<img src="' + paintPath + '"></a>';
            }
          }
        }
        html += '</div></div>';
        document.getElementById("GalleryDiv").innerHTML = html;
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