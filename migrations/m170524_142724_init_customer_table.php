<?php

use yii\db\Migration;

class m170524_142724_init_customer_table extends Migration
{
    public function up()
    {
        $this->createTable('customer',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'birth_date' => $this->date(),
                'notes' => $this->text(),
            ],
            'ENGINE=InnoDB'
        );
    }

    public function down()
    {
        $this->dropTable('customer');
    }
}
