<section class="collection-section">
    <h1 class="section-title">Chilly's Guitar Collection</h1>
    <div class="guitar-grid">
        <?php
        function renderGuitarCard($guitar) {
            return '
            <div class="guitar-card">
                <img src="' . $guitar["img"] . '" alt="' . $guitar["name"] . '" class="guitar-img">
                <div class="guitar-name">' . $guitar["name"] . '</div>
                <p class="guitar-desc">' . $guitar["desc"] . '</p>
            </div>';
        }

        $guitars = [
            ["name" => "Yamaha SGV 300", "desc" => "A funky body built for rich funk music.", "img" => "../../pages/pageSampleHere/assets/img/g1.png"],
            ["name" => "Gibson SG Black Ebony", "desc" => "A sharp, punchy electric ideal for rock solos.", "img" => "../../pages/pageSampleHere/assets/img/g2.png"],
            ["name" => "Gibson SG Triple Humbucker", "desc" => "Richer rock sound with a punch.", "img" => "../../pages/pageSampleHere/assets/img/g3.png"],
            ["name" => "Les Paul 'Lucille'", "desc" => "A solid-body Les Paul that took 7 bullets.", "img" => "../../pages/pageSampleHere/assets/img/g4.png"],
            ["name" => "Fender Stratocaster 'Relic'", "desc" => "A semi-hollow beauty for blues and jazz.", "img" => "../../pages/pageSampleHere/assets/img/g5.png"],
            ["name" => "Fender Jaguar", "desc" => "Built for all around clarity and sustain, perfect for any genre.", "img" => "../../pages/pageSampleHere/assets/img/g6.png"],
            ["name" => "Taylor Acoustic", "desc" => "A modern acoustic with a classy sound.", "img" => "../../pages/pageSampleHere/assets/img/g7.png"],
            ["name" => "Gibson SG Cherry Red", "desc" => "Rare color that serves a flowery sound.", "img" => "../../pages/pageSampleHere/assets/img/g8.png"],
            ["name" => "Fender Stratocaster 'Gold'", "desc" => "Bright top end and superb articulation.", "img" => "../../pages/pageSampleHere/assets/img/g9.png"],
            ["name" => "Gibson Les Paul", "desc" => "Delivers smooth lows and crisp highs in one body.", "img" => "../../pages/pageSampleHere/assets/img/g10.png"],
            ["name" => "Gibson SG ''BECK''", "desc" => "Custom made for Koyuki in Beck.", "img" => "../../pages/pageSampleHere/assets/img/g11.png"],
            ["name" => "Fender Telecaster White", "desc" => "Perfectly made for rhythm sounds.", "img" => "../../pages/pageSampleHere/assets/img/g12.png"]
        ];

        foreach ($guitars as $guitar) {
            echo renderGuitarCard($guitar);
        }
        ?>
    </div>
</section>
