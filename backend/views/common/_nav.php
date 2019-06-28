<?php

use yii\helpers\Url;
use yii\widgets\Menu;
use yii\helpers\Html;
?>

<nav>

    <?php
echo Menu::widget([
    'items' => [
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'Services', 'url' => ['service/index']],
        ['label' => 'Portfolio', 'url' => ['portfolio/index']],
        ['label' => 'Angajati', 'url' => ['angajat/index']],
//        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
        Yii::$app->user->isGuest ?
            ['label' => 'Login', 'url' => ['/site/login']] :
            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ],
    ],

]);

?>



</nav>


















