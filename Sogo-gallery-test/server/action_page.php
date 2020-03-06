<?php
session_start();

$title = $description = $date = "";
$files = "";
$main_image = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["title"])) {    
    array_push($errors, "Title is required");
  } else {
    $title = test_input($_POST["title"]);
  }

  if (empty($_POST["description"])) {
    array_push($errors, "Description is required");
  } else {
    $description = test_input($_POST["description"]);
  }

  if (empty($_POST["date"])) {
    array_push($errors, "Date is required");
  } else {
    $date = test_input($_POST["date"]);
  }

  if (empty($_POST["files"])) {
    array_push($errors, "Files is required");
  } else {
    $files = test_input($_POST["files"]);
  }

  if (empty($_POST["main_image"])) {
    array_push($errors, "Main image is required");
  } else {
    $main_image = test_input($_POST["main_image"]);
  }

  foreach ($errors as $value) {
    echo $value.'<br>';    
  }
    //exit;
  
}

///////////////////////////////////////////////////////
?>
<style>
  table, th, td {
    border: solid;
    color: black;
    direction: rtl;
    border-width:thin;
    border-collapse: collapse;
  }
</style>

<br><br>

<table>
  <th>שם הקובץ</th><th>גודל</th><th>סיומת</th><th>תקין</th>
  <tr>    
    <td></td>
    <td></td>
    <td></td>
    <td>תמונה עברה ולידציה</td>
  </tr>  
</table>

<?php
///////////////////////////////////////////////////////
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
///////////////////////////////////////////////////////


?>