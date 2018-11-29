<?php

use yii\db\Migration;

/**
 * Class m181118_210551_project
 */
class m181118_210551_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notnull(),
            'description' => $this->text()->notnull(),
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
        $this->dropTable('project');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_210551_project cannot be reverted.\n";

        return false;
    }
    */
}
