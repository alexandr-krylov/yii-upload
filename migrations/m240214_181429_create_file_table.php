<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%file}}`.
 */
class m240214_181429_create_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%file}}', [
            'id' => $this->primaryKey(),
            'file' => $this->string(),
            'name' => $this->string(),
            'description' => $this->text(),
            'hash' => $this->string(),
            'upload_time' => $this->dateTime(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%file}}');
    }
}
