
  <div class="content-wrapper">

    <section class="content" style="height: 80%;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ver Preguntas</h3>

            </div>
            <div class="box-tools">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalAgregar"><i class="fa fa-plus"></i>&nbsp;Agregar</button>

            </div>
            <div class="box-body">
              <table id="preguntas" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre Corto</th>
                  <th>Lección</th>
                  <th>Pregunta</th>
                  <th>Ponderación</th>
                  <th>Fecha</th>
                </tr>
                </thead>
                
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
          </div>
 
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div id="modalAgregar" class="modal fade bs-example-modal-md">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header modalCabecera" style="color:white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title modalTitle">Agregar Preguntas</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="title" >Lección</label>
                  <?php 
                    error_reporting(0);
                    require_once "controladores/general.php";
                    require_once "modelos/general.php";

                    $table = "lecciones";
                    $campos = "*";
                    $verLecciones = ControladorGeneral::ctrMostrarDatosLecciones($table, $campos);

                    echo '<select class="form-control" name="leccion" id="leccion">
                      <option value="">Seleccione</option>';

                      for($i = 0; $i < count($verLecciones); $i++){

                        $id = $verLecciones[$i]["id"];
                        $nombre = $verLecciones[$i]["nombre"];


                        echo '<option value="'.$id.'">'.$nombre.'</option>';
                      }
                                        
                    echo '</select>';
                  ?>
                </div>
                <div class="form-group">
                  <label for="title" >Nombre Corto</label>
                  <input type="tetxt" class="form-control" id="nombrecorto" name="nombrecorto" placeholder="Pregunta">
                </div>
                <div class="form-group">
                  <label for="title" >Pregunta</label>
                  <input type="tetxt" class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta">
                </div>

                <div class="form-group">
                  <label for="title" >Ponderación</label>
                  <input type="number" class="form-control" id="ponderacion" name="ponderacion"> 
                </div>
  
              </form>
            </div>

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" id="guardarDatosPreguntas" >Guardar</button>
              <button type="button" class="btn btn-light closeModal" data-dismiss="modal">Cerrar</button>
              
            </div>
          </div>
          </div>
        </div>
    
  </div>
