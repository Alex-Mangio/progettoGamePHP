<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shadow Sneak</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <div class="container">
    <div class="title">
      <span class="letter">S</span>
      <span class="letter">H</span>
      <span class="letter">A</span>
      <span class="letter">D</span>
      <span class="letter">O</span>
      <span class="letter">W</span>
      <span class="letter"> </span>
      <span class="letter"> </span>
      <span class="letter"> </span>
      <span class="letter"> </span>
      <span class="letter">S</span>
      <span class="letter">N</span>
      <span class="letter">E</span>
      <span class="letter">A</span>
      <span class="letter">K</span>
    </div>

    <div class="menu">
      <button class="play-button" id="openModalBtn">PLAY</button><br>
      <button class="play-button" id="openModalBtn">SKIN</button><br>
      <button class="play-button" id="openModalBtn">SETTINGS</button>
    </div>

  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeModalBtn">&times;</span>
      <h2 id="titoloLOGIN">LOG-IN PAGE</h2><br>
      <p id="descLOGIN">If you already have an account please log-in instead create a new one for start playing</p>
      <form action="../loginSito/login.php"><button class="play-button-login" id="openModalBtn">LOG-IN</button></form>
      <form action="../loginSito/signin.php"><button class="play-button-login" id="openModalBtn">SING-IN</button></form>
    </div>
  </div>

  <script src="./script.js"></script>
</body>
</html>
