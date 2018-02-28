<?php
$this->title = Yii::t('NewsModule.news', 'News');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'News')];
?>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="main__title grid">
                <h1 class=""><?= Yii::t('NewsModule.news', 'News'); ?></h1>
            </div>
            <div class="main__catalog grid">
                <div class="row">
                    <?php
                    $this->widget(
                        'zii.widgets.CListView',
                        [
                            'dataProvider' => $dataProvider,
                            'itemView' => '_item',
                            'template' => "{items}\n{pager}",
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
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
                </div>
            </div>

        </div>
    </div>
</div>