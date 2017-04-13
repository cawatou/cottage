<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $name
 * @property integer $cat_id
 * @property string $img
 * @property integer $price
 * @property string $square
 * @property string $project
 * @property string $complectation
 * @property string $material
 * @property string $floor
 * @property string $roof
 * @property string $facing
 * @property string $consist
 * @property string $width
 * @property string $lenght
 * @property string $place
 * @property string $f_square
 * @property string $type
 * @property string $extra_work
 * @property integer $gallery
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['cat_id', 'price', 'gallery'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['img', 'complectation', 'material', 'floor', 'roof', 'facing', 'consist', 'width', 'lenght', 'place', 'f_square', 'type', 'extra_work'], 'string', 'max' => 255],
            [['square'], 'string', 'max' => 11],
            [['project'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'cat_id' => 'ID категории',
            'img' => 'Изображение',
            'price' => 'Цена',
            'square' => 'Площадь',
            'project' => 'Проект дома',
            'complectation' => 'Комплектация',
            'material' => 'Материал',
            'floor' => 'Межэтажное перекрытие',
            'roof' => 'Кровля',
            'facing' => 'Наружная отделка',
            'consist' => 'Состав грунта и размер участка',
            'width' => 'Ширина',
            'lenght' => 'Длинна',
            'place' => 'Место строительства дома',
            'f_square' => 'Общая площадь',
            'type' => 'Тип фундамента',
            'extra_work' => 'Дополнительные работы',
            'gallery' => 'Галерея',
        ];
    }
}
