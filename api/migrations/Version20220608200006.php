<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220608200006 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contas (id INT AUTO_INCREMENT NOT NULL, razao_social VARCHAR(255) NOT NULL, cnpj VARCHAR(14) NOT NULL, nome_fantasia VARCHAR(255) DEFAULT NULL, conta_repasse VARCHAR(20) NOT NULL, agencia_repasse VARCHAR(15) NOT NULL, banco_repasse VARCHAR(3) NOT NULL, email_empresa VARCHAR(255) DEFAULT NULL, telefone_empresa VARCHAR(50) DEFAULT NULL, endereco_emrpesa VARCHAR(255) DEFAULT NULL, bunero_emrpesa VARCHAR(10) DEFAULT NULL, `update` VARCHAR(255) NOT NULL, bairro_empresa VARCHAR(100) DEFAULT NULL, cidade_empresa VARCHAR(50) DEFAULT NULL, cep_empresa VARCHAR(20) DEFAULT NULL, estado_empresa VARCHAR(20) DEFAULT NULL, numero_empresa VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contas');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
