<?php require_once "layouts/header.php"; ?>
    <div class="container mx-auto px-4 flex justify-center items-center flex-col h-screen">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-lg md:text-5xl font-bold mb-8 text-gray-700"><?= config('app')['name'] ?> Framework</h1>
            <img class="w-24 md:w-56 mb-8" src="images/persianElephant.png" alt="Logo">
            <ul class="flex justify-center w-full mb-16 flex-wrap">
                <li><a class="p-4 text-sm md:text-md text-gray-500 hover:text-green-400 transition-all font-bold" href="#">Framework</a></li>
                <li><a class="p-4 text-sm md:text-md text-gray-500 hover:text-green-400 transition-all font-bold" href="#">Document</a></li>
                <li><a class="p-4 text-sm md:text-md text-gray-500 hover:text-green-400 transition-all font-bold" href="#">Github</a></li>
                  <li><a class="p-4 text-sm md:text-md text-gray-500 hover:text-green-400 transition-all font-bold" href="#">Contact</a></li>
            </ul>
            <br/>
            <p class="text-green-400 text-sm"><b>v<?= config('app')['version'] ?> &copy; <a href="https://www.mahdisharifi.dev">Mahdi Sharifi</a></b></p>
        </div>
    </div>
<?php require_once "layouts/footer.php" ?>