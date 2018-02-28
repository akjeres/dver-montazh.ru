<!DOCTYPE html>
<html lang="<?= Yii::app()->getLanguage(); ?>">

<head>
    <?php
    \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_START);

    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/normalize.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css');

    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <META NAME="Robots" CONTENT="all">
    <META NAME="Document-state" CONTENT="Dynamic">
    <META NAME="Revizit-after" CONTENT="2 days">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta http-equiv="viewport" content="width=1200" /><meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="msthemecompatible" content="no" /><meta http-equiv="cleartype" content="on" />
    <meta http-equiv="HandheldFriendly" content="True" /><meta http-equiv="format-detection" content="address=no" />
    <meta http-equiv="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="apple-mobile-web-app-status-bar-style" content="black-translucent" />


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
</head>

<body>

<div style="text-align: center; background-color: #7e5146; color:#fff">Новый сайт еще заполняется. Полный каталог все еще доступен на нашем <a href="http://old.dver-montazh.ru/">старом сайте old.dver-montazh.ru</a></div>

<?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_START);?>
<header>
    <nav id="nav-top">
        <div class="container">
            <?php if (Yii::app()->hasModule('menu')): ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu',
                    'layout' => 'top'
                ]); ?>
            <?php endif; ?>
        </div>
    </nav>

    <div class="grey header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a class="navbar-brand" href="/"><img src="<?php echo $this->mainAssets;?>/img/logo.svg" alt="Двери" /></a>
                </div>
                <div class="col-sm-3">
                    <div class="distributor text-center">
                        Официальный дилер:<br />
                        <a href="/store/brand/varador">Varador</a> <a href="/store/brand/mario-rioli">Mario Rioli</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="telephones  pull-right">
                        <div><a href="#">+7 (812) 905 30 04 </a></div>
                        <div><a href="#"></a></div>
                        <div>c 9:00 до 21:00</div>
                    </div>

                    <div class="metro pull-right">
                        <div><span>м.</span> Пр. Просвещения</div>
                        <div><span>м.</span> Звездная</div>
                        <div><span>м.</span> Комендантский проспект</div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <nav id="nav-main" class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
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
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'about-menu','layout'=>'bot','layoutParams'=>['title'=>'О компании']]); ?>

            </div>
            <div class="col-md-3">
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'customer-menu','layout'=>'bot','layoutParams'=>['title'=>'Покупателю']]); ?>
            </div>
            <div class="col-md-3">
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'catalog-menu','layout'=>'bot','layoutParams'=>['title'=>'Каталог']]); ?>
            </div>

            <div class="col-md-3">
                <h4>Наши магазины</h4>
                <p>
                    <strong>М</strong> Проспект Просвещения<br />
                    ТК «Строй Двор»<br />
                    Тел.: 905-30-04<br />
                    Тел.: 646-70-46<br />
                    Часы работы с 11:00 до 20:00 (без выходных).
                </p>
            </div>

            <div class="pull-left">
                Принимаем к оплате:<br />
                <img src="/img/mc.png" />
                <img src="/img/visa.png">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                Разработано: <a href="#">RandyWendy</a>
            </div>
            <div class="col-md-6">
                <div class="centered">
                    © ООО «Хоум Дорс» 2016 г
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37995055 = new Ya.Metrika({
                    id:37995055,
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
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37995055" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_END);?>
<div class='notifications top-right' id="notifications"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php
//Yii::app()->getClientScript()->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.cycle2.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/app.js', CClientScript::POS_END);


Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/index.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.collapse.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.collapse_storage.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/overlay.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/product-gallery.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tabs.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/toggle.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/libs/select2/select2.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/store.js', CClientScript::POS_END);
?>

<script type="text/javascript">
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
</script>
</body>
</html>