<?php Yii::import('application.modules.news.NewsModule'); ?>

<?php if (isset($models) && $models != []): ?>

        <?php foreach ($models as $model): ?>
        <p>
        <?php echo $model->short_text;?> <?= CHtml::link(
                    $model->title,
                    ['/news/news/view/', 'slug' => $model->slug]
                ); ?></p>
        <?php endforeach; ?>


<?php endif; ?>
