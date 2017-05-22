<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170517000000 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("alter table dtb_category ADD eng_name text;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // do nothing
    }
}
