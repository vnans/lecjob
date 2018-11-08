<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181108105436 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE UserRole DROP FOREIGN KEY FK_A8503F73D60322AC');
        $this->addSql('ALTER TABLE Actualite DROP FOREIGN KEY FK_D6630334ED5CA9E6');
        $this->addSql('ALTER TABLE Service DROP FOREIGN KEY FK_2E20A34E273D568E');
        $this->addSql('ALTER TABLE Souscription DROP FOREIGN KEY FK_32DCB9F5ED5CA9E6');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Chef (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE CjOffres (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, metier VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, experience VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(10000) NOT NULL, recruteur VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, dossier VARCHAR(255) NOT NULL, dateAjout DATETIME NOT NULL, dateFin DATETIME NOT NULL, image VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE Actualite');
        $this->addSql('DROP TABLE Facturation');
        $this->addSql('DROP TABLE Role');
        $this->addSql('DROP TABLE Service');
        $this->addSql('DROP TABLE Souscription');
        $this->addSql('DROP TABLE UserRole');
        $this->addSql('DROP TABLE cj_offres');
        $this->addSql('DROP TABLE forens');
        $this->addSql('DROP INDEX IDX_2DA1797785B21B1B ON User');
        $this->addSql('DROP INDEX IDX_2DA17977A4AEAFEA ON User');
        $this->addSql('ALTER TABLE User CHANGE statut statut INT DEFAULT NULL, CHANGE securite securite INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Actualite (id INT AUTO_INCREMENT NOT NULL, editeur_id INT NOT NULL, service_id INT NOT NULL, titre VARCHAR(20) DEFAULT NULL COLLATE utf8_unicode_ci, information TINYTEXT NOT NULL COLLATE utf8_unicode_ci, datePublication DATETIME NOT NULL, dateDiffusion DATETIME DEFAULT NULL, statut SMALLINT DEFAULT NULL, valide TINYINT(1) DEFAULT NULL, focus TINYINT(1) DEFAULT NULL, differe TINYINT(1) DEFAULT NULL, INDEX IDX_D66303343375BD21 (editeur_id), INDEX IDX_D6630334ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Facturation (id INT AUTO_INCREMENT NOT NULL, souscription_id INT DEFAULT NULL, montant NUMERIC(10, 0) DEFAULT NULL, soldeInitial NUMERIC(10, 0) DEFAULT NULL, soldeRestant NUMERIC(10, 0) DEFAULT NULL, description TINYTEXT DEFAULT NULL COLLATE utf8_unicode_ci, date DATETIME DEFAULT NULL, statut SMALLINT DEFAULT NULL, tel VARCHAR(20) DEFAULT NULL COLLATE utf8_unicode_ci, smsc VARCHAR(10) DEFAULT NULL COLLATE utf8_unicode_ci, serviceCode VARCHAR(10) DEFAULT NULL COLLATE utf8_unicode_ci, INDEX IDX_9177DEEDE7E9C1A9 (souscription_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Role (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, libelle VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, statut TINYINT(1) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, UNIQUE INDEX UNIQ_F75B255477153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Service (id INT AUTO_INCREMENT NOT NULL, gestionnaire_id INT NOT NULL, dateCreation DATETIME NOT NULL, code VARCHAR(20) NOT NULL COLLATE utf8_unicode_ci, libelle VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, reponseAbonne LONGTEXT NOT NULL COLLATE utf8_unicode_ci, reponseDesabonne LONGTEXT NOT NULL COLLATE utf8_unicode_ci, statut TINYINT(1) DEFAULT NULL, serviceParent_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_2E20A34E77153098 (code), INDEX IDX_2E20A34E273D568E (serviceParent_id), INDEX IDX_2E20A34E6885AC1B (gestionnaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Souscription (id INT AUTO_INCREMENT NOT NULL, abonne_id INT NOT NULL, service_id INT NOT NULL, dateDebut DATETIME NOT NULL, dateFin DATETIME NOT NULL, dateReception DATETIME DEFAULT NULL, dateFacturation DATETIME DEFAULT NULL, dateReabonnement DATETIME DEFAULT NULL, dateDesabonnement DATETIME DEFAULT NULL, nbre SMALLINT NOT NULL, statut TINYINT(1) DEFAULT NULL, INDEX IDX_32DCB9F5C325A696 (abonne_id), INDEX IDX_32DCB9F5ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE UserRole (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, user_id INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, INDEX IDX_A8503F73A76ED395 (user_id), INDEX IDX_A8503F73D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cj_offres (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, libelle VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, metier VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, niveau VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, experience VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, lieu VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(10000) NOT NULL COLLATE utf8mb4_unicode_ci, recruteur VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, tel VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, dossier VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_ajout DATETIME NOT NULL, date_fin DATETIME NOT NULL, image VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, slug VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forens (id INT UNSIGNED AUTO_INCREMENT NOT NULL, degre VARCHAR(45) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Actualite ADD CONSTRAINT FK_D66303343375BD21 FOREIGN KEY (editeur_id) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Actualite ADD CONSTRAINT FK_D6630334ED5CA9E6 FOREIGN KEY (service_id) REFERENCES Service (id)');
        $this->addSql('ALTER TABLE Service ADD CONSTRAINT FK_2E20A34E273D568E FOREIGN KEY (serviceParent_id) REFERENCES Service (id)');
        $this->addSql('ALTER TABLE Service ADD CONSTRAINT FK_2E20A34E6885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Souscription ADD CONSTRAINT FK_32DCB9F5C325A696 FOREIGN KEY (abonne_id) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Souscription ADD CONSTRAINT FK_32DCB9F5ED5CA9E6 FOREIGN KEY (service_id) REFERENCES Service (id)');
        $this->addSql('ALTER TABLE UserRole ADD CONSTRAINT FK_A8503F73D60322AC FOREIGN KEY (role_id) REFERENCES Role (id)');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE Chef');
        $this->addSql('DROP TABLE CjOffres');
        $this->addSql('ALTER TABLE User CHANGE statut statut TINYINT(1) DEFAULT NULL, CHANGE securite securite TINYINT(1) DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_2DA1797785B21B1B ON User (partenairePrincipal_id)');
        $this->addSql('CREATE INDEX IDX_2DA17977A4AEAFEA ON User (entreprise_id)');
    }
}
