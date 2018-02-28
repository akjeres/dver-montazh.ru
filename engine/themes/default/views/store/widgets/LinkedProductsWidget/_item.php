<li>
    <a href="<?= ProductHelper::getUrl($data); ?>">
        <div class="more-img-wrap"><img src="<?= $data->getImageUrl(90, 148, false); ?>" style=""/></div>
        <div class="more-title"><?= Chtml::encode($data->getName()); ?></div>
        <div class="more-price"><?= $data->getResultPrice(); ?> руб</div>

    </a>

</li>