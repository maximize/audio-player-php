<?php

namespace Maximize\AudioPlayer;

use Illuminate\Support\ServiceProvider;
use Maximize\AudioPlayer\Components\Player;

class AudioPlayerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->loadViewsFrom(__DIR__.'/resources/views', 'audio');
        $this->loadViewComponentsAs('audio', [
            Player::class
        ]);

        $this->publishes([
            __DIR__.'/config/audio-player.php' => config_path('audio-player.php'),
            __DIR__.'/public' => public_path('assets'),
        ], 'audio-player');
    }
}