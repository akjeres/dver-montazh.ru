<?php
$this->widget('zii.widgets.CMenu', [
    'items' => $this->params['items'],
    'itemCssClass' => 'top-menu__item',
    'htmlOptions' => [
        'class' => 'list-inline list-unstyled navbar-right'
    ],
    'submenuHtmlOptions' => [
        'class' => 'dropdown-menu'
    ]
]);
