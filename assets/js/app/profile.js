import {showDataForm, getBackendUrlApi} from "./../_shared/functions.js";

console.log("Olá, eu sou o JS do Profile...");

const userAuth = JSON.parse(localStorage.getItem("userAuth"));

console.log(userAuth.token);

fetch(getBackendUrlApi() + "/users/me", {
    method: "GET",
    headers: {
        token: userAuth.token
    }
})
    .then((response) => response.json())
    .then((data) => {
        console.log(data.user);
        showDataForm(data.user);
    });