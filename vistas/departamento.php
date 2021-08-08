<?php
require 'cabecero.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DEPARTAMENTOS <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fas fa-plus-circle"></i> Agregar</button></h3>

 
        </div>
        <div class="card-body">
          <!-- Contenedor de listados-->
         <div class="panel-body" id="listadoregdata">
              <table id="tblistadoregdata" class="table table-striped table-bordered table-condensed table-over">
                 <thead>
                  <th> Opciones</th>
                  <th> Descripcion</th>
                  <th> Fecha de creacion</th>
                  <th> Fecha de actualizacion</th>
                  <th> Status</th>
                  <th> Empleado modifico</th> 
                 </thead> 
                 <tbody>
                   <thead>
                   <th> Opciones</th>
                   <th> Descripcion</th>
                   <th> Fecha de creacion</th>
                   <th> Fecha de actualizacion</th>
                   <th> Status</th>
                   <th> Empleado modifico</th> 
                   </thead>
                 </tbody>
              </table>
         </div> 
          <div class="panel-body" id="formregdata">
            <form name="formulario" id="formulario" method="post">
              <div name="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label for="descripcion">Nombre del departamento</label>
              <input type="hidden" name="idDepartamento" id="idDepartamento">
               <input type="text" name="descripcion" id="descripcion" maxlength="256" placeholder="Nombre departamento" required>
             </div>
             <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <button class="btn btn-primary" id="btnGuardar" type="submit"><i class="fas fa-save"></i>Guardar</button>
               <button class="btn btn-danger" id="btnCancelar" type="clear" onclick="cancelarform(true)"><i class="fas fa-arrow-circle-left"></i>Cancelar</button>
             </div>
            </form>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
<?php
require 'piepagina.php';
?>
<script type="text/javascript" src="scripts/departamento.js"></script>