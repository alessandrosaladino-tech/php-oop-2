<main>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div class="card mt-5 mb-5">
                        <div class="card-img-top">
                            <img src="https://picsum.photos/200/300" style="width: 100%; object-fit:contain;" alt="">
                        </div>
                        <div class="card-body">
                            <h3><?= $product->name; ?></h3>
                            <p>Per: <?= $product->animal_type; ?></p>
                            <p>Prezzo: <?= $product->price; ?> €</p>
                            <p><?= $product->getInfo(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>