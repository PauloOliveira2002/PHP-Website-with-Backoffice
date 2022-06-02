<?php
include('conn.php');

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

?>

<div class="container table-responsive">
    <table class="table table-dark">
        <tr>
            <td>
                <h3>NEW EMAILS: <?php echo $result->num_rows ?></h3>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th class="table-active">ID</th>
            <th class="table-active">EMAIL CLIENTE</th>
            <th class="table-active">MENSAGEM</th>
            <th class="table-active"></th>
            <th class="table-active"></th>
            <th class="table-active"></th>
            <th class="table-active"></th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>

                    <td><input class="form-control" type="number" name="id" id="id-email" value="<?= $row['id'] ?>" readonly></td>
                    <td><input class="form-control" type="text" name="email" id="email-email" value="<?= $row['email'] ?>" readonly></td>
                    <td><textarea class="form-control" type="text" name="msg" id="msg-email" rows="4" readonly><?= $row['mensagem'] ?></textarea></td>
                    <td><img src="img/html-css/<?= $row['imagem'] ?>" height="70px" alt=""></td>
                    <td></td>
                    <td></td>
                    <td><a class="btn" href="db/deleteemails.php?id=<?= $row['id'] ?>">Delete</a></td>

                </tr>
            <?php }

            ?>
</div>
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