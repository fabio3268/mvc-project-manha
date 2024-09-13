import {showDataForm, getBackendUrlApi} from "./../_shared/functions.js";

const userAuth = JSON.parse(localStorage.getItem("userAuth"));

fetch(getBackendUrlApi("users/me"), {
    method: "GET",
    headers: {
        token: userAuth.token
    }
}).then((response) => {
    response.json().then((data) => {
        console.log(data.user);
        showDataForm(data.user);
    });
});
