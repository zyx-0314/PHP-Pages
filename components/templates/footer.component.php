<?php
function footerComponent()
{
    include_once BASE_PATH . "/staticData/footer.staticData.php";
    ?>
    <footer class="flex justify-center items-center bg-gray-300 dark:bg-gray-500 w-full">
        <div class="flex justify-between items-center px-4 py-8 w-full container">
            <img src="./assets/img/nyebe_white.png" class="invert dark:invert-[0] mr-3 h-9 sm:h-12" alt="Flowbite Logo" />
            <div class="flex gap-8">
                <?php foreach ($footerLinks as $link): ?>
                    <div class="flex flex-col">
                        <h3 class="mb-2 font-semibold text-md dark:text-white"><?php echo $link["title"] ?></h3>
                        <?php foreach ($link['subs'] as $subLink): ?>
                            <a href=<?php echo $subLink["link"] ?> class="text-gray-500 dark:text-white/50 text-sm" download=<?php echo array_key_exists('download', $subLink) ? $subLink['download'] : false; ?>><?php echo $subLink['tag'] ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </footer>
    <?php
}
?>