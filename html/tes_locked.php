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
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
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

    .font-neue {
        font-family: 'Comic Neue', cursive;
    }

    .font-secular {
        font-family: 'Secular One', sans-serif;
    }
</style>

<body>
    <div class="w-screen h-screen py-4 relative">
        <div class="flex justify-between items-center px-6">
            <a href="pilih_tes.html" class="relative z-[3] clickableButton">
                <img src="../asset/back.png" class="w-12" alt="">
            </a>
        </div>
        <div class="w-screen h-screen absolute top-0 left-0 flex items-center justify-center z-[2]">
            <div class="space-y-4">
                <img src="../asset/warning.png" class="w-[15vw] h-[15vw] mx-auto " alt="">
                <p class="text-center text-2xl font-neue font-bold">Selesaikan dulu 7 soal "Latihan <span id="levelHolder"></span>".<br>
                    Pastikan telah menyelesaikan semua jenis latihan!
                </p>

            </div>
        </div>
    </div>
</body>

<script>
    const level = "<?php echo $_GET['level']; ?>"
    if (level == "Easy") {
        $("#levelHolder").html("Mudah")
    } else if (level == "Medium") {
        $("#levelHolder").html("Sedang")
    } else if (level == "Hard") {
        $("#levelHolder").html("Sulit")
    }
    console.log(level)
</script>
<script>
    document.querySelectorAll(".clickableButton").forEach((components) => {
        components.addEventListener("click", function() {
            window.cpjs.clickSound()
        })
    })
</script>

</html>
