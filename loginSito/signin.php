<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sing-in - Shadow Sneak</title>
  <link rel="stylesheet" href="./signin.css">

    <div class="login-container">
    <div class="login-box">
      <h2>SING-IN FOR START PLAYING</h2>
      <form action="" method="POST">
        <div class="textbox">
          <input type="text" placeholder="Nome" name="nome" required>
        </div>
        <div class="textbox">
          <input type="text" placeholder="Cognome" name="cognome" required>
        </div>
        <div class="textbox">
          <input type="text" placeholder="Email" name="email" required>
        </div>
        <div class="textbox">
          <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="textbox">
          <input type="password" id="password" placeholder="Conferma Password" name="conferma-password" required>
          <span id="toggle-password" class="eye-icon">👁️</span>
        </div>
        <div class="remember-me">
          <label>
            <input type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <div class="signup-link">
          <p>Do you have an account? <a href="login.php">Log-in</a></p>
        </div>
        <div class="submit-btn">
          <button type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>

  <script src="login.js"></script>
</body>
</html>