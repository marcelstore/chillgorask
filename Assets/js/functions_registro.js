
document.addEventListener('DOMContentLoaded',() => {
    const formRegister = document.querySelector('#formRegister');

    formRegister.addEventListener('submit', (e) => {
        e.preventDefault();
        const nombre = formRegister['nombre'].value
        const apellido = formRegister['apellido'].value
        const email = formRegister['email'].value
        const password = formRegister['password'].value

        if(nombre == '' || apellido == '' || email == '' || password == ''){
            Swal.fire('','Todos los datos son obligatorios.','error')
            return false
        }

        if(password < 4){
            Swal.fire('','La contraseña debe ser mayor o igual a 5 carácteres.','info')
            return false
        }

        const request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        const ajaxUrl = base_url + '/Signup/registerUser/';
        const formData = new FormData(formRegister)
        request.open('POST', ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = () => {
            if (request.readyState == 4 && request.status == 200) {
                const objData = JSON.parse(request.responseText)

                if(objData.status){
                    Swal.fire('',objData.msg,'success')
                    window.location = base_url + '/login'
                }else{
                    Swal.fire('',objData.msg,'error')
                }
                return false
            }
        }
    })
})