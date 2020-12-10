// открыть по кнопке
$(".js-button-reg").click(function () {
  $(".js-overlay-reg").fadeIn();
});

// закрыть на крестик
$(".js-close-popup-reg").click(function () {
  $(".js-overlay-reg").fadeOut();
});

// // закрыть по клику вне окна
// $(document).mouseup(function (e) {
//   var popup = $(".js-popup-reg");
//   if (e.target != popup[0] && popup.has(e.target).length === 0) {
//     $(".js-overlay-reg").fadeOut();
//   }
// });

// открыть по кнопке
$(".js-button-auto").click(function () {
  $(".js-overlay-auto").fadeIn();
});

// закрыть на крестик
$(".js-close-popup-auto").click(function () {
  $(".js-overlay-auto").fadeOut();
});

// // закрыть по клику вне окна
// $(document).mouseup(function (e) {
//   var popup = $(".js-popup-auto");
//   if (e.target != popup[0] && popup.has(e.target).length === 0) {
//     $(".js-overlay-auto").fadeOut();
//   }
// });
