var counterAtas = [0, 0, 0, 0, 0, 0, 0, 0, 0];
var counterBawah = [0, 0, 0, 0, 0, 0, 0, 0, 0];
$(".batu.bawah").click(function () {
  const multiplier = $(this).parent().parent().data("multiplier");
  const value = $(this).data("value");
  const counterorder = $(this).parent().parent().data("counterorder");
  if ($(this).data("isActive")) {
    counterBawah[counterorder] = 0;
    counterBawah[counterorder] += (value - 1) * multiplier;
    $(this)
      .parent()
      .children()
      .each(function () {
        if ($(this).data("value") >= value && $(this).data("isActive")) {
          $(this).removeClass("-translate-y-5");
          $(this).data("isActive", false);
        }
      });
  } else {
    counterBawah[counterorder] = 0;
    counterBawah[counterorder] += value * multiplier;
    $(this)
      .parent()
      .children()
      .each(function () {
        if ($(this).data("value") <= value && !$(this).data("isActive")) {
          $(this).addClass("-translate-y-5");
          $(this).data("isActive", true);
        }
      });
  }
  updateCounter();
});

$(".batu.atas").click(function () {
  const multiplier = $(this).parent().data("multiplier");
  const value = $(this).data("value");
  const counterorder = $(this).parent().data("counterorder");

  if ($(this).data("isActive")) {
    $(this).removeClass("translate-y-5");
    counterAtas[counterorder] -= value * multiplier;
    $(this).data("isActive", false);
  } else {
    $(this).addClass("translate-y-5");
    counterAtas[counterorder] += value * multiplier;
    $(this).data("isActive", true);
  }
  updateCounter();
});

function updateCounter() {
  var totalCounterAtas = counterBawah.reduce(
    (partialSum, a) => partialSum + a,
    0
  );
  var totalCounterBawah = counterAtas.reduce(
    (partialSum, a) => partialSum + a,
    0
  );

  var counter = totalCounterAtas + totalCounterBawah;
  $(".counter").html(counter.toString());
  $(".counter").data("value", counter);
}

$(".btn-reset").click(function reset() {
  counterAtas = [0, 0, 0, 0, 0, 0, 0, 0, 0];
  counterBawah = [0, 0, 0, 0, 0, 0, 0, 0, 0];
  $(".counter").data("value", 0);
  $(".batu.atas").removeClass("translate-y-5");
  $(".batu.bawah").removeClass("-translate-y-5");
  $(".batu.bawah").data("isActive", false);
  $(".batu.atas").data("isActive", false);

  updateCounter();
});
