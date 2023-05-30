<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">

</head>
<style>
    .font-baloo {
        font-family: 'Baloo Tamma 2', cursive;
    }

    body {
        background-image: url('../asset/bg-free.png');
        background-size: cover;
        -webkit-tap-highlight-color: transparent;

    }

    * {
        touch-action: manipulation;
    }

    .font-neue {
        font-family: 'Comic Neue', cursive;
    }
</style>

<?php
$jenis = $_GET['jenis'];
$level = $_GET['level'];
?>






<body>
    <div class="w-screen h-screen py-2">
        <div class="flex justify-between items-center px-6">
            <div class="min-w-[150px]">
                <a href="main_menu.html" class="clickableButton">
                    <img src="../asset/home.png" class="w-8" alt="">
                </a>
            </div>

            <h1 class="font-baloo font-bold text-[4vw] flex grow">
                <div class="mx-auto flex items-center justify-center">
                    <div>
                        <span id="angka1" class=""></span>
                        <span id="soal"></span>
                    </div>
                    <span class="counter ml-2" data-value=0>0</span>
                </div>

            </h1>
            <div class="min-w-[150px] text-end">
                <button
                    class="btn-reset text-white rounded-lg font-bold font-baloo mr-auto active:rotate-180 transition duration-300"
                    onclick="document.getElementById('audioSempoa').play()">
                    <img src="../asset/reset.png" class="w-8" alt="">
                </button>
            </div>
        </div>
        <div class="flex justify-center">
            <div
                class="sempoa border-8 outline border-[#B86248] shadow-[0px_0px_0px_2px_rgba(0,0,0,1)_inset] relative z-2 flex flex-row items-center mx-4 justify-end">


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
                <div class="kolom space-y-3 relative pb-2" data-multiplier="" data-counterorder="">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="" data-counterorder="">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-normal.png"
                            class="bawah h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
            </div>
        </div>
        <div class="show-correct absolute top-0 bg-lime-500 bg-opacity-[0.8] w-screen h-screen hidden">
            <div class="w-full h-full flex items-center justify-center flex-col">
                <p class="font-bold font-baloo text-3xl">Jawabanmu Benar !!</p>
                <div class="border-4 border-black rounded-full w-40 h-40 flex justify-center items-center">
                    <i class="fa fa-check text-[100px]" aria-hidden="true"></i>
                </div>
                <p></p>
            </div>
            <div class="absolute bottom-0 right-0 font-neue text-3xl m-4">
                Soal <span id="counterKerja"></span>
            </div>
        </div>
    </div>


    <audio id="audioSempoa" src="../asset/sempoa-click.wav"></audio>
    <audio id="audioBenar" src="../asset/correct.wav"></audio>

    <div class="w-screen h-screen fixed top-0 left-0 hidden " id="qtip">
        <div class="flex items-center justify-center h-full">
            <div
                class="bg-[#FFCA63] rounded-lg min-w-6/12 relative py-[7vh] flex items-center justify-center gap-10 pr-6 text-2xl font-bold  font-neue">
                <img src="../asset/wortel-tantangan.png" class="h-[10vh] scale-[4] -translate-y-[25%]"
                    alt="">
                Oops,kerjakan soal secara urut ya!
            </div>
        </div>
    </div>


</body>


<script>
    var audioBenar = document.getElementById("audioBenar");

    var checkStep = false

    const jenis = "<?php echo $jenis; ?>"
    const level = "<?php echo $level; ?>"

    var angka1 = 2000
    var angka2 = 0
    var operator = ""
    var hasil = 0
    var soal = ""
    var counterKerja = 0


    function generateSoal() {
        angka1 = 1009
        angka2 = 17

        if (level == "easy") {
            while (angka1 + angka2 > 9) {
                angka1 = Math.floor(Math.random() * 9) + 1
                angka2 = Math.floor(Math.random() * 9) + 1
            }
        } else if (level == "medium") {
            while (angka1 + angka2 > 20) {
                angka1 = Math.floor(Math.random() * 18) + 8
                angka2 = Math.floor(Math.random() * 10) + 3
            }
        } else if (level == "hard") {
            while (angka1 + angka2 > 160) {
                angka1 = Math.floor(Math.random() * 150) + 40
                angka2 = Math.floor(Math.random() * 100) + 20
            }
        }

        if (jenis == "penjumlahan") {
            operator = "+"
            hasil = angka1 + angka2
        } else if (jenis == "pengurangan") {
            operator = "-"
            if (angka1 < angka2) {
                const tempAngka1 = angka1
                angka1 = angka2
                angka2 = tempAngka1
                hasil = angka1 - angka2
            }
            hasil = angka1 - angka2

        } else if (jenis == "perkalian") {

            if (level == "easy") {
                angka1 = Math.floor(Math.random() * 9) + 1
                angka2 = Math.floor(Math.random() * 3) + 1
            } else if (level == "medium") {
                angka1 = Math.floor(Math.random() * 19) + 5
                angka2 = Math.floor(Math.random() * 4) + 2
            } else if (level == "hard") {
                angka1 = Math.floor(Math.random() * 100) + 15
                angka2 = Math.floor(Math.random() * 9) + 2
            }

            operator = "x"
            hasil = angka1 * angka2
        } else if (jenis == "pembagian") {
            operator = ":"
            hasil = angka1 / angka2
            while (angka1 % angka2 != 0 || angka1 == angka2) {
                if (level == "easy") {
                    angka1 = Math.floor(Math.random() * 9) + 2
                    angka2 = Math.floor(Math.random() * 5) + 2

                } else if (level == "medium") {
                    angka1 = Math.floor(Math.random() * 50) + 10
                    angka2 = Math.floor(Math.random() * 7) + 2

                } else if (level == "hard") {
                    angka1 = Math.floor(Math.random() * 500) + 100
                    angka2 = Math.floor(Math.random() * 15) + 3
                }
                hasil = angka1 / angka2
            }
        }
        soal = ` ${operator} ${angka2} = `
    }


    $(".sempoa").click(function() {
        var checkCounter = $(".counter").data("value")
        $("#qtip").hide()
        if (jenis == "penjumlahan" || jenis == "pengurangan") {
            if (angka1 == checkCounter) {
                checkStep = true
                $("#angka1").addClass("underline underline-offset-4 text-lime-500")
            }
        } else {
            checkStep = true
        }
        if (checkCounter == hasil) {
            if (checkStep) {
                counterKerja += 1

                $("#counterKerja").html(counterKerja)

                $(".show-correct").show();
                audioBenar.load();
                audioBenar.play();
            } else {
                $("#qtip").show();
                setTimeout(() => {
                    $("#qtip").hide()
                }, 4000);
            }
        }
    })
    generateSoal()

    $("#qtip-button-close").click(function() {
        $("#qtip").hide()
    })

    $("#qtip").click(function() {
        $("#qtip").hide()
    })

    $(".show-correct").click(function() {
        $(this).hide();
        generateSoal()
        $("#soal").html(soal);
        $(".btn-reset").click()
        checkStep = false
        $("#angka1").removeClass()
        $("#angka1").html(`${angka1}`)



        if (counterKerja == 7) {
            setCookie(`${level}-${jenis}`, true)
            console.log("done")
        }
    })
    $("#angka1").html(`${angka1}`)
    $("#soal").html(soal);
</script>

<script>
    document.querySelectorAll(".clickableButton").forEach((components) => {
        components.addEventListener("click", function() {
            window.cpjs.clickSound()
        })
    })
</script>

<script src="../js/sempoa.js"></script>
<script src="../js/page.js"></script>
<script src="../js/cookie.js"></script>

</html>
