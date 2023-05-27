const containerCounterSoal = $("#numSoal")
const containerSoal1 = $("#containerSoal1")
const containerSoal2 = $("#containerSoal2")
const counter = $(".counter")
console.log(soalId);


// const level = window.level;
var currentSoal = 1
var currentScore = 0

var questions = []; // Define a global variable to store the questions array
var soalId = [];
// Fetch the JSON file
fetch('../html/soal.json')
    .then(response => response.json())
    .then(data => {
        if (level == "easy"){
            questions = data.Easy;
        }else if (level == "medium"){
            questions = data.Medium;
        }else if (level == "hard"){
            questions == data.Hard;
        }
        // questions = data.mudah; // Assign the JSON data to the questions variable
        generateSoalId();
        setSoal();
        console.log(questions);
    })
    .catch(error => {
        console.log('Error:', error);
    });

    function generateSoalId() {
        for (let i = 0; i < 10; i++) {
            var randomNum = Math.floor(Math.random() * 40) + 1;
            if (!soalId.includes(randomNum)){
                soalId.push(randomNum);
            }
        }
        // console.log(questions);
    }
function setSoal() {
<<<<<<< Updated upstream:html/js/tes.js
    // containerSoal1.html(`${questions[soalId[currentSoal - 1]].angka1} ${questions[soalId[currentSoal - 1]].operator} ${questions[soalId[currentSoal - 1]].angka2} = ?`)
    // containerSoal2.html("")
    // containerCounterSoal.html(currentSoal)
=======
    containerSoal1.html(`${questions[soalId[currentSoal - 1]].angka1} ${questions[soalId[currentSoal - 1]].operator} ${questions[soalId[currentSoal - 1]].angka2} = ?`)
    containerSoal2.html("")
    containerCounterSoal.html(currentSoal)
>>>>>>> Stashed changes:js/tes.js
}
// setSoal();

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
    setSoal()
<<<<<<< Updated upstream:html/js/tes.js
    if (currentSoal == 4) {
=======
    if (currentSoal == 10) {
>>>>>>> Stashed changes:js/tes.js
        $("#skor").val(currentScore)
        document.getElementById("buttonSubmitTes").click()
    }
    else{
        $("#modalLihatSoal").show()
    }
    currentSoal++
})