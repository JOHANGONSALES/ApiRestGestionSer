<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118195045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE presupuesto (id INT AUTO_INCREMENT NOT NULL, fk_year_id INT NOT NULL, ingresos DOUBLE PRECISION NOT NULL, gastos DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_1B6368D3B0EEC38B (fk_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seguidores_rrss (id INT AUTO_INCREMENT NOT NULL, fk_year_id INT NOT NULL, cantidad INT NOT NULL, UNIQUE INDEX UNIQ_2CF93616B0EEC38B (fk_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE socios (id INT AUTO_INCREMENT NOT NULL, fk_year_id INT NOT NULL, cantidad INT NOT NULL, UNIQUE INDEX UNIQ_62EAC1FCB0EEC38B (fk_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voluntarios (id INT AUTO_INCREMENT NOT NULL, fk_year_id INT NOT NULL, cantidad INT NOT NULL, UNIQUE INDEX UNIQ_412A7221B0EEC38B (fk_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE years (id INT AUTO_INCREMENT NOT NULL, year INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE presupuesto ADD CONSTRAINT FK_1B6368D3B0EEC38B FOREIGN KEY (fk_year_id) REFERENCES years (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE seguidores_rrss ADD CONSTRAINT FK_2CF93616B0EEC38B FOREIGN KEY (fk_year_id) REFERENCES years (id)');
        $this->addSql('ALTER TABLE socios ADD CONSTRAINT FK_62EAC1FCB0EEC38B FOREIGN KEY (fk_year_id) REFERENCES years (id)');
        $this->addSql('ALTER TABLE voluntarios ADD CONSTRAINT FK_412A7221B0EEC38B FOREIGN KEY (fk_year_id) REFERENCES years (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE presupuesto DROP FOREIGN KEY FK_1B6368D3B0EEC38B');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE seguidores_rrss DROP FOREIGN KEY FK_2CF93616B0EEC38B');
        $this->addSql('ALTER TABLE socios DROP FOREIGN KEY FK_62EAC1FCB0EEC38B');
        $this->addSql('ALTER TABLE voluntarios DROP FOREIGN KEY FK_412A7221B0EEC38B');
        $this->addSql('DROP TABLE presupuesto');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE seguidores_rrss');
        $this->addSql('DROP TABLE socios');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE voluntarios');
        $this->addSql('DROP TABLE years');
    }
}
