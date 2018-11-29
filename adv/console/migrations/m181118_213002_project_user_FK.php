<?php

use yii\db\Migration;

/**
 * Class m181118_213002_project_user_FK
 */
class m181118_213002_project_user_FK extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_projectuser_user', 'project_user', ['user_id'], 'user', ['id']);
        $this->addForeignKey('fx_projectuser_project', 'project_user', ['project_id'], 'project', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_projectuser_user', 'project_user', ['user_id'], 'user', ['id']);
        $this->dropForeignKey('fx_projectuser_project', 'project_user', ['project_id'], 'project', ['id']);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_213002_project_user_FK cannot be reverted.\n";

        return false;
    }
    */
}
