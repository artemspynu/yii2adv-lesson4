<?php

use yii\db\Migration;

/**
 * Class m181118_211035_project_FK
 */
class m181118_211035_project_FK extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_project_user', 'project', ['created_by'], 'user', ['id']);
        $this->addForeignKey('fx_project_user_2', 'project', ['updated_by'], 'user', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_project_user', 'project', ['created_by'], 'user', ['id']);
        $this->dropForeignKey('fx_project_user_2', 'project', ['updated_by'], 'user', ['id']);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_211035_project_FK cannot be reverted.\n";

        return false;
    }
    */
}
