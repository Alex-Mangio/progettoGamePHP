<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Shadow Sneak</title>
  <link rel="stylesheet" href="./login.css">

  <div class="login-container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="#" method="POST">
        <div class="textbox">
          <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="textbox">
          <input type="password" id="password" placeholder="Password" name="password" required>
          <span id="toggle-password" class="eye-icon">👁️</span>
        </div>
        <div class="submit-btn">
          <button type="submit">Login</button>
        </div>
        <div class="signup-link">
          <p>Don't have an account? <a href="singin.php">Sing-in</a></p>
        </div>
      </form>
    </div>
  </div>

  <script src="login.js"></script>
</body>
</html>