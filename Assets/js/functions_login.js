document.addEventListener('DOMContentLoaded', () => {
    const formLogin =  document.querySelector('#formLogin')

    formLogin.addEventListener('submit', (e) => {
        e.preventDefault();

        const request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        const ajaxUrl = base_url + '/login/LoginUser/';
        const formData = new FormData(formLogin)
        request.open('POST', ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = () => {
            if (request.readyState == 4 && request.status == 200) {
                const objData = JSON.parse(request.responseText);

                if(objData.status){
                    Swal.fire('', 'Sesión iniciada correctamentte. ','success')
                    window.location.reload(false)
                }else{
                    Swal.fire('Atención', objData.msg,'error')
                    document.querySelector('#txtPassword').value ='';
                }
                return false
            }
        }
    })
})