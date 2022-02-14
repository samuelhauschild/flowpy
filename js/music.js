/* Objects */
var _player = document.getElementById('player');

/* Aplication */
var tracks = [
  './musicas/1.mp3',
  './musicas/2.mp3',
  './musicas/3.mp3',
  './musicas/4.mp3',
  './musicas/5.mp3',
  './musicas/6.mp3'
];

function playNext() {
  var track = tracks[Math.floor(Math.random() * tracks.length)];

  _player.src = track;
  return _player.play();
}

/* Events */
window.addEventListener('load', playNext);
_player.addEventListener('ended', playNext);