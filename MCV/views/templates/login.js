function passwordDisplay() {
    var passwordInput=document.getElementById('password');
    if (passwordInput.type=="password") {
        passwordInput.type="text";
    } 
    
    else {
        passwordInput.type = "password";
    }
}

window.addEventListener("load", () => {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('../service-worker.js')
    }});