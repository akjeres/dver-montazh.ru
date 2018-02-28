<li>
    <a href="<?= ProductHelper::getUrl($product); ?>">
        <div class="more-img">
            <div class="more-img-wrap"><span class="img-helper"></span><img src="<?= $product->getImageUrl(90, 148, false); ?>" style=""/></div>
        </div>
        <div class="more-title"><?= Chtml::encode($product->getName()); ?></div>
        <div class="more-price"><?= $product->getResultPrice(); ?> руб</div>

    </a>
    
</li>