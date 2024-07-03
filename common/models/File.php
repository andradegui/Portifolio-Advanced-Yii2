<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $id
 * @property string $name
 * @property string $base_url
 * @property string $mine_type
 * @property string $path_url
 *
 * @property ProjectImage[] $projectImages
 * @property ProjectTestimonial[] $projectTestimonials
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'base_url', 'mine_type', 'path_url'], 'required'],
            [['name', 'base_url', 'mine_type', 'path_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'base_url' => Yii::t('app', 'Base Url'),
            'mine_type' => Yii::t('app', 'Mine Type'),
            'path_url' => Yii::t('app', 'Path Url'),
        ];
    }

    /**
     * Gets query for [[ProjectImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectImages()
    {
        return $this->hasMany(ProjectImage::class, ['file_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectTestimonials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectTestimonials()
    {
        return $this->hasMany(ProjectTestimonial::class, ['customer_image_id' => 'id']);
    }

    public function absoluteUrl(){
        return $this->base_url . '/' . $this->name;   
    }

    public function afterDelete(){

        parent::afterDelete();

        unlink($this->path_url . '/' . $this->name);

    }
}
