<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Proyecto','url'=>array('index')),
	array('label'=>'Manage Proyecto','url'=>array('admin')),
	'',
	array('label'=>'Help', 'url'=>'#')
);
?>

<h1>Create Proyecto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>