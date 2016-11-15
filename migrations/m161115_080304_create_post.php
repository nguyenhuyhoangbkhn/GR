<?php

use yii\db\Migration;

class m161115_080304_create_post extends Migration
{
    public function up()
    {
        $this->createTable('post',[
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'user_id' => $this->integer(),
            'criteria' => $this->string(),
            'type_criteria' => $this->string()
            ]);
    }

    public function down()
    {
        echo "m161115_080304_create_post cannot be reverted.\n";

        return false;
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
