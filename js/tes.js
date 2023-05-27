const containerCounterSoal = $("#numSoal")
const containerSoal1 = $("#containerSoal1")
const containerSoal2 = $("#containerSoal2")
const counter = $(".counter")

var currentSoal = 1
var currentScore = 0

function setSoal() {
    containerSoal1.html(`${angka1[currentSoal - 1]} ${operator[currentSoal - 1]} ${angka2[currentSoal - 1]} = ?`)
    containerSoal2.html("")
    containerCounterSoal.html(currentSoal)
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
    if (counter.data("value") == hasil[currentSoal - 1]) {
        $(".show-correct").show()
        document.getElementById("audioBenar").play()
        currentScore += 10
        
    }
    else {
        $(".show-wrong").show()
        document.getElementById("audioSalah").play()
    
    }
    $("#modalKonfirmasiSubmit").hide()
    resetSempoa()
    
}


$(".show").click(function () {
    $(".show").hide()
    resetSempoa()
    currentSoal++
    setSoal()
    if (currentSoal == 11) {
        $("#skor").val(currentScore)
        document.getElementById("buttonSubmitTes").click()
    }
    else{
        $("#modalLihatSoal").show()
    }
})