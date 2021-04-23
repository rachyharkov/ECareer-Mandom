</main>
<div class="mandom-footer">
      <div class="section-socmed">
        <a href="https://www.facebook.com/mandomindonesia" target="_blank">
          <img src="https://mandom.karirpad.com/assets/frontend/img/socmed-fb.png" alt="Facebook">
        </a>
        <a href="https://twitter.com/mandomindonesia" target="_blank">
          <img src="https://mandom.karirpad.com/assets/frontend/img/socmed-twitter.png" alt="Twitter">
        </a>
        <a href="http://www.linkedin.com/company/pt-mandom-indonesia" target="_blank">
          <img src="https://mandom.karirpad.com/assets/frontend/img/socmed-in.png" alt="In">
        </a>
      </div>
      <div class="section-copyright"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      © 2021 Mandom Indonesia Tbk. </font><font style="vertical-align: inherit;">All Right Reserved.</font></font>
    </div>      
  </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $(document).ready(function(){

          <?php foreach ($info as $key) {
            ?>

            $("#careerid<?php echo $key->id ?>").click(function(){
              $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>Career/detail/<?php echo $key->id_careerposts ?>",
                cache: false,
                async: false,
                }).done(function(data) {
                    $("main").replaceWith(data);
                });
            });

            <?php
          } ?>
        });

      </script>
</body>
</html>