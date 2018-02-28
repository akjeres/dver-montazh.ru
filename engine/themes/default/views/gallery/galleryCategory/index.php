<?php
$this->title = Yii::t('GalleryModule.gallery', 'Gallery categories');
$this->breadcrumbs = [
    Yii::t('GalleryModule.gallery', 'Galleries') => ['/gallery/gallery/index'],
    $this->title
];
?>
<div class="container">	
<h1><?= $this->title ?></h1>
<ul>
    <?php foreach($categories as $category): ?>
        <li>
            <?= CHtml::link($category->name, ['/gallery/galleryCategory/view', 'slug' => $category->slug]) ?>
        </li>
    <?php endforeach; ?>
</ul>
</div>

