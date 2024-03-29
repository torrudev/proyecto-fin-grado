<main>
  <div class="fullPage-block fondo-portada" style="background-image: url(<?= base_url() . 'recursos/img/daniele-levis-pelusi-ENdi1TkM1QQ-unsplash.jpg'; ?>)">
  </div>
    <div class="container">
      <div class="contenedor-secundario bg-white">
        <h3>Datos de usuario</h3>
        En esta página podras modificar tus datos de perfil.
      </div>

      <div class="contenedor-secundario bg-white">
        <div class="formulario">
          <?= form_open('usuario/modificar_usuario'); ?>
          <label for="nombre">Nombre <span class="requerido">*</span></label>
          <input type="text" name="nombre" value="<?= $nombre ?>" required><br>
          <label for="apellidos">Apellidos <span class="requerido">*</span></label>
          <input type="text" name="apellidos" value="<?= $apellidos ?>" required><br>
          <label for="email">E-mail <span class="requerido">*</span></label>
          <input type="text" name="email" value="<?= $email ?>" required><br>
          <input type="submit" value="Modificar">
          </form>
        </div>
      </div>

      <div class="contenedor-secundario bg-white">
        <div class="formulario">
          <?= form_open('usuario/modificar_contrasena'); ?>
          <label for="contrasena_antigua">Contraseña Actual <span class="requerido">*</span></label>
          <input type="password" name="contrasena_antigua" required><br>
          <label for="contrasena_nueva1">Contraseña Nueva <span class="requerido">*</span></label>
          <input type="password" name="contrasena_nueva1" required><br>
          <label for="contrasena_nueva2">Confirmar Nueva <span class="requerido">*</span></label>
          <input type="password" name="contrasena_nueva2" required><br>
          <input type="submit" value="Cambiar Contraseña">
          </form>
        </div>
      </div>
    </div>
</main>

</body>

</html>