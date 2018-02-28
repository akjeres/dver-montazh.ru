<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
/*$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];*/
$this->description = !empty($page->description) ? $page->description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->keywords) ? $page->keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="banner_1140x400.js"></script>
<script>
    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
    function init() {
        canvas = document.getElementById("canvas");
        anim_container = document.getElementById("animation_container");
        dom_overlay_container = document.getElementById("dom_overlay_container");
        var comp=AdobeAn.getComposition("D5386F38533FA44AAF249F0C7D5BF87C");
        var lib=comp.getLibrary();
        var loader = new createjs.LoadQueue(false);
        loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
        loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
        var lib=comp.getLibrary();
        loader.loadManifest(lib.properties.manifest);
    }
    function handleFileLoad(evt, comp) {
        var images=comp.getImages();
        if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }
    }
    function handleComplete(evt,comp) {
        //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
        var lib=comp.getLibrary();
        var ss=comp.getSpriteSheet();
        var queue = evt.target;
        var ssMetadata = lib.ssMetadata;
        for(i=0; i<ssMetadata.length; i++) {
            ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
        }
        exportRoot = new lib.banner_1140x400();
        stage = new lib.Stage(canvas);
        //Registers the "tick" event listener.
        fnStartAnimation = function() {
            stage.addChild(exportRoot);
            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
        }
        //Code to support hidpi screens and responsive scaling.
        function makeResponsive(isResp, respDim, isScale, scaleType) {
            var lastW, lastH, lastS=1;
            window.addEventListener('resize', resizeCanvas);
            resizeCanvas();
            function resizeCanvas() {
                var w = lib.properties.width, h = lib.properties.height;
                var iw = window.innerWidth, ih=window.innerHeight;
                var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
                if(isResp) {
                    if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
                        sRatio = lastS;
                    }
                    else if(!isScale) {
                        if(iw<w || ih<h)
                            sRatio = Math.min(xRatio, yRatio);
                    }
                    else if(scaleType==1) {
                        sRatio = Math.min(xRatio, yRatio);
                    }
                    else if(scaleType==2) {
                        sRatio = Math.max(xRatio, yRatio);
                    }
                }
                canvas.width = w*pRatio*sRatio;
                canvas.height = h*pRatio*sRatio;
                canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
                canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
                stage.scaleX = pRatio*sRatio;
                stage.scaleY = pRatio*sRatio;
                lastW = iw; lastH = ih; lastS = sRatio;
                stage.tickOnUpdate = false;
                stage.update();
                stage.tickOnUpdate = true;
            }
        }
        makeResponsive(false,'both',false,1);
        AdobeAn.compositionLoaded(lib.properties.id);
        fnStartAnimation();
    }
</script>

<section class="" style="max-height: 500px">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <div class="swiper-slide">

                    <style>
                        #canvas {
                            width:100% !important;
                            height: 400px !important;
                        }
                    </style>

                    <div onclick="$('#ordermodal').modal('show');return false;" id="animation_container" style="background-color:rgba(242, 250, 253, 1.00); width:100%; height:400px">
                        <canvas id="canvas" width="100%" height="400" style="width:100% !important;position: absolute; display: block; background-color:rgba(242, 250, 253, 1.00);"></canvas>
                        <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:100%; height:400px; position: absolute; left: 0px; top: 0px; display: block;">
                        </div>
                    </div>

                    <script>
                        $().ready(function(){
                            init();
                        });
                    </script>

                </div>

                <!--div class="swiper-slide">
                    <a href="/store/brand/varadoor" title="Двери varadoor" alt="Двери varadoor" style="background-image: url(/uploads/image/aed96e994700cf2282cd50373b2b07e5.jpg)"></a>
                </div-->
                <div class="swiper-slide">
                    <a href="/store/skladskaya-programma" title="Двери varadoor" alt="Двери varadoor" style="background-image: url(/images/bunner33.jpg)"></a>
                </div>
                <div class="swiper-slide">
                    <a href="/store/brand/varadoor" title="Двери varadoor" alt="Двери varadoor" style="background-image: url(/images/varadoor.jpg)"></a>
                </div>
                <div class="swiper-slide">
                    <a href="/store/furnitura" alt="фурнитура" title="фуринитура" style="background-image: url(/images/furfur.jpg)"></a>
                </div>


                <!--div class="swiper-slide">
                    <a href="/montazh" alt="установка дверей" title="установка жверей" style="background-image: url(/images/instalation2.jpg)"></a>
                </div-->

                <!--div class="swiper-slide">
                    <a href="/store/skladskaya-programma" style="background-image: url(/images/programm.jpg)"></a>
                </div-->
                <!--div class="swiper-slide">
                    <a href="#" style="background-image: url(/images/zamer.jpg)"></a>
                </div-->

                <div class="swiper-slide">
                    <a href="/store/mezhkomnatnye-dveri/katrin-pg-pokrytie-emal.html" style="background-image: url(/images/katrine.jpg)">

                    </a>
                </div>

                <!--div class="swiper-slide">
                    <a href="/store/skladskaya-programma" style="background-image: url(/images/sale.jpg)"></a>
                </div-->

            </div>


            <!-- If we need navigation buttons -->
            <!--div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div-->

        </div>
        <div class="swiper-paginartion-wrapper">
            <!-- If we need pagination -->
            <div class="swiper-pagination">
            </div>
        </div>


        <!--div class="wrapper-slideshow">
            <i class="fa fa-caret-left btn-arrow prev"></i>
            <i class="fa fa-caret-right btn-arrow next"></i>
            <ul class="l-slideshow" data-cycle-pager="#l-slideshow-pager" data-cycle-pager-template="">

                <li style="background-image: url(/images/katrine.jpg); background-size: cover">
                    <a href="#"></a>
                </li>
                <li style="background-image: url(/images/zamer.jpg); background-size: cover">

                </li>

            </ul>
            <ul class="b-tabs small pager" id="l-slideshow-pager">

                <li class="cycle-pager-active"><span>"Катрин" за 5250</span></li>

                <li><span>Бесплатный замер</span></li>

            </ul>
        </div -->
    </div>
</section>
<section class="where">
    <div class="container">
        <div class="row">
            <div class="col-md-6  col-sm-6 col-xs-12">
            	<a href="/store/mezhkomnatnye-dveri">
	                <div class="where-cat grey">
	                    <div class="cats">
	                        <div class="img mk-door">

	                        </div>
	                        <div class="desc">
	                            <h3>МЕЖКОМНАТНЫЕ ДВЕРИ</h3>
	                            <p>
	                                Двери высокого качества принесут уют
	                                и тепло в Ваш дом.
	                            </p>
	                        </div>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
                </a>
            </div>
            <div class="col-md-6  col-sm-6  col-xs-12">
                <a href="/store/vhodnye-dveri">
	                <div class="where-cat grey">
	                    <div class="cats">
	                        <div class="img vh-door">

	                        </div>
	                        <div class="desc">
	                            <h3>ВХОДНЫЕ ДВЕРИ</h3>
	                            <p>
	                                Металлические входные двери "Гранит". Гарантия 10 лет.
	                            </p>
	                        </div>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
                </a>
            </div>

        </div>
    </div>
</section>
<section class="the-door hidden-xs">
    <div class="container">
        <div class="wrapper">
            <div class="plusplus"></div>
            <div class="desc">
                <h2>Придумай свою дверь</h2>
                <p>Выбери цвет, выбери шпон, выбери узор!<br />
                <a href="#" onclick="$('#ordermodal').modal('show');return false;">скорее купить</a></p>
            </div>
        </div>
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 hidden-xs">
                <a href="/company">
                    <div class="benefits-cat grey">
                        <div class="text-center">
                            <div class="img"><img src="<?php echo $this->mainAssets;?>/img/clock.svg" /></div>
                            <div class="desc">
                                <p>
                                    <span class="no-underline">15 лет на рынке</span><br />
                                    <span class="a">подробнее</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                <a href="/store">
                    <div class="benefits-cat grey">
                        <div class="text-center">
                            <div class="img"><img src="<?php echo $this->mainAssets;?>/img/doors.svg" /></div>
                            <div class="desc">
                                <p>
                                    Более 1000 наименований
                                    <br />
                                    <span class="a">подробнее</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                <a href="/guarantee">
                    <div class="benefits-cat grey">
                        <div class="text-center">
                            <div class="img"><img src="<?php echo $this->mainAssets;?>/img/plate.svg" /></div>
                            <div class="desc">
                                <p>
                                    Гарантии и сервис
                                    <br />
                                    <span class="a">подробнее</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="some-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <h1>Купить двери в СПб магазин ХоумДорс. Официальный дилер Varadoor</h1>

                <?= $page->body; ?>
            </div>
            <div class="col-sm-4">
                <img width="100%" src="/img/zvez/2.jpg" alt="Двери varadoor магазин спб"  title="Двери varadoor магазин спб" />
            </div>
        </div>
    </div>
</section>
<section class="some-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Советы по выбору межкомнатной двери</h2>

                <?php $this->widget('application.modules.news.widgets.LastNewsWidget', ['categories'=>2,'view'=>'advise']); ?>


            </div>
            <div class="col-md-4">
                <h2>Новости производителей дверей</h2>
                <?php $this->widget('application.modules.news.widgets.LastNewsWidget', ['categories'=>3]); ?>

            </div>
        </div>
    </div>
</section>


<?= '';//$page->body; ?>
