<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);
$this->pageTitle=$model->title;

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Post <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_view', 
	array('data'=>$model,)
); ?>

<div class="comments">
	<?php if($model->commentCount>=1 ): ?>
		<h3>
			<?php echo $model->commentCount>1 ? $model->commentCount.' comments' : 'One comment'; ?>
		</h3>
		<?php $this->renderPartial('_comments',
			array('post'=>$model, 'comments'=>$model->comments,)
		); ?>
	<?php endif; ?>
	
	<h3>Leave a comment</h3>
	
	<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
		<div class="flash success">
			<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
		</div>
	<?php else: ?>
		<?php $this->renderPartial('/comment/_form',
			array('model'=>$comment,)
		); ?>
	<?php endif; ?>
</div>
