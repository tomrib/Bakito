let passwordRegex = []
passwordRegex['lower'] = /[a-z]/;
passwordRegex['upper'] = /[A-Z]/;
passwordRegex['number'] = /[0-9]/;
passwordRegex['special'] = /[$&+,:;=?@#|\'<>\.\-^*()%!"\{\]\{\}]/;
passwordRegex['stringLength'] = /^(.){8,}$/;
//length et un mot reserve
let conditions = [
    'lower',
    'upper',
    'number',
    'special',
    'stringLength'
]

const loginWord = document.getElementById('loginWord');
const navLogin = document.getElementById('navLogin');
loginWord.addEventListener('input', () =>{
    navLogin.classList.remove('noLogin')
    navLogin.classList.add('login')
})

const passWod = document.getElementById('passWord');
const textPassWord = document.getElementById('textPassWord');
password.addEventListener('input', () =>{
    textPassWord.classList.remove('noBoxPass')
    textPassWord.classList.add('boxPass')
})

password.addEventListener('input', () => {

    let score = 0;
    for (let c of conditions) {
        let li = document.getElementById(c);
        if (passwordRegex[c].test(password.value)) {
            li.style.color = 'green';
            li.children[0].innerHTML = '<span class="material-symbols-outlined">thumb_up</span>';
            li.children[1].innerHTML = '';
            score += 1;
        } else {
            li.style.color = 'red';
            li.children[1].innerHTML = '<span class="material-symbols-outlined">sentiment_dissatisfied</span>';
            li.children[0].innerHTML = '';
            score -= 1;
        }
    }
});
