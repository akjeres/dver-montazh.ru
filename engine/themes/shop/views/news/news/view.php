<?php
/**
 * Отображение для ./themes/default/views/news/news/news.php:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this NewsController
 * @var $model News
 **/
?>
<?php
$this->title = $model->title;
$this->description = $model->description;
$this->keywords = $model->keywords;
?>

<?php
$this->breadcrumbs = [
    Yii::t('NewsModule.news', 'News') => ['/news/news/index'],
    $model->title
];
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div style="margin-top: 40px"><strong>Другие записи</strong></div>
            <?php $this->widget('application.modules.news.widgets.LastNewsWidget', ['categories'=>$model->category_id,'view'=>'list']); ?>
        </div>
        <div class="col-md-9">
            <div class="main__title grid">
                <h1 class=""><?= CHtml::encode($model->title); ?></h1>
            </div>
            <div class="main__catalog grid fast-order__inputs">
                <?php if ($model->image): ?>
                    <?= CHtml::image($model->getImageUrl(), $model->title); ?>
                <?php endif; ?>
                <p> <?= $model->full_text; ?></p>
            </div>
        </div>
    </div>

</div>