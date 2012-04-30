<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>This is a somple demoonstration application for testing purposes.</p>

<?php echo CHtml::link(CHtml::encode("All Posts"), array('post/index')); ?>