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
  $string1= "https://baby001iscoming.blob.core.windows.net/mamasboy/PHOTOS"
  $string2= ".jpg"  
  for ($i = 1; $i <= 53; $i++) {
    <div class="gallery">
  <a target="_blank" href=$string+$i+$string2>
    <img src=$string+$i+$string2 width="600" height="400">
  </a>
  <div class="desc">$i</div>
  ?>
</body>
</html> 
