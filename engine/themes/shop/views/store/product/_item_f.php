<?php
/**
 * @var Product $data
 */
?>
<li style="height:200px;">
    <a href="<?= StoreImage::product($data) ?>" class="fancybox">
    <div class="more-img"><img src="<?= StoreImage::product($data, 150, 280, false) ?>" alt="<?= CHtml::encode($data->getImageAlt()); ?>" title="<?= CHtml::encode($data->getImageTitle()); ?>" style="margin-top:10px;"/></div>
    <div class="more-title"><?= CHtml::encode($data->getName()); ?></div>
    <p><b><?= $data->getProducerName(); ?></b></p>
    <div class="more-price"><?php if($data->getResultPrice()>$data->getBasePrice()):?><?php echo number_format($data->getBasePrice(), 0, ' ', ' ').' - '.number_format($data->getResultPrice(), 0, ' ', ' ') ?> руб<?php else:?><?php echo number_format($data->getBasePrice(), 0, ' ', ' ');?><?php endif;?> руб</div>
    </a>
</li>
