<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%testimonial}}".
 *
 * @property integer $id
 * @property string $testimonial_desc
 * @property integer $user
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%testimonial}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user'], 'integer'],
            [['testimonial_desc'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'testimonial_desc' => 'Testimonial Desc',
            'user' => 'User',
        ];
    }
}
