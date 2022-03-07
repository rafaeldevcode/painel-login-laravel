/////// ADICIONAR FOOTER NO FINAL DA PAGINA ////////////
if (document.querySelector('body').offsetHeight > window.innerHeight){
    document.querySelector('footer').classList.add('footer-relative');
}

let date = new Date;
let year = date.getFullYear();
document.getElementById('year').innerHTML = year;

function oppenMenu(){
    let menuCheck = document.getElementById('checkbox-menu');
    let menuAside = document.querySelector('.menu-aside');

        menuCheck.addEventListener('click', ()=>{

            if(menuCheck.checked === true){
                menuAside.classList.remove('closed-menu');
                menuAside.classList.add('oppen-menu');
            }else{
                menuAside.classList.remove('oppen-menu');
                menuAside.classList.add('closed-menu');
            }
        });
}


   
function getFields(){
    let fields = document.querySelectorAll('[required]');

    for(let field of fields){
        field.addEventListener('invalid', event => {
            // Eliminar bubble
            event.preventDefault();
            customValidation(event)
        });
        field.addEventListener('blur', customValidation);
    }
}

function validateField(field){
    function verifyError(){
        let foundError = false;

        for(let error in field.validity){
            if(field.validity[error] && !field.validity.valid){
                foundError = error;
            }
        }

        return foundError;
    }

    function setCustomMessage(message){
        let spanError = field.parentNode.querySelector('span.error');

        if(message){
            spanError.classList.add('alert', 'alert-danger');
            spanError.innerHTML = message;
        }else{
            spanError.classList.remove('alert', 'alert-danger');
            spanError.innerHTML = '';
        }
    }

    function customMessage(typeError){
        let valueMissing = 'Por favor, preencha este campo!'

        const message = {
            text: {
                valueMissing: valueMissing
            },
            email: {
                valueMissing: valueMissing,
                typeMismatch: 'Por favor, digite um email válido!'
            },
            password: {
                valueMissing: valueMissing
            }
        }

        if(message[field.type]){
            return message[field.type][typeError];
        }else{
            return valueMissing;
        }
    }

    return function(){
        let error = verifyError();

        if(error){
            let message = customMessage(error);

            setCustomMessage(message);
        }else{
            setCustomMessage();
        }
    };
}

function customValidation(event){
    let field = event.target;
    let validation = validateField(field);

    validation();
}