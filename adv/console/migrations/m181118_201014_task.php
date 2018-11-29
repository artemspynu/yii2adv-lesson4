<?php

use yii\db\Migration;

/**
 * Class m181118_201014_task
 */
class m181118_201014_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notnull(),
            'description' => $this->text()->notnull(),
            'estimation' => $this->integer()->notnull(),
            'executor_id' => $this->integer(),
            'started_at' => $this->integer(),
            'completed_at' => $this->integer(),
            'created_by' => $this->integer()->notnull(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer()->notnull(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_201014_task cannot be reverted.\n";

        return false;
    }
    */
}
