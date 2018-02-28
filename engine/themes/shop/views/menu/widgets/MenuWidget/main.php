<?php

$this->widget('zii.widgets.CMenu', [
    'items' => $this->params['items'],
    'itemCssClass' => 'top-menu__item',
    'htmlOptions' => [
        //'class' => 'list-inline list-unstyled navbar-left'
        'class' => 'list-inline list-unstyled navbar-left'
    ],
    'encodeLabel'=>false,
    'submenuHtmlOptions' => [
        'class' => 'dropdown-menu'
    ]
]);
