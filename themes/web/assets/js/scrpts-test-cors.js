    console.log("Oi - Teste - UPDATE -");
    const url = "http://localhost:8080/mvc-project-manha/api";
    const buttonGetByCategory = document.querySelector("#getByCategory");
    buttonGetByCategory.addEventListener("click", async () => {

    /*fetch(`http://localhost:8080/mvc-project-manha/api/services/service/1`, {
        method: "GET",
        headers: {
            token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE3MjQxNTI3MTgsImp0aSI6IjNjYnUyVlEzbFNzc3gzRXVVekJMWkE9PSIsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC9tdmMtcHJvamVjdC1tYW5oYSIsIm5iZiI6MTcyNDE1MjcxOCwiZXhwIjoxNzI0MTU4MTE4LCJkYXRhIjp7ImlkIjoyNSwibmFtZSI6IkZcdTAwZTFiaW8gU2FudG9zIElGU1VMIiwiZW1haWwiOiJmYWJpb3NhbnRvc0BpZnN1bC5lZHUuYnIifX0.PRudoDGox7wjrJ6YgtLyaSXGP336BII2sY0fuN4mo5ri7bbY8XeP2A0nQjjTyQc6sNhqEqN05GflgE-2_EWB8Q'
        }
    })
        .then(response => {response.json()
            .then(data => {
                console.log(data);
            })})
        .catch(e => console.log('Deu erro: ' + e));*/

    /*fetch(`http://localhost:8080/mvc-project-manha/api/services/service/1`, {
        method: "DELETE",
        headers: {
            token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE3MjQxNTI3MTgsImp0aSI6IjNjYnUyVlEzbFNzc3gzRXVVekJMWkE9PSIsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC9tdmMtcHJvamVjdC1tYW5oYSIsIm5iZiI6MTcyNDE1MjcxOCwiZXhwIjoxNzI0MTU4MTE4LCJkYXRhIjp7ImlkIjoyNSwibmFtZSI6IkZcdTAwZTFiaW8gU2FudG9zIElGU1VMIiwiZW1haWwiOiJmYWJpb3NhbnRvc0BpZnN1bC5lZHUuYnIifX0.PRudoDGox7wjrJ6YgtLyaSXGP336BII2sY0fuN4mo5ri7bbY8XeP2A0nQjjTyQc6sNhqEqN05GflgE-2_EWB8Q'
        }
    })
        .then(response => {response.json()
            .then(data => {
                console.log(data);
            })})
        .catch(e => console.log('Deu erro: ' + e));*/

    fetch(`http://localhost:8080/mvc-project-manha/api/services/service/1/name/teste/description/teste`, {
        method: "PUT",
        headers: {
            token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE3MjQxNTI3MTgsImp0aSI6IjNjYnUyVlEzbFNzc3gzRXVVekJMWkE9PSIsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC9tdmMtcHJvamVjdC1tYW5oYSIsIm5iZiI6MTcyNDE1MjcxOCwiZXhwIjoxNzI0MTU4MTE4LCJkYXRhIjp7ImlkIjoyNSwibmFtZSI6IkZcdTAwZTFiaW8gU2FudG9zIElGU1VMIiwiZW1haWwiOiJmYWJpb3NhbnRvc0BpZnN1bC5lZHUuYnIifX0.PRudoDGox7wjrJ6YgtLyaSXGP336BII2sY0fuN4mo5ri7bbY8XeP2A0nQjjTyQc6sNhqEqN05GflgE-2_EWB8Q'
        }
    })
        .then(response => {response.json()
            .then(data => {
                console.log(data);
            })})
        .catch(e => console.log('Deu erro: ' + e));
});