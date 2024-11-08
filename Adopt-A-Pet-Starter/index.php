<?php
 $petsJson = file_get_contents('data/pets.json');
 $pets = json_decode($petsJson, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Pets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center text-primary">Available Pets</h1>
        <div class="row">
            <?php foreach ($pets as $pet): ?>
                <div class="col-md-4 mb-4">
                          <div class="card shadow-sm border-0 <?= $pet['houseTrained'] ? '' : 'not-trained' ?>">
                        <img src="<?= htmlspecialchars($pet['imageUrl']) ?>" class="card-img-top" alt="<?= htmlspecialchars($pet['name']) ?>">
                        <div class="card-body bg-light text-center">
                            <h5 class="card-title text-primary"><?= htmlspecialchars($pet['name']) ?></h5>
                            <p class="card-text"><strong>Type:</strong> <?= htmlspecialchars($pet['type']) ?></p>
                            <p class="card-text"><strong>Breed:</strong> <?= htmlspecialchars($pet['breed']) ?></p>
                            <p class="card-text"><?= htmlspecialchars($pet['description']) ?></p>
                            <p class="card-text"><strong>Price:</strong> $<?= number_format($pet['price'], 2) ?></p>
                            <a href="/apply.php?pet_Id=<?php echo $pet['id'];?>" class="btn btn-primary text-white">Adopt <?= htmlspecialchars($pet['name']) ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
