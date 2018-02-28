<?php
$url = Yii::app()->createUrl('/gallery/gallery/image', ['id' => $data->image->id]);
?>
<a rel="works" style="width: 150px; padding:10px; float:left;" href="<?= $data->image->getImageUrl();?>" class="fancybox"><img src="<?= $data->image->getImageUrl(300, 300);?>" alt="" class="gallery-image" style="width:100%;"></a>
