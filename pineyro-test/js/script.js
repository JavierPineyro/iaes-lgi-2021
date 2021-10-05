const d = document;
const $ = (selector) => d.querySelector(selector);

const form = $('.form');
const username = $('#username');
const usernameError = document.querySelector('#username + #divErrorUser.error');

const password = $('#password');
const passwordError = document.querySelector('#password + #divErrorPass.error');

if (usernameError.classList.contains('error')) {
  usernameError.classList.remove('error');
  usernameError.classList.add('sinError');
}
if (passwordError.classList.contains('error')) {
  passwordError.classList.remove('error');
  passwordError.classList.add('sinError');
}

username.addEventListener('input', (event) => {
  // Cuando el usuario escribe algo, verificamos si los campos son válidos.
  if (username.validity.valid) {
    // Si hay un mensaje de error visible, si el campo es válido, eliminamos
    // el mensaje de error.
    usernameError.innerHTML = ''; // Restablece el contenido del mensaje
    // usernameError.className = 'error'; Restablece el estado visual del mensaje
    if (usernameError.classList.contains('error')) {
      usernameError.classList.remove('error');
      usernameError.classList.add('sinError');
    }
  } else {
    // Si todavía hay un error, muestra el error exacto
    usernameError.classList.add('error');
    showErrorUser();
  }
});

password.addEventListener('input', (event) => {
  if (password.validity.valid) {
    passwordError.innerHTML = '';
    // passwordError.className = 'error';
    if (passwordError.classList.contains('error')) {
      passwordError.classList.remove('error');
      passwordError.classList.add('sinError');
    }
  } else {
    passwordError.classList.add('error');
    showErrorPass();
  }
});

form.addEventListener('submit', (event) => {
  // si el campo de correo electrónico es válido, dejamos que el formulario se envíe
  if (!username.validity.valid) {
    // Si no es así, mostramos un mensaje de error apropiado
    showErrorUser();
    // Luego evitamos que se envíe el formulario cancelando el evento
    event.preventDefault();
  } else if (!password.validity.valid) {
    showErrorPass();
    event.preventDefault();
  }
});

const showErrorUser = () => {
  if (username.validity.valueMissing) {
    // Si el campo está vacío muestra el mensaje de error siguiente.
    usernameError.textContent = 'Debe introducir un nombre de usuario';
    // Establece el estilo apropiado
    usernameError.className = 'error active';
  }
};

const showErrorPass = () => {
  if (password.validity.valueMissing) {
    passwordError.textContent = 'Debe introducir una contraseña';
    passwordError.className = 'error active';
  }
};
