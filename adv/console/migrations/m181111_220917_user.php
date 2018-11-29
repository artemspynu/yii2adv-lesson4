<?php

use yii\db\Migration;

/**
 * Class m181111_220917_user
 */
class m181111_220917_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notnull(),
            'name' => $this->string(255),
            'avatar' => $this->string(255),
            'email' => $this->string(255),
            'status' => $this->integer(),
            'password_hash' => $this->string(255)->notnull(),
            'access_token' => $this->string(255),
            'auth_key' => $this->string(255),
            'creator_id' => $this->integer(),
            'updater_id' => $this->integer(),
            'creator_at' => $this->integer()->notnull(),
            'updater_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181111_220917_user cannot be reverted.\n";

        return false;
    }
    */
}
