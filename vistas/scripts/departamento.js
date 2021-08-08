var table;
function init(){
    mostrarform(false);
     listar();


     $("#formulario").on("submit", function(e){
            guardaryeditar(e);
        }

     );

 }
function listar(){
	table=$('#tblistadoregdata').dataTable({
		"Processing": true, //activar procesamiento de tablas
		"ServerSide": true, //paginacion y filtros sean realizados por el servidor
		responsive: true, //active capacidades responsivas en la tabla
        dom: '<"top"Bfl>rt<"buttom"ip><"clear">',//definir los elementos de control de dataTables
        										//B botones export, f filtro sencillo, l selecto de filtros
        										//r mensaje de procesamiento, t table como tal, i informacion
        										//p paginacion
        bottons:[
        	'copyHtml5',
        	'excelHtml5',
        	'csvHtml5',
        	'pdfHtml5'
        ],
        "ajax":{
        	url:'../ajax/departamento.php?op=listar',
        	type:"get",
        	dataType: "json",
        	error:function(e){
        		console.log(e.responseText);
        	}
        },
        "destroy": true,
        "iDisplayLength":5, //display indica cuantos regitros vamos a mostrar en el table
        "order": [[1,"desc"]]


	}).DataTable();
}
//limpiar formulario
function limpiar(){
    $("#idDepartamento").val("");
    $("#descripcion").val("");
}

function mostrarform(flag){
    limpiar();
    if(flag){
        $("#listadoregdata").hide();
        $("#formregdata").show();
        $("#btnagregar").hide();
        $("#btnGuardar").prop("disable",false);
    }else{
        $("#listadoregdata").show();
        $("#formregdata").hide();
        $("#btnagregar").show();
       
    }
 }

function cancelarform(){
    limpiar();
    mostrarform(false);
}

function guardaryeditar(e){
    e.preventDefault();
    $("#btnagregar").prop("disable",true);
    var formData= new FormData($("#formulario")[0]);
    $.ajax({
        url:"../ajax/departamento.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false, //no manda cabecero
        processData: false, //no convierte datos en string

        success: function(mensaje){
            valida= mensaje.indexOf('rror');
            if(valida!=-1){
                toastr["error"](mensaje);
                 }else{
                    toastr["success"](mensaje);
                 }
            mostrarform(false);
            table.ajax.reload();
        }
    }
    );

    limpiar();
}
function mostrar(idDepartamento){
   $.post("../ajax/departamento.php?op=mostrar", {idDepartamento:idDepartamento}, function(data){
        //console.log(data);
        data=JSON.parse(data);
       // console.log(data);
        mostrarform(true);
        $('#idDepartamento').val(data.idDepartamento);
        $('#descripcion').val(data.descripcion);
   } ) ;
}

function desactivar(idDepartamento){
    var ventanaEleccion=toastr.warning('¿Deseas desactivar el depto seleccionado?<br>'+
        '<button type="button" id="rptaSi" class="btn btn-success"> SI</button>'+
        '<button type="button" id="rptaNo" class="btn btn-danger"> NO</button>',"Alerta");

    $('#rptaSi').click(function(){
         
        console.log("El usuario ha elegido desactivar el depto");
        toastr.clear(ventanaEleccion);
        $.post("../ajax/departamento.php?op=desactivar", {idDepartamento:idDepartamento}, function(mensaje){

            valida= mensaje.indexOf('rror');
            if(valida!=-1){
                toastr["error"](mensaje);
                 }else{
                    toastr["success"](mensaje);
                 }
           // mostrarform(false);
            table.ajax.reload();
          
        });
    });

    $('#rptaNo').click(function(){
         console.log("El usuario ha elegido cancelar la acción");
         toastr.clear(ventanaEleccion);   
    });

}

function activar(idDepartamento){
    var ventanaEleccion=toastr.warning('¿Deseas activar el depto seleccionado?<br>'+
        '<button type="button" id="rptaSi" class="btn btn-success"> SI</button>'+
        '<button type="button" id="rptaNo" class="btn btn-danger"> NO</button>',"Alerta");

    $('#rptaSi').click(function(){
         
        console.log("El usuario ha elegido activar el depto");
        toastr.clear(ventanaEleccion);
        $.post("../ajax/departamento.php?op=activar", {idDepartamento:idDepartamento}, function(mensaje){

            valida= mensaje.indexOf('rror');
            if(valida!=-1){
                toastr["error"](mensaje);
                 }else{
                    toastr["success"](mensaje);
                 }
           // mostrarform(false);
            table.ajax.reload();
          
        });
    });

    $('#rptaNo').click(function(){
         console.log("El usuario ha elegido cancelar la acción");
         toastr.clear(ventanaEleccion);   
    });

}
init();