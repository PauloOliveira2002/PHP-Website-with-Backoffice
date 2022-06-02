</main>
<?php

if (!isset($_SESSION['username'])) {
?>
  <!-- div.row.text-center>div.col -->
  <div class="text-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn mb-3 me-3" id="modbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="bi bi-envelope"></i>
    </button>
  </div>
  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="db/insertemails.php" method="post" enctype="multipart/form-data">
          <div class="modal-header text-end">
            <h5 class="modal-title" id="exampleModalLabel">Tell us your thoughts</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-start">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input required type="email" class="form-control" id="exampleFormControlInput1" name="email">
            </div>
            <div class="mb-3 text-start">
              <label for="exampleFormControlTextarea1" class="form-label">Message</label>
              <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Dismiss</button>
            <button type="submit" class="btn" href="#">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--END MODAL--><?php
                }
                  ?>




<footer class="container-fluid p-3">
  <div class="">
    <div class="row p-2">
      <div class="col">
        <p class="h-100 my-auto text-start"> © WB3 - Web By 3</p>
      </div>
      <div class="col text-center">
        <div class="row">
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://www.linkedin.com/in/paulooliveira2002/" target="_blank"><i class="bi bi-linkedin"></i></a></div>
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a></div>
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a></div>
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://www.youtube.com/" target="_blank"><i class="bi bi-youtube"></i></a></div>
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://www.twitter.com/" target="_blank"><i class="bi bi-twitter"></i></a></div>
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://www.twitch.com/" target="_blank"><i class="bi bi-twitch"></i></a></div>
          <div class="col-10 col-sm-3 col-lg-1 my-1"><a href="https://github.com/PauloOliveira2002/PHP-Website-with-Backoffice" target="_blank"><i class="bi bi-github"></i></a></div>
        </div>

      </div>

    </div>
  </div>
</footer>

<!-- MAIN JS -->
<script src="js/main.js"></script>
<!-- BOOTSTRAP JS -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>