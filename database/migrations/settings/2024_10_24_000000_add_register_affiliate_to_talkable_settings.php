<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class AddRegisterAffiliateToTalkableSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('talkable.register_affiliate', true);
    }

    public function down()
    {
        $this->migrator->delete('talkable.register_affiliate');
    }
}
