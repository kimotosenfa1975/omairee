
// A $( document ).ready() block.
$( document ).ready(function() {
  
  $('.savedCard').on('click',function(){
    $("#savedCard").attr('checked', true);
  })
  $('#payment-form').submit(function(e) {
    e.preventDefault();
    if($("#savedCard").is(':checked')){
      
    }
    var registerAgree = $("#registerAgree").is(":checked")
    var termsAgree = $("#termsAgree").is(":checked")
    if((registerAgree)&&(termsAgree)){
      var $form = $("#payment-form");
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      var date = $('.card-expiry-date').val();
      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: date.substr(0,2),
          exp_year: date.substr(3,2)
      }, stripeResponseHandler);
      function stripeResponseHandler(status, response) {
          console.log(response.error);
          if (response.error) {
              $('.error')
                  .css('display','block')
                  .text(response.error.message);
          } else {
              /* token contains id, last4, and card type */
              var token = response['id'];
              $form.find('input[type=text]').empty();
              $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
              $form.get(0).submit();
          }
      }
    }else {
      $(".error").css('display','block');
    }
  });

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
        $('#avartar').submit();
    }
  }
  $("#imageUpload").change(function() {
    readURL(this);
  });

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
function countChar(val) {
  var len = val.value.length;
  if (len >= 100) {
    val.value = val.value.substring(0, 100);
  } else {
    $('#charNum').text(100 - len);
  }
};

function onEditInfo() {
  $('#editInfo').removeClass('hide');
  $('#showInfo').addClass('hide');
}

function redo() {
  $('#editInfo').addClass('hide');
  $('#showInfo').removeClass('hide');
}

function onUpdateInfo() {
  $("#updateInfo").submit();
}

function onUpdateBank() {
  $("#updateBank").submit();
}

function onUpdateJishaInfo() {
  $("#updateJisha").submit();
}

function onUpdatePass() {
  $("#updatePass").submit();
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
  $.ajax({
    type:'POST',
    url:'/getOmikuji',
    data:'_token = <?php echo csrf_token() ?>',
    success:function(data) {
       $("#end").html(data);
    }
 });
  setTimeout(function(){ 
    $('#start').css('display','none');
    $('#end').css('display','flex');
  }, 5000);
}

function init() {
  $("#end").css('display','none');
}

function onEditBank() {
  $('#editBank').removeClass('hide');
  $('#showBank').addClass('hide');
}

function redoBank() {
  $('#editBank').addClass('hide');
  $('#showBank').removeClass('hide');
}

function buyCoin() {
  $('#coinCost').val($('input[name=cost]:checked').val());
}

function welcome() {
  $("#welcome").css('display','flex');
}

function closeWelcome() {
  $("#welcome").css('display','none');
}

function getAddress() {
  
}

function toPray() {
  setTimeout(function(){ 
    $("#toPray").submit();
  }, 5000);
}
