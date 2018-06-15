<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use frontend\assets\LoginPageAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

LoginPageAsset::register($this);
$this->title = 'Login';
?>
<div class="site-login">
   <!-- <style>
        .bbb{
            border: red solid 1px;
            height: 30px;
        }
    </style>
<div class="row">
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
    <div class="col-md-1 col-sm-1 col-xs-1 bbb"></div>
</div>-->
    <div class="row">
        <div class="col-md-1 col-md-offset-4 col-sm-offset-3 col-lg-offset-4 col-xs-offset-0">
            <div class="block">
                <p>Вход в систему</p>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'fieldConfig' => [
                        'options' => [
                            'tag' => false,
                            ]
                    ]
                ]); ?>

                <?= $form->field($model, 'username', ['template' => "{input}"])
                    ->textInput(['autofocus' => true, 'class' => 'input', 'placeholder' => 'Username']) ?>

                <?= $form->field($model, 'password', ['template' => "{input}"])->passwordInput(['class' => 'input', 'placeholder' => 'Password'])->label(false) ?>

                <?= Html::submitButton('Войти', ['class' => 'login-btn', 'name' => 'login-button']) ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'chkb', 'template' => "{input}"])->label(false) ?>
                Запомнить

                <?= Html::a('Забыли пароль?', ['site/request-password-reset'], ['class' => 'forgot']) ?>



                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
