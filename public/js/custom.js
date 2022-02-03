$(".nav-link").hover(() => {
  $(this).toggleClass("active");
});

let prev = 50;
$(window).on("scroll", function () {
  let scrollTop = $(this).scrollTop();
  $(".navbar").toggleClass("hidden", scrollTop > prev);
});

let myModal = new bootstrap.Modal(document.getElementById("contactModal"), {
  keyboard: false,
});
myModal.show();
