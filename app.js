const btnCrearUsuario = document.querySelector('#btnCrearUsuario'); 



btnCrearUsuario.addEventListener('click', crearUsuario);

function crearUsuario(){
   
    $.ajax({
            url:'localhost/formulario/functions.php?op=crearUsuario',
             dataType:'json', 
             type: 'POST',
            success: (e)=> {
                console.log('ejecutado correcto');
            } , 
            error: function(){
                $("#resultado").text("Algo Anda mal");
            }

            });        

        }