
  <div class="content-wrapper">

    <section class="content" style="height: 80%;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Respuestas</h3>

            </div>
            <div class="box-tools">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalAgregar"><i class="fa fa-plus"></i>&nbsp;Agregar</button>

            </div>
            <div class="box-body">
              <table id="respuestas" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Lección</th>
                  <th>Pregunta</th>
                  <th>Respuesta</th>
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
              <h4 class="modal-title modalTitle">Agregar Respuestas</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="title" >Respuesta</label>
                  <input type="tetxt" class="form-control" id="datosRespuesta" name="datosRespuesta" placeholder="Detalle Respuesta">
                </div>

                <div class="form-group">
                  <label for="title" >Lección a la que Pertenece</label>
                  <?php 
                    error_reporting(0);
                    require_once "controladores/general.php";
                    require_once "modelos/general.php";

                    $table = "lecciones";
                    $campos = "*";
                    $verLecciones = ControladorGeneral::ctrMostrarDatosLecciones($table, $campos);

                    echo '<select class="form-control" name="idLeccion" id="idLeccion">
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
                  <label for="title" >Pregunta a la que Pertenece</label>
                  <?php 
                    error_reporting(0);
                    require_once "controladores/general.php";
                    require_once "modelos/general.php";

                    $table = "preguntas";
                    $campos = "*";
                    $parametros = "";
                    $verPregunta = ControladorGeneral::ctrMostrarLecciones($table,$campos,$parametros);

                    echo '<select class="form-control" name="idPregunta" id="idPregunta">
                      <option value="">Seleccione</option>';

                      for($i = 0; $i < count($verPregunta); $i++){

                        $id = $verPregunta[$i]["id"];
                        $nombre = $verPregunta[$i]["nombreCorto"];

                        echo '<option value="'.$id.'">'.$nombre.'</option>';
                      }
                                        
                    echo '</select>';
                  ?>
                </div>
  
              </form>
            </div>

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" id="guardarDatosRespuestas" >Guardar</button>
              <button type="button" class="btn btn-light closeModal" data-dismiss="modal">Cerrar</button>
              
            </div>
          </div>
          </div>
        </div>
    
  </div>
