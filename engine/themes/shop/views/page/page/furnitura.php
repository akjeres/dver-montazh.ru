<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

$this->title = $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;

$category = StoreCategory::model()->findByPath('furnitura');
$productRepository = Yii::app()->getComponent('productRepository');
$dataProvider = $productRepository->getListForCategory($category);
?>

<section class="catalog">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <?php if($category->description):?>
                <div class="short-text">
                    <?php echo $category->short_description;?>
                    <a href="#" class="dot" onclick="$('.full-text').slideToggle();return false;">подробнее</a>
                </div>

                <div class="full-text" style="display: none">
                    <?php echo $category->description;?>
                </div>
                <?php endif;?>

                <h5><?= CHtml::encode($category->getTitle()); ?></h5>
                    <ul class="items-catalog list-unstyled list-inline">
                    <?php $this->widget(
                        'zii.widgets.CListView', [
                            'dataProvider' => $dataProvider,
                            'itemView' => '//store/product/_item_f',
                            'template' => '
                                
                                {items}
                                {pager}
                            ',
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
                            //'itemsCssClass' => 'catalog__items',
                            'sortableAttributes' => [
                                'sku',
                                'name',
                                'price',
                                'update_time'
                            ],
                            'sorterHeader' => '<div class="sorter__description">Сортировать:</div>',
                            'htmlOptions' => [
                                'class' => 'catalog'
                            ],
                            'pagerCssClass' => 'catalog__pagination',
                            'pager' => [
                                'header' => '',
                                'prevPageLabel' => '<i class="fa fa-long-arrow-left"></i>',
                                'nextPageLabel' => '<i class="fa fa-long-arrow-right"></i>',
                                'firstPageLabel' => false,
                                'lastPageLabel' => false,
                                'htmlOptions' => [
                                    'class' => 'pagination'
                                ]
                            ]
                        ]
                    ); ?>
                </ul>
            </div>
        </div>
    </div>
</section>
