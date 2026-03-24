<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <main class="page">
    <section class="card" aria-label="Registro de usuario">
      <header class="card__header">
        <h1>Registro</h1>
        <p class="subtitle">Crea tu cuenta con tu nombre y correo.</p>
      </header>

      <form method="post" class="form">
        <label class="field">
          <span class="field__label">Nombre completo</span>
          <input type="text" name="name" placeholder="Ej. Juan Perez" autocomplete="name" required>
        </label>

        <label class="field">
          <span class="field__label">Email</span>
          <input type="email" name="email" placeholder="ejemplo@correo.com" autocomplete="email" required>
        </label>

        <input type="submit" name="register" value="Registrarme" class="button">
      </form>

      <div class="messages" aria-live="polite">
        <?php include("registrar.php"); ?>
      </div>

      <footer class="card__footer">
        <small>Al registrarte, aceptas el uso basico de tus datos para crear tu registro.</small>
      </footer>
    </section>
  </main>
</body>
</html>