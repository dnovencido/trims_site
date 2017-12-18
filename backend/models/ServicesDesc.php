<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%services_desc}}".
 *
 * @property integer $id
 * @property string $service_desc
 *
 * @property ServicesOffered[] $servicesOffereds
 */
class ServicesDesc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;

    public static function tableName()
    {
        return '{{%services_desc}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_desc'], 'string', 'max' => 500 ],
            [['service_desc' , 'imageFile'], 'required' , 'on' => 'create'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, ico' , 'on' => 'create'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_desc' => 'Service Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicesOffereds()
    {
        return $this->hasMany(ServicesOffered::className(), ['services_desc_id' => 'id']);
    }

    public function getImageThumbnail()
    {
        return $this->thumbnail;
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('../web/uploads/services/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }    
}
