<?php if ($dataProvider->getTotalItemCount()): ?>

        <div class="text-center">
            <h2>Похожие модели</h2>
        </div>

        <ul class="more-doors list-inline list-unstyled">

            <?php $this->widget(
                'zii.widgets.CListView',
                [
                    'dataProvider' => $dataProvider,
                    'template' => '{items}',
                    'itemView' => '_item',
                    'itemsCssClass' => 'h-slider__slides js-slick__container',
                    'cssFile' => false,
                    'pager' => false,
                ]
            ); ?>

        </ul>


<?php endif; ?>