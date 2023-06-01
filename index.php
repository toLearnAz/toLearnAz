<html>
<head>
<style>
  
  img {
    pointer-events: none;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
  
  .slider {
    width: 600px;
    height: 400px;
    overflow: hidden;
    position: relative;
}

.slide {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: left 1s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
}
</style>
</head>
<body>
  <?php
  $folder_path = "https://baby001iscoming.blob.core.windows.net/mamasboy/"; //image folder path
//  echo $folder_path;
$folder = opendir($folder_path); 

  $link = "https://baby001iscoming.blob.core.windows.net/mamasboy/PHOTOS";
  $type = ".jpg";
  for ($i = 1; $i <= 53; $i++) {
 echo  "<div class= gallery><a target=.&quot._blank.&quot. href=$link$i$type><img src=$link$i$type alt=$i width=600 height= 400 ></a></div>";
    
    } 
  ?>
</body>
</html> 
