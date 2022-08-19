function validaFormulario(){
        var validar = true;
        var inputDatos = document.getElementsByClassName('datos');

        for(var i = 0 ; i < inputDatos.length ; i++){
            if(inputDatos[i].value.length<=0){
                validar = false;
            }
        }
        if(validar == true){
            const myModal_guardar = new bootstrap.Modal(document.getElementById('validaRegistro'), {
                keyboard: true,
                backdrop : true,
                focus : true
            });
            myModal_guardar.show();
        }else{
            const myModal_validarInput = new bootstrap.Modal(document.getElementById('modalValidacion'), {
                keyboard: false
            });
            myModal_validarInput.show();
        }
}
function guardarDatoServidor(){
    var formulario = document.getElementById('sistemaform');
    formulario.submit();
}
function limpiaInputs(){
    var inputDatos = document.getElementsByClassName('datos');

    for(var i = 0 ; i < inputDatos.length ; i++){
        inputDatos[i].value = "";
    }
}
function mensajeModalError(){
    const myModal_error = new bootstrap.Modal(document.getElementById('mensajeError'), {
        keyboard: false,
    });
    myModal_error.show();
}