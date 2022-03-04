const patch_music = function(file) {
    return `./musicas/${file}`;
}

const patch_img = function(file) {
    return `./img/${file}`;
}
window.addEventListener("load", () => {
    player.start();
});