<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string $body_uz
 * @property string $body_ru
 * @property string $body_en
 * @property string $image
 * @property int $status
 */
class Newss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', 'body_uz', 'body_ru', 'body_en',  'status'], 'required'],
            [['body_uz', 'body_ru', 'body_en'], 'string'],
            [['image'],'safe'],
            [['status'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Sarlavha Uz',
            'title_ru' => 'Sarlavha Ru',
            'title_en' => 'Sarlavha En',
            'description_uz' => 'Ta`rif Uz',
            'description_ru' => 'Ta`rif Ru',
            'description_en' => 'Ta`rif En',
            'body_uz' => 'Yangilik matni Uz',
            'body_ru' => 'Yanglik matni Ru',
            'body_en' => 'Yanglik matni En',
            'image' => 'Rasm',
            'status' => 'Status',
        ];
    }
}
