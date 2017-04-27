<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170426000000 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("alter table dtb_customer_favorite_product ADD flag SMALLINT;");
        $this->addSql("alter table dtb_product ADD poster text;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // do nothing
    }
}
