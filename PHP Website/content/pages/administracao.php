<!-- Modal WP -->
<div id="content">
<div class="modal fade" id="add-wp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Wordpress</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="db/insertPostWordpress.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Link</label>
                    <input type="url" class="form-control" name="link" id="link">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                    <input required type="file" class="form-control" name="imagem" id="imagem">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal html -->
<div class="modal fade" id="add-html" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="db/insertPostHtml.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="titulo" id="title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Link</label>
                    <input type="url" class="form-control" name="link" id="link">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                    <input required type="file" class="form-control" name="imagem" id="imagem">
                    

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<br><br>
<?php include('db/selectPostsWp.php')?>

<br><br>
<?php include('db/selectPostsHtml.php')?>

<br><br>
<?php include('db/selectemails.php')?>


</div>