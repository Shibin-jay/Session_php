var login_form = document.querySelector("#login");
var reg_form = document.querySelector("#register");
var btn = document.querySelector("#btn");
var form_box = document.querySelector(".form-box");
function register() {
  login_form.style.left = "-400px";
  reg_form.style.left = "50px";
  btn.style.left = "110px";
  form_box.style.height = "540px";
}
function login() {
  login_form.style.left = "50px";
  reg_form.style.left = "450px";
  btn.style.left = "0";
  form_box.style.height = "480px";
}
// password validation
const passwordInput = document.getElementById('regPassword');
const passwordConfirmInput = document.getElementById('regPassConfirm');

// Add an event listener to the password input field to check if the password is valid
passwordInput.addEventListener('keyup', () => {
  const password = passwordInput.value;
  const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // A regular expression that requires at least 8 characters with at least one letter and one number
  if (passwordRegex.test(password)) {
    passwordInput.classList.remove('invalid');
    passwordConfirmInput.removeAttribute('disabled');
    document.getElementById('validateMessage').innerHTML = '';
  } else {
    passwordInput.classList.add('invalid');
    passwordConfirmInput.setAttribute('disabled', true);
    document.getElementById('validateMessage').innerHTML = 'Password must contain at least 8 characters with at least one letter and one number';
  }
});

// Add an event listener to the confirmation field to check if the passwords match
passwordConfirmInput.addEventListener('keyup', () => {
  const password = passwordInput.value;
  const passwordConfirm = passwordConfirmInput.value;
  if (password === passwordConfirm) {
    passwordConfirmInput.classList.remove('invalid');
    document.getElementById('validateMessage').innerHTML = '';
  } else {
    passwordConfirmInput.classList.add('invalid');
    document.getElementById('validateMessage').innerHTML = 'Passwords do not match';
  }
});
