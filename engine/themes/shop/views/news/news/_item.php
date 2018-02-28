<?php
/* @var $data News */
$url = Yii::app()->createUrl('/news/news/view', ['slug' => $data->slug]);
?>
<div class="col-md-6">
    <div class="news-item">
        <div>
            <?= CHtml::image($data->getImageUrl(400,200,true), $data->title); ?>
        </div>
        <h4 class=""><?= CHtml::link(CHtml::encode($data->title), $url, ['class' => 'cart-item__link']); ?></h4>

        <div class="pre-news-text">
            <p> <?= $data->short_text; ?></p>
        </div>
        <p class="pull-right">
            <?= CHtml::link(Yii::t('NewsModule.news', 'read...'), $url, ['class' => 'btn btn-primary']); ?>
        </p>
    </div>
</div>
