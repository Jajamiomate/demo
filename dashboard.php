<?php
// dashboard.php – wersja bez logowania, z dostępem do admin panelu

$username = 'admin'; // zmień na 'okxn' jeśli chcesz bez dostępu do Monitoring
$is_admin = ($username === 'admin');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Obywatel BYOKXN</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Panel użytkownika</h1>
    <p>Zalogowany jako: <strong><?php echo $username; ?></strong></p>

    <div class="actions">
      <a href="tools/tool1.php">🔧 Narzędzie 1</a><br>
      <a href="tools/tool2.php">📊 Narzędzie 2</a><br>
      <a href="tools/tool3.php">🗂 Narzędzie 3</a><br>

      <?php if ($is_admin): ?>
        <hr>
        <h2>Monitoring (Admin)</h2>
        <a href="admin/logs.php">📜 Podgląd logów</a><br>
        <a href="admin/status.php">📶 Status systemu</a><br>
      <?php endif; ?>
    </div>

    <hr>
    <footer>
      <p>Projekt BYOKXN – 2024</p>
    </footer>
  </div>
</body>
</html>
