<?php include 'globalVariable.php'; ?>
<?php

#connect
$conn = mysqli_connect("localhost", $dbUser, $dbPassword, $DbName);
$select_query = "SELECT `Actors_Name`, `Actors_Age`, `Actors_Height`, `Actor_Weight`, `Actor_Description`, actors_images.Image_Path  FROM `actors` 
LEFT JOIN actors_images  on actors_images.Image_ID = `Actor_Image_ID`;";
mysqli_query($conn, 'SET CHARACTER SET utf8');
$res = mysqli_query($conn, $select_query);
$data = array();
while ($row = mysqli_fetch_all($res)) {
  $data = $row;
}
?>

<!DOCTYPE html>
<html>

<body  style="background-image: url(images/bg.png); background-size: 100%;">
   <div style="width: 100%; height: 2px; background-color: black;"></div>
<?php include 'header.php'; ?>
<div style="width: 100%; height: 2px; background-color: black;"></div><br>


  <div class="row mb-4" style="margin-right: 14vh !important; margin-left: 14vh !important">
    <svg width="<?php echo $svgActorsWidth ?>" height="100">
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
        <?php echo $actors ?>
      </text>
    </svg>
  </div>

  <!-- =---------------------------------------actors--------------------------------------------- -->

  <div class="actors mb-5">
    <div id="actors_div" class="row" style="width: 100% !important;">
      <script>
        var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        var modalId = 1;
        html = "";
        for (var i = 0; i < data.length; i++) {
          var name = data[i][0];
          var age = data[i][1];
          var heigth = data[i][2];
          var weight = data[i][3];
          var imagePath = data[i][5];
          var descritpion = data[i][4];
          html += '<div class="col-xl-3 col-lg-6 col-sm-12"><div class="our-team mb-5">\
          <div class="picture mb-4">\
            <img class="img-fluid" src="' + imagePath + '"></div>\
          <div class="team-content"><h3 class="name">';

          html += name + '</h3><h4 class="title"> <?php echo $age ?>:' + age + " <br> <?php echo $height ?>: ";
          html += heigth + " <br> <?php echo $Weight ?>: " + weight + " </h4><br>";
          html += '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong' + modalId + '"><?php echo $viewMore ?></button>\
            <div class="modal fade" id="exampleModalLong' + modalId + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="margin-left: 30% !important;">\
            <div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header">\
            <h5 class="modal-title" id="exampleModalLongTitle">12</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">\
            <span aria-hidden="true">&times;</span></button></div><div class="modal-body">';
          html += '<img class="img-fluid" src="' + imagePath + '">' + descritpion;
          html += '</div></div></div></div></div></div></div>';
          modalId += 1;
        }
        document.getElementById("actors_div").innerHTML = html;

        console.log(html);
      </script>
    </div>
  </div>



  <?php include 'footer.php'; ?>
</body>

</html>