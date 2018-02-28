<?php
/**
 * @var StoreCategory $category
 * @var array $products Product objects array
 * @var Product $product
 */
?>


<ul class="more-doors list-inline list-unstyled">

    <?php foreach ($products->getData() as $product): ?>
        <?php $this->render('_item', ['product' => $product]) ?>
    <?php endforeach; ?>

</ul>