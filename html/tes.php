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
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700;800&display=swap" rel="stylesheet">

</head>


<style>
    .font-baloo {
        font-family: 'Baloo 2', cursive;
    }

    body {
        background-image: url('../asset/bg-free.png');
        background-size: cover;
    }

    * {
        touch-action: manipulation;
    }
</style>


<script>
    // Data Soal Masuk sini
    // angka1 = [1, 10, 6]
    // operator = ["+", "-", "*"]
    // angka2 = [3, 5, 9]
    // hasil = [4, 5, 15]

    const level = "<?php echo $_GET["level"] ?>"
</script>

<body>
    <div class="w-screen h-screen py-2 ">
        <div class="flex justify-between items-center px-6  mx-auto">
            <div class="min-w-[150px] flex items-center justify-end">
                <div class="min-w-[150px]">
                    <button class="text-2xl modal-btn" data-modal="modalAkhiriQuiz">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            <h1 class="font-baloo font-bold text-[4vw] flex grow">
                <div class="mx-auto flex items-center justify-center">
                    <div id="soal"></div>
                    <span class="counter ml-2" data-value=0>0</span>
                </div>

            </h1>
            <div class="min-w-[150px] flex items-center justify-end">
                <button
                    class="modal-btn bg-[#FFF6BE] w-[45px] h-[45px] flex items-center justify-center rounded-full border-4 border-[#FFE541] relative z-[3]"
                    data-modal="modalLihatSoal">
                    <img src="../asset/info.png" class="w-3" alt="">
                </button>
            </div>
        </div>
        <div class="flex justify-evenly items-end mt-2 mx-2">
            <div
                class="sempoa border-8 outline border-[#B86248] shadow-[0px_0px_0px_2px_rgba(0,0,0,1)_inset] relative z-2 flex flex-row items-center scale-[0.95]">


                <div class="kolom space-y-3 relative pb-2" data-multiplier="100000" data-counterorder="5">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-normal.png"
                        class="batu atas h-[8.5vh] scale-[1.45]   mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">

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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">

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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">
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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">

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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">

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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">
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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">

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
                        <div class="separator relative z-1 w-[10vw] h-4 border-y-[2px] border-black bg-[#F09677]">

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

            <button class="modal-btn border-4 rounded-full w-[8vw] h-[8vw] border-black"
                data-modal="modalKonfirmasiSubmit">
                <i class="fa fa-arrow-right text-2xl font-bold" aria-hidden="true"></i>
            </button>
        </div>

    </div>

    <!-- Modal Akhiri Quiz -->
    <div class="modal w-screen h-screen bg-slate-200 bg-opacity-[0.8] fixed z-[50] top-0 left-0 hidden flex items-center justify-center"
        id="modalAkhiriQuiz">
        <div class="bg-white w-8/12 mx-auto rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-center mt-12 pb-2 pt-4 px-4">
                <img src="../asset/question-mark.png" class="w-[14vh]" alt="">
            </div>
            <!-- Body -->
            <div class="pb-4 pt-4 px-8 text-center font-bold font-baloo text-xl space-y-4">
                <div>
                    Apakah kamu ingin mengakhiri kuis ?
                </div>
            </div>
            <!-- Footer -->
            <div class="flex items-center justify-center pb-6 gap-4">
                <a href="main_menu.html"
                    class="border-2  border-black rounded-lg bg-transparent px-5 py-2 font-bold">Ya</a>
                <button class="modal-close border-2  border-red-500 rounded-lg bg-red-500 px-5 py-2 font-bold"
                    data-modal="modalAkhiriQuiz">Tidak</button>
            </div>

        </div>
    </div>

    <!-- Modal Konfirmasi Submit -->
    <div class="modal w-screen h-screen bg-slate-200 bg-opacity-[0.8] fixed z-[50] top-0 left-0 hidden flex items-center justify-center"
        id="modalKonfirmasiSubmit">
        <div class="bg-white w-8/12 mx-auto rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-center mt-12 pb-2 pt-4 px-4">
                <img src="../asset/question-mark.png" class="w-[14vh]" alt="">
            </div>
            <!-- Body -->
            <div class="pb-4 pt-4 px-8 text-center font-bold font-baloo text-xl space-y-4">
                <div>
                    Apakah kamu yakin ?
                </div>
            </div>
            <!-- Footer -->
            <div class="flex items-center justify-center pb-6 gap-4">
                <button class="border-2  border-black rounded-lg bg-transparent px-5 py-2 font-bold"
                    onclick="submit()">Ya</button>
                <button class="modal-close border-2  border-red-500 rounded-lg bg-red-500 px-5 py-2 font-bold"
                    data-modal="modalKonfirmasiSubmit">Tidak</button>
            </div>

        </div>
    </div>

    <!-- Modal Lihat Soal -->
    <div class="modal w-screen h-screen bg-slate-200 bg-opacity-[0.8] fixed z-[50] top-0 left-0 flex items-center justify-center"
        id="modalLihatSoal">
        <div class="bg-white w-8/12 mx-auto rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-between  py-2 px-4">
                <div class="min-w-12">

                </div>

                <div class="border-b-[1px] py-4 px-8 border-slate-300">
                    <h3 class="font-baloo font-bold font-black text-3xl  ">SOAL NO <span id="numSoal">1</span></h3>
                </div>

                <button class="min-w-12 modal-close" data-modal="modalLihatSoal">
                    <i class="fa fa-close text-2xl" aria-hidden="true"></i>
                </button>
            </div>
            <!-- Body -->
            <div class="pb-8 pt-4 px-8 text-start font-bold font-baloo text-xl space-y-4 max-h-[60vh] overflow-auto">
                <div id="containerSoal1">
                    Ami menyimpan enam permen di tas kecilnya dan
                    mengambil satu permen dari kantong sakunya untuk disimpan di tas kecilnya.
                </div>
                <div id="containerSoal2">
                    Berapakah jumlah permen ami di tas sekarang?
                </div>
            </div>
        </div>
    </div>

    <div class="show show-correct absolute top-0 bg-lime-500 bg-opacity-[0.8] w-screen h-screen hidden z-[100]">
        <div class="w-full h-full flex items-center justify-center flex-col">
            <p class="font-bold font-baloo text-3xl">Jawabanmu Benar !!</p>
            <div class="border-4 border-black rounded-full w-40 h-40 flex justify-center items-center">
                <i class="fa fa-check text-[100px]" aria-hidden="true"></i>
            </div>
            <p></p>
        </div>
    </div>

    <div class="show show-wrong absolute top-0 bg-red-500 bg-opacity-[0.8] w-screen h-screen hidden z-[100]">
        <div class="w-full h-full flex items-center justify-center flex-col">
            <p class="font-bold font-baloo text-3xl">Jawabanmu Salah !!</p>
            <div class="border-4 border-black rounded-full w-40 h-40 flex justify-center items-center">
                <i class="fa fa-times text-[100px]" aria-hidden="true"></i>
            </div>
            <p></p>
        </div>
    </div>

    <audio id="audioSempoa" src="../asset/sempoa-click.wav"></audio>
    <audio id="audioBenar" src="../asset/correct.wav"></audio>
    <audio id="audioSalah" src="../asset/wrong.wav"></audio>

    <form action="tes_hasil.php" method="POST">
        <input type="hidden" id="skor" name="skor">
        <button type="submit" class="hidden" id="buttonSubmitTes"></button>
    </form>
</body>



<script src="../js/sempoa.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/tes.js"></script>


</html>