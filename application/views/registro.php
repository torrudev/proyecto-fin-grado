<main>
  <?php echo form_open('usuario/insertar_usuario'); ?>
  <h1>Registro</h1>
  ¿Ya estas registrado?
  <a href="<?php echo base_url() . 'index.php/usuario/vista_login'; ?>">Inicia sesion ahora</a><br>
  Nick: <input type="text" name="nick" required><br>
  Contraseña: <input type="password" name="contrasena" required><br>
  Nombre: <input type="text" name="nombre" required><br>
  Apellidos: <input type="text" name="apellidos" required><br>
  Email: <input type="text" name="email" required><br>
  <input type="submit" value="Registrarse">
  </form>
</main>

</body>

</html>