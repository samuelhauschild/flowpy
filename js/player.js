window.player = {
    image: document.querySelector(".album-foto"),
    music: document.querySelector(".player h2"),
    artist: document.querySelector('.title-artist'),
    audio: document.querySelector('audio'),
    audios_data: music,
    currentPlayin: 0,
    currentMusic: {},

    start() {
        this.atualizar();
        this.audio.addEventListener("ended", () => {
            this.next();
        });
    },

    next() {
        this.currentPlayin++;
        if (this.currentPlayin == this.audios_data.length) {
            this.currentPlayin = 0;
            this.atualizar();
        };
        this.atualizar();

    },

    atualizar() {
        this.currentMusic = this.audios_data[this.currentPlayin];

        this.music.innerText = this.currentMusic.title;
        this.artist.innerText = this.currentMusic.artist;
        this.image.style.background = 'url(' + patch_img(this.currentMusic.cover) + ') center center no-repeat';
        this.image.style.backgroundSize = 'contain';
        this.audio.src = patch_music(this.currentMusic.file);
    },

};