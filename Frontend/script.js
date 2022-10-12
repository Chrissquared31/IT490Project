const cForm = document.getElementById('create-form');
const lForm = document.getElementById('login-form');
const cUsername = document.getElementById('create-username');
const lUsername = document.getElementById('login-username');
const cEmail = document.getElementById('create-email');
const cPassword = document.getElementById('create-password');
const lPassword = document.getElementById('login-password');

const validateInputsC = () => {
    const usernameValue = cUsername.value.trim();
    const emailValue = cEmail.value.trim();
    const passwordValue = cPassword.value.trim();
   
    if(usernameValue === '') {
        setError(cUsername, 'Username is required');
    } else {
        setSuccess(cUsername);
    }

    if(emailValue === '') {
        setError(cEmail, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(cEmail, 'Provide a valid email address');
    } else {
        setSuccess(cEmail);
    }

    if(passwordValue === '') {
        setError(cPassword, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(cPassword, 'Password must be at least 8 character.');
    } else {
        setSuccess(cPassword);
    }
};

const validateInputsL = () => {
    const usernameValue = lUsername.value.trim();
    const passwordValue = lPassword.value.trim();
    
    if(usernameValue === '') {
        setError(lUsername, 'Username is required');
    } else {
        setSuccess(lUsername);
    }

    if(passwordValue === '') {
        setError(lPassword, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(lPassword, 'Password must be at least 8 character.');
    } else {
        setSuccess(lPassword);
    }


};

function isFormValidC(){
    const inputContainers = cForm.querySelectorAll('.input-control');
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }
    });
    return result;

}

function isFormValidL(){
    const inputContainers = lForm.querySelectorAll('.input-control');
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }
    });
    return result;
}
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = cEmail => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(cEmail).toLowerCase());
}


if (lForm){
    
    lForm.addEventListener('submit', e => {
        e.preventDefault();
    
    validateInputsL();
    console.log(isFormValidL());
        if(isFormValidL()==true){
            lForm.submit();
            alert("Account Logged in Successfully")
            window.location.href="../php/LandingPage.html";
        }else {
            e.preventDefault();
        }
    
    });
}

cForm.addEventListener('submit', e => {
    e.preventDefault();

   validateInputsC();
   console.log(isFormValidC());
    if(isFormValidC()==true){
        cForm.submit();
        alert("Account Created Successfully")
        window.location.href="../php/Login.php";
     }else {
         e.preventDefault();
     }

});
