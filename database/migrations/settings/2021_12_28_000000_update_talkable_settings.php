<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class UpdateTalkableSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->delete('talkable.script_url');
    }

    public function down()
    {
        $this->migrator->add('talkable.script_url', '');
    }
}
