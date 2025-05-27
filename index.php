<?php
// call the layout you want to use from layout folder
include BASE_PATH . "/layout/main.layout.php";

$title = "Landing Page";

// functions that will render the layout of your choosing
renderMainLayout(
    function () {
        // Data for features
        include BASE_PATH . "/staticData/feature.staticData.php";
        ?>
    <!-- Hero Section -->
    <section class="flex flex-col justify-center items-center w-full h-[95dvh] hero">
        <h2 class="font-black text-4xl">
            Application Development with Emerging Technologies.
        </h2>
        <h2 class="font-black text-gray-500 text-2xl">
            PHP, Docker, MongoDB, PostgreSQL.
        </h2>
    </section>

    <!-- Feature Section -->
    <section class="flex justify-center my-24 w-full">
        <div class="gap-4 grid grid-cols-3 grid-flow-row-dense container Features">
            <?php foreach ($featuresList as $value): ?>
                <div class="flex flex-col gap-4 p-4 pb-14 border rounded-lg">
                    <img src=<?php echo $value['image'] ?> alt=""
                        class="bg-gray-400 rounded-md rounded-md object-cover aspect-square">
                    <h3 class="font-bold text-xl"><?php echo $value["title"] ?></h3>
                    <p class="font-semibold text-gray-500"><?php echo $value['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Catch Phrase -->
    <section class="flex flex-col justify-center items-center my-42 w-full">
        <h3 class="font-black text-4xl">Lets Start Building.</h3>
        <p class="text-gray-500 text-xl">Using Technologies to make dreams and wishes comes true.</p>
    </section>
    <?php
    }
    ,
    $title
)
    ?>