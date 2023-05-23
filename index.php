<html>
<head>
<style>
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
</style>
</head>
<body>
  <?php 
  $string1= "https://baby001iscoming.blob.core.windows.net/mamasboy/PHOTOS";
  $string2= ".jpg";
  for ($i = 1; $i <= 53; $i++) {
  echo $string1.$i.$string2;
    } 
  ?>
</body>
</html> 
