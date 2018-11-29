<?php

use yii\db\Migration;

/**
 * Class m181118_211751_project_user
 */
class m181118_211751_project_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project_user', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notnull(),
            'user_id' => $this->integer()->notnull(),
            'role' => $this->text()    //"ENUM('".manager."', '".developer."', '".tester."')",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_user');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_211751_project_user cannot be reverted.\n";

        return false;
    }
    */
}
