<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170421000000 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("alter table dtb_product ADD sell_date TIMESTAMP;");
        $this->addSql("alter table dtb_product ADD hd_link text;");
        $this->addSql("alter table dtb_product ADD sd_link text;");
        $this->addSql("alter table dtb_product ADD trailer_link text;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // do nothing
    }
}
