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

// Função para exibir mensagens toast
export function showToast (message) {
    const toastContainer = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = message;

    toastContainer.appendChild(toast);

    // Mostrar a mensagem toast
    setTimeout(() => {
        toast.classList.add('show');
    }, 100);

    // Remover a mensagem toast após 3 segundos
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            toastContainer.removeChild(toast);
        }, 500);
    }, 3000);
}