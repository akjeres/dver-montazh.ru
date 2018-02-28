<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');
/* @var $category StoreCategory */

$this->title =  $category->getMetaTile();
$this->description = $category->getMetaDescription();
$this->keywords =  $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog") => ['/store/product/index']];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs(false),
    [Yii::t("StoreModule.store", 'Catalog') => '/store',
    //Yii::t('StoreModule.store', 'Producers list') => ['/store/producer'],
    //CHtml::encode($category->name)
    ]

);

?>
<section id="breadcrumbs">
    <div class="container">

    </div>
</section>

<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-3 hidden-xs">
                <div class="search ">
                    <div class="catalog-filter">
                        <form id="store-filter" name="store-filter" method="get">
                            <?php $this->widget('application.modules.store.widgets.filters.PriceFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.CategoryFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.ProducerFilterWidget', ['limit' => 30]); ?>
                            <?php /*$this->widget('application.modules.store.widgets.filters.FilterBlockWidget', [
                                'category' => $category
                            ]);*/ ?>
                            <div class="catalog-filter__button"><input type="submit" value="Подобрать" class="btn btn-success"/></div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-10 col-sm-9 col-xsl-12">


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


                <h1><?= CHtml::encode($category->name); ?></h1>

                <div class="mini-filter">

                    <?php if($category->parent_id==1||$category->id==1):?>
                    По типу:
                    <a href="/store/mezhkomnatnye-dveri/shponirovannye" class="btn btn-success">Шпон</a>
                    <a href="/store/mezhkomnatnye-dveri/ekoshpon" class="btn btn-success">Экошпон</a>
                    <a href="/store/mezhkomnatnye-dveri/emal" class="btn btn-success">Эмаль</a>
                    <br />
                    <br />
                    По бренду:
                    <a href="/store/brand/varadoor" class="btn btn-success">Варадор</a>
                    <a href="/store/brand/dream-doors" class="btn btn-success">DreamDoors</a>
                        <?php endif;?>
                </div>

                <br />

                    <?php $this->widget(
                        'zii.widgets.CListView', [
                            'dataProvider' => $dataProvider,
                            'itemView' => '//store/product/_item',
                            'template' => '
                        <div class="catalog-controls pull-right list-view">
                            <div class="catalog-controls__col">{sorter}</div>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="items-catalog list-unstyled list-inline">
                                {items}
                                </ul>
                                {pager}
                            ',
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
                            //'itemsCssClass' => 'catalog__items',
                            'sortableAttributes' => [
                                //'sku',
                                'name',
                                'price',
                                //'update_time',
                                'producer_id',
                            ],
                            'sorterHeader' => '<div class="sorter__description">Сортировать:</div>',
                            'sorterCssClass'=>'sorter',
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



                <div class="promo">

                    <div>
                        <img src="<?php echo $category->getImageUrl();?>" alt="<?php echo $category->image_alt;?>" title="<?php echo $category->image_title;?>">
                    </div>
                        <div class="text">
                                <?php if($category->short_description!=''):?>
                                    <div class="short-text">
                                        <?php echo $category->short_description;?>

                                    </div>

                                    <div class="full-text" style="display: block">
                                        <?php echo $category->description;?>
                                    </div>
                                <?php endif;?>
                            </div>

                </div>


            </div>
        </div>
    </div>
</section>


<section class="more-items brand-items">
    <div class="container">
        <?php $this->widget('application.modules.store.widgets.ProducersWidget', ['limit' => 25]) ?>

    </div>
</section>
