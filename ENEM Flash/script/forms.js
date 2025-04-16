const form = document.getElementsByTagName("form")[0];

function handleSubmit(event){
    event.preventDefault();
    const rep = 5;
    let arrayValues = [];
    let isValid = true;

    for(var i = 0; i < rep; i++){
        const errorField = document.getElementById(form[i].id + "-error");
        if(errorField){
            errorField.textContent = "";
        }
        if(form[i].id === "name" && !form[i].value){
            errorField.textContent = "O nome é obrigatório";
            isValid = false;
        }
        if(form[i].id === "lastName" && !form[i].value){
            errorField.textContent = "O sobrenome é obrigatório";
            isValid = false;
        }
        if(form[i].id === "email"){
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if(!emailRegex.teste(form[i].value)){
                errorField.textContent = "O email deve ser valido";
                isValid = false;
            }    
        }   
        if(form[i].id === "phone"){
            if(form[i].value.length !== 15){
                errorField.textContent = "O telefone deve ter no minimo 11 caracteteres";
                isValid = false;
            }
            if(!form[i].value){
                errorField.textContent = "O telefone é obrigatório";
                isValid = false;
            }  
        } 
        arrayValues.push(form[i].value);
    }
    if(isValid){
         alert(arrayValues);
    }
    
}


function formatarTelefone(input) {
    // Remove todos os caracteres não numéricos do valor atual do campo
    let phoneNumber = input.value.replace(/\D/g, '');
  
    if (phoneNumber.length > 0) {
      phoneNumber = "(" + phoneNumber;
    }
    if(phoneNumber.length > 3){
        phoneNumber = [phoneNumber.slice(0,3),") ",phoneNumber.slice(3)].join("");
    }
    if(phoneNumber.length > 10){
        phoneNumber = [phoneNumber.slice(0,10),"-",phoneNumber.slice(10)].join("-");
    }
    if(phoneNumber.length > 15){
        phoneNumber = phoneNumber.slice(0,15);
    }
    input.value = phoneNumber;  
  }
  