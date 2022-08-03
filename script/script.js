function getAllUser(){
    fetch('../ajax/get-user.php')
    .then((res) => res.json())
    .then((data) => {


        data.forEach(obj => {
            let divCol = document.querySelector('.col');
            
            let div = document.createElement('div');
            div.innerHTML = obj.id + " - " + obj.login + "<br>";
            divCol.append(div);
        });



        
    })
    .catch((error) => console.log(error));
}