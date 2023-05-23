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
  for ($i = 1; $i <= 53; $i++) {
    <div class="gallery">
  <a target="_blank" href="https://baby001iscoming.blob.core.windows.net/mamasboy/PHOTOS$i.jpg">
    <img src="https://baby001iscoming.blob.core.windows.net/mamasboy/PHOTOS$i.jpg.jpg" width="600" height="400">
  </a>
  <div class="desc">$i</div>
  ?>
</body>
</html> 
