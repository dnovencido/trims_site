<?php

namespace app\models;

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
            [['service_desc'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_desc' => 'Service Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicesOffereds()
    {
        return $this->hasMany(ServicesOffered::className(), ['services_desc_id' => 'id']);
    }
}
