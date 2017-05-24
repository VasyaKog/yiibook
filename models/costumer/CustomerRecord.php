<?php
namespace app\models\costumer;

use yii\db\ActiveRecord;

class CustomerRecord extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%customer}}';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['id'], 'number'],
            [['name'], 'required'],
            [['name'], 'string'],
            [['birth_date'], 'date', 'format' => 'Y-m-d'],
            ['notes', 'safe']
        ];
    }
}