<?php

use yii\db\Migration;

/**
 * Class m181118_183119_test
 */
class m181118_183119_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('test');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_183119_test cannot be reverted.\n";

        return false;
    }
    */
}
