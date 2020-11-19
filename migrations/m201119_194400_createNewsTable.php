<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m201119_194400_createNewsTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Не обязательно в таком стиле, можно sql запрос писать. главное чтоб изменения накатились
        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'author_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // код который отменит изменения.
        // не всегда можно, например в методе safeUp удалили поле из таблицы, тогда невозможно откатить
        // в таком случае необходимо указать return false
        $this->dropTable('{{%articles}}');
    }
}
