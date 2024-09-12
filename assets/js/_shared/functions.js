export function getBackendUrl() {
    return `${location.protocol}//${location.hostname}:8080/mvc-project-manha`;
}

export function getBackendUrlApi() {
    return `${location.protocol}//${location.hostname}:8080/mvc-project-manha/api`;
}

export function showDataForm (object)  {
    for(const field in object){
        if (document.querySelector("#"+field)){
            document.querySelector("#"+field).value = object[field];
        }
    }
}