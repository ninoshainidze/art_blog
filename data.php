<?php
#connect
$conn = mysqli_connect("localhost", "root", "", "artblog_ge");
// $select_query = "SELECT `Paint_Name`,`Paint_Description`,`Pain_Path`, category.Category_Name, `Pain_Date`, `Paint_Type`, `Paint_Author` FROM paintings left JOIN category on category.Category_ID = paintings.Paint_ID";
echo "ssss";
$select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, category.Category_Name , `Paint_Date`, `Paint_Type`, `Paint_Author` FROM `paintings`
left JOIN category on category.Category_ID = paintings.Paint_ID";
$res = mysqli_query($conn, $select_query);
$data = array();

while ($row = mysqli_fetch_all($res)) {
    $data = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);
