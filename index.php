<?php
class IndexController extends Yaf_Controller_Abstract {
   /* default action */
   public function indexAction() {
       $this->_view->word = "hello world";
       //or
       // $this->getView()->word = "hello world";
   }
}
?>




<html>
<head>
<title>Hello World</title>
</head>
<body>
<?php echo $word;?>
</body>
</html>
