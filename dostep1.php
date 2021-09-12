<!DOCTYPE html>
<html>
<body>            
<title>Zarządzanie kioskami informacyjnymi</title>        
<link rel="stylesheet" href="CSS/styled.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/styled.css?v=1620909241">      
</body>  
<body>      
<div class="navbar" position: relative; z-index: 2>            
<a class="active" href="dostep1.html">Przesyłanie plików na kioski</a>            
<a href="dostep2.html">Wstawianie transmisji na żywo</a>            
<a href="ZSL_mediaplayer.php">iKiosk media player</a>            
<a href="index.html" style="float: right ">Wyloguj się</a>                
<div class="user">            
<a class="usertxt" style="float:right"><img src="useico.png" style="vertical-align: middle" height="19" >Użytkownik : Administrator</a>                   
</div>    
</div>
</body>   
<div class="text">
<h1> Menadżer materiałów promocyjnych </h1>
<p1> Przesłać można tylko i wyłącznie plik w formacie .mp4 i .mov </p1>
</div>    
<form class="form" method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
</html>

<?php

$files = scandir("media");
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p class="mena">
        <?php echo $files[$a]; ?>

        <a href="media/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>

        <a href="delete.php?name=media/<?php echo $files[$a]; ?>" style="color: red;">-0
            Delete
        </a>
    </p>
    <?php
}
?>