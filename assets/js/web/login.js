import {getBackendUrl, getBackendUrlApi} from "./../_shared/functions.js";

console.log(getBackendUrl(), getBackendUrlApi());

const formRegister = document.querySelector("#formRegister");
formRegister.addEventListener("submit",async (e) => {
    e.preventDefault();
    fetch(getBackendUrlApi() + "/users", {
        method: "POST",
        body: new FormData(formRegister)
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            // implementar retorno para o usuário
        });
});

const formLogin = document.querySelector("#formLogin");
formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();
    fetch(getBackendUrlApi() + "/users/login", {
        method: "POST",
        body: new FormData(formLogin)
    }).then((response) => response.json())
        .then((data) => {
            console.log(data.user, data.user.token);
            // implementar retorno para o usuário e armazenamento da localStorage
            localStorage.setItem("userAuth", JSON.stringify(data.user));
        });
});

/*

const buttonGetByCategory = document.querySelector("#getByCategory");
buttonGetByCategory.addEventListener("click", async () => {
    const userLogin = JSON.parse(localStorage.getItem("userLogin"));
    console.log("Send: " + userLogin.token);
    const data = await fetch(`${url}/services/list-by-category/category/1`, {
        method: "GET",
        headers: {
            token : userLogin.token
        }
    });
    const services = await data.json();
    console.log(services);
});

const getEventsMocitec = document.querySelector("#getEventsMocitec");

getEventsMocitec.addEventListener("click", async () => {

    fetch(`https://api.mocitec.localhost/events/online`, {
        method: "GET"
    })
        .then(response => {response.json()
            .then(data => {
                console.log(data);
            })})
        .catch(e => console.log('Deu erro: ' + e,message));

});
*/