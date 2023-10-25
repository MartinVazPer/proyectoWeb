"use strict";

(function ($) {
  "use strict"; // NAVBAR

  $('.navbar-collapse a').on('click', function () {
    $(".navbar-collapse").collapse('hide');
  });
  $(function () {
    $('.hero-slides').vegas({
      slides: [{
        src: 'img/Fondo1.jpg'
      }, {
        src: 'img/ambar2.jpg'
      }, {
        src: 'img/imagen2.png'
      }],
      timer: false,
      animation: 'kenburns'
    });
  }); // CUSTOM LINK

  $('.smoothscroll').click(function () {
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height() + 60;
    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;
      $('body,html').animate({
        scrollTop: totalScroll
      }, 300);
    }
  });
})(window.jQuery); // Agregar interacción de validación de formulario


document.querySelector('#contact-form').addEventListener('submit', function (e) {
  e.preventDefault(); // Evitar el envío del formulario por defecto

  var name = document.querySelector('#name').value;
  var email = document.querySelector('#email').value;
  var message = document.querySelector('#message').value; // Validar campos (puedes agregar más validaciones según tus necesidades)

  if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
    alert('Por favor, complete todos los campos.');
  } else {
    // Aquí puedes enviar el formulario o realizar alguna otra acción
    alert('Formulario enviado con éxito.'); // Restablecer el formulario

    document.querySelector('#contact-form').reset();
  }
});