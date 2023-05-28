<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700;800&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<style>
    body {
        background-image: url('../asset/bg-awan.png');
        background-size: cover;
        -webkit-tap-highlight-color: transparent;

    }

    .font-secular {
        font-family: 'Secular One', sans-serif;
    }

    .font-baloo {
        font-family: 'Baloo 2', cursive;
    }
</style>

<body>
    <div class="w-screen h-screen py-4 relative">
        <div class="flex justify-between items-center px-6">
            <div class="min-w-[60px]">
                <a href="main_menu.html" class="relative z-[3]">
                    <img src="../asset/home.png" class="w-8" alt="">
                </a>
            </div>

            <h1 class="font-baloo font-bold text-[4vw] text-center">Tantangan Tes</h1>
            <button
                class="modal-btn bg-[#FFF6BE] w-[60px] h-[60px] flex items-center justify-center rounded-full border-4 border-[#FFE541] relative z-[3]"
                data-modal="modalPenjelasanTes">
                <img src="../asset/info.png" alt="">
            </button>
        </div>
        <div class="w-screen h-screen absolute top-0 left-0 flex items-center justify-center z-[2]">
            <div class="border-[4px] w-7/12 h-7/12 border-black rounded-lg flex items-center justify-center ">
                <img src="../asset/buah-tantangan.png" class="w-4/12 scale-[1.2] translate-x-[-5vw]" alt="">
                <div class="font-secular text-xl">
                    Dapatkan nilai lebih dari 80 untuk lulus dari tes ini.
                </div>
            </div>
        </div>
        <a href="tes.php?level=<?php echo $_GET["level"]?>" class="absolute bottom-6 right-12 flex items-center z-[3]">
            <span class="font-secular font-bold text-3xl mr-4">Mulai</span>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>

    <!-- Modal Penjelasan tes -->
    <div class="modal w-screen h-screen bg-slate-200 bg-opacity-[0.8] fixed z-[50] top-0 left-0 hidden flex items-center justify-center"
        id="modalPenjelasanTes">
        <div class="bg-white w-8/12 mx-auto rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-between mt-12 py-2 px-4">
                <div class="min-w-12">

                </div>

                <div class="border-b-[1px] py-4 px-8 border-slate-300">
                    <h3 class="font-baloo font-bold font-black text-3xl  ">PENJELASAN</h3>
                </div>

                <button class="min-w-12 modal-close" data-modal="modalPenjelasanTes">
                    <i class="fa fa-close text-2xl" aria-hidden="true"></i>
                </button>
            </div>
            <!-- Body -->
            <div class="pb-8 pt-4 px-8 text-center font-bold font-baloo text-xl space-y-4">
                <div>
                    Klik tombol mulai untuk memunculkan soal saat mengerjakan Tes
                </div>
                <div>
                    Semoga Berhasil!
                </div>
            </div>

            <img src="../asset/wortel-tantangan.png" class="absolute bottom-0 w-[5vw] scale-[3]" alt="">
        </div>
    </div>
</body>


<script src="../js/modal.js" defer></script>


</html>