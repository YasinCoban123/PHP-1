const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

let frames = 0;

const DEGREE = Math.PI / 180;

// load images
const sprite = new Image();
sprite.src = "sprite.png";

// game state
const state = {
  current: 0,
  getReady: 0,
  game: 1,
  over: 2
}

// start button coordinates
const startBtn = {
  x: 120,
  y: 263,
  w: 83,
  h: 29
}

// control the game
const controls = {
  space: 32,
  enter: 13
}

// score
const score = {
  best: parseInt(localStorage.getItem("best")) || 0,
  value: 0,
  medal: []
}

// bird
const bird = {
  x: 50,
  y: 150,
  w: 34,
  h: 26
}

// gravity
const gravity = 0.25;

// movement
const movement = {
  velocity: 0,
  jump: 4.6,
  friction: 0.9
}

// pipes
const pipes = {
  gap: 85,
  w: 26,
  h: 400,
  bottom: {
    sX: 553,
    sY: 0
  },
  top: {
    sX: 502,
    sY: 0
  }
}

// draw
function draw() {
  ctx.drawImage(sprite, 0, 0, canvas.width, canvas.height, 0, 0, canvas.width, canvas.height);
}

// update
function update() {
  frames++;
}

// loop
function loop() {
  update();
  draw();
  requestAnimationFrame(loop);
}

loop();
