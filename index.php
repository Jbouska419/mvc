<!DOCTYPE html>
	<title>MVC Example</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="css/load.css">
<body>
<?php
require('model/model.php');
require('view/view.php');
require('control/control.php');
$model=new Model();
$controller=new Controller($model);
$view=new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])){
	$controller->{$_GET['action']}();
}
echo $view->output();

?>
</body>
</html>
