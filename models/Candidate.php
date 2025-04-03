<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidates".
 *
 * @property int $id
 * @property string $fullname
 * @property string $address
 * @property string $email
 * @property string|null $images
 * @property string $website_link
 * @property string $phone
 * @property string $school
 * @property string $university
 * @property string $degree
 * @property string $experience_title
 * @property string $company
 * @property string $skill_first
 * @property string $skill_second
 * @property string $skill_third
 * @property string|null $telegram_link
 * @property string|null $instagram_link
 * @property string|null $facebook_link
 * @property string|null $tweetter_link
 * @property int|null $status
 */
class Candidate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'address', 'email', 'website_link', 'phone', 'school', 'university', 'degree', 'experience_title', 'company','skill_first', 'skill_second', 'skill_third'], 'required'],
            [['status'], 'integer'],
            [['fullname', 'address', 'email',  'website_link', 'phone', 'school', 'university', 'degree', 'experience_title', 'company', 'skill_first', 'skill_second', 'skill_third', 'telegram_link', 'instagram_link', 'facebook_link', 'tweetter_link'], 'string', 'max' => 255],
            [['fullname'], 'unique'],
            [['image'],'safe'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'F.I.O',
            'address' => 'Manzil',
            'email' => 'Email',
            'image' => 'Rasm',
            'website_link' => 'Website Link',
            'phone' => 'Telefon raqami',
            'school' => 'Maktab',
            'university' => 'Universitet',
            'degree' => 'Darajasi',
            'experience_title' => 'Tajriba',
            'company' => 'Kompaniya',
            'skill_first' => 'Mutaxassislik 1',
            'skill_second' => 'Mutaxassislik 2',
            'skill_third' => 'Mutaxassislik 3',
            'telegram_link' => 'Telegram Link',
            'instagram_link' => 'Instagram Link',
            'facebook_link' => 'Facebook Link',
            'tweetter_link' => 'Tweetter Link',
            'status' => 'Status (1 yoki 0)',
        ];
    }
}
