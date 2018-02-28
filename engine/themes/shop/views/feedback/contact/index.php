<?php
/**
 * @var CActiveForm $form
 */
$this->title = Yii::t('FeedbackModule.feedback', 'Contacts');
$this->description = 'Как добраться до магазина дверей HomeDoors у метро пр Ленинский, Звездная или Комендантский проспект - отмечено на карте. Смотрите!';
//$this->breadcrumbs = [Yii::t('FeedbackModule.feedback', 'Contacts')];
Yii::import('application.modules.feedback.FeedbackModule');
Yii::import('application.modules.install.InstallModule');
?>

<div id="client-map-wrapper">
    <div id="client-map" class="client-map" style="width: 100%;height: 442px;">

    </div>

</div>

<section class="contacts">
    <div class="container">
        <div class="text-center">
            <h1>Контакты и адреса наших салонов дверей</h1>
        </div>
        <div style="">

            <!-- Nav tabs -->
            <div class="address">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#shop1" aria-controls="shop1" role="tab" data-toggle="tab">Ленинский проспект</a></li>
                    <li role="presentation" class="active"><a href="#shop2" aria-controls="shop2" role="tab" data-toggle="tab">Коменданский проспект</a></li>
                    <li role="presentation"><a href="#shop3" aria-controls="shop3" role="tab" data-toggle="tab">Звездная</a></li>

                </ul>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="shop1">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <h2>Рядом с <strong>метро</strong> Ленинский проспект<br></h2>
                                Ленинский проспект 140<br> ТК Загородный дом 4 этаж, секция 421<br>
                                Часы работы с 11:00 до 20:00 (без выходных).
                            </p>

                        </div>
                        <div class="col-md-6">
                            <h3><i class="fa fa-location-arrow" aria-hidden="true"></i> Как пройти</h3>
                            <div class="">
                                <div class="contact-img">
                                    <a href="/img/lenin/1.jpg" class="fancybox" rel="prosvet">
                                        <img src="/img/lenin/1.jpg" height="100px" />
                                        
                                        <div class="bb"></div>
                                        <p>1</p>
                                    </a>
                                </div>
                                <div class="contact-img">
                                    <a href="/img/lenin/len2.jpg" class="fancybox" rel="prosvet">
                                        <img src="/img/lenin/len2.jpg" height="100px" />
                                        
                                        <div class="bb"></div>
                                        <p>2</p>
                                    </a>
                                </div>
                                <div class="contact-img">
                                    <a href="/img/lenin/len3.jpg" class="fancybox" rel="prosvet">
                                        <img src="/img/lenin/len3.jpg" height="100px" />
                                        
                                        <div class="bb"></div>
                                        <p>3</p>
                                    </a>
                                </div>
                                <div class="contact-img">
                                    <a href="/img/lenin/len4.jpg" class="fancybox" rel="prosvet">
                                        <img src="/img/lenin/len4.jpg" height="100px" />
                                        
                                        <div class="bb"></div>
                                        <p>4</p>
                                    </a>
                                </div>
                                <div class="contact-img">
                                    <a href="/img/lenin/len5.jpg" class="fancybox" rel="prosvet">
                                        <img src="/img/lenin/len5.jpg" height="100px" />
                                        
                                        <div class="bb"></div>
                                        <p>5</p>
                                    </a>
                                </div>
                                                            
                                
                               
                                
                            </div>
                            <h3><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Как связаться</h3>
                            Тел.: 905-30-04<br>
                            Тел.: 646-70-46<br>
                            

                        </div>
                        
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane active" id="shop2">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <h2>Рядом с Метро Коменданский проспект</h2>
                                ТК «Круиз»<br>
                                Коменданский проспект д.4 к.2 секция 037<br>
                                
                                Часы работы с 11:00 до 20:00 (без выходных).
                            </p>
                        </div>
                       
                        <div class="col-md-6">
                            <h3><i class="fa fa-location-arrow" aria-hidden="true"></i> Как пройти</h3>
						
                            <div class="contact-img">
                                <a href="/img/komen/kom.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/komen/kom.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>1</p>
                                </a>
                            </div>
                            <div class="contact-img">
                                <a href="/img/komen/kom1.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/komen/kom1.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>2</p>
                                </a>
                            </div>
                            
							 <div class="contact-img">
                                <a href="/img/komen/kom2.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/komen/kom2.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>3</p>
                                </a>
                            </div>
													 
                           
                        </div>
						 <div class="col-md-6">
                            <h3><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Как связаться</h3>
                            Тел.: 905-30-04<br>
                            Тел.: 676-85-54<br>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="shop3">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <h2>Рядом с метро Звездная</h2>
                                ТК «Торговый Двор»<br>
                                Московское шоссе д. 7А секция 7-2<br>
                                Тел.: 905-30-04<br>

                                Часы работы с 11:00 до 20:00 (без выходных).
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h3><i class="fa fa-location-arrow" aria-hidden="true"></i> Как пройти</h3>

                            <div class="contact-img">
                                <a href="/img/zvez/1.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/zvez/1.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>1</p>
                                </a>
                            </div>
                            <div class="contact-img">
                                <a href="/img/zvez/2.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/zvez/2.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>2</p>
                                </a>
                            </div>
                            
							 <div class="contact-img">
                                <a href="/img/zvez/zv1.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/zvez/zv1.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>3</p>
                                </a>
                            </div>
							 <div class="contact-img">
                                <a href="/img/zvez/zv2.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/zvez/zv2.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>4</p>
                                </a>
                            </div>
							 <div class="contact-img">
                                <a href="/img/zvez/zv3.jpg" class="fancybox" rel="zvez">
                                    <img src="/img/zvez/zv3.jpg" height="100px" />
                                    
                                    <div class="bb"></div>
                                    <p>5</p>
                                </a>
                            </div>
                            <h3><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Как связаться</h3>
                            Тел.: 905-30-04<br>

                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section id="feedback-form">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="text-left hidden-xs hidden-sm" style="width:100%;">

                </div>
            </div>
            <div class="col-md-6">
            <h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> Задать вопрос</h3>

            <div class="grid-module-6">
                <?php $this->widget('yupe\widgets\YFlashMessages'); ?>
            </div>
            <div class="grid-module-6 ">
                <?php $form = $this->beginWidget('CActiveForm', [
                    'id' => 'feedback-form',
                ]); ?>

                <!--p class="alert alert-info fast-order__inputs">
                    <?= Yii::t('FeedbackModule.feedback', 'Fields with'); ?> <span
                        class="required">*</span> <?= Yii::t('FeedbackModule.feedback', 'are required.'); ?>
                </p-->

                <?= $form->errorSummary($model); ?>

                <?php if ($model->type): ?>
                    <div class='row'>
                        <div class="col-sm-6">
                            <?= $form->dropDownList($model, 'type', [
                                'data' => $module->getTypes(),
                            ]); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="fast-order__inputs form-group">
                            <?= $form->labelEx($model, 'name'); ?>
                            <?= $form->textField($model, 'name', ['class' => 'form-control']); ?>
                            <?= $form->error($model, 'name') ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fast-order__inputs form-group">
                            <?= $form->labelEx($model, 'email'); ?>
                            <?= $form->textField($model, 'email', ['class' => 'form-control']); ?>
                            <?= $form->error($model, 'email') ?>
                        </div>
                    </div>
                </div>




                <div class="fast-order__inputs form-group">
                    <?= $form->labelEx($model, 'theme'); ?>
                    <?= $form->textField($model, 'theme', ['class' => 'input input_big form-control']); ?>
                    <?= $form->error($model, 'theme') ?>
                </div>

                <div class="fast-order__inputs form-group">
                    <?= $form->labelEx($model, 'text'); ?>
                    <?= $form->textArea($model, 'text', ['class' => 'input input_big form-control', 'rows' => 10]); ?>
                    <?= $form->error($model, 'text') ?>
                </div>

                <?php if ($module->showCaptcha && !Yii::app()->getUser()->isAuthenticated()): ?>
                    <?php if (CCaptcha::checkRequirements()): ?>
                        <div class="fast-order__inputs">
                            <div class="column grid-module-3">
                                <?= $form->textField($model, 'verifyCode', [
                                    'class' => 'input input_big',
                                    'placeholder' => Yii::t('FeedbackModule.feedback', 'Insert symbols you see on image')
                                ]); ?>
                            </div>
                            <div class="column grid-module-3 pull-right">
                                <?php $this->widget(
                                    'CCaptcha',
                                    [
                                        'showRefreshButton' => true,
                                        'imageOptions' => [
                                            'width' => '150',
                                        ],
                                        'buttonOptions' => [
                                            'class' => 'btn btn_big btn_white pull-right',
                                        ],
                                        'buttonLabel' => '<i class="fa fa-fw fa-repeat"></i>',
                                    ]
                                ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="fast-order__inputs">
                    <div class="grid-module-3">
                        <?= CHtml::submitButton(Yii::t('FeedbackModule.feedback', 'Send message'), [
                            'id' => 'login-btn',
                            'class' => 'btn btn-success btn_big btn_wide btn_primary'
                        ]) ?>
                    </div>
                </div>

                <?php $this->endWidget(); ?>
            </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>



<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.full&amp;lang=ru-RU" type="text/javascript"></script>

