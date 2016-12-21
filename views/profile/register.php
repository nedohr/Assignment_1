<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\base\Model;
use yii\jui\DatePicker;

$this->title = 'Create Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

        <p>
            Please create a profile
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'profile-profile']); ?>

                    <?= $form->field($model, 'fName')->textInput(['autofocus' => true]) ?>
                    
                    <?= $form->field($model, 'lName')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'gender')->inline()->radioList(['Male' => 'Male', 'Female' => 'Female'])->label('Gender') ?>

                    <?= $form->field($model, 'dob') ?>
                    
                    <?= $form->field($model, 'yoe') ?>

                    <?= $form->field($model, 'industry')->inline()->radioList(['IT' => 'IT', 'Business' => 'Business','Hospitality' => 'Hospitality','Medicine' => 'Medicine',])->label('Industry') ?>
                
                    <?= $form->field($model, 'location') ?>

                    <?= $form->field($model, 'aboutMe')->textarea(['rows' => 6]) ?>
                    
                    <?= $form->field($model, 'pic')->fileInput() ?>

                    <?= $form->field($model, 'profTitle')->inline()->radioList(['Director' => 'Director', 'President' => 'President','CEO' => 'CEO','Professor' => 'Professor','Administrator' => 'Administrator', 'Manager' => 'Manager','Dean' => 'Dean','Chair' => 'Chair'])->label('Professional Title') ?>
                
                    <?= $form->field($model, 'carlevel')->inline()->radioList(['Entry' => 'Entry', 'Intermediate' => 'Intermediate','Experienced' => 'Experienced','Advanced' => 'Advanced','Expert' => 'Expert'])->label('Career Level') ?>

                    <?= $form->field($model, 'comlevel')->inline()->radioList(['0-25%' => '0-25%', '26-50%' => '26-50%','51-75%' => '51-75%','76-100%' => '76-100%'])->label('Communication Level') ?>
                    
                    <?= $form->field($model, 'orglevel')->inline()->radioList(['0-25%' => '0-25%', '26-50%' => '26-50%','51-75%' => '51-75%','76-100%' => '76-100%'])->label('Organizational Level') ?>

                    <?= $form->field($model, 'jblevel')->inline()->radioList(['Junior' => 'Junior', 'Medium' => 'Medium','Senior' => 'Senior'])->label('Job Level') ?>
                
                     <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
                    
                    <?= $form->field($model, 'phone') ?>

                    <?= $form->field($model, 'website') ?>

                    
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'profile-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

</div>