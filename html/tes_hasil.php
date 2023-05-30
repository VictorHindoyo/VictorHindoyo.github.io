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
    <script src="../js/cookie.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700;800&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<?php
$skor = $_POST['skor'];
$level = $_POST['level'];
?>


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
    <div class="w-screen h-screen flex flex-col items-center justify-center font-bold font-baloo text-2xl space-y-2">
        <div>
            Kamu mendapat skor
        </div>
        <div class="flex justify-between items-center pt-10">
            <img src="../asset/buah-hasil-skor.png" class="w-[15vw] self-end" alt="">
            <span class="text-[15vw] self-start font-bold font-baloo text-white"><?php echo $skor; ?></span>
            <img src="../asset/buah-hasil-skor.png" class="w-[15vw] self-end -scale-x-[100%]" alt="">
        </div>
        <div>
            Dari 10 soal yang telah kamu kerjakan
        </div>

        <a href="main_menu.html"
            class="clickableButton bg-[#FFF6BE] w-[60px] h-[60px] flex items-center justify-center rounded-full border-4 border-[#FFE541] absolute bottom-6 right-6">
            <img src="../asset/home.png" class="w-8" alt="">
        </a>
    </div>


</body>


<script>
    const skor = parseInt('<?php echo $skor; ?>');
    const level = '<?php echo $level; ?>';
    const cookieName = `${level}Highest`

    var getHighest = getCookie(cookieName)

    if (getHighest == null) {
        setCookie(cookieName, skor, 999)
    } else {
        getHighest = parseInt(getHighest)
    }
    if (getHighest <= skor) {
        setCookie(cookieName, skor, 999)
    }
</script>

<script>
    document.querySelectorAll(".clickableButton").forEach((components) => {
        components.addEventListener("click", function() {
            window.cpjs.clickSound()
        })
    })
</script>

</html>
