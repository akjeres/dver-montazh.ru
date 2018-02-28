<?php
/**
 * @var $this GalleryController
 * @var $model Gallery
 */

$this->title = Yii::t('GalleryModule.gallery', 'Gallery');
$this->breadcrumbs = [
    Yii::t('GalleryModule.gallery', 'Galleries') => ['/gallery/gallery/index'],
    $model->name
];
?>
<div class="container"> 


    <h1 class="h2"><?= CHtml::encode($model->name); ?></h1>
    <?= $model->description; ?>

<div class="row">
    
        <div class="col-sm-4 col-md-3">
            <?php $this->widget(
                'gallery.widgets.GalleryWidget',
                ['galleryId' => $model->id, 'gallery' => $model, 'limit' => 30]
            ); ?>

            
        </div>
    
</div>
<?php //if (Yii::app()->getUser()->isAuthenticated()) : ?>
                <?php //if ($model->canAddPhoto) : ?>
                    <?php //$this->renderPartial('_form', ['model' => $image, 'gallery' => $model]); ?>
                <?php //endif ?>
            <?php //endif; ?>
</div>
