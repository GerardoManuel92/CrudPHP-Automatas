const form = document.querySelector('.contenedor__registros--formulario');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    const nombre = document.getElementById('txtNombre').value;
    const apellidos = document.getElementById('txtApellido').value;
    const alias = document.getElementById('txtAlias').value;
    const passw1 = document.getElementById('txtPass1').value;
    const passw2 = document.getElementById('txtPass2').value;

    if(nombre === '' || apellidos === '' || alias === '' || passw1 === '' || passw2 === ''){
        alert("El formulario esta incompleto");
    }else if(passw2 !== passw1){
        alert("Los password no coinciden");
    }else{
        this.submit();
    }       
    
});