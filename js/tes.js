const containerCounterSoal = $("#numSoal");

// Buat Soal Angka
const containerSoal1 = $("#containerSoal1");

// Buat Soal Cerita Penjelasan
const containerSoalCerita1 = $("#containerSoalCerita1");

// Buat Soal Cerita Pertanyaan
const containerSoalCerita2 = $("#containerSoalCerita2");

const counter = $(".counter");
console.log(soalId);

// const level = window.level;
var currentSoal = 1;
var currentScore = 0;

var questions = [];
var soalId = [];
var questions2 = [];
var soalId2 = [];
// Fetch the JSON file

fetch("../bank_soal/soal.json")
  .then((response) => response.json())
  .then((data) => {
    if (level == "easy") {
      questions = data.Easy;
    } else if (level == "medium") {
      questions = data.Medium;
    } else if (level == "hard") {
      questions == data.Hard;
    }
    // questions = data.mudah; // Assign the JSON data to the questions variable
    generateSoalId();
    setSoal();
    console.log(questions);
  })
  .catch((error) => {
    console.log("Error:", error);
  });

fetch("../bank_soal/soalCerita.json")
  .then((response) => response.json())
  .then((data) => {
    if (level == "easy") {
      questions2 = data.Easy;
    } else if (level == "medium") {
      questions2 = data.Medium;
    } else if (level == "hard") {
      questions2 == data.Hard;
    }
    // questions = data.mudah; // Assign the JSON data to the questions variable
    generateSoalId2();
    // setSoal();
    console.log(questions2);
  })
  .catch((error) => {
    console.log("Error:", error);
  });

function generateSoalId() {
  for (let i = 0; i < 8; i++) {
    var randomNum = Math.floor(Math.random() * 40) + 1;
    if (!soalId.includes(randomNum)) {
      soalId.push(randomNum);
    }
  }
  // console.log(questions);
}

function generateSoalId2() {
  for (let i = 0; i < 2; i++) {
    var randomNum = Math.floor(Math.random() * 5) + 1;
    if (!soalId2.includes(randomNum)) {
      soalId2.push(randomNum);
    }
  }
  // console.log(questions);
}
function setSoal() {
  if (currentSoal < 8) {
    console.log(currentSoal);
    containerSoal1.html(
      `${questions[soalId[currentSoal - 1]].angka1} ${
        questions[soalId[currentSoal - 1]].operator
      } ${questions[soalId[currentSoal - 1]].angka2} = ?`
    );
    containerSoalCerita1.html(``);
    containerSoalCerita2.html(``);
  } else {
    containerSoalCerita1.html(`${questions2[soalId2[currentSoal - 8]].soal}`);
    containerSoal1.html(``);
    containerSoalCerita2.html(``);
  }

  containerCounterSoal.html(currentSoal);
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
    $(".show-correct").show();
    document.getElementById("audioBenar").play();
    currentScore += 10;
  } else {
    $(".show-wrong").show();
    document.getElementById("audioSalah").play();
  }
  $("#modalKonfirmasiSubmit").hide();
}

$(".show").click(function () {
  $(".show").hide();

  if (currentSoal == 10) {
    $("#skor").val(currentScore);
    document.getElementById("buttonSubmitTes").click();
  } else {
    document.getElementById("moveButton").click()
  }
  currentSoal++;
  resetSempoa();
  setSoal();
});
