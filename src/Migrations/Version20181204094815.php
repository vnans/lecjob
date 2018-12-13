<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181204094815 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, entreprise_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, username VARCHAR(20) NOT NULL, password VARCHAR(255) DEFAULT NULL, plain_password VARCHAR(30) DEFAULT NULL, salt VARCHAR(255) DEFAULT NULL, tel VARCHAR(20) DEFAULT NULL, smsc VARCHAR(10) DEFAULT NULL, date_creation DATETIME DEFAULT NULL, titre VARCHAR(100) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, statut INT DEFAULT NULL, etat INT DEFAULT NULL, securite INT DEFAULT NULL, partenaire_principal_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chef (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fos_user ADD iduser INT NOT NULL');
        $this->addSql('ALTER TABLE compteur CHANGE valeur valeur VARCHAR(10) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE chef');
        $this->addSql('ALTER TABLE compteur CHANGE valeur valeur VARCHAR(45) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE fos_user DROP iduser');
    }
}
