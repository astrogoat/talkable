<?php

namespace Astrogoat\Talkable\Settings;

use Helix\Lego\Settings\AppSettings;

class TalkableSettings extends AppSettings
{
    public string $site_id;

    protected array $rules = [
        'site_id' => ['required'],
    ];

    public function description(): string
    {
        return 'Referral program software and loyalty solutions for eCommerce brands. Acquire high-value clients at a low cost, increase retention and grow revenue through targeted referral and loyalty programs.';
    }
}
