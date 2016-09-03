<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Monstertest;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page.<br>
        Fucking censure test.
    </p>
    <?php
    //Invalid Data
    $data = [
        'name' => 'Wolfman',
        'age' => 'invalidstring',
        'gender' => 'male'
    ];

    //Valid Data
    /*$data = [
        'name' => 'Wolfman',
        'age' => '32',
        'gender' => 'm'
    ];*/

    $validateMonster1 = new Monstertest($data);
    $validateMonster1->save();

    //delete
   // $deleteMonster = Monstertest::findOne(['name'=>'Wolfman'])->delete();
    $fMonster1 = Monstertest::findOne(1);
    $fMonster2 = Monstertest::findAll(['gender' => 'm']);
    ?>
    <hr>
    <p>
        Found Monster 1 Name: <?= $fMonster1->name?>  <br>
        Found Monster 2 Count: <?= count($fMonster2)?>  <br>
    </p>
    <hr>
    <p>
        Validate: <pre><?=$validateMonster1->validate();
                          var_dump($validateMonster1->errors);?></pre>

    </p>
    <code><?= __FILE__ ?></code>
</div>
