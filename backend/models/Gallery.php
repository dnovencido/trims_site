<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%gallery}}".
 *
 * @property integer $id
 * @property string $gallery_desc
 * @property string $img_path
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;

    public static function tableName()
    {
        return '{{%gallery}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gallery_desc'], 'string', 'max' => 500],
            [['gallery_desc' , 'imageFile'] , 'required' , 'on' => 'create'],
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
            'gallery_desc' => 'Description',
            'img_path' => 'Image preview',
        ];
    }

    public function getImageThumbnail()
    {
        return $this->img_path;
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('../web/uploads/gallery/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }   
}
