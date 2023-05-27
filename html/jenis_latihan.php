<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

</head>


<style>
    .font-baloo {
        font-family: 'Baloo 2', cursive;
    }

    .font-secular {
        font-family: 'Secular One', sans-serif;
    }

    body {
        background-image: url('../asset/bg-awan.png');
        background-size: cover;
        -webkit-tap-highlight-color: transparent;

    }
    
</style>

<body class="">
    <div class="w-screen h-screen py-4">
        <div class="page" data-page="1">
            <div class="flex justify-between items-center px-6">
                <button onclick="history.back()" class="active:-translate-y-4 transition duration-300">
                    <i class="fa fa-angle-left text-2xl" aria-hidden="true"></i>
                </button>
                <h1 class="font-secular text-[4.5vw] text-center">Pilih Jenis Latihan</h1>
                <div></div>
            </div>
            <div class="grid grid-cols-2 w-1/2 mx-auto gap-6 mt-[7.5vh]">
                <button data-target="2"
                    class="page-next flex flex-col justify-center items-center bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] py-[4.5vh] rounded-xl font-bold gap-2 font-inter">
                    <div class="bg-orange-400 text-white w-[8.5vh] h-[8.5vh] flex items-center justify-center rounded-full">
                        <i class="fa-solid ml-[0.6px] fa-plus text-2xl" aria-hidden="true"></i>
                    </div>
                    <p class="text-2xl font-baloo">Penjumlahan</p>
                </button>
                <button data-target="3"
                    class="page-next flex flex-col justify-center items-center bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] py-[4.5vh] rounded-xl font-bold gap-2 font-inter">
                    <div class="bg-blue-400 text-white w-[8.5vh] h-[8.5vh] flex items-center justify-center rounded-full">
                        <i class="fa-solid ml-[0.6px] fa-minus text-2xl" aria-hidden="true"></i>
                    </div>
                    <p class="text-2xl font-baloo">Pengurangan</p>
                </button>
                <button data-target="4"
                    class="flex page-next flex-col justify-center items-center bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] py-[4.5vh] rounded-xl font-bold gap-2 font-inter">
                    <div class="bg-pink-400 text-white w-[8.5vh] h-[8.5vh] flex items-center justify-center rounded-full">
                        <i class="fa-solid ml-[0.6px] fa-times text-2xl" aria-hidden="true"></i>
                    </div>
                    <p class="text-2xl font-baloo">Perkalian</p>
                </button>
                <button data-target="5"
                    class="flex page-next flex-col justify-center items-center bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] py-[4.5vh] rounded-xl font-bold gap-2 font-inter">
                    <div class="bg-lime-400 text-white w-[8.5vh] h-[8.5vh] flex items-center justify-center rounded-full">
                        <i class="fa-solid ml-[0.6px] fa-divide text-2xl" aria-hidden="true"></i>
                    </div>
                    <p class="text-2xl font-baloo">Pembagian</p>
                </button>
            </div>
        </div>

        <div class="page hidden" data-page="2">
            <div class="flex justify-between items-center px-6">
                <button class="page-next" data-target="1">
                    <i class="fa fa-angle-left text-2xl" aria-hidden="true"></i>
                </button>
                <h1 class="font-secular text-[4vw] text-center">Pilih Level Penjumlahan</h1>
                <div></div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-8">
                <a href="latihan.php?level=easy&jenis=penjumlahan"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/easy.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Easy</p>
                </a>
                <a href="latihan.php?level=medium&jenis=penjumlahan"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/medium.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Medium</p>
                </a>
                <a href="latihan.php?level=hard&jenis=penjumlahan"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/hard.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Hard</p>
                </a>
            </div>
        </div>
        <div class="page hidden" data-page="3">
            <div class="flex justify-between items-center px-6">
                <button class="page-next" data-target="1">
                    <i class="fa fa-angle-left text-2xl" aria-hidden="true"></i>
                </button>
                <h1 class="font-secular text-[4vw] text-center">Pilih Level Pengurangan</h1>
                <div></div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-8">
                <a href="latihan.php?level=easy&jenis=pengurangan"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/easy.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Easy</p>
                </a>
                <a href="latihan.php?level=medium&jenis=pengurangan"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/medium.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Medium</p>
                </a>
                <a href="latihan.php?level=hard&jenis=pengurangan"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/hard.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Hard</p>
                </a>
            </div>
        </div>
        <div class="page hidden" data-page="4">
            <div class="flex justify-between items-center px-6">
                <button class="page-next" data-target="1">
                    <i class="fa fa-angle-left text-2xl" aria-hidden="true"></i>
                </button>
                <h1 class="font-secular text-[4vw] text-center">Pilih Level Perkalian</h1>
                <div></div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-8">
                <a href="latihan.php?level=easy&jenis=perkalian"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/easy.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Easy</p>
                </a>
                <a href="latihan.php?level=medium&jenis=perkalian"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/medium.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Medium</p>
                </a>
                <a href="latihan.php?level=hard&jenis=perkalian"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/hard.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Hard</p>
                </a>
            </div>
        </div>
        <div class="page hidden" data-page="5">
            <div class="flex justify-between items-center px-6">
                <button class="page-next" data-target="1">
                    <i class="fa fa-angle-left text-2xl" aria-hidden="true"></i>
                </button>
                <h1 class="font-secular text-[4vw] text-center">Pilih Level Pembagian</h1>
                <div></div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-8">
                <a href="latihan.php?level=easy&jenis=pembagian"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/easy.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Easy</p>
                </a>
                <a href="latihan.php?level=medium&jenis=pembagian"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/medium.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Medium</p>
                </a>
                <a href="latihan.php?level=hard&jenis=pembagian"
                    class="bg-white flex flex-col text-center min-w-[180px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg py-4">
                    <img src="../asset/hard.png" class="h-24 object-contain" alt="">
                    <p class="font-bold font-baloo text-3xl">Hard</p>
                </a>
            </div>
        </div>

    </div>


</body>

<script src="../js/page.js"></script>


</html>
