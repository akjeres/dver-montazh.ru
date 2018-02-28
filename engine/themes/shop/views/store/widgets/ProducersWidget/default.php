<?php
/**
 * @var array $brands
 * @var Producer $brand
 */
?>
<?php if ($brands): ?>

                <div class="text-center"><h3>Магазин дверей HomeDoorse является официальным дилером:</h3></div>
            <ul class="list-inline list-unstyled">
                    <?php foreach ($brands as $brand): ?>
                        <li>
                            <a href="<?= Yii::app()->createUrl('/store/producer/view', ['slug' => $brand->slug]) ?>" title="<?= $brand->name ?>">
                                <img src="<?= StoreImage::producer($brand, 120, 120,false);?>" class="best-brands__img" alt="<?= $brand->name ?>">
                            </a>
                        </li>
                    <?php endforeach; ?>
            </ul>
            </div>

<?php endif; ?>
