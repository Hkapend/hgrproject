<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201120141009 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, nom_complet VARCHAR(255) NOT NULL, fonction VARCHAR(255) NOT NULL, INDEX IDX_A6BCF3DEED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisition_globale (id INT AUTO_INCREMENT NOT NULL, materiel_id INT NOT NULL, quantite INT NOT NULL, observation VARCHAR(255) NOT NULL, INDEX IDX_8A3B3C2616880AAF (materiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DEED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE requisition_globale ADD CONSTRAINT FK_8A3B3C2616880AAF FOREIGN KEY (materiel_id) REFERENCES materiels (id)');
        $this->addSql('ALTER TABLE affectation ADD materiel_id INT NOT NULL, ADD stock_id INT NOT NULL, ADD service_id INT NOT NULL');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D316880AAF FOREIGN KEY (materiel_id) REFERENCES materiels (id)');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D3DCD6110 FOREIGN KEY (stock_id) REFERENCES fiche_stock (id)');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D3ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_F4DD61D316880AAF ON affectation (materiel_id)');
        $this->addSql('CREATE INDEX IDX_F4DD61D3DCD6110 ON affectation (stock_id)');
        $this->addSql('CREATE INDEX IDX_F4DD61D3ED5CA9E6 ON affectation (service_id)');
        $this->addSql('ALTER TABLE fiche_stock ADD materiel_id INT NOT NULL, ADD pv_id INT NOT NULL');
        $this->addSql('ALTER TABLE fiche_stock ADD CONSTRAINT FK_31B6BC5F16880AAF FOREIGN KEY (materiel_id) REFERENCES materiels (id)');
        $this->addSql('ALTER TABLE fiche_stock ADD CONSTRAINT FK_31B6BC5FE8A4F4B0 FOREIGN KEY (pv_id) REFERENCES pv_reception (id)');
        $this->addSql('CREATE INDEX IDX_31B6BC5F16880AAF ON fiche_stock (materiel_id)');
        $this->addSql('CREATE INDEX IDX_31B6BC5FE8A4F4B0 ON fiche_stock (pv_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D3ED5CA9E6');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DEED5CA9E6');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE requisition_globale');
        $this->addSql('DROP TABLE service');
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D316880AAF');
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D3DCD6110');
        $this->addSql('DROP INDEX IDX_F4DD61D316880AAF ON affectation');
        $this->addSql('DROP INDEX IDX_F4DD61D3DCD6110 ON affectation');
        $this->addSql('DROP INDEX IDX_F4DD61D3ED5CA9E6 ON affectation');
        $this->addSql('ALTER TABLE affectation DROP materiel_id, DROP stock_id, DROP service_id');
        $this->addSql('ALTER TABLE fiche_stock DROP FOREIGN KEY FK_31B6BC5F16880AAF');
        $this->addSql('ALTER TABLE fiche_stock DROP FOREIGN KEY FK_31B6BC5FE8A4F4B0');
        $this->addSql('DROP INDEX IDX_31B6BC5F16880AAF ON fiche_stock');
        $this->addSql('DROP INDEX IDX_31B6BC5FE8A4F4B0 ON fiche_stock');
        $this->addSql('ALTER TABLE fiche_stock DROP materiel_id, DROP pv_id');
    }
}
