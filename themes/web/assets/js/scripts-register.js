console.log("Olá, Mundo! Script de Registro");


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

