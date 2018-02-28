<?php
/**
 * @var Product $data
 */
?>
<li>
    <a href="<?= ProductHelper::getUrl($data); ?>">
        <?php if($data->is_special):?><div class="special">Акция %</div><?php endif;?>
        <div class="producer"  data-toggle="tooltip" data-placement="right" title="Производитель: <?php echo $data->producer->name;?>"><img src="<?php echo $data->producer->getImageUrl(200,100,false);?>" /></div>

        <div class="more-img">

                <img src="<?= StoreImage::product($data, 150, 280, false) ?>" alt="<?= CHtml::encode($data->getImageAlt()); ?>" title="<?= CHtml::encode($data->getImageTitle()); ?>"/>


        </div>
        <div class="more-wrap">
            <div class="more-title"><?= CHtml::encode($data->getName()); ?></div>
            <div class="more-price"><?php if($data->getPrice()>$data->getBasePrice()):?><?php echo number_format($data->getBasePrice(), 0, ' ', ' ').' - '.number_format($data->getPrice(), 0, ' ', ' ') ?> <?php else:?>от <?php echo number_format($data->getBasePrice(), 0, ' ', ' ');?><?php endif;?> руб</div>
        </div>
    </a>
</li>
