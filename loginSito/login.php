<?php
$errorMsg = "";
if(isset($_GET["error"])){
  $errorMsg = "*Credeziali inserite non trovate";
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../giocoSito/gameImages/hooded_skeletal_character_final_32x32.png" sizes="64x64">
  <title>Login - Shadow Sneak</title>
  <link rel="stylesheet" href="./login.css">

  <div class="login-container">
    <div class="login-box">
      <h2>LOGIN TO START PLAYING!</h2>
      <form action="confermaLogin.php" method="POST">
        <?php if (!empty($error_message)){
        echo "<div class=error-message style=color: red; margin-bottom: 10px;>";
          echo "htmlspecialchars($error_message)";
        echo "</div>";
        }
        ?>
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
          <p>Don't have an account? <a href="signin.php">Sing-in</a></p>
        </div>
      </form>
    </div>
  </div>

  <script src="login.js"></script>
</body>
</html>