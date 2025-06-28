<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Happy Birthday!</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <h1 id="typing-text"></h1>
    <p class="message">Wishing you all the love and happiness in the world!</p>
    <button onclick="playMusic()">🎉 Play Birthday Song</button>
  </div>

  <!-- Balloons -->
  <div class="balloons">
    <div class="balloon red"></div>
    <div class="balloon blue"></div>
    <div class="balloon yellow"></div>
    <div class="balloon green"></div>
  </div>

  <audio id="birthdayAudio" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>

  <script src="script.js"></script>
</body>
</html>
