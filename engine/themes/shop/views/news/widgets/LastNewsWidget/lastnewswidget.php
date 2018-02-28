<?php Yii::import('application.modules.news.NewsModule'); ?>
<div class="news">
    <?php if (isset($models) && $models != []): ?>

        <?php foreach ($models as $model): ?>
        <div class="news-item">
            <div class="news-date">

                <?php echo date('d.m.Y',strtotime($model->date));?>
            </div>
            <div class="news-intro">
                <?php echo $model->title;?>

                <?= CHtml::link(
                    'подробнее',
                    ['/news/news/view/', 'slug' => $model->slug]
                ); ?>
            </div>
        </div>

        <?php endforeach; ?>

    <?php endif; ?>

</div>