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
            'name' => 'Name',
            'cat_id' => 'Cat ID',
            'img' => 'Img',
            'price' => 'Price',
            'square' => 'Square',
            'project' => 'Project',
            'complectation' => 'Complectation',
            'material' => 'Material',
            'floor' => 'Floor',
            'roof' => 'Roof',
            'facing' => 'Facing',
            'consist' => 'Consist',
            'width' => 'Width',
            'lenght' => 'Lenght',
            'place' => 'Place',
            'f_square' => 'F Square',
            'type' => 'Type',
            'extra_work' => 'Extra Work',
            'gallery' => 'Gallery',
        ];
    }
}
