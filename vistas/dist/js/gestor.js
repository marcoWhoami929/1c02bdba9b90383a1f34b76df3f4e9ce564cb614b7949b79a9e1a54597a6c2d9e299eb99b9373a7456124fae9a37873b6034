/*************TABLA LECCIONES****************/
$(function () {
    $('#lecciones').DataTable({
      'ajax':'ajax/tablaLecciones.ajax.php',
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
/*************TABLA PREGUNTAS****************/
$(function () {
    $('#preguntas').DataTable({
      'ajax':'ajax/tablaPreguntas.ajax.php',
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
/*************TABLA PREGUNTAS****************/
$(function () {
    $('#respuestas').DataTable({
      'ajax':'ajax/tablaRespuestas.ajax.php',
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });

/******************GUARDAR LOS DATOS DE LAS LECCIONES***********************/
$("#guardarDatosLecciones").on("click", function() {

  var nombreLeccion = $("#nombre").val();
  var numeroPreguntas = $("#numeroPreguntas").val();
  var tipoLeccion = $("#tipoLeccion").val();

  var datos = new FormData();
  datos.append("nombreLeccion",nombreLeccion);
  datos.append("numeroPreguntas",numeroPreguntas);
  datos.append("tipoLeccion", tipoLeccion);

  $.ajax({
    url:"ajax/functions.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){

        var response = respuesta;
        if (response == "ok") {
          swal({
            title: "Exito!!?",
            text: "Los datos se han Guardado Correctamente",
            icon: "success",
            dangerMode: false,
          }).then((willDelete) => {
            window.location = "lecciones";
          });
        }

      }

    })


});

/******************GUARDAR LOS DATOS DE LAS PREGUNTAS***********************/
$("#guardarDatosPreguntas").on("click", function() {

  var leccion = $("#leccion").val();
  var nombrecorto = $("#nombrecorto").val();
  var pregunta = $("#pregunta").val();
  var ponderacion = $("#ponderacion").val();

  var datos = new FormData();
  datos.append("leccion",leccion);
  datos.append("nombrecorto",nombrecorto);
  datos.append("pregunta", pregunta);
  datos.append("ponderacion",ponderacion);

  $.ajax({
    url:"ajax/functions.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){

        var response = respuesta;
        if (response == "ok") {
          swal({
            title: "Exito!!?",
            text: "Los datos se han Guardado Correctamente",
            icon: "success",
            dangerMode: false,
          }).then((willDelete) => {
            window.location = "preguntas";
          });
        }

      }

    })
});
/******************GUARDAR LOS DATOS DE LAS RESPUESTAS PREGUNTAS***********************/
$("#guardarDatosRespuestas").on("click", function() {

  var datosRespuesta = $("#datosRespuesta").val();
  var idLeccion = $("#idLeccion").val();
  var idPregunta = $("#idPregunta").val();


  var datos = new FormData();
  datos.append("datosRespuesta",datosRespuesta);
  datos.append("idLeccion",idLeccion);
  datos.append("idPregunta", idPregunta);

  $.ajax({
    url:"ajax/functions.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    success: function(respuesta){

      var response = respuesta;
      if (response == "ok") {
        swal({
          title: "Exito!!?",
          text: "Los datos se han Guardado Correctamente",
          icon: "success",
          dangerMode: false,
        }).then((willDelete) => {
          window.location = "respuestas";
        });
      }

    }

  })
});