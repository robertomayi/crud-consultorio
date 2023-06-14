//esto es para agregar un usuario nuevo
const btnCrearUsuario = document.querySelector('.btnCrearUsuario'); 

btnCrearUsuario.addEventListener('click', crearUsuario);

function crearUsuario(e){
   e.preventDefault();
    let usuario = $("#username").val();
    let contra = $("#contra").val();
    let nivel = $("#nivel").val();
    let correo = $("#email").val();
    $.ajax({
            url:'api/crearUsuario.php',
             dataType:'json', 
             type: 'POST',
             data: {
                usuario:usuario, 
                contra:contra, 
                correo: correo, 
                nivel:nivel
             },
            success: (e)=> {
               window.location.reload();
            } , 
            error: function(){
                $("#resultado").text("Algo Anda mal");
            }

            });        

        }

let userId = 0 ; 
//aqui presentamos la informacion del usuario en el modal
const btnEditarUsuario = document.querySelector('.btnEditarUsuario'); 

    btnEditarUsuario.addEventListener('click', (e)=> {
        let row = e.target.parentNode.parentNode;
        userId = row.getElementsByTagName("td")[0].innerHTML;
        let nombre = row.getElementsByTagName("td")[1].innerHTML;
        let correo = row.getElementsByTagName("td")[2].innerHTML;
        let nivel = row.getElementsByTagName("td")[3].innerHTML;
        //aqui enviamos el valor a los inputs 
        $(".usernameEdit").val(nombre);
        $(".emailEdit").val(correo);

    });


    // aqui enviamos la informacion para editar el usuario
    const btnEditarUsuarioEnviar = document.querySelector('.btnEditarUsuarioEnviar'); 

    btnEditarUsuarioEnviar.addEventListener('click',editarUsuario );

    function editarUsuario(e){
        console.log("haz hecho clic");
        e.preventDefault();
         let usuario = $(".usernameEdit").val();
         let contra = $(".contraEdit").val();
         let nivel = $(".nivelEdit").val();
         let correo = $(".emailEdit").val();
         $.ajax({
                 url:'api/editarUsuario.php',
                  dataType:'json', 
                  type: 'POST',
                  data: {
                     usuario:usuario, 
                     contra:contra, 
                     correo: correo, 
                     nivel:nivel,
                     id:userId
                  },
                 success: (e)=> {
                    window.location.reload();
                 } , 
                 error: function(){
                     $("#resultado").text("Algo Anda mal");
                 }
     
                 });        
     
             }