<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;700&display=swap" rel="stylesheet">
</head>


<style>
    .font-baloo {
        font-family: 'Baloo Tamma 2', cursive;
    }

    body {
        background-image: url('../asset/bg-free.png');
        background-size: cover;
    }

    * {
        touch-action: manipulation;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
    }

    .modal-header,
    .modal-footer {
        display: flex;
        justify-content: space-between;
    }

    .modal-header h2 {
        margin-top: 0;
    }
</style>

<body>

    <h1 class="text-2xl font-bold mb-4">Contoh Penggunaan Session dengan Modal</h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        onclick="showModal()">Mulai</button>

    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Pertanyaan</h2>
                <span class="close" onclick="hideModal()">&times;</span>
            </div>
            <div class="modal-body">
                <p id="question"></p>
                <form id="answer-form">
                    <div id="options"></div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Jawab</button>
                </form>
            </div>
            <div class="modal-footer">
                <p id="score"></p>
            </div>
        </div>
    </div>
    <div class="w-screen h-screen py-2">
        <div class="flex justify-between items-center px-6">
            <a href="main_menu.html" class="min-w-[150px]">
                <i class="fa fa-chevron-left text-2xl" aria-hidden="true"></i>
            </a>
            <h1 class="font-baloo font-bold text-[4vw] flex grow">
                <div class="mx-auto flex items-center justify-center">
                    <div id="soal"></div>
                    <span class="counter ml-2" data-value=0>0</span>
                </div>

            </h1>
            <div class="min-w-[150px] text-end">
                <button class="btn-reset text-white rounded-lg font-bold font-baloo mr-auto"
                    onclick="document.getElementById('audioSempoa').play()">
                    <img src="../asset/reset.png" class="w-8" alt="">
                </button>
            </div>
        </div>
        <div class="flex justify-start mt-2 ">
            <div
                class="sempoa border-8 outline border-[#B86248] shadow-[0px_0px_0px_2px_rgba(0,0,0,1)_inset] relative z-2 flex flex-row items-center mx-4 justify-end scale-[0.9]">


                <div class="kolom space-y-3 relative pb-2" data-multiplier="100000" data-counterorder="5">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>

                <div class="kolom space-y-3 relative pb-2" data-multiplier="10000" data-counterorder="4">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="1000" data-counterorder="3">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">
                            <div class="w-2 h-2 rounded-full bg-black mx-auto mt-0.5">

                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="100" data-counterorder="2">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="10" data-counterorder="1">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="1" data-counterorder="0">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-start.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">
                            <div class="w-2 h-2 rounded-full bg-black mx-auto mt-0.5">

                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-start.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-start.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-start.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-start.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="0.1" data-counterorder="-1">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="0.01" data-counterorder="-2">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="batu bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Modal Akhiri Quiz -->
    <div>

    </div>

    <audio id="audioSempoa" src="../asset/sempoa-click.wav"></audio>
</body>

<script src="../js/sempoa.js">
    var questions = [
        {
            question: 'Apa kepanjangan dari HTML?',
            options: ['Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language'],
            answer: 'Hyper Text Markup Language'
        },
        {
            question: 'Siapakah penemu World Wide Web (WWW)?',
            options: ['Steve Jobs', 'Tim Berners-Lee', 'Bill Gates'],
            answer: 'Tim Berners-Lee'
        },
        {
            question: 'Apa kepanjangan dari CSS?',
            options: ['Cascading Style Sheet', 'Colorful Style Sheet', 'Computer Style Sheet'],
            answer: 'Cascading Style Sheet'
        }
    ];

    // Start session
    var score = 0;
    var currentQuestion = 0;

    // Get modal element
    var modal = document.getElementById('modal');

    // Get modal elements
    var questionElement = document.getElementById('question');
    var optionsElement = document.getElementById('options');
    var answerForm = document.getElementById('answer-form');
    var scoreElement = document.getElementById('score');

    // Function to show modal
    function showModal() {
        // Set current question
        var current = questions[currentQuestion];

        // Set question text
        questionElement.innerHTML = current.question;

        // Set options
        var optionsHTML = '';
        for (var i = 0; i < current.options.length; i++) {
            optionsHTML += '<label class="block"><input type="radio" name="answer" value="' + current.options[i] + '"> ' + current.options[i] + '</label>';
        }
        optionsElement.innerHTML = optionsHTML;

        // Show modal
        modal.style.display = 'block';
    }

    // Function to hide modal
    function hideModal() {
        modal.style.display = 'none';
    }

    // Event listener for form submission
    answerForm.addEventListener('submit', function (event) {
        event.preventDefault();
        var current = questions[currentQuestion];

        // Get selected answer
        var selectedAnswer = document.querySelector('input[name="answer"]:checked');
        if (!selectedAnswer) {
            alert('Silakan pilih salah satu opsi jawaban.');
            return;
        }

        // Check if answer is correct
        if (selectedAnswer.value === current.answer) {
            score++;
        }

        // Update score and current question
        scoreElement.innerHTML = 'Skor: ' + score;
        currentQuestion++;

        // Check if all questions have been answered
        if (currentQuestion >= questions.length) {
            alert('Anda telah menjawab semua pertanyaan. Skor Anda: ' + score);
            hideModal();
            // Reset session
            score = 0;
            currentQuestion = 0;
        } else {
            showModal();
        }
    });

</script>

</html>