<?php
function navHeader($navList)
{
    ?>
    <header>
        <nav class="bg-gray-300 dark:bg-gray-500 px-4 lg:px-6 py-2.5 border-gray-200">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/" class="flex items-center">
                    <img src="./assets/img/nyebe_white.png" class="mr-3 h-6 sm:h-9" alt="Nyebe Logo" />
                    <span class="self-center font-semibold dark:text-white text-lg whitespace-nowrap">
                        <span class="font-black">
                            NYEBE:
                        </span>
                        AD CI4 Template
                        Guide</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#"
                        class="bg-primary-700 hover:bg-primary-800 dark:bg-primary-600 dark:hover:bg-primary-700 mr-2 px-4 lg:px-5 py-2 lg:py-2.5 rounded-lg focus:outline-none focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-800 font-medium text-white text-sm">Get
                        started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="lg:hidden inline-flex items-center hover:bg-gray-100 dark:hover:bg-gray-700 ml-1 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600 text-gray-500 dark:text-gray-400 text-sm"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex justify-between items-center lg:order-1 w-full lg:w-auto" id="mobile-menu-2">
                    <ul class="flex lg:flex-row flex-col lg:space-x-8 mt-4 lg:mt-0 font-medium">
                        <?php
                        foreach ($navList as $nav):
                            ?>
                            <li>
                                <a href="<?php echo $nav["link"] ?>"
                                    class="block bg-primary-700 lg:bg-transparent lg:p-0 py-2 pr-4 pl-3 rounded text-white lg:text-primary-700 dark:text-white"
                                    aria-current="page"><?php echo $nav["label"] ?></a>
                            </li>
                            <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
}
?>