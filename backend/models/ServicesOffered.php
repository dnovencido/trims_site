<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%services_offered}}".
 *
 * @property integer $id
 * @property string $service_offered_desc
 * @property integer $services_desc_id
 *
 * @property ServicesDesc $servicesDesc
 */
class ServicesOffered extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%services_offered}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_offered_desc'], 'string', 'max' => 500],
            [['service_offered_desc','services_desc_id'] , 'required'],
            [['services_desc_id'], 'exist', 'skipOnError' => true, 'targetClass' => ServicesDesc::className(), 'targetAttribute' => ['services_desc_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_offered_desc' => 'Service Offered',
            'services_desc_id' => 'Service Category',
            'ServicesDescLabel' => 'Service Category'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicesDesc()
    {
        return $this->hasOne(ServicesDesc::className(), ['id' => 'services_desc_id']);
    }

    public function getServicesDescLabel()
    {
        return $this->servicesDesc->service_desc;
    }
}
