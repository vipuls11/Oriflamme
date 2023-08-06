<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>camera Services</title>
</head>

<body>
    <div class="w-96 bg-sky-950 my-10 mb-10">
        <div class="p-8">
            <h3 class="my-5 text-xl font-semibold text-white">Main Services</h3> 
            <ul>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="vedio.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="vedio.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-2 rounded-full opacity-60"></span>VIDEO SURVEILLANCE<span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="network.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="network.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>NETWORKING SOLUTIONS <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="accesscontrol.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="accesscontrol.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>ACCESS CONTROL <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href=""><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>NETWORKING SECURITY <span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="amc.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="amc.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>ATTENDANCE SOLUTIONS<span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
                <li class="py-3 px-4 my-2 bg-sky-800 relative text-white"><a href="cloudtechnology.php" class="<?php echo(basename($_SERVER['PHP_SELF'])=="cloudtechnology.php"?"active2":"")?>"><span class="bg-red-700 p-3  absolute bottom-3 left-1 rounded-full opacity-60"></span>INTRUSION ALARM<span class="mx-4"><i class="fa-solid fa-arrow-right"></i></span></a></li>
            </ul>
        </div>
    </div>

    <div class="w-96 bg-sky-950 my-10">
        <div class="p-8">
            <h3 class="my-5 text-xl font-semibold text-white">Brochures</h3>
            <div class=" w-full h-full">
           <p class="my-4">Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis nulla sollicitudin.</p>
           <button class="bg-red-600 text-white px-4 py-2 border-4 border-double border-white">Download</button>
        </div>
        </div>
    </div>

    <div class="w-96 bg-sky-950 my-10">
        <div class="p-8">
            <h3 class="my-5 text-xl font-semibold text-white">Follow Us</h3>
            <div class="flex  gap-5  text-2xl w-full h-full">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        </div>
    </div>
   
</body>

</html>