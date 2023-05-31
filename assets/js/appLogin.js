


const registrarUsuario=()=>{
    var correo= document.querySelector("#correo").value;
    var contraseña= document.querySelector("#Password").value;
    var nombre= document.querySelector("#Name").value;
    
    if (correo.trim()===''||
        contraseña.trim()===''||
        nombre.trim()==='' ) {
            Swal.fire({
                icon: 'error',
                title: 'ERROR...',
                text: 'FALTA LLENAR EL ESPACIO!',
                footer: '<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Tutorial de como registrarte</a>'
              })
              return;
    }
    if(!validarCorreo(correo)){
        Swal.fire({
            icon: 'error',
            title: 'ERROR...',
            text: 'Introduce un correo valido!',
            footer: '<a href="https://www.youtube.com/watch?v=VAiHHUMUp-4">Tutorial de como hacer un correo valido</a>'
          })
          return;
    }
    if(!validarcontraseña(contraseña)){
        Swal.fire({
            icon: 'error',
            title: 'ERROR...',
            html: 'Escribe una contraseña valida!<br> [Mayusculas,minusculas, numeros y min. 8 caracteres]',
            footer: '<a href="https://www.youtube.com/watch?v=MoO0WF95nsM">Tutorial de como Logearte bien</a>'
          })
          return;
    }
    if(!validarnombre(nombre)){
        Swal.fire({
            icon: 'error',
            title: 'ERROR...',
            text: 'Se coherente!',
            footer: '<a href="https://www.youtube.com/watch?v=yhi8gggIshs">Tutorial de como hacer un correo valido</a>'
          })
          return;
    }

    //INSERTAR A LA BASE DE DATOS

    const datos=new FormData();
       datos.append("correo",correo);
       datos.append("contraseña",contraseña); 
       datos.append("nombre",nombre);
}