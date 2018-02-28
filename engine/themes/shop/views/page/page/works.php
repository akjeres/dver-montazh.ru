<?php
/* @var $model Page */
/* @var $this PageController */

$criteria=new CDbCriteria;
$criteria->condition = 'id = :id ';
$criteria->params = array(':id' => 1);






if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>
<div class="container">
	<div class="row">
	    <h1><?=$this->title;?></h1>
	    <p><?=$model->description;?></p>
	    <div class="col-sm-12">
	        <?php $this->widget(
	            'gallery.widgets.GalleryWidget',
	            ['galleryId' => 1, 'limit' => 30]
	        ); ?>

	        
	    </div>
	    
	</div>
</div>

