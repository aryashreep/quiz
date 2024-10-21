<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <?php
      if(isset($_SESSION['alert']) && $_SESSION['alert']){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
      }
      ?>
        <div class="col">
            <div class="card card-registration my-4 p-3">
                <div class="row">
                    <div class="col-sm text-center border fw-bold">SL No</div>
                    <div class="col-sm text-center border fw-bold"><i class="bi bi-journal-bookmark-fill"></i>&nbsp;Scripture Name</div>
                    <div class="col-sm text-center border fw-bold">Cover Image</div>
                    <div class="col-sm text-center border fw-bold">Details</div>
                </div>
                <?php
                $i = 1;
                foreach($scriptures as $scripture)
                {
                ?>
                <div class="row">
                    <div class="col-sm text-center border fw-bold align-middle"><?php echo $i;?></div>
                    <div class="col-sm text-center border fw-bold align-middle"><a href="<?php echo $scripture['ref_url'];?>" target="_blank"><i class="bi bi-link-45deg"></i>&nbsp<?php echo $scripture['scripture_name'];?></a></div>
                    <div class="col-sm text-center border fw-bold"><img class="img-fluid" src="<?php echo substr( $url, 0, strrpos( $url, "?")) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $scripture['images'];?>"></div>
                    <div class="col-sm text-center border fw-bold align-middle"><i class="bi bi-book"></i>&nbsp;<a class="icon-link" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=chapters">Chapter details!&nbsp<i class="bi bi-arrow-right-circle"></i></a></div>
                </div>                   
                <?php
                $i ++;
                }
                ?>
            </div>
        </div>
    </div>
</div>