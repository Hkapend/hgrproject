<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201208030331 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE requisition ADD service_id INT NOT NULL, ADD observation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE requisition ADD CONSTRAINT FK_15E142BEED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_15E142BEED5CA9E6 ON requisition (service_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE requisition DROP FOREIGN KEY FK_15E142BEED5CA9E6');
        $this->addSql('DROP INDEX IDX_15E142BEED5CA9E6 ON requisition');
        $this->addSql('ALTER TABLE requisition DROP service_id, DROP observation');
    }
}
