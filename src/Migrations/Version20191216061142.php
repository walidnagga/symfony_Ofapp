<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191216061142 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE expertise (id INT AUTO_INCREMENT NOT NULL, num_dossier VARCHAR(255) NOT NULL, date DATETIME NOT NULL, long_servitude NUMERIC(5, 2) NOT NULL, larg_servitude NUMERIC(5, 2) NOT NULL, long_degat NUMERIC(5, 2) NOT NULL, larg_degat NUMERIC(5, 2) NOT NULL, prix_unit_degat NUMERIC(5, 3) NOT NULL, prix_unit_servitude NUMERIC(5, 3) NOT NULL, montant_degat NUMERIC(8, 3) NOT NULL, montant_servitude NUMERIC(8, 3) NOT NULL, montant_global NUMERIC(8, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cooordonnee (id INT AUTO_INCREMENT NOT NULL, num INT DEFAULT NULL, rue VARCHAR(255) DEFAULT NULL, municip_deleg VARCHAR(255) NOT NULL, cod_post INT NOT NULL, governorat VARCHAR(255) NOT NULL, num_tel VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE id_geo (id INT AUTO_INCREMENT NOT NULL, governorat VARCHAR(255) NOT NULL, deleg_municip VARCHAR(255) NOT NULL, cord_x VARCHAR(255) NOT NULL, cord_y VARCHAR(255) NOT NULL, num VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, num_cheque VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, cin VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom_pere VARCHAR(255) NOT NULL, nom_mere VARCHAR(255) NOT NULL, nom_gr_pere VARCHAR(255) NOT NULL, date_naiss DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terrain (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, id_steg VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE convention (id INT AUTO_INCREMENT NOT NULL, num_convention VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE expertise');
        $this->addSql('DROP TABLE cooordonnee');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE id_geo');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE terrain');
        $this->addSql('DROP TABLE convention');
    }
}
