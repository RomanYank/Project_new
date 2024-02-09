<?php
    use yii\helpers\Html;
?>
<div class="wrapper">
    <div class="container">
        <div class="employee-card">
            <div><span>Имя:</span> <?=Html::encode($model->name)?></div>
            <div><span>Фамилия:</span> <?=Html::encode($model->surname)?></div>
            <div><span>Номер:</span> <?=Html::encode($model->phone)?></div>
            <div><span>Должность:</span> <?=Html::encode($model->post)?></div>
            <div><span>Статус:</span> <?=Html::encode($model->status)?></div>
            <div><span>Заработная плата:</span> <?=Html::encode($model->salary)?></div>
        </div>
    </div>
</div>