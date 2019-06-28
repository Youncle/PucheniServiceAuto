<?php

use yii\widgets\Menu;
use common\models\Service;
?>

<nav>

    <?php

    $services=Service::find()->all();

    $menuItems=[];
    foreach ($services as $key=>$value){
        $menuItems[]=['label' => $value->name, 'url' => ['service/view','id' => $value->id]];
    }

    echo Menu::widget([
        'items' => [
            ['label' => 'Acasa', 'url' => ['site/index']],
            ['label' => 'Despre Noi', 'url' => ['site/about']],
            ['label' => 'Servicii Oferite',
                'url' => ['service/index'],
                'items' => $menuItems,
                'encodeLabels' => false,
                'options' => ['class' => 'dropdown'],
                'submenuTemplate'=>"\n<ul class=\"dropdown-menu\">\n{items}\n</ul>\n"
            ],
            ['label' => 'Portofoliu', 'url' => ['portfolio/index']],
            ['label' => 'ITP', 'url' => ['site/itp']],
            ['label' => 'Programari', 'url' => ['programare/create']],
            ['label' => 'Echipa', 'url' => ['angajat/index']],
            ['label' => 'Contact', 'url' => ['site/contact']],

        ],

]);


?>

</nav>


















