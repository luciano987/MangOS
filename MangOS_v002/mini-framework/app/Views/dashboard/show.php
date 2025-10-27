    <h1><?= $title?></h1>
    <p>ID de usuario: <?= $user['user_id'] ?? 'N/A' ?></p>
    <p>Nombre: <?= htmlspecialchars($user['name']) ?></p>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <a href="/updateUser">Actualizar mi cuenta</a>
    <p><a href="/removeUser"> Eliminar mi cuenta</a></p>
    <p><a href="/dashboard">← Volver al dashboard</a></p>
