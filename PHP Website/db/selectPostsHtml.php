<?php
include('conn.php');

$sql = "SELECT * FROM html";
$result = $conn->query($sql);

?>

<div class="container table-responsive">
    <table class="table table-dark">
        <tr>
            <td>
                <h3>HTML/CSS</h3>
            </td>
            <td>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add-html">
                    Add Html/CSS Post
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
                    
                    <form action="db/updatePostsHtml.php" method="post" enctype="multipart/form-data">
                        <td><input class="form-control" type="number" name="id" id="id-html" value="<?= $row['id'] ?>" readonly></td>
                        <td><input class="form-control" type="text" name="titulo" id="titulo-html" value="<?= $row['titulo'] ?>"></td>
                        <td><input class="form-control" type="url" name="link" id="link-html" value="<?= $row['link'] ?>"></td>
                        <td><img required src="img/html-css/<?= $row['imagem'] ?>" height="70px" alt=""></td>
                        <td><input type="file" name="imagem" id="imagem-html"></td>
                        <td><input type="submit" class="btn" value="EDIT"></input></td>
                        <td><a class="btn" href="db/deletePostHtml.php?id=<?= $row['id'] ?>">Delete</a></td>
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