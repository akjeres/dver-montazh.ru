<?php
/* @var $model Page */
/* @var $this PageController */





// if ($model->layout) {
//     $this->layout = "//layouts/{$model->layout}";
// }

$this->title = 'Наши работы';
// $this->breadcrumbs = $this->getBreadCrumbs();
 $this->description = 'Посмотрите какие двери устанавливали наши мастера!';
// $this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>

<section>
    <div class="container">
        <!-- breadcrumbs -->
        <ul class="breadcrumb"><li><a href="/">Главная</a></li><li class="active">Наши работы</li></ul>    </div>
</section>

<div class="container">
	<div class="row">


	    <div class="col-sm-12">
            <h1>Наши работы</h1>
	        <?php $this->widget(
	            'gallery.widgets.GalleryWidget',
	            ['galleryId' => 1, 'limit'=>'42']
	        ); ?>


	    </div>

	</div>
</div>

