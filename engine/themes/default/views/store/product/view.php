<?php

/* @var $product Product */

if($product->category_id==1 ) {
    $what = 'двери';
}
if($product->category_id==2 ) {
    $what = 'двери';
}

if($product->category_id==5 ) {
    $what = 'фурнитуру для дверей';
}

$this->title = 'Купить '.$what.' '.$product->getMetaTitle().' '.$product->producer->name_short.' в Санкт-Петербурге';
$this->description = $product->getMetaTitle().' производителя '.$product->producer->name_short.' доступны в Санкт-Петерубрге в наших салонах на Просвещения, Комендантском и Звездной.';//$product->getMetaDescription();
$this->keywords = $product->getMetaTitle().','.$product->producer->name.',купить, двери, фурнитура, Санкт-Петерубрге,Просвещения, Комендантском и Звездной';
$this->canonical = $product->getMetaCanonical();

Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/store.js', CClientScript::POS_END);


$brands = [1,2];
if(in_array($product->producer->id,$brands)) {
    $this->breadcrumbs = array_merge(
        [Yii::t("StoreModule.store", 'Catalog') => ['/store']],
        //$product->category ? $product->category->getBreadcrumbs(true) : [],
        ['Межкомнатные двери'=>['/store/mezhkomnatnye-dveri']],
        $product->producer->name ? [$product->producer->name=>'/store/brand/'.$product->producer->slug]:[],
        [CHtml::encode($product->name)]
    );
} else {
    $this->breadcrumbs = array_merge(
        [Yii::t("StoreModule.store", 'Catalog') => ['/store']],
        //$product->category ? $product->category->getBreadcrumbs(true) : [],
        [$product->category->name=>['/store/'.$product->category->slug]],
        $product->producer->name ? [$product->producer->name=>'/store/brand/'.$product->producer->slug]:[],
        [CHtml::encode($product->name)]
    );
}

$images = $product->getImages() 
?>

<style>

    .product-gallery__body {
        text-align: center;
    }
    .preview-img {

        position: absolute;
        top: -300px;
        width: 100%;
        z-index: -1;
        display: none;
        background-image: url(/img/fon.jpg);
        height: 980px;
        background-size: auto 980px;
        background-position: center top;
        background-repeat: no-repeat;
        opacity: 0.8;
    }
    #item {
        margin-bottom: 50px;
    }

    .tab-pane {
        padding-top: 20px;
    }


</style>

<style>
    .tab-content h2 {
        display: none;
    }
</style>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "<?php echo $this->title;?>",
  "image": "<?= StoreImage::product($product); ?>",
  "description": "<?php echo strip_tags($product->description);?>",
  "mpn": "<?php echo $product->id;?>",
  "brand": {
    "@type": "Brand",
    "name": "<?php echo $product->producer->name_short;?>"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "ratingCount": "134",
    "worstRating":"1",
    "bestRating":"5"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "RUB",
    "price": "<?php echo $product->getResultPrice();?>",
    "priceValidUntil": "<?php echo date('Y-m-d',time()+76400);?>",
    "itemCondition": "http://schema.org/UsedCondition",
    "availability": "в наличии",
    "seller": {
      "@type": "Organization",
      "name": "ХоумДорс"
    }
  }
}
</script>


<!-- -------------------------------- -->

<section id="item">
    <div class="container">
        <div class="centered">
            <h1><?= CHtml::encode($product->getTitle()); ?></h1>
            <div><!--span><a href="#" class="dot">Описание</a></span--> <span><!--a href="#" class="dot" onclick="$('.preview-img').fadeToggle(1000);return false;">В интерьере</a--></span></div>
        </div>
    </div>

    <div class="preview-wrap" style="position: relative">

        <div class="preview-img"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-sm-7 bcg-info hidden-xs">
                    <div class="">

                        <div class="h1">Цена: <span  id="result-price"><?= number_format(round($product->getResultPrice(), 2), 0, ' ', ' '); ?></span> <i class="fa fa-rub"></i></div>


                        <div class="product-gallery js-product-gallery" style="margin: auto; text-align: center; margin-top:20px;">
                            <div class="product-gallery__nav">
                                <!--a href="<?= StoreImage::product($product); ?>" rel="group" data-product-thumbnail
                       class="product-gallery__nav-item">
                        <img src="<?= $product->getImageUrl(60, 60, false); ?>" alt=""
                             class="product-gallery__nav-img">
                    </a-->
                                <?php foreach ($images as $key => $image): if(!$image->art) continue;?>
                                    <a href="<?= $image->getImageUrl(); ?>" rel="group-<?php echo $image->group?$image->group->name:'';?>" data-product-thumbnail
                                       class="product-gallery__nav-item img-color-<?php echo $image->group?$image->group->name:'';?>" id="a-<?php echo $image->art;?>">
                                        <img src="<?= $image->getImageUrl(150, 150, false); ?>" alt=""
                                             class="product-gallery__nav-img">
                                    </a>

                                <?php endforeach; ?>
                            </div>
                            <script>
                                $('.product-gallery__nav a').hide();
                                $('.product-gallery__nav a.img-color-1').show();
                                $('.product-gallery__nav-item').click(function(){
                                    var d = $(this).attr('id');
                                    var dd = d.split('-');
                                    var c = dd[1];
                                    var s = dd[2];

                                    if(s==undefined) {
                                        s=c;
                                    } else {

                                    }
                                    $("#vg-6 option[data-sku='"+c+"']").prop("selected", true);
                                    $("#vg-7 option[data-sku='"+s+"']").prop("selected", true);

                                    var d_price = parseInt($('#vg-7 select option:selected').data('amount'));
                                    $('#result-price').text(parseInt($('#base-price').val())+d_price);
                                });
                            </script>
                        </div>


                        <input type="hidden" id="base-price"
                               value="<?= round($product->getResultPrice(), 2); ?>"/>
                        <?php if ($product->hasDiscount()): ?>
                            <div class="product-price product-price_old"><?= number_format(round($product->getBasePrice(), 2), 0, ' ', ' '); ?><span class="ruble"> <?= Yii::t("StoreModule.store", Yii::app()->getModule('store')->currency); ?></span></div>
                        <?php endif; ?>


                        <?php if ($product->getVariantsGroup()): ?>

                            <div class="entry__variants">
                                <?php foreach ($product->getVariantsGroup() as $title => $variantsGroup): ?>

                                    <div class="entry__variant" id="vg-<?php echo $variantsGroup[0]->attribute->group_id;?>">
                                        <div class="entry__variant-title"><?= CHtml::encode($title); ?></div>
                                        <div class="entry__variant-value">
                                            <?=
                                            CHtml::dropDownList('ProductVariant[]', null, CHtml::listData($variantsGroup, 'id', 'optionValue'), [
                                                'empty' => '--выберите--',
                                                'class' => 'js-select2 entry__variant-value-select noborder',
                                                'options' => $product->getVariantsOptions()
                                            ]); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <script>
                                $('#vg-6 select').on('change',function(){
                                    var val = $(this).find('option:selected').data('sku');

                                    $('.product-gallery__nav a').hide();
                                    $('.product-gallery__nav a.img-color-'+val).show();

                                });

                                $('#vg-7 select').on('change',function(){
                                    var c = $('#vg-6 select').find('option:selected').data('sku');
                                    if(!c) c = 1;
                                    var s = $(this).find('option:selected').data('sku');
                                    console.log('#a-'+c+'-'+s);
                                    $('#a-'+c+'-'+s).click();

                                });
                            </script>
                        <?php endif; ?>

                        <?php /* foreach ($product->getAttributeGroups() as $groupName => $items): ?>
                            <h2 class="h3 product-spec__header"><?= CHtml::encode($groupName); ?></h2>
                            <?php foreach ($items as $attribute): ?>
                                <dl class="product-spec-item">
                                    <dt class="product-spec-item__name">
                                            <span class="product-spec-item__name-inner">
                                                <?= CHtml::encode($attribute->title); ?>
                                            </span>
                                    </dt>
                                    <dd class="product-spec-item__value">
                                            <span class="product-spec-item__value-inner">
                                                <?= AttributeRender::renderValue($attribute, $product->attribute($attribute)); ?>
                                            </span>
                                    </dd>
                                </dl>
                            <?php endforeach; ?>
                        <?php endforeach; */ ?>

                        <!--div>Фурнитура: <a href="#" class="dot">рекомендуемая</a></div>
                        <div>Стекло: <a href="#" class="dot">алла</a></div>
                        <div>Шпон: <strong>дуб</strong></div-->

                        <div class="short-text">
                            <?php echo $product->description;?>

                        </div>




                        <!--table>
                            <tr><td>    <label for="test1">Red</label></td><td><input id="test1" type="checkbox" class="" /></td><td>1200 p</td></tr>
                            <tr><td>Наличник</td><td><input type="checkbox" class="" /></td><td>1200 p</td></tr>
                        </table-->
                    </div>

                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="h1 visible-xs text-center">

                            Цена: <span  id="result-price"><?= number_format(round($product->getResultPrice(), 2), 0, ' ', ' '); ?></span> <i class="fa fa-rub"></i>

                    </div>

                            <!--img src="<?= StoreImage::product($product); ?>"
                                 class="product-gallery__main-img"
                                 alt="<?= CHtml::encode($product->getImageAlt()); ?>"
                                 title="<?= CHtml::encode($product->getImageTitle()); ?>"
                                 style="margin-top:20px; height:420px;"
                            -->


                            <div class="product-gallery js-product-gallery">
                                <div class="product-gallery__body">

                                    <div data-product-image class="">
                                        <img src="<?php echo $product->getImageUrl(220,450,false);?>"
                                             class="product-gallery__main-img"
                                             alt="<?= CHtml::encode($product->getImageAlt()); ?>"
                                             title="<?= CHtml::encode($product->getImageTitle()); ?>"
                                            >
                                    </div>
                                    <div class="text-center" style="margin-top: 20px">
                                        <a href="<?php echo $product->getImageUrl();?>" rel="gal1" class="fancybox btn btn-success">открыть галлерею</a>
                                    </div>


                                    <?php if ($product->isSpecial()): ?>
                                        <div class="product-gallery__label">
                                            <div class="product-label product-label_hit">
                                                <div class="product-label__text">Хит</div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                    </div>
                    <div class="col-md-4 col-sm-12">

                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-sm-6">
                                    <button class="btn-door" data-info="Бронь модели">
                                        <img src="/img/lock.svg" /><br />
                                        Заказать сейчас
                                    </button>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6 hidden-xs">
                                    <button class="btn-door" data-info="Вызов замерщика">
                                        <img src="/img/mesure.svg" height="100px" /><br />
                                        Вызвать замерщика


                                    </button>
                                </div>
                                <!--div class="col-md-6">
                                    <button class="btn-door" data-info="Загрузить каталог">
                                        <img src="/img/catalog.svg" /><br />
                                        Загрузить каталог
                                    </button>
                                </div-->
                            </div>

                            <div style="margin-top: 20px">
                                Вы можете купить <strong><?= $what;?> <?= $product->getMetaTitle();?> <?= $product->producer->name_short;?></strong> в Санкт-Петербурге в нашем салоне рядом с метро Проспект просвещения, Звездная или Комендантский проспект. Забронируйте модель на сайте, приходите в <a href="/contacts">магазин</a> или позвоните по телефону +7 (812) 905 30 04
                            </div>



                            <div class="row">

                                <?php $hasTitle = false;?>
                                <?php foreach ($images as $key => $image): ?>
                                    <?php if($image->title=='g'):?>
                                        <?php if(!$hasTitle):?>
                                            <div class="col-xs-12"><h4 style="margin-top:15px;">Галерея товара</h4></div>

                                            <?php $hasTitle = true; endif;?>
                                        <div class="col-xs-6">

                                            <a href="<?= $image->getImageUrl(); ?>" class = "fancybox" rel="gallery">
                                                <img src="<?= $image->getImageUrl(150, 150, false); ?>" alt="<?php echo $product->getTitle();?>" width = "100%"
                                                    >
                                            </a>

                                        </div>
                                    <?php endif;?>

                                <?php endforeach; ?></div>


                </div>

            </div>

        </div>
    </div>
</section>


<section class="section-tabs">
    <div class="container">
        <div>


            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <?php if(count($images)>0):?>
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Галлерея</a>
                </li>
                <?php endif;?>
                <li role="presentation" class="<?php if(count($images)==0):?>active<?php endif;?>"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Описание</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Похожие модели</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php if(count($images)>0):?>
                <div role="tabpanel" class="tab-pane active" id="home">
                    <ul class="list-inline list-unstyled product-mini-gallery" style="margin-top: 0px">
                        <?php foreach ($images as $key => $image): if($image->art) continue;?>
                            <li>
                                <a class="fancybox" href="<?= $image->getImageUrl(); ?>" rel="gal1">
                                    <img src="<?= $image->getImageUrl(300, 300, false); ?>" alt=""
                                         class="">
                                </a>
                            </li>

                        <?php endforeach; ?>
                    </ul>

                </div>
                <?php endif;?>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <?php echo $product->short_description;?>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <?php $this->widget('application.modules.store.widgets.LinkedProductsWidget',['product'=>$product]); ?>
                </div>

            </div>

        </div>
    </div>
</section>


<section class="more-items grey">
    <div class="container">
        <?php $this->widget('application.modules.store.widgets.ProductsFromCategoryWidget', ['slug' => $product->category->slug, 'limit'=>'6']); ?>

    </div>
</section>
<section class="more-items ">
    <div class="container">
        <ul class="more-doors list-inline list-unstyled">

            <?php $this->widget('application.modules.store.widgets.ProductsFromCategoryWidget', ['slug' => 'furnitura', 'limit'=>'6']); ?>

        </ul>
    </div>
</section>




