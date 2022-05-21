<?php

use yii\db\Migration;

/**
 * Class m220505_171146_change_user_table
 */
class m220505_171146_change_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('user', 'regdate');
        $this->dropColumn('user', 'password_hash');
        $this->dropColumn('user', 'password_reset_token');
        $this->dropColumn('user', 'auth_key');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220505_171146_change_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220505_171146_change_user_table cannot be reverted.\n";

        return false;
    }
    */
}
