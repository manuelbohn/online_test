<?php
  echo ini_get('upload-max-filesize'),'<br />'
  ,ini_get('post-max-size'),'<br />';
  // Moves uploaded video file to a uploads folder
  $target_path = "uploads/" . basename($_FILES["vidfile"]["name"] . ".webm");
  move_uploaded_file($_FILES["vidfile"]["tmp_name"], $target_path );
?>