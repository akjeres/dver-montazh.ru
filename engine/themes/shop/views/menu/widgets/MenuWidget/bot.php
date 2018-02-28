<h4><?php echo $this->layoutParams['title'];?></h4>

<?php
$this->widget('zii.widgets.CMenu', [
    'items' => $this->params['items'],
    'itemCssClass' => 'top-menu__item',
    'htmlOptions' => [
        'class' => ''
    ],
    'submenuHtmlOptions' => [
        'class' => 'dropdown-menu'
    ]
]);
