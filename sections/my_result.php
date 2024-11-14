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
                <?php
                if(!empty($_SESSION['uid']))
                {
                    $my_user_answers = $conn->select("user_answers", '*', 'WHERE uid='.$_SESSION['uid']);
                    $total_mark = $conn->select("user_answers", 'SUM(DISTINCT marks) as mark', 'WHERE uid='.$_SESSION['uid'].' GROUP by uid');
                    ?>
                        <div class="row">
                            <div class="col-sm text-center border fw-bold align-middle h3 text-info">
                            Your total mark is 
                            <?php 
                            print $total_mark[0]['mark'].'&nbsp;';
                            if(($total_mark[0]['mark']) > 0)
                                echo '<i class="bi bi-emoji-heart-eyes"></i>';
                            else
                                echo '<i class="bi bi-emoji-frown"></i>';
                            ?>
                            </div>
                        </div>
                    <?php
                    if($my_user_answers){
                        foreach($my_user_answers as $user_answer)
                        {
                            $question = get_name($conn, 'questions', '*', 'qid', $user_answer['qid']);
                            $scr_name = get_name($conn, 'scriptures', '*', 'sid', $user_answer['sid']);
                            $ch_name = get_name($conn, 'chapters', '*', 'chapter_id', $user_answer['chapter_id']);
                            $ver_name = get_name($conn, 'verse', '*', 'vid', $user_answer['vid']);
                            $options = get_name($conn, 'options', '*', 'qid', $user_answer['qid']);
                        ?>
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
                            <div class="col-sm text-center border h4"><?php print $question[0]['questions']; ?></div>
                        </div>
                        <div class="row">                              
                            <div class="col-sm text-center border h4">Your given answer is <i class="bi bi-arrow-right-circle"></i></div>
                        </div>
                        <div class="row row-cols-2 text-center border">
                            <?php
                            foreach($options as $option)
                            {
                                foreach($option as $key=>$value)
                                {
                                    if (str_contains($key, 'option_')) 
                                    {
                                        $opt_key = explode("option_",$key);
                                        if($opt_key[1] == $user_answer['oid']) 
                                        {
                                            $checked = 'checked';
                                        }
                                        else 
                                        {
                                            $checked = '';
                                        }
                                        if($opt_key[1] == $question[0]['right_option'])
                                        {
                                            $right_ans = $value;
                                        }
                            ?>
                                        <div class="col border p-2">
                                            <input class="form-check-input" type="radio" name="oid" id="option1" value="<?php echo $opt_key[1];?>" <?php echo $checked;?> disabled />
                                            <label class="form-check-label h5" for="option1">
                                            &nbsp;<?php echo $value;?>
                                            </label>
                                        </div>                              
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="row">                              
                            <div class="col-sm text-center border h5 text-success">The right answer is <i class="bi bi-arrow-right-circle"></i> <?php print $right_ans; ?></div>
                        </div>
                        <hr class="hr-rule"> 
                        <?php
                        }
                    } 
                    else {
                        ?>
                        <div class="row">
                            <div class="col-sm text-center border fw-bold align-middle text-danger">No records found!</div>
                        </div>                     
                        <?php
                    }
                }
                else {
                ?>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle text-danger">Login to see the result!</div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>