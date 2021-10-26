<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form onsubmit="attemptLogin(event)" id="loginForm">
        <input type="email" name="email" id="" placeholder="Email"><br/>
        <input type="password" name="password" id="" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <script>
        let attemptLogin = (event) => {
            event.preventDefault();
            
            let form = document.querySelector('#loginForm');

            let email = form.email.value;

            let password = form.password.value;

                let data = {email: email, password: password};
                fetch('/sanctum/csrf-cookie').then(res => {
                    fetch('http://127.0.0.1:8000/api/login', {
                        method: 'POST',
                        mode: 'cors',
                        cache: 'no-cache',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        redirect: 'follow', // manual, *follow, error
                        referrerPolicy: 'no-referrer', 
                        body: JSON.stringify(data) 
                    }).then(res => {
                        console.log(res);
                    }).catch(err => { console.log(err)});
                }).catch(err => { console.log(err)});

        };
    </script>
</body>
</html>