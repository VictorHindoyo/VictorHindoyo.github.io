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

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

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
        <div class="flex gap-4 justify-start items-end h-[80vh] px-[10vw]">
            <img src="../asset/wortel-tantangan.png" class="w-[15vw] translate-y-[10vh]" alt="">
            <div class="bg-contain bg-no-repeat h-[80vh] w-[70vw]" style="background-image:url('../asset/popup.png')">
                <div class="w-full flex justify-center items-center">
                    <div
                        class="font-baloo font-bold text-4xl text-center mt-[7vh] ml-[2vw] border-b-2 border-white px-6 pb-[4vh]">
                        PENJELASAN</div>
                </div>
                <div class="ml-[2vw]">
                    <div class="text-center font-bold font-baloo text-xl mt-[5vh] mb-[7vh] mx-[4vw]">
                        Tekan aku untuk memunculkan soal saat mengerjakan Tes
                    </div>
                    <div class="text-center font-bold font-baloo text-xl mt-[5vh] mb-[7vh] mx-[4vw]">
                        Semoga Berhasil!
                    </div>
                </div>

            </div>
        </div>
        <a href="tes.php?level=<?php echo $_GET['level']; ?>"
            class="absolute bottom-6 right-12 flex items-center z-[3] clickableButton">
            <span class="font-secular font-bold text-3xl mr-4">Mulai</span>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>

    </div>


</body>


<script>
    document.querySelectorAll(".clickableButton").forEach((components) => {
        components.addEventListener("click", function() {
            window.cpjs.clickSound()
        })
    })
</script>

<script src="../js/modal.js" defer></script>
<script src="../js/page.js" defer></script>


</html>
