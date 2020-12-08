<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204162352 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affectation (id INT AUTO_INCREMENT NOT NULL, materiel_id INT NOT NULL, stock_id INT, service_id INT NOT NULL, qte INT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_F4DD61D316880AAF (materiel_id), INDEX IDX_F4DD61D3DCD6110 (stock_id), INDEX IDX_F4DD61D3ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_stock (id INT AUTO_INCREMENT NOT NULL, materiel_id INT NOT NULL,lieuStock VARCHAR(255) NOT NULL, pv_id INT NOT NULL, num_lot VARCHAR(50) NOT NULL, provenance VARCHAR(255) NOT NULL, qte_entrer INT NOT NULL, qte_sortie INT NOT NULL, perte INT NOT NULL, observation VARCHAR(255) NOT NULL, INDEX IDX_31B6BC5F16880AAF (materiel_id), INDEX IDX_31B6BC5FE8A4F4B0 (pv_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, adresse VARCHAR(500) NOT NULL, denomination VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiels (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT DEFAULT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, observation VARCHAR(255) DEFAULT NULL, activated TINYINT(1) NOT NULL, INDEX IDX_9C1EBE69670C757F (fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, nom_complet VARCHAR(255) NOT NULL, fonction VARCHAR(255) NOT NULL, INDEX IDX_A6BCF3DEED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pv_reception (id INT AUTO_INCREMENT NOT NULL, description_id INT NOT NULL,  qte_recu INT NOT NULL, marque VARCHAR(255) NOT NULL, observation VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, numpv VARCHAR(255) NOT NULL, INDEX IDX_B7C8936FD9F966B (description_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisition (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisition_globale (id INT AUTO_INCREMENT NOT NULL, materiel_id INT NOT NULL, quantite INT NOT NULL, observation VARCHAR(255) NOT NULL, INDEX IDX_8A3B3C2616880AAF (materiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D316880AAF FOREIGN KEY (materiel_id) REFERENCES materiels (id)');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D3DCD6110 FOREIGN KEY (stock_id) REFERENCES fiche_stock (id)');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D3ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE fiche_stock ADD CONSTRAINT FK_31B6BC5F16880AAF FOREIGN KEY (materiel_id) REFERENCES materiels (id)');
        $this->addSql('ALTER TABLE fiche_stock ADD CONSTRAINT FK_31B6BC5FE8A4F4B0 FOREIGN KEY (pv_id) REFERENCES pv_reception (id)');
        $this->addSql('ALTER TABLE materiels ADD CONSTRAINT FK_9C1EBE69670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DEED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE pv_reception ADD CONSTRAINT FK_B7C8936FD9F966B FOREIGN KEY (description_id) REFERENCES materiels (id)');
        $this->addSql('ALTER TABLE requisition_globale ADD CONSTRAINT FK_8A3B3C2616880AAF FOREIGN KEY (materiel_id) REFERENCES materiels (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D3DCD6110');
        $this->addSql('ALTER TABLE materiels DROP FOREIGN KEY FK_9C1EBE69670C757F');
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D316880AAF');
        $this->addSql('ALTER TABLE fiche_stock DROP FOREIGN KEY FK_31B6BC5F16880AAF');
        $this->addSql('ALTER TABLE pv_reception DROP FOREIGN KEY FK_B7C8936FD9F966B');
        $this->addSql('ALTER TABLE requisition_globale DROP FOREIGN KEY FK_8A3B3C2616880AAF');
        $this->addSql('ALTER TABLE fiche_stock DROP FOREIGN KEY FK_31B6BC5FE8A4F4B0');
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D3ED5CA9E6');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DEED5CA9E6');
        $this->addSql('DROP TABLE affectation');
        $this->addSql('DROP TABLE fiche_stock');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE materiels');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE pv_reception');
        $this->addSql('DROP TABLE requisition');
        $this->addSql('DROP TABLE requisition_globale');
        $this->addSql('DROP TABLE service');
    }
}
