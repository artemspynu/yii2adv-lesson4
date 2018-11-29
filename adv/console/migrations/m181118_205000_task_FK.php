<?php

use yii\db\Migration;

/**
 * Class m181118_205000_task_FK
 */
class m181118_205000_task_FK extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_task_user', 'task', ['executor_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_user_2', 'task', ['created_by'], 'user', ['id']);
        $this->addForeignKey('fx_task_user_3', 'task', ['updated_by'], 'user', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_task_user', 'task', ['executor_id'], 'user', ['id']);
        $this->dropForeignKey('fx_task_user_2', 'task', ['created_by'], 'user', ['id']);
        $this->dropForeignKey('fx_task_user_3', 'task', ['updated_by'], 'user', ['id']);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_205000_task_FK cannot be reverted.\n";

        return false;
    }
    */
}
