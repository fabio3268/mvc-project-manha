console.log("Olá, Mundo! Script de Registro...");
const formRegister = document.querySelector("#formRegister");
formRegister.addEventListener("submit",async (event) => {
    event.preventDefault();
    const data = await fetch(`http://localhost:8080/mvc-project-manha/api/users`,{
        method: "POST",
        body: new FormData(formRegister)
    });
    const user = await data.json();
    console.log(user);
});

const formLogin = document.querySelector("#formLogin");
formLogin.addEventListener("submit", async (event) => {
    event.preventDefault();
    const data = await fetch(`http://localhost:8080/mvc-project-manha/api/users/login`,{
        method: "POST",
        body: new FormData(formLogin)
    });
    const response = await data.json();
    console.log(response.user);
    localStorage.setItem("userLogin", JSON.stringify(response.user));
});

const buttonGetByCategory = document.querySelector("#getByCategory");
buttonGetByCategory.addEventListener("click", async () => {
    const userLogin = JSON.parse(localStorage.getItem("userLogin"));
    console.log("Send: " + userLogin.token);
    const data = await fetch(`http://localhost:8080/mvc-project-manha/api/services/list-by-category/category/1`, {
        method: "GET",
        headers: {
            token : userLogin.token
        }
    });
    const services = await data.json();
    console.log(services);
});