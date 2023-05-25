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

    <title>Document</title>
</head>

<style>
    body {
        background-image: url('../asset/bg-awan.png');
        background-size: cover;
    }

    .font-secular {
        font-family: 'Secular One', sans-serif;
    }
</style>

<body>
    <div class="w-screen h-screen py-4 relative">
        <div class="flex justify-between items-center px-6">
            <a href="pilih_tes.html" class="relative z-[3]">
                <i class="fa fa-arrow-left text-2xl" aria-hidden="true"></i>
            </a>
        </div>
        <div class="w-screen h-screen absolute top-0 left-0 flex items-center justify-center z-[2]">
            <div class="space-y-4">
                <img src="../asset/warning.png" class="w-[15vw] h-[15vw] mx-auto " alt="">
                <p class="text-center text-2xl font-secular font-bold">Maaf, fitur ini masih terkunci. <br> Silakan
                    menyelesaikan 7 soal "Latihan <?php echo $_GET['level']; ?>" terlebih dahulu. <br>
                    Pastikan sudah mengerjakan semua Mode !
                </p>

            </div>
        </div>
    </div>
</body>

</html>
