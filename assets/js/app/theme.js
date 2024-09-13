import {getBackendUrl} from "./../_shared/functions.js";

const userAuth = localStorage.getItem("userAuth");

if(!userAuth){
    window.location.href = getBackendUrl("login");
}

//console.log(userAuth);
