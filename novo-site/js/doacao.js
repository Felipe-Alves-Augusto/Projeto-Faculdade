let btnDoar = document.getElementById('btn-doar');
let form_doacao = document.querySelector('.form-doar');
let sucesso = document.querySelector('.box-sucesso');
let btn_close = document.getElementById('close');

abrirForm();
validar();
botaoFechar();



function botaoFechar(){

    btn_close.addEventListener('click',()=>{

        sucesso.style.display = 'none';

    })

}

function abrirForm(){


    btnDoar.addEventListener('click',()=>{

        form_doacao.style.opacity = '1';

    });
}


function validar(){

    let email = document.getElementById('email');
    let valor = document.getElementById('valor');
    let name = document.getElementById('nome');
    let erro = document.getElementById('error');

    form_doacao.addEventListener('submit',(e)=>{

        if(name.value == ''){

            e.preventDefault();
            name.style.border = '2px solid #dc3545';

        } else if(email.value == ''){

            e.preventDefault();
            email.style.border = '2px solid #dc3545';
         
        } else if(valor.options.selectedIndex == '0'){

            e.preventDefault();
            valor.style.border = '2px solid #dc3545';
          


        } else{
            e.preventDefault();
            form_doacao.style.opacity = '0';
            let resetar = document.getElementById('resetar');
            resetar.reset();
            sucesso.style.display = 'block';
        }

        if(name.value == '' || email.value == '' || valor.options.selectedIndex == '0'){

            erro.style.display = 'block';

        }

    })
}