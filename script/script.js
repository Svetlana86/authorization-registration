const btnAdd = document.querySelector(".add");
const divCol = document.querySelector('.col'); 

function getAllUser(){
    
    fetch('../ajax/get-user.php')
    .then((res) => res.json())
    .then((data) => {
        data.forEach(obj => {
            let div = document.createElement('div');
            div.innerHTML = obj.id + " - " + obj.login + "<br>";
            divCol.append(div);            
        });        
    })
    .catch((error) => console.log(error));
}

function addUser(){
    let loginData = document.querySelector('.lg').value;
    let passData = document.querySelector('.pd').value;
    /*let form = document.querySelector('.form-add-user');*/
    var form = new FormData();
    form.append('login', loginData);
    form.append('password', passData);
    fetch('../ajax/add-user.php', {
        method : 'POST',
        body: form
    })
    .then((res) => res.json())
    .then((data) => {
        console.log(typeof data);
        let div = document.createElement('div');
        div.innerHTML = data.id + " - " + data.login + "<br>";
        divCol.append(div);    
    })
    .catch((error) => console.log(error))
}

getAllUser();

btnAdd.addEventListener('click', function() {
    addUser();
});



