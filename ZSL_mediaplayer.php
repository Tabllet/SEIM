
<!DOCTYPE html>
<html>
<body> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>iKiosk ZSŁ mediaplayer</title>
        <link rel="stylesheet" href="CSS/mediaplayer.css?v=1620909241">
    </head>
      
 <?php
$directory='media'; 
$path    = './'.$directory.'/';
$allFiles = scandir($path,1);
$files = array_diff($allFiles, array('.', '..'));
?>

<div class="main">  
    <video src="<?php echo 'media/'.$files[0];?>" id="myvideo" type="video/mp4" width="100%" height="100%" muted="muted" autoplay="autoplay" >
</video>
<script type='text/javascript'>
  var directory = '<?php echo $directory;?>';
    var myvids = <?php echo json_encode($files); ?>;
    index=0;
    document.getElementById('myvideo').addEventListener('ended',myHandler,false);
    function myHandler(e) {
     index++;
       
       if(index>=myvids.length)
        index=0;

     var vid = document.getElementById("myvideo");
       vid.src = directory+'/'+myvids[index];
       
       
    }

</script>
</div>  
</body>   
</html>	
	