<?php
namespace app\models\costumer;

use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%phone}}';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['customer_id'], 'number'],
            [['number'], 'string'],
            [['customer_id', 'number'], 'required'],
        ];
    }
}