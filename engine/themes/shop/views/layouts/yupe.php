<!DOCTYPE html>
<html lang="<?= Yii::app()->getLanguage(); ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta name="viewport" content="initial-scale = 1" />
    <meta http-equiv="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <?php
    \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_START);

    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/normalize.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css?0');
    //Yii::app()->getClientScript()->registerCssFile('/libs/fancybox/jquery.fancybox.css');
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <META NAME="Robots" CONTENT="all">
    <META NAME="Document-state" CONTENT="Dynamic">
    <META NAME="Revizit-after" CONTENT="2 days">




    <title><?= $this->title;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta name="keywords" content="<?= $this->keywords;?>" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>

    <?php
    //Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/slick.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/libs/select2/select2.css');
    //Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/common.css');
    ?>

    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
        var yupeCartDeleteProductUrl = '<?= Yii::app()->createUrl('/cart/cart/delete/')?>';
        //var yupeCartUpdateUrl = '<?= Yii::app()->createUrl('/cart/cart/update/')?>';
        //var yupeCartWidgetUrl = '<?= Yii::app()->createUrl('/cart/cart/widget/')?>';
    </script>
    <?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_END);?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>





<?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_START);?>
<header>
    <nav id="nav-top" class="hidden-xs">
        <div class="container">
            <div class="navbar-left">
            <?php if (Yii::app()->hasModule('menu')): ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu',
                    'layout' => 'top'
                ]); ?>
            <?php endif; ?>
            </div>
            <div class="navbar-right">

            </div>
        </div>
    </nav>



    <div class="grey header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-xs-12">
                    <a class="navbar-brand" href="/"><img src="<?php echo $this->mainAssets;?>/img/logo.svg" alt="Магазин дверей Varadoor в Санкт-Петербурге ХоумДорс" title="Магазин дверей Varadoor в Санкт-Петербурге ХоумДорс" /></a>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="distributor text-center">
                        <div>Официальный дилер:</div>
                        <div><a href="/store/brand/varadoor">Двери Varadoor</a></div>
                        <div id="header-text">цены от производителя</div>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs hidden-sm">
                   <div class="text-center">

                       <div>Время работы</div>
                       <div>c 11:00 до 20:00</div>
                       <div><a href="https://vk.com/dveri_mario_rioli_spb" target="_blank"><i class="fa fa-vk"></i> Мы ВКонтакте</a></div>

                   </div>
                </div>
                <div class="col-md-5 col-sm-7 col-xs-12">
                    <div class="telephones  pull-right">
                        <!--div class="hidden-xs"><a href="tel://+78126467046">+7 (812) 646 70 46</a></div-->
                        <div><a href="tel://+78126467046">+7 (812) 646 70 46</a></div>
                        <div><a href="tel://+78129053004">+7 (812) 905 30 04</a></div>
                        <div><a href="tel://+78126768554">+7 (812) 676 85 54</a></div>
                        <!--div class="hidden-xs"><a href="tel://+78126768554">+7 (812) 676 85 54 </a></div-->

                    </div>

                    <div class="metro pull-right">
                        <div><a href="/contacts#shop1"><span>м.</span> Ленинский проспект</a></div>
                        <div><a href="/contacts#shop3"><span>м.</span> Звездная</a></div>
                        <div><a href="/contacts#shop2"><span>м.</span> Комендантский проспект</a></div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <nav id="nav-main" class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="btn-catalog navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <div class="btn-cat-title">Каталог дверей</div>
                </button>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-main-nav">
                <?php if (Yii::app()->hasModule('menu')): ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'main-menu','layout'=>'main']); ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'main2','layout'=>'main_right']); ?>
                <?php endif; ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>

<section>
    <div class="container">
        <?php $this->widget('yupe\widgets\YFlashMessages'); ?>
        <!-- breadcrumbs -->
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
    </div>
</section>

<?= $content ?>
<section class="our-shops">
    <div class="container">
        <div class="centered">
            <img src="/img/geo.svg" />Посетите один из наших <a href="/contacts">магазинов</a>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu','layout'=>'bot','layoutParams'=>['title'=>'О компании']]); ?>

            </div>
            <div class="col-md-3">
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'customer-menu','layout'=>'bot','layoutParams'=>['title'=>'Покупателю']]); ?>
            </div>
            <div class="col-md-3">
                <?php //$this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'catalog-menu','layout'=>'bot','layoutParams'=>['title'=>'Каталог']]); ?>
                <h4>Каталог</h4>
                <?php $this->widget('application.modules.store.widgets.ProducersWidget', ['view'=>'bot']); ?>
            </div>

            <div class="col-md-3">
                <h4>Наши магазины</h4>
                <p>
                <div class="f-metro">
                    <div><a href="/contacts"><strong>м.</strong> Ленинский проспект</a></div>
                    <div><a href="/contacts"><strong>м.</strong> Звездная</a></div>
                    <div><a href="/contacts"><strong>м.</strong> Комендантский проспект</a></div>
                </div>
                    <br />
                    <strong><i class="fa fa-phone"></i></strong> +7 (812) 905-30-04<br />
                    <strong><i class="fa fa-envelope"></i></strong> masterdverey@gmail.com<br />
                    <a href="https://vk.com/dveri_mario_rioli_spb" target="_blank"><i class="fa fa-vk"></i> мы Вконтакте</a>



                </p>

                <div>
                    Принимаем к оплате:<br />
                    <img src="/img/mc.png" />
                    <img src="/img/visa.png">
                </div>
            </div>

        </div>

        <div class="row" style="margin-top: 40px">
		<!--noindex-->
            <div class="col-md-3">
                <a href="http://randywendy.ru" rel="nofollow" target="_blank">Дизайн и программирование сайта RandyWendy</a>
            </div>
		<!--/noindex-->
            <div class="col-md-6">
                <div class="centered">
                    © ООО «Хоум Дорс» 2003-2018 г
                </div>
            </div>
        </div>
    </div>

</footer>


<div class="modal fade" id="ordermodal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="modaltitle">Свяжитесь с нами!</h5>
            </div>
            <div class="modal-body">
                <div id="cbtext">
                    <p>Позвоните нам по телефону:</p>

                    <div class="h1">8 (812) 905 30 04</div>
                    <hr />
                    <p>или оставьте свой телефон - мы Вам перезвоним:</p>
                </div>
                <div id="spectext" style="display:none;">
                    <p>Наш специалист позвонит Вам и подъедет в любое удобное время на объект. Просто оставьте заявку или позвоните по телефону 8 (812) 905 30 04</p>
                </div>
                <div id="doortext" style="display:none;">
                    <p>Отправьте заявку на покупку двери и мы свяжемся с Вами! Наш телефон для связи: 8 (812) 905 30 04</p>
                </div>

                <div class="alert" id="myModalAlert" style="display: none"></div>

                <p id="result" style="display:none"></p>
                <p id="error" class="r" style="display:none; color:#f20"></p>
                <form class="form-horizontal" id="order-form">


                    <div class="form-group" style="display: none;" id="doorInp">
                        <label class="col-md-3">Модель</label>
                        <div class="col-md-9">
                            <input type="text" name="FeedBackForm[theme]" class="form-control" id="door-i">
                        </div>
                    </div>

                    <div class="form-group" id="contact">
                        <label class="col-md-3">Ваше имя</label>
                        <div class="col-md-9">
                            <input type="text" name="FeedBackForm[name]" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group" id="phone" style="display: block;">
                        <label class="col-md-3">Телефон</label>
                        <div class="col-md-9">
                            <input type="text" name="FeedBackForm[phone]" class="form-control" id="phone-i" required="">
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">

                        <div class="col-md-9">
                            <input type="text" name="FeedBackForm[type]" class="form-control" id="type" required="">
                        </div>
                    </div>
                    <div class="form-group" id="comment" style="display: none;">
                        <label class="col-md-3">Сообщение</label>
                        <div class="col-md-9">
                            <textarea rows="6" cols="30" placeholder="Сообщение" class="form-control" name="FeedBackForm[text]" id="commenttext">Требуется обратный звонок</textarea>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <div class="pull-left">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
                <div class="right">
                    <button type="submit" class="btn btn-success" id="order-send" form="order-form">Отправить</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47772226 = new Ya.Metrika2({
                    id:47772226,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47772226" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-90617516-4', 'auto');
    ga('send', 'pageview');

</script>

<?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_END);?>
<div class='notifications top-right' id="notifications"></div>







<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>


<script>
    $(document).ready(function () {

        var slides = ['Акция!','Двери за 1 день','Двери Varadoor','Фурнитура в подарок',/*,'Установка дверей','Скидка 10%',*/'"Катрин" за 5250'];
        //initialize swiper when document ready
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            pagination: '.swiper-pagination',
            // Navigation arrows
            //nextButton: '.swiper-button-next',
            //prevButton: '.swiper-button-prev',
            autoplay: 8000,
            paginationClickable: true,
            paginationBulletRender: function (index, className) {
                return '<span class="' + className + '">' + slides[index] + '</span>';
            },
            calculateHeight: true,
            //'effect':'fade',

        });


    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<?php
//Yii::app()->getClientScript()->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.cycle2.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/app.js', CClientScript::POS_END);


//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/index.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.collapse.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.collapse_storage.js', CClientScript::POS_END);

//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/overlay.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/product-gallery.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.yiilistview.js', CClientScript::POS_END);

//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tabs.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/toggle.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/libs/select2/select2.min.js', CClientScript::POS_END);
//Yii::app()->getClientScript()->registerScriptFile('/libs/fancybox/jquery.fancybox.pack.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/store.js', CClientScript::POS_END);
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {

        /* This is basic - uses default settings */

        $("a.fancybox").fancybox();



    });
    $('.btn-door').click(function(){
        $('#door-i').val($(this).data('info'));

        $('#ordermodal').modal('show');
    });
    $('#order-send').on('click',function(){



        var data = $('#order-form').serialize();
        data+='&'+yupeTokenName+'='+yupeToken;



        $.post('/contacts',data,function(data){
            if(data.result==true) {
                $('#error').text('Заявка принята. Ожидайте звонка').show();
                $('#order-form').hide();
            } else {
                $('#error').text('Укажите ваш контактный телефон и имя').show();

            }
        },'json');
        return false;
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


    $(document).ready(function () {

        // var slides = ['Фурнитура в подарок','Установка бесплатно','Скидка 10%','"Катрин" за 5250','Настоящая Италия'];
        // //initialize swiper when document ready
        // var mySwiper = new Swiper ('.swiper-container', {
        //     // Optional parameters
        //     direction: 'horizontal',
        //     loop: true,
        //     pagination: '.swiper-pagination',
        //     // Navigation arrows
        //     //nextButton: '.swiper-button-next',
        //     //prevButton: '.swiper-button-prev',
        //     autoplay: 2500,
        //     paginationClickable: true,
        //     paginationBulletRender: function (index, className) {
        //         return '<span class="' + className + '">' + slides[index] + '</span>';
        //     },
        //     calculateHeight: true,
        //     //'effect':'fade',

        //});


    });

    // $(function () {
    //     $('[data-toggle="tooltip"]').tooltip()
    // })




</script>


<script type="text/javascript">
    $map = $('#client-map-wrapper');
    if ($map.length > 0) {
        function inituser() {
            var _inituser = $map;

            var spbCoords = [59.939095, 30.315868];
            var coord1 = [59.852081, 30.238487];
            var coord2 = [60.001635,30.266784];
            var coord3 = [59.832059,30.338362];

            var desc1='<strong>м Ленинский проспект</strong><br />'+
                'ТК "Загородный Дом"<br />'+
                'Ленинский проспект 140, 4 этаж, секция 421<br />'+
                'Тел.: 905-30-04<br />'+
                'Тел.: 646-70-46<br />'+
                'Часы работы с 11:00 до 20:00 (без выходных).<br />';
            var desc2='<strong>м Коменданский проспект</strong><br />'+
                'ТК «Круиз»<br />'+
                'Коменданский проспект д.4 к.2 секция 037<br />'+
                'Тел.: 905-30-04<br />'+
                'Тел.: 676-85-54<br />'+
                'Часы работы с 11:00 до 20:00 (без выходных).';
            var desc3='<strong>м Звездная</strong><br />'+
                'ТК «Торговый Двор»<br />'+
                'Московское шоссе д. 7А секция 7-2<br />'+
                'Тел.: 905-30-04<br />'+
                'Часы работы с 11:00 до 20:00 (без выходных).';

            var MyMap = window.map = new ymaps.Map('client-map', {
                center   : spbCoords,
                zoom     : 10,
                behaviors: [
                    'default'
                ]
            });
            search = new ymaps.control.SearchControl({
                    useMapBounds: true,
                    noPlacemark : true
                }
            );

            console.log(MyMap);
            MyMap.controls.add(search);
            MyMap.controls.add('zoomControl');
            MyMap.controls.add('mapTools');
            MyMap.controls.add('typeSelector');
            MyMap.controls.add('scaleLine');
            MyMap.cursors.push('crosshair');

            var updateHtmlCoords = function (coords) {
                if (coords != spbCoords) {
                    $lat = $map.find('.coord').find('.lat').html(coords[0] + '&#176;');
                    $lon = $map.find('.coord').find('.lon').html(coords[1] + '&#176;');
                    $('.address').val(_inituser.placemark.properties.get('balloonContent'));
                    $('.address').addClass("has-content");

                    $('input[name=inpcoordslat]').val(coords[0]);
                    $('input[name=inpcoordslon]').val(coords[1]);
                }
            };

            var updateAddress = function (coords) {
                ymaps
                    .geocode(coords)
                    .then(function (res) {
                        var firstGeoObject = res.geoObjects.get(0);
                        _inituser.placemark.properties.set({
                            balloonContent  : firstGeoObject.properties.get('name')
                        });
                        MyMap.setCenter(coords);
                        updateHtmlCoords(coords);
                    })
                ;
            };

            var updatePlacemark = function (coords, content) {
                //if (!_inituser.placemark) {
                _inituser.placemark   = new ymaps.Placemark(coords, {
                    hintContent : content,
                    balloonContent: content

                }, {
                    iconImageHref   : 'img/map-marker.png',
                    iconImageSize   : [58, 64],
                    iconImageOffset : [2, -64],
                    draggable       : false,
                });
                MyMap.geoObjects.add(_inituser.placemark);
                // } else {
                //     _inituser.placemark.geometry.setCoordinates(coords);
                //     _inituser.placemark.properties.set(coords);
                // }
                //updateAddress(coords);
            }

            //updatePlacemark(spbCoords);
            updatePlacemark(coord1, desc1);
            updatePlacemark(coord2, desc2);
            updatePlacemark(coord3, desc3);
            //updateHtmlCoords(spbCoords);

            // search.events.add('resultselect', function (e) {
            //     var results = search.getResultsArray();
            //     var selected= e.get('resultIndex');
            //     var coords  = results[selected].geometry.getCoordinates();
            //     updatePlacemark(coords);
            //     updateHtmlCoords(coords);
            // });

            // MyMap.events.add('click', function (e) {
            //     var coords  = e.get('coordPosition').map(function (point) {
            //         return point.toPrecision(8);
            //     });
            //     updatePlacemark(coords);
            //     updateHtmlCoords(coords);
            // });
        }
        ymaps.ready(inituser);

        var url = document.location.toString();
        if (url.match('#')) {
            $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
        }

    }

    $( document ).ready(function() {
        $('.address a').click(function(){
            if ($(this).attr('href').indexOf('shop1') !== -1) $('.nav-tabs a[href="#' + 'shop1' + '"]').tab('show');
            if ($(this).attr('href').indexOf('shop2') !== -1) $('.nav-tabs a[href="#' + 'shop2' + '"]').tab('show');
            if ($(this).attr('href').indexOf('shop3') !== -1) $('.nav-tabs a[href="#' + 'shop3' + '"]').tab('show');
        });
    });
</script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'Okf7Eyk0G7';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->



</body>
</html>