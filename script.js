let helloNotif = document.querySelector('#helloNotif');
let filter = document.querySelector('#filter')
let passwordView = document.querySelector('#view')
let passwordInput = document.querySelector('#password');
let isPasswordVisible = false;

passwordView.addEventListener("click", () => {    
    if(isPasswordVisible) {
        passwordInput.type = 'password'
        isPasswordVisible = false;
    } else {
    passwordInput.type = 'text';
    isPasswordVisible = true;
    
    }
})

// helloNotif.addEventListener("click", () => {
//     console.log("clique");
    
// })
// // AJOUTER UN POP UP AVEC LES DERNIERES NEWS


// filter.addEventListener("click", () => {
//     console.log("clique");
    
// })