<?php $this->title = Yii::t('default', 'Error') . ' ' . $error['code']; 

?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="main__title grid">
                <h1 class="h2"><?= Yii::t('default', 'Error') . ' ' . $error['code']; ?>!</h1>
            </div>
            <div class="main__product-description grid">
                <?php
                switch ($error['code']) {
                    case '404':
                        $msg = Yii::t(
                            'default',
                            'Page you try to request, was not found. You can go out from this page and {link}.',
                            [
                                '{link}' => CHtml::link(
                                    Yii::t('default', 'go to home page'),
                                    //$this->createUrl("/" . Yii::app()->defaultController . '/index'),
                                    '/',
                                    [
                                        'title' => Yii::t('default', 'go to home page'),
                                        'alt'   => Yii::t('default', 'go to home page'),
                                    ]
                                ),

                            ]
                        );
                        break;
                    default:
                        $msg = $error['message'];
                        break;
                }
                ?>

                <p class="errorSummary"><?= $msg; ?></p>
                <div class="text-center hidden-xs hidden-sm" style="width:100%;">
                    <img src="/img/girl.png" alt="Посмотрите наши двери!" style="margin:auto; "> 
                </div>
                
            </div>
        </div>
        <div class="col-md-6"  style="background: url('/img/sale.svg') no-repeat center bottom; ">
            <h2>Ищете двери?</h2>
            <p>Посмотрите наш ассортимент!</p>
            <div class="row text-center">

                <div class="col-sm-6">
                    <a href="/store/brand/varador" title="Varadoor">
                        <div class="door-preview">
                            <div class="circle"></div>
                            <div class="pic">
                                <img src="/img/dd1.png" alt="" />
                            </div>
                            
                        </div>
                        <p class="goods" id="d2txt">Двери Varadoor</p>
                        <p class="price">от 5 705 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="/store/brand/varador" title="Varadoor">
                        <div class="door-preview">
                            <div class="circle"></div>
                            <div class="pic">
                                <img src="http://dver-montazh.ru/uploads/thumbs/store/product/150x280_f44f80675f3f4e5fa7b7bf3b9c50647b.png" alt="" />
                            </div>

                        </div>
                        <p class="goods" id="d2txt">Двери Varadoor</p>
                        <p class="price">от 19 000 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </a>
                </div>
                
        </div>
    </div>
</div>

