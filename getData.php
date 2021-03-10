<?php  include 'globalVariable.php'; ?>
<?php
#connect
$conn = mysqli_connect("localhost", $dbUser, $dbPassword, "artblog_ge");
$select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, category.Category_Name , `Paint_Date`, `Paint_Type`, `Paint_Author` FROM `paintings`
left JOIN category on category.Category_ID = paintings.Paint_ID";
// $select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, category.Category_Name , `Paint_Date`,\ `Paint_Type`, `Paint_Author` FROM `paintings` left JOIN category on category.Category_ID = paintings.Paint_ID";
$res = mysqli_query($conn, $select_query);
$data = array();

while ($row = mysqli_fetch_all($res)) {
    $data = $row;
}
?>

<h1>Data :</h1> <br>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/test.css">
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<table>
    <tbody id="data">

    </tbody>
</table>

<script>
    var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;

    function t() {
        var html = "";
        document.getElementById("data").innerHTML = data[0][0];
        console.log(data);
        console.log(data.length)
        var html = '<div class="col-xl-10"><div class="gallery "style="padding: 20px !important;">';
        html += '<div id="test1">';
        data
        for (i = 0; i < data.length; i++) {
            var paintName = data[i][0];
            var paintDescription = data[i][1];
            var paintPath = data[i][2];
            var paintCategory = data[i][3];
            var paintDate = data[i][4];
            var paintType = data[i][5];
            var paintAuthor = data[i][6];


            html += '<a  href="' + paintPath + '" data-lightbox="mygallery" data-title="' + paintName + " " + paintDescription + 'ავტორი :' + paintAuthor + '">';
            html += '<img src="' + paintPath + '"></a>';


        }
        html += '</div></div></div>';
        document.getElementById("data").innerHTML = html;
        console.log(html);
    }
    t();
</script>
<div class="col-xl-10">
    <div class="gallery " style="padding: 20px !important;">
        <div id="test1"><a href="images\image3.jpg" data-lightbox="mygallery" data-title="მთვარე შესრულებულია დაგრუნტულ მუყაოზე აკრილის საღებავით 95,5x70ავტორი :ბექა ხოფერია"><img src="images\image3.jpg"></a></div>
    </div>
</div><a href="images\image4.jpg" data-lightbox="mygallery" data-title="ჟირაფი მასალა: ფანქარი. ზომა:21x31.ავტორი :დავით შაინიძე 10 წლის"><img src="images\image4.jpg"></a></div>
</div>
</div>