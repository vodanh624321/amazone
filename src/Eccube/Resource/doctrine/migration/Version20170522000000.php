<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170522000000 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("INSERT INTO dtb_page_layout (device_type_id, page_id, page_name, url, file_name, edit_flg, author, description, keyword, update_url, create_date, update_date, meta_robots) VALUES (10, 46, 'マインカテゴリ', 'category_main', 'Product/list', 2, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL);");
        $this->addSql("INSERT INTO dtb_page_layout (device_type_id, page_id, page_name, url, file_name, edit_flg, author, description, keyword, update_url, create_date, update_date, meta_robots) VALUES (10, 47, 'サブカテゴリ', 'category_sub', 'Product/list', 2, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL);");

        
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // do nothing
    }
}
