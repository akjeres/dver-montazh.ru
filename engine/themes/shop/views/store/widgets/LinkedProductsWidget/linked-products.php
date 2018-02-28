<?php if ($dataProvider->getTotalItemCount()): ?>

        <div class="text-center">
            <h2>Похожие модели</h2>
        </div>

        <ul class="more-doors list-inline list-unstyled">

            <?php $items = $dataProvider->getData(); $counter = 0;?>
            <?php foreach($items as $data):?>
        <li>
            <a href="<?= ProductHelper::getUrl($data); ?>">
                <div class="more-img-wrap"><img src="<?= $data->getImageUrl(90, 148, false); ?>" style=""/></div>
                <div class="more-title"><?= Chtml::encode($data->getName()); ?></div>
                <div class="more-price"><?= $data->getResultPrice(); ?> руб</div>

            </a>

        </li>
        <?php ++$counter;if($counter>=6) break; endforeach;?>
            <?php /* $this->widget(
                'zii.widgets.CListView',
                [
                    'dataProvider' => $dataProvider,
                    'template' => '{items}',
                    'itemView' => '_item',
                    'itemsCssClass' => 'h-slider__slides js-slick__container',
                    'cssFile' => false,
                    'pager' => false,
                ]
            ); */ ?>

        </ul>


<?php endif; ?>