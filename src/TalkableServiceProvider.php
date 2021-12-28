<?php

namespace Astrogoat\Talkable;

use Astrogoat\Talkable\Settings\TalkableSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TalkableServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('talkable')
            ->settings(TalkableSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(function (App $app) {
                return $this->registerApp($app);
            });
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('talkable')
            ->hasViews();
    }
}
