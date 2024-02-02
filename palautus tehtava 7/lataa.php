<?php
//kansio mihin menee
$target_dir = "lataukset/";
$uploadOk = 1;

if(isset($_POST["submit"])) {
    //polku
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  // tarkista onko kansio olemassa,jos ei nii luo se
  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  // tsekkaa onnistuiko lataus
  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

include("header.html");
include("footer.html");
?>
