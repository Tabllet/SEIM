<?php
$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"], "media/" . $file["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);