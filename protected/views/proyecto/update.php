<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->i_pry_id=>array('view','id'=>$model->i_pry_id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Proyecto','url'=>array('index')),
	array('label'=>'Create Proyecto','url'=>array('create')),
	//array('label'=>'View Proyecto','url'=>array('view','id'=>$model->i_pry_id)),
	array('label'=>'Manage Proyecto','url'=>array('admin')),
	'',
	array('label'=>'Help', 'url'=>'#')
);
?>

<h1>Update Proyecto <?php echo $model->i_pry_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>