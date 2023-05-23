<html>
<head>
<title>Hello World</title>
</head>
<body>
   
<?php
class IndexController {
   /* default action */
   public function indexAction() {
       $this->_view->word = "hello world";
       //or
       // $this->getView()->word = "hello world";
   }
}
?>
<?php echo $word;?>
</body>
</html>
