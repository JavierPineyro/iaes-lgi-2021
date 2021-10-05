$(document).ready(() => {
  // Funciona que redirige al dashboard cuando se valida el input
  const redirectPage = () => {
    window.location.href = '../login.php'; // No se que página deberia ser
  };

  let inputUser = $('#username').val();
  let inputPass = $('#password').val();
  let userFlag = false;
  let passFlag = false;

  $('#username').focusout(() => {
    inputUser = $('#username').val();
    if (inputUser === '' || inputUser.lenght === 0 || inputUser === null) {
      $('#divErrorUser').append(`
        <p id="errorUser" class="errorMessage">You Must Add an Username</p>
      `);
      $('#username').css('outline', '1px solid color: #ff3333');
      $('#username').css('transition', 'outline ease .13s');
    } else {
      userFlag = true;
    }
  });

  $('#username').focusin(() => {
    $('#divErrorUser').empty();
  });

  $('#password').focusout(() => {
    inputPass = $('#password').val();
    if (inputPass === '' || inputPass.lenght === 0 || inputPass === null) {
      $('#divErrorPass').append(`
        <p id="errorPass" class="errorMessage">You Must Add a Password</p>
      `);
      $('#password').css('outline', '1px solid color: #ff3333');
      $('#password').css('transition', 'outline ease .13s');
    } else {
      passFlag = true;
    }
  });

  $('#password').focusin(() => {
    $('#divErrorPass').empty();
  });

  $('#form__button').click(() => {
    if (passFlag === true && userFlag === true) {
      $('#username').val('');
      $('#password').val('');
      $.ajax({
        url: '../login.php',
        type: 'POST',
        data: {
          username: inputUser,
          password: inputPass,
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true,
        beforeSend: function (xhr) {
          xhr.withCredentials = true;
        },
        success: () => {
          redirectPage();
        },
        error: () => {
          alert('Ha ocurrido un error inesperado, intentelo nuevamente');
        },
      });
    } else {
      alert('El Usuario o La Contraseña es incorrecta');
    }
  });
});
