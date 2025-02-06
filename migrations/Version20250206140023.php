<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250206140023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849554E8F37B4');
        $this->addSql('DROP INDEX IDX_42C849554E8F37B4 ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE id_vehicule_reserver_id vehicule_reserver_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955427FC610 FOREIGN KEY (vehicule_reserver_id) REFERENCES vehicules (id)');
        $this->addSql('CREATE INDEX IDX_42C84955427FC610 ON reservation (vehicule_reserver_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955427FC610');
        $this->addSql('DROP INDEX IDX_42C84955427FC610 ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE vehicule_reserver_id id_vehicule_reserver_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849554E8F37B4 FOREIGN KEY (id_vehicule_reserver_id) REFERENCES vehicules (id)');
        $this->addSql('CREATE INDEX IDX_42C849554E8F37B4 ON reservation (id_vehicule_reserver_id)');
    }
}
