login.addEventListener("click", function () {
    let email = document.querySelector("#loginEmail").value;
    let passWord = document.querySelector("#loginPassword").value;
    var errorEmail = document.querySelector('#formErrorsEmail');
    console.log(email,passWord);
        let xhrlogin = new XMLHttpRequest();
        xhrlogin.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = JSON.parse(xhrlogin.responseText);
                if (Object.keys(response).length === 0) {
                    document.location.reload();
                } else {
                    errorEmail.style.color = 'red';
                    return errorEmail.innerHTML = `<p>Nom d'utilisateur ou mot de passe incorette</p>`;
                }
            }
        };
        xhrlogin.open("GET", "/controllers/user/loginController.php?loginEmail=" + email + "&loginPassword=" + passWord, true);
        xhrlogin.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhrlogin.send();
    });
