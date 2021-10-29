<audio-player
    data-src="{{ $src }}"
    data-title="{{ $title }}"
    data-description="{{ $description }}">
    <div class="audio">
        <audio src="{{ $src }}" preload="metadata"></audio>
        <h1 class="audio__title">{{ $title }}</h1>
        <div class="audio__folder">
            <span>{{ config('audio-player.title', 'Audio Player') }}</span>
        </div>
        <div class="audio__controls">
            <button class="audio__button audio__play">
                <span>Play/Stop</span>
            </button>
            <div class="audio__time time">
                <span class="time__current">0:00</span>
                <span>/</span>
                <span class="time__duration">0:00</span>
            </div>
            <div class="audio__timeline">
                <input type="range" class="audio__slider slider" max="100" value="0">            
            </div>
            <div class="audio__volume volume">
                <div class="audio__timeline">
                    <input type="range" class="volume__slider audio__slider" max="100" value="100">
                </div>
                <button class="audio__button volume__button">
                    <span>Volume</span>
                </button>
            </div>
        </div>
        <h1 class="audio__description">{{ $description }}</h1>
    </div>
</audio-player>
