const containerCounterSoal = $("#numSoal")
const containerSoal1 = $("#containerSoal1")
const containerSoal2 = $("#containerSoal2")
const counter = $(".counter")
console.log(soalId);

var currentSoal = 1
var currentScore = 0

function setSoal() {
    // containerSoal1.html(`${questions[soalId[currentSoal - 1]].angka1} ${questions[soalId[currentSoal - 1]].operator} ${questions[soalId[currentSoal - 1]].angka2} = ?`)
    // containerSoal2.html("")
    // containerCounterSoal.html(currentSoal)
}

setSoal()

function resetSempoa() {
    counterAtas = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    counterBawah = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    $(".counter").data("value", 0);
    $(".batu.atas").removeClass("translate-y-5");
    $(".batu.bawah").removeClass("-translate-y-5");
    $(".batu.bawah").data("isActive", false);
    $(".batu.atas").data("isActive", false);

    updateCounter();
}

function submit() {
    if (counter.data("value") == questions[soalId[currentSoal - 1]].jawaban) {
        $(".show-correct").show()
        document.getElementById("audioBenar").play()
        currentScore += 10
    }
    else {
        $(".show-wrong").show()
        document.getElementById("audioSalah").play()

    }
    $("#modalKonfirmasiSubmit").hide()
}


$(".show").click(function () {
    $(".show").hide()
    resetSempoa()
    currentSoal++
    setSoal()
    if (currentSoal == 4) {
        $("#skor").val(currentScore)
        document.getElementById("buttonSubmitTes").click()
    }
    else{
        $("#modalLihatSoal").show()
    }
})