<?php

$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

/* @var $category StoreCategory */

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog")];

$this->description = 'В полном каталоге дверей и фурнитуры представлены коллекции доступные в нашем магазине в СПб';
$this->title='Каталог дверей и фурнитуры';
?>

<section id="breadcrumbs">
    <div class="container">
       
    </div>
</section>

<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-md-2 hidden-xs">
                <div class="search grey">
                    <div class="catalog-filter">
                        <form id="store-filter" name="store-filter" method="get">
                            <?php $this->widget('application.modules.store.widgets.filters.QFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.PriceFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.CategoryFilterWidget'); ?>
                            <?php $this->widget('application.modules.store.widgets.filters.ProducerFilterWidget', ['limit' => 30]); ?>
                            <?php //$this->widget('application.modules.store.widgets.filters.FilterBlockWidget', ['attributes' => '*']); ?>
                            <div class="catalog-filter__button"><input type="submit" value="Подобрать" class="btn btn-success"/></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <h1>Каталог дверей и фурнитуры</h1>


                <?php /* По бренду: <a href="#" class="btn btn-success">Varadoor</a><br /> */?>

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

                    <ul class="items-catalog list-unstyled list-inline">
                    <?php $this->widget(
                    'zii.widgets.CListView', [
                        'dataProvider' => $dataProvider,
                        'itemView' => '_item',
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
            </div>
        </div>
    </div>
</section>


