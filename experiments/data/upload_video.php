<?php
  // Moves uploaded video file to a folder (prepend with |"upploads/" . basename(...)|)
  $target_path = basename($_FILES["vidfile"]["name"] . ".webm");
  move_uploaded_file($_FILES["vidfile"]["tmp_name"], $target_path );
?>