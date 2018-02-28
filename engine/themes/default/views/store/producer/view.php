<?php
/**
 * @var Producer $brand
 * @var CActiveDataProvider $products
 */

$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

$this->title = $brand->meta_title ?: $brand->name;
$this->description = $brand->meta_description;
$this->keywords = $brand->meta_keywords;

$brands = [1,2];
if(in_array($brand->id,$brands)) {
    $this->breadcrumbs = [
        Yii::t("StoreModule.store", 'Catalog') => ['/store'],
        'Межкомнатные двери'=>['/store/mezhkomnatnye-dveri'],
        CHtml::encode($brand->name)
    ];
} else {
    $this->breadcrumbs = [
        Yii::t("StoreModule.store", 'Catalog') => ['/store'],
        CHtml::encode($brand->name)
    ];
}


?>

<section id="breadcrumbs">
    <div class="container">

    </div>
</section>

<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-lg-2 hidden-xs">

                <div class="search">
                    <div class="catalog-filter">
                        <form id="store-filter" name="store-filter" method="get" action="/store">
                            <?php $this->widget('application.modules.store.widgets.filters.QFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.PriceFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.CategoryFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.ProducerFilterWidget', ['limit' => 30]); ?>
                            <?php //$this->widget('application.modules.store.widgets.filters.FilterBlockWidget', ['attributes' => '*']); ?>

                            <div class="catalog-filter__button"><input type="submit" value="Подобрать" class="btn btn-success"/></div>
                            <hr>
                            <?php if($brand->getImageUrl()):?>
                            <p class="text-center"><b>Компания хоумдорс является официальным диллером <?= $brand->name_short;?></b></p>
                            <!--a href="<?=$brand->getImageUrl();?>" class="fancybox"><img src="<?=$brand->getImageUrl(150);?>" alt="<?=$brand->name;?>" width="100%;"></a-->
                        <?php endif;?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-lg-10 col-xs-12">
            <style>
                    .promo{
                        width: 100%;
                        margin-bottom: 25px;


                    }
                    .promo img {
                        max-width: 100%;
                    }
                    .promo .text {
                        padding-left: 20px;
                    }
                </style>


                <h1><?= CHtml::encode($brand->name); ?></h1>

                <div class="mini-filter">

                    По типу:
                    <a href="/store/mezhkomnatnye-dveri/shponirovannye" class="btn btn-success">Шпон</a>
                    <a href="/store/mezhkomnatnye-dveri/ekoshpon" class="btn btn-success">Экошпон</a>
                    <a href="/store/mezhkomnatnye-dveri/emal" class="btn btn-success">Эмаль</a>
                    <br />
                    <br />
                    По бренду:
                    <a href="/store/brand/varadoor" class="btn btn-success">Варадор</a>
                    <a href="/store/brand/dream-doors" class="btn btn-success">DreamDoors</a>

                </div>
                <br />

                <?php //$this->widget('application.modules.store.widgets.ProductsFromCategoryWidget', ['slug' => $brand->slug]); ?>

                <ul class="items-catalog list-unstyled list-inline">
                    <?php $this->widget(
                        'zii.widgets.CListView', [
                            'dataProvider' => $products,
                            'itemView' => '//store/product/_item',
                            'template' => '
                                {items}
                                {pager}
                            ',
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
                            'itemsCssClass' => 'catalog__items',
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

                <div class="promo">

                        <div>
                            <img src="<?php echo $brand->getImageUrl(200,100);?>" alt="<?php echo $brand->name;?>" title="<?php echo $brand->name;?>">

                        </div>
                            <div class="short-text">
                                <?php echo $brand->short_description;?>


                            </div>

                            <div class="full-text" style="display: block;margin-top: 10px">
                                <?php echo $brand->description;?>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




