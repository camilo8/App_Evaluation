 /*valid of color change*/
$('#option').change(function(){
     var opt = $('#option').val();
    if(opt === "Seleccionar"){
        $("#color").val("#ffffff");
    }
    if(opt === "Siempre"){
        $("#color").val("#009933");
    }
    if(opt === "Casi siempre"){
        $("#color").val("#ffff00");
    }
    if(opt === "Nunca"){
        $("#color").val("#ff0000");
    }
});
/*valid of form */
$('#btn-students').click(function(){
     
});
