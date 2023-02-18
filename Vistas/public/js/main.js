$(document).ready(function(){
   $(".beditaru").on("click",function(e){
        var id = e.target.getAttribute('dataid');
        var cargo = e.target.getAttribute('datacargo');
        var nombre=$(".nombres-"+id).html();
        var apellido=$(".apellidos-"+id).html();
        var cedula =$(".cedula-"+id).html();
        var email=$(".email-"+id).html();
        var celular=$(".celular-"+id).html();
        $('#nombrese').val(nombre);
        $('#apellidose').val(apellido);
        $('#cedulae').val(cedula);
        $('#emaile').val(email);
        $('#celulare').val(celular);
        $('#cargoe').val(cargo);
        $('#idue').val(id);

   })
})

