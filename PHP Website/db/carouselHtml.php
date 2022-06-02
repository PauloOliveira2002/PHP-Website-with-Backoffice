<?php
include('conn.php');

$sql = "SELECT * FROM html";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="carousel-item" data-bs-interval="2000" >
            <a href="<?= $row['link'] ?>" target="_blank"><img style="height:600px" src="img/html-css/<?= $row['imagem'] ?>" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
            </div>
            <h5 class="text-end"><?= $row['titulo'] ?></h5>
        </div>
        
<?php
    }
}
?>

<?php

$conn->close();
?>