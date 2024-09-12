import {getBackendUrl, getBackendUrlApi, showToast} from "./../_shared/functions.js";

console.log(getBackendUrl(), getBackendUrlApi());

const formRegister = document.querySelector("#formRegister");
formRegister.addEventListener("submit", async (e) => {
    e.preventDefault();
    fetch(getBackendUrlApi() + "/users", {
        method: "POST",
        body: new FormData(formRegister)
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data, data.message);
            showToast(data.message);
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