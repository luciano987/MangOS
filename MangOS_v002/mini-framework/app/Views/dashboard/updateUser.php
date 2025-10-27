

<div class="formContainer">
    
    <form action="/updateUser" method="POST">
        <h1><?=$title?></h1>
    
         <input type="text" name="name" placeholder="Nombre"  value="<?= $this->e($input['name'] ?? '') ?>">
        
        <input type="email" name="email" placeholder="Correo"  value="<?= $this->e($input['email'] ?? '') ?>">
        
        <input type="password" name="password" placeholder="Contraseña" required>

        <input type="password" name="password_confirm" placeholder="Confirme contraseña" required>

        <button type="submit">Actualizar Perfil</button>
    </form>
</div>