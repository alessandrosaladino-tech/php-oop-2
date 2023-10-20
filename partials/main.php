

<main>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <h2><?= $product->name; ?></h2>
                    <h2><?= $product->animal_type; ?></h2>
                    <h2><?= $product->price; ?> €</h2>
                    <h2><?= $product->getInfo();?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>