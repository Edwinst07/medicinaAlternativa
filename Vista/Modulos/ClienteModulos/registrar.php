<script type="text/javascript" src="Vista/js/municipioDepartamento.js"></script>
<section class="form-register">
    <h4>Formulario Registro</h4>
    <form name="controls" method="POST">
      <input class="controls" type="text" name="cedula" id="cedula" placeholder="Cedula*" min="6" pattern="^[+]?([.]\d+|\d+[.]?\d*)$" title="Campo numérico. Mínimo 5 dígitos" require>
      <input class="controls" type="text" name="nombre1" id="nombre1" placeholder="Primer Nombre*" minlength="3" maxlength="15" title="Mínimo 3 caracteres."  require>
      <input class="controls" type="text" name="nombre2" id="nombre2" placeholder="Segundo Nombre" title="Mínimo 3 caracteres.">
      <input class="controls" type="text" name="apellido1" id="apellido1" placeholder="Primer Apellido*" minlength="4" maxlength="10" title="Mínimo 3 caracteres." require>
      <input class="controls" type="text" name="apellido2" id="apellido2" placeholder="Segundo Apellido" title="Minimo 3 caracteres.">
      <input class="controls" type="text" name="direccion" id="direccion" placeholder="dirección*" minlength="4" maxlength="30" require>
      <input class="controls" type="tel" name="telefono" id="telefono" placeholder="Teléfono" min="7" max="11" title="Mínimo 7 dígitos" require>
      <input class="controls" type="text" name="celular" id="celular" placeholder="Celular*" min="10" max="11" title="Mínimo 10 dígitos" require>
      <select class="controls" name="dep" id="selectDep" title="Seleccione un departamento">
        <option value="">Departamento*</option>

        <?php

          $dep = RegistrarC::DepartamentoC();

          foreach ($dep as $key => $value) {
            
            echo '<option value="'.$value["idDepartamento"].'">'.$value["nombreDepartamento"].'</option>';
          }
        
        ?>

      </select>
      <select class="controls" name="municipio" id="selectMun">
        <option value="">Municipio*</option>
      </select>
      <input class="controls" type="email" name="correo" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" title="ejemplo123@email.com" id="correo" placeholder="Correo*" require>
      <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña*" pattern="(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{5,10})$" title="Mínimo 5 caracteres, con letras y numeros" require>
      <p>Estoy de acuerdo con <a href="#">Términos y Condiciones</a></p>
      <input class="botons" name="registrar" type="submit" value="Registrar">
      <p><a href="medicinaAlternativa.php?dir=login">¿Ya tengo Cuenta?</a></p>

      <?php
      
      $registrar = new RegistrarC();
      $registrar -> RegistrarClienteC();
      $registrar -> AccesoUsuarioC();
      
      ?>

    </form>    
  </section>