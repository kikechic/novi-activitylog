<?php

namespace Kikechic\Activitylog;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentAsset;

class Activitylog implements Plugin
{
    public function getId(): string
    {
        return 'activitylog';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('activitylog', __DIR__ . '/../resources/dist/activitylog.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('activitylog');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
