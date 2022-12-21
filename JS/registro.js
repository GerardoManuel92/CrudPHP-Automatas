const form = document.getElementById('formulario');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const apellidos = document.getElementById('apellidos').value;
    const alias = document.getElementById('alias').value;
    const passw1 = document.getElementById('pass1').value;
    const passw2 = document.getElementById('pass2').value;

    if(nombre === '' || apellidos === '' || alias === '' || passw1 === '' || passw2 === ''){
        alert("El formulario esta incompleto");
    }else if(passw2 !== passw1){
        alert("Los password no coinciden");
    }else{
        this.submit();
    }       
    
});
