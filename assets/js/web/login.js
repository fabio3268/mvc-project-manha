import {getBackendUrl, getBackendUrlApi, showToast} from "./../_shared/functions.js";

const formRegister = document.querySelector("#formRegister");
formRegister.addEventListener("submit", async (e) => {
    e.preventDefault();
    console.log("Form submit");
    fetch(getBackendUrlApi("users"),{
        method: "POST",
        body: new FormData(formRegister)
    }).then((response => {
        response.json().then((data) => {
            showToast(data.message);
        });
    }));
});

const formLogin = document.querySelector("#formLogin");
formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();
    fetch(getBackendUrlApi("users/login"), {
        method: "POST",
        body: new FormData(formLogin)
    }).then((response => {
        response.json().then((data) => {
            if (data.type == "error") {
                showToast(data.message);
                return;
            }
            localStorage.setItem("userAuth", JSON.stringify(data.user));
            showToast(`Olá, ${data.user.name} como vai!`);
            setTimeout(() => {
                window.location.href = getBackendUrl("app")
            }, 3000);
        })
    }))
});