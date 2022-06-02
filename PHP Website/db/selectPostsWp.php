<?php
include('conn.php');

$sql = "SELECT * FROM wordpress";
$result = $conn->query($sql);

?>

<div class="container table-responsive">
    <table class="table table-dark">
        <tr>
            <td>
                <h3>Wordpress</h3>
            </td>
            <td>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add-wp">
                    Add Wordpress Post
                </button>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th class="table-active">ID</th>
            <th class="table-active">TITULO</th>
            <th class="table-active">LINK</th>
            <th class="table-active">IMAGEM</th>
            <th class="table-active"></th>
            <th class="table-active"></th>
            <th class="table-active"></th>
        </tr>
        
        <?php
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <form action="db/updatePostsWordpress.php" method="post" enctype="multipart/form-data">
                        <td><input class="form-control" type="number" name="id" id="id-wp" value="<?= $row['id'] ?>" readonly></td>
                        <td><input class="form-control" type="text" name="titulo" id="titulo-wp" value="<?= $row['titulo'] ?>"></td>
                        <td><input class="form-control" type="url" name="link" id="link-wp" value="<?= $row['link'] ?>"></td>
                        <td><img src="img/wordpress/<?= $row['imagem'] ?>" height="70px" alt=""></td>
                        <td><input type="file" name="imagem" id="imagem-wp"></td>
                        <td><input type="submit" class="btn" value="EDIT"></input></td>
                        <td><a class="btn" href="db/deletePostWordpress.php?id=<?= $row['id'] ?>">Delete</a></td>
                    </form>
                </tr>
            <?php }

            ?>
    </table>

<?php
        } else {
            echo "<td><h5>0 results found</h5></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </table>";
        }
        $conn->close();

?>
</div>