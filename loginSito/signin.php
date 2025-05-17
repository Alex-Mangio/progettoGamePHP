<?php
session_start();
$errorMsg = "";
if(isset($_GET["error"])){
  switch($_GET["error"]){
    case "invalid_email":
      $errorMsg = "Inserisci una mail valida";
      break;
    case "wrong_password":
      $errorMsg = "Le password non corrispondono";
      break;
  }
}
$old_inputs = $_SESSION['old_input'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./gameImages/hooded_skeletal_character_final_32x32.png" sizes="64x64">
  <title>Sing-in - Shadow Sneak</title>
  <link rel="stylesheet" href="./signin.css">

    <div class="login-container">
    <div class="login-box">
      <h2>SING-IN FOR START PLAYING</h2>
      <form action="" method="POST">
        <div class="textbox">
          <input type="text" placeholder="Nome" name="nome" required 
          value="<?php echo htmlspecialchars($old_input['nome'] ?? ''); ?>" />
        </div>
        <div class="textbox">
          <input type="text" placeholder="Cognome" name="cognome" required
          value="<?php echo htmlspecialchars($old_input['cognome'] ?? ''); ?>">
        </div>
        <?php if (!empty($error_message) && $_GET["error"] == "invalid_email"){
        echo "<div class=error-message style=color: red; margin-bottom: 10px;>";
          echo "htmlspecialchars($error_message)";
        echo "</div>";
        }
        ?>
        <div class="textbox">
          <input type="text" placeholder="Email" name="email" required>
        </div>
        <?php if (!empty($error_message) && $_GET["error"] == "wrong_password"){
        echo "<div class=error-message style=color: red; margin-bottom: 10px;>";
          echo "htmlspecialchars($error_message)";
        echo "</div>";
        }
        ?>
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