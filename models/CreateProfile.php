<?php

namespace app\models;

use Yii;
use yii\base\Model;
//use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class CreateProfile extends Model
{
    public $fName;
    public $lName;
    public $gender;
    public $dob;
    public $yoe;
    public $industry;
    public $location;
    public $aboutMe;
    public $pic;
    public $profTitle;
    public $carlevel;
    public $comlevel;
    public $orglevel;
    public $jblevel;
    public $email;
    public $address;
    public $phone;
    public $website;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fName','lName','gender','dob','yoe', 'industry', 'location', 'aboutMe', 'pic', 'profTitle','carlevel', 'comlevel', 'orglevel', 'jblevel','email','address','phone','website'], 'required'],[['file'], 'file'],
            // email has to be a valid email address
            ['email', 'email'],['dob', 'date'],['yoe', 'number'],['phone', 'number'], ['website', 'url']
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'fName' => 'First Name',
            'lName' => 'Last Name',
            'gender' => 'Gender',
            'dob' => 'Date of Birth',
            'yoe' => 'Years of Experience',
            'industry' => 'Industry',
            'location' => 'Location',
            'aboutMe' => 'About Me',
            'pic' => 'Picture',
            'profTitle' => 'Professional Title',
            'carlevel' => 'Career Level',
            'comlevel' => 'Communication Level',
            'orglevel' => 'Organizational Level',
            'jblevel' => 'Job Level',
            'email' => 'Email',
            'address' => 'Address',
            'phone' => 'Phone',
            'website' => 'Website',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     
    /*public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }*/
}
