
// A $( document ).ready() block.
$( document ).ready(function() {
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUpload").change(function() {
    readURL(this);
  });

  function countChar(val) {
    var len = val.value.length;
    if (len >= 500) {
      val.value = val.value.substring(0, 500);
    } else {
      $('#charNum').text(500 - len);
    }
  };
  
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
  if(togglePassword) {
    togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
    });
  }
});

function menuClick(x) {
  x.classList.toggle('menu-open');
  var menu = document.getElementsByClassName('menu')
  var submenu = menu[0].firstElementChild.lastElementChild;
  if (x.classList.contains('menu-open')) {
      menu[0].classList.add('menu-main-open');
  } else {
      menu[0].classList.remove('menu-main-open')
      submenu.style.height = null;
  }
}

function menuClose() {
    var menuBtn = document.getElementsByClassName('menu-btn');
    var menu = document.getElementsByClassName('menu')
    var submenu = menu[0].firstElementChild.lastElementChild;
    if (menuBtn[0].classList.contains('menu-open')) {
        menuBtn[0].classList.remove('menu-open')
        menu[0].classList.remove('menu-main-open');
        submenu.style.height = null;
    }
}

function onEditInfo() {
  $('#editInfo').removeClass('hide');
  $('#showInfo').addClass('hide');
}

function redo() {
  $('#editInfo').addClass('hide');
  $('#showInfo').removeClass('hide');
}

function onUpdateInfo() {

}

function editPassword() {
  $('#editPass').removeClass('hide');
  $('#showPass').addClass('hide');
}

function redoPass() {
  $('#editPass').addClass('hide');
  $('#showPass').removeClass('hide');
}

function startOmikuji() {
  $('#welcome').css('display','none');
  $('#start').css('display','flex');
  setTimeout(function(){ 
    $('#start').css('display','none');
    $('#end').css('display','flex');
  }, 5000);
}

function onEditBank() {
  $('#editBank').removeClass('hide');
  $('#showBank').addClass('hide');
}

function redoBank() {
  $('#editBank').addClass('hide');
  $('#showBank').removeClass('hide');
}