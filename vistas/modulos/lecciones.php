
  <div class="content-wrapper">

    <section class="content" style="height: 80%;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lecciones</h3>

            </div>
            <div class="box-tools">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalAgregar"><i class="fa fa-plus"></i>&nbsp;Agregar</button>

            </div>
            <div class="box-body">
              <table id="lecciones" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Numero Preguntas</th>
                  <th>puntuación</th>
                  <th>Fecha</th>
                  <th>tipo</th>
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
              <h4 class="modal-title modalTitle">Agregar Lecciones</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="title" >Nombre</label>
                  <input type="tetxt" class="form-control" id="nombre" name="nombre" placeholder="Nombre lección">
                </div>
                <div class="form-group">
                  <label for="title" >Numero Preguntas</label>
                  <input type="number" class="form-control" id="numeroPreguntas" name="numeroPreguntas">
                </div>

                <div class="form-group">
                  <label for="title" >Tipo</label>
                  <select class="form-control" name="tipoLeccion" id="tipoLeccion">
                    <option value="">Seleccionar</option>
                    <option value="0">Gratuita</option>
                    <option value="1">De Paga</option>
                  </select>
                </div>
  
              </form>
            </div>

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" id="guardarDatosLecciones" >Guardar</button>
              <button type="button" class="btn btn-light closeModal" data-dismiss="modal">Cerrar</button>
              
            </div>
          </div>
          </div>
        </div>
    
  </div>
