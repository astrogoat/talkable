<?php

namespace Astrogoat\Talkable\Settings;

use Helix\Lego\Settings\AppSettings;

class TalkableSettings extends AppSettings
{
    public string $site_id;
    public string $script_url;

    protected array $rules = [
        'site_id' => ['required'],
        'script_url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'Interact with Talkable.';
    }
}
