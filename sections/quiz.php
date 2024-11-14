<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <?php
      if(isset($_SESSION['alert']) && $_SESSION['alert']){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
      }
      if(isset($_SESSION['quiz_disable']) && ($_SESSION['quiz_disable'] == 'disable')){
        $disable_class = ' disabled';
      }
      $qid = intval($_GET['qid']);
      $questions = $conn->select("questions", "*", "WHERE qid=$qid LIMIT 1");
      ?>
        <div class="col">
            <div class="card card-registration my-4 p-3">
                <?php
                if($questions){
                    foreach($questions as $question)
                    {
                        $scr_name = get_name($conn, 'scriptures', '*', 'sid', $question['sid']);
                        $ch_name = get_name($conn, 'chapters', '*', 'chapter_id', $question['chapter_id']);
                        $ver_name = get_name($conn, 'verse', '*', 'vid', $question['vid']);
                        $option = get_name($conn, 'options', '*', 'qid', $question['qid']);
                    ?>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle">
                            <img class="img-fluid" src="<?php echo substr( $url, 0, strrpos( $url, "?")) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $ch_name[0]['chapter_image'];?>" width="40%" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle">
                        <i class="bi bi-link-45deg"></i>&nbsp
                        <a href="<?php echo $scr_name[0]['ref_url'];?>" target="_blank"><?php echo $scr_name[0]['scripture_name'];?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle">
                         Chapter no <?php echo $ch_name[0]['chapter_no']?>&nbsp;
                        <i class="bi bi-link-45deg"></i>&nbsp
                        <a href="<?php echo $ch_name[0]['chapter_url'];?>" target="_blank"><?php echo $ch_name[0]['chapter_name'];?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle">
                        <i class="bi bi-link-45deg"></i>&nbsp
                        Sloka no <a href="<?php echo $ver_name[0]['verse_url'];?>" target="_blank"><?php echo $ver_name[0]['verse_no'];?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm text-center border h4"><?php print $question['questions']; ?></div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="row row-cols-2 text-center border">
                        <div class="col border p-2">
                            <input class="form-check-input" type="radio" name="oid" id="option1" value="1" required />
                            <label class="form-check-label h5" for="option1">
                            &nbsp;<?php echo $option[0]['option_1'];?>
                            </label>
                        </div>
                        <div class="col border p-2">
                            <input class="form-check-input" type="radio" name="oid" id="option2" value="2" />
                            <label class="form-check-label h5" for="option2">
                            &nbsp;<?php echo $option[0]['option_2'];?>
                            </label>
                        </div>
                        <div class="col border p-2">
                            <input class="form-check-input" type="radio" name="oid" id="option3" value="3" />
                            <label class="form-check-label h5" for="option3">
                            &nbsp;<?php echo $option[0]['option_3'];?>
                            </label>
                        </div>
                        <div class="col border p-2">
                            <input class="form-check-input" type="radio" name="oid" id="option4" value="4" />
                            <label class="form-check-label h5" for="option4">
                            &nbsp;<?php echo $option[0]['option_4'];?>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold">
                        <button type="submit" class="btn btn-primary px-5 mt-4 mb-4 <?php echo $disable_class;?>">Save</button>
                        <input type="hidden" name="qid" value="<?php print $question['qid']; ?>" />
                        <input type="hidden" name="sid" value="<?php print $question['sid']; ?>" />
                        <input type="hidden" name="chapter_id" value="<?php print $question['chapter_id']; ?>" />
                        <input type="hidden" name="vid" value="<?php print $question['vid']; ?>" />
                        <input type="hidden" name="uid" value="<?php print $_SESSION['uid']; ?>" />
                        </div>
                    </div>
                    </form>
                    <?php
                    }

                } else {
                    ?>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle">No records found!</div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>