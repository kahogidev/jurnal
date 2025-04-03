<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string $image
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', ], 'required'],
            [['image'],'safe'],
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
            'title_uz' => 'Sarlavha uz',
            'title_ru' => 'Sarlavha Ru',
            'title_en' => 'Sarlavha En',
            'description_uz' => 'Ta`rif Uz',
            'description_ru' => 'Ta`rif Ru',
            'description_en' => 'Ta`rif En',
            'image' => 'Rasm',
        ];
    }
}
