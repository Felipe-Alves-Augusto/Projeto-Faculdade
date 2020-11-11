
let form = document.getElementById('form_produtos');


form.addEventListener('submit', ()=>{


    let nome_prod = document.getElementById('nome_prod');

    if(nome_prod.value == ""){

        alert('campos obrigatorios');

    }


})


