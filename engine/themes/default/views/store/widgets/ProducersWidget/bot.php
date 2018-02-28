<?php
/**
 * @var array $brands
 * @var Producer $brand
 */
?>
<?php if ($brands): ?>

    <ul class="">
        <li class="listItem top-menu__item"><a class="listItemLink" href="/store/mezhkomnatnye-dveri">Межкомнатные двери</a></li>
        <li class="listItem top-menu__item"><a class="listItemLink" href="/store/vhodnye-dveri">Входные двери</a></li>

        <?php foreach ($brands as $brand): ?>

            <li class="listItem top-menu__item"><a class="listItemLink" href="/store/brand/<?php echo $brand->slug;?>"><?= $brand->name ?></a></li>

        <?php endforeach; ?>


    </ul>

<?php endif;?>
