<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170526000000 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("INSERT INTO dtb_block (device_type_id, block_id, block_name, file_name, create_date, update_date, logic_flg, deletable_flg) VALUES (10, 11, 'Wordpress news', 'wp_news', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1, 0);");
        $this->addSql("UPDATE dtb_block_position SET block_id=11 WHERE page_id=1 and target_id=8 and block_id=4;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // do nothing
    }
}
