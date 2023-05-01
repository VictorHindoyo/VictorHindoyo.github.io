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
</style>

<?php
$jenis = $_GET['jenis'];
$level = $_GET['level'];
?>






<body>
    <div class="w-screen h-screen py-2">
        <div class="flex justify-between items-center px-6">
            <a href="main_menu.html">
                <i class="fa fa-home text-2xl" aria-hidden="true"></i>
            </a>
            <h1 class="font-baloo font-bold text-[4vw] flex">
                <div id="soal"></div>
                <span class="counter ml-2" data-value=0>0</span>

            </h1>
            <button class="btn-reset bg-red-600 text-white py-2 px-6 rounded-lg font-bold font-baloo">Reset</button>
        </div>
        <div class="flex justify-center">
            <div class="sempoa border-8 outline border-[#B86248] flex flex-row items-center mx-4 justify-end">
                <div class="kolom space-y-3 relative pb-2" data-multiplier="10000000" data-counterorder="8">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-merah.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>
                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="10000000" data-counterorder="7">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-hijau.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="1000000" data-counterorder="6">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-biru.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="100000" data-counterorder="5">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-merah.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="10000" data-counterorder="4">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-hijau.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="1000" data-counterorder="3">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-biru.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="100" data-counterorder="2">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-merah.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-merah.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="10" data-counterorder="1">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-hijau.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-hijau.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


                    </div>

                </div>
                <div class="kolom space-y-3 relative pb-2" data-multiplier="1" data-counterorder="0">
                    <div class="absolute h-full w-1 bg-black z-[-1]" style="left: 50%;transform: translate(-50%, 0)">

                    </div>
                    <img src="../asset/batu-biru.png"
                        class="batu atas h-10 scale-[1.4]  mx-auto transition duration-300" data-value=5>

                    <div class="py-4">
                        <div class="separator w-20 h-4 border-y-[2px] border-black bg-[#F09677]">

                        </div>
                    </div>
                    <div class="space-y-2">
                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=1>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=2>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=3>


                        <img src="../asset/batu-biru.png"
                            class="batu bawah h-10 scale-[1.4]  mx-auto transition duration-300" data-value=4>


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
        </div>
    </div>


</body>


<script>
    const jenis = "<?php echo $jenis; ?>"
    const level = "<?php echo $level; ?>"

    var angka1 = 0
    var angka2 = 0
    var operator = ""
    var hasil = 0
    var soal = ""


    function generateSoal() {
        if (level == "easy") {
            angka1 = Math.floor(Math.random() * 10) + 1
            angka2 = Math.floor(Math.random() * 10) + 1
        } else if (level == "medium") {
            angka1 = Math.floor(Math.random() * 100) + 1
            angka2 = Math.floor(Math.random() * 100) + 1
        } else if (level == "hard") {
            angka1 = Math.floor(Math.random() * 1000) + 1
            angka2 = Math.floor(Math.random() * 1000) + 1
        }

        if (jenis == "penjumlahan") {
            operator = "+"
            hasil = angka1 + angka2
        } else if (jenis == "pengurangan") {
            operator = "-"
            hasil = angka1 - angka2
            if (angka1 < angka2) {
                const tempAngka1 = angka1
                angka1 = angka2
                angka2 = tempAngka1
                hasil = angka1 - angka2

            }
        } else if (jenis == "perkalian") {

            if (level == "easy") {
                angka1 = Math.floor(Math.random() * 10) + 1
                angka2 = Math.floor(Math.random() * 10) + 1
            } else if (level == "medium") {
                angka1 = Math.floor(Math.random() * 100) + 1
                angka2 = Math.floor(Math.random() * 10) + 1
            } else if (level == "hard") {
                angka1 = Math.floor(Math.random() * 100) + 1
                angka2 = Math.floor(Math.random() * 100) + 1
            }

            operator = "x"
            hasil = angka1 * angka2
        } else if (jenis == "pembagian") {
            operator = ":"
            hasil = angka1 / angka2
            while (angka1 % angka2 != 0) {
                if (level == "easy") {
                    angka1 = Math.floor(Math.random() * 10) + 10
                } else if (level == "medium") {
                    angka1 = Math.floor(Math.random() * 100) + 30
                } else if (level == "hard") {
                    angka1 = Math.floor(Math.random() * 1000) + 90
                }
                angka2 = Math.floor(Math.random() * 10) + 2
                hasil = angka1 / angka2
            }
        }
        soal = `${angka1} ${operator} ${angka2} = `

    }


    $(".sempoa").click(function() {
        var checkCounter = $(".counter").data("value")
        if (checkCounter == hasil) {
            $(".show-correct").show();
        }
    })
    generateSoal()

    $(".show-correct").click(function() {
        $(this).hide();
        generateSoal()
        $("#soal").html(soal);
        $(".btn-reset").click()
    })
    $("#soal").html(soal);
</script>

<script src="../js/sempoa.js"></script>
<script src="../js/page.js"></script>

</html>
