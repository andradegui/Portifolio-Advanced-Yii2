<?php

use yii\db\Migration;

/**
 * Class m240724_175100_fix_file_foreign_key_in_testimonial_table
 */
class m240724_175100_fix_file_foreign_key_in_testimonial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

         // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-testimonial-customer_image}}',
            '{{%testimonial}}'
        );

        $this->alterColumn('{{%testimonial}}', 'customer_image', $this->integer());

        // add foreign key for table `{{%file}}`
        $this->addForeignKey(
            '{{%fk-testimonial-customer_image}}',
            '{{%testimonial}}',
            'customer_image',
            '{{%file}}',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       
          // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-testimonial-customer_image}}',
            '{{%testimonial}}'
        );

        $this->alterColumn('{{%testimonial}}', 'customer_image', $this->integer()->notNull());

        // add foreign key for table `{{%file}}`
        $this->addForeignKey(
            '{{%fk-testimonial-customer_image}}',
            '{{%testimonial}}',
            'customer_image',
            '{{%file}}',
            'id',
            'CASCADE'
        );

    }

}
