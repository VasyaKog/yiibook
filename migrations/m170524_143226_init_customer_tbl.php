<?php

use yii\db\Migration;

class m170524_143226_init_customer_tbl extends Migration
{
    public function up()
    {
        $this->createTable(
            'phone',
            [
                'id' => $this->primaryKey(),
                'customer_id' => $this->integer()->unique(),
                'number' => $this->string()
            ],
            'ENGINE=InnoDB'
        );
        $this->addForeignKey(
            'customer_phone_numbers',
            'phone',
            'customer_id',
            'customer',
            'id'
        );
    }

    public function down()
    {
        $this->dropForeignKey('customer_phone_numbers', 'phone');
        $this->dropTable('phone');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
