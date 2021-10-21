<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateTalkableSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('talkable.enabled', false);
        $this->migrator->add('talkable.site_id', '');
        $this->migrator->add('talkable.script_url', '');
    }

    public function down()
    {
        $this->migrator->delete('talkable.enabled');
        $this->migrator->delete('talkable.site_id');
        $this->migrator->delete('talkable.script_url');
    }
}
