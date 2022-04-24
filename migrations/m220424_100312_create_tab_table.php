<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tab}}`.
 */
class m220424_100312_create_tab_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tab}}', [
            'id' => $this->primaryKey(),
            'file_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()->unique(),
            'tabe_img' => $this->string(),
            'audiowave' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tab}}');
    }
}
