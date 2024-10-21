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
                    <div class="col-sm text-center border fw-bold">Chapter No</div>
                    <div class="col-sm text-center border fw-bold">Chapter Name</div>
                    <div class="col-sm text-center border fw-bold">Verse</div>
                    <div class="col-sm text-center border fw-bold">Question</div>
                </div>
                <?php
                $i = 1;
                $verses = $conn->select("verse", "*", "ORDER BY chapter_id ASC");
                foreach($verses as $verse)
                {
                    $ch_name = get_name($conn, 'chapters', '*', 'chapter_id', $verse['chapter_id']);
                    $cha_image = $ch_name[0]['chapter_image'] ? $ch_name[0]['chapter_image'] : 'no_image_available.jpg';
                ?>
                <div class="row">
                    <div class="col-sm text-center border fw-bold align-middle"><?php echo $i;?></div>
                    <div class="col-sm text-center border fw-bold align-middle">
                    <img class="img-fluid" src="<?php echo substr( $url, 0, strrpos( $url, "?")) . 'uploads' . DIRECTORY_SEPARATOR .$cha_image;?>" width="60%"><br>   
                    <?php print 'Chapter no '.$ch_name[0]['chapter_no']; ?>
                    </div>
                    <div class="col-sm text-center border fw-bold"><a href="<?php echo $ch_name[0]['chapter_url'];?>" target="_blank"><i class="bi bi-link-45deg"></i>&nbsp<?php echo $ch_name[0]['chapter_name'];?></a></div>
                    <div class="col-sm text-center border fw-bold"><a href="<?php echo $verse['verse_url'];?>" target="_blank"><i class="bi bi-link-45deg"></i>&nbsp<?php echo $verse['verse_no'];?></a></div>
                    <div class="col-sm text-center border fw-bold align-middle"><a href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=questions&vid=<?php echo $verse['vid'];?>">Questions!&nbsp<i class="bi bi-arrow-right-circle"></i></a></div>
                </div>                   
                <?php
                $i ++;
                }
                ?>
            </div>
        </div>
    </div>
</div>