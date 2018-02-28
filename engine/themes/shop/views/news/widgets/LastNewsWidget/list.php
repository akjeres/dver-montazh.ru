<?php Yii::import('application.modules.news.NewsModule'); ?>

<?php if (isset($models) && $models != []): ?>

        <?php foreach ($models as $model): ?>
        <div>
            <?= CHtml::link(
                $model->title,
                ['/news/news/view/', 'slug' => $model->slug]
            ); ?>
        </div>
        <?php endforeach; ?>


<?php endif; ?>
