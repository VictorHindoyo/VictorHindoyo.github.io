
$(document).ready(function () {
});

$(".modal-btn").click(function () {
  const modalId = $(this).data("modal");

  $(`#${modalId}`).show();
});

$(".modal-close").click(function () {
    const modalId = $(this).data("modal");

    $(`#${modalId}`).hide();
});
