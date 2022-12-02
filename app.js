//Alert del registro

document.getElementById('registro').addEventListener('onClick', function(e){
    if(document.getElementById('txt_usuario').value != null && document.getElementById('password').value !=null){
        console.log('pepe');
        alert('El registro fue exitoso');
        document.getElementById('txt_usuario').value = "";
        document.getElementById('password').value = "";
    }
    else{
        return null;
    }
})



//Salir ventana

document.getElementById('salir').addEventListener('onclick', close());