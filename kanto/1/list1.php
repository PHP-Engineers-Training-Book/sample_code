<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP Sample</title>
  </head>
  <body>
    <ul>
    <?php for ($i = 1 ; $i <= 5 ; $i++): ?>
      <li><?php echo htmlspecialchars($i); ?></li>
    <?php endfor; ?>
    </ul>
  </body>
</html
