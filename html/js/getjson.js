var questions = []; // Define a global variable to store the questions array
var soalId = [];
// Fetch the JSON file
fetch('soal.json')
    .then(response => response.json())
    .then(data => {
        questions = data.mudah; // Assign the JSON data to the questions variable
        generateSoalId();
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