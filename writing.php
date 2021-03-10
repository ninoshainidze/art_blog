<?php include 'globalVariable.php'; ?>
<?php

#connect
$conn = mysqli_connect("localhost", $dbUser, $dbPassword, $DbName);
$select_query = "SELECT `writing_title`, `writing_text`, writing_category.category_name, writer.writer_first_name, writer.writer_last_name FROM `writing` 
left join  writing_category on writing_category.category_ID = writing.writing_category_id
LEFT join writer on writer.writer_ID=writing.writer_id";
mysqli_query($conn, 'SET CHARACTER SET utf8');
$res = mysqli_query($conn, $select_query);
$data = array();
while ($row = mysqli_fetch_all($res)) {
  $data = $row;
}
?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<body>
  <div style="height: 50px"></div>
  <div class="row" style="margin-right: 14vh !important; margin-left: 14vh !important">
    <svg width="<?php echo $svgWritingWidth ?> " height="100">
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
        <?php echo $writings ?>
      </text>
    </svg>
  </div>
  <div class="row mb-5 writing">
    <div class="col-xl-3">
      <div class="w_text m-5">
        <h2><?php echo $category ?></h2>
        <div style="width: 150px; height: 2px; background-color: #234140;"></div><br>
        <input type="checkbox" id="myCheck1" onclick="GenerateWriting()">
        <label for="myCheck1"><?php echo $poem ?></label><br>
        <input type="checkbox" id="myCheck2" onclick="GenerateWriting()">
        <label for="myCheck2"><?php echo $story ?></label><br>
        <input type="checkbox" id="myCheck3" onclick="GenerateWriting()">
        <label for="myCheck3"><?php echo $verse ?></label><br>
        <input type="checkbox" id="myCheck4" onclick="GenerateWriting()">
        <label for="myCheck4"><?php echo $novel ?></label><br>
        <input type="checkbox" id="myCheck5" onclick="GenerateWriting()">
        <label for="myCheck5"><?php echo $minima ?></label><br>
        <input type="checkbox" id="myCheck6" onclick="GenerateWriting()">
        <label for="myCheck6"><?php echo $series ?></label><br>
        <input type="checkbox" id="myCheck7" onclick="GenerateWriting()">
        <label for="myCheck7"><?php echo $sketch ?></label><br>
        <input type="checkbox" id="myCheck8" onclick="GenerateWriting()">
        <label for="myCheck8"><?php echo $freeverse ?></label><br>
        <input type="checkbox" id="myCheck9" onclick="GenerateWriting()">
        <label for="myCheck9"><?php echo $other ?></label><br>
      </div>
    </div>

    <div id="writingDiv" class="col-xl-9"></div>
    <script>
      function GenerateWriting() {
        var poem = document.getElementById("myCheck1");
        var story = document.getElementById("myCheck2");
        var verse = document.getElementById("myCheck3");
        var novel = document.getElementById("myCheck4");
        var minima = document.getElementById("myCheck5");
        var series = document.getElementById("myCheck6");
        var sketch = document.getElementById("myCheck7");
        var freeverse = document.getElementById("myCheck8");
        var other = document.getElementById("myCheck9");
        var categoryArray = [];
        var modalId = 1;
        html = "";
        var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;

        if (poem.checked) categoryArray.push("პოემა");
        if (story.checked) categoryArray.push("მოთხრობა");
        if (verse.checked) categoryArray.push("ლექსი");
        if (novel.checked) categoryArray.push("ნოველა");
        if (minima.checked) categoryArray.push("მინიმა");
        if (series.checked) categoryArray.push("სერია");
        if (sketch.checked) categoryArray.push("ჩანახატი");
        if (freeverse.checked) categoryArray.push("ვერლიბრი");
        if (other.checked) categoryArray.push("სხვა");

        if (!categoryArray.length) categoryArray = ["პოემა", "მოთხრობა", "ლექსი", "ნოველა", "მინიმა", "სერია", "ჩანახატი", "ვერლიბრი", "სხვა"];
        for (var i = 0; i < data.length; i++) {
          var writingTitle = data[i][0];
          var writingText = data[i][1];
          var writingCategory = data[i][2];
          var writerFirstName = data[i][3];
          var writerLastName = data[i][4];
          for (category of categoryArray) {
            if (writingCategory == category) {
              html += '<div class="autors text-center  m-5">\
              <button type="button" class="big-button writing_button mb-5" data-toggle="modal" data-target="#exampleModal' + modalId + '">' + writerFirstName + " " + writerLastName + " " + writingTitle + '</button>';
              html += '<div class="modal fade" id="exampleModal' + modalId + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-left: 30% !important;\
                  margin-top: 10% !important"><div class="modal-dialog" role="document"> <div class="modal-content"><div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">.\
                  </h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p style="font-size: 20px;">'
                   + writingTitle + '</p>' + writingText + '<br>';
              html +=  writerFirstName + " " + writerLastName + '</b></div></div></div></div><br></div>';
            }
          }
          modalId += 1;

        }
        document.getElementById("writingDiv").innerHTML = html;
      }
      GenerateWriting();
    </script>




  </div>


  <?php include 'footer.php'; ?>
</body>

</html>