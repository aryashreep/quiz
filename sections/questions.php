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
                    <div class="col-sm text-center border fw-bold">Question</div>
                    <div class="col-sm text-center border fw-bold">Action</div>
                </div>
                <?php
                $i = 1;
                $vid = intval($_GET['vid']);
                $questions = $conn->select("questions", "*", "WHERE vid=$vid ORDER BY vid ASC");
                if($questions){
                    foreach($questions as $question)
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm text-center border fw-bold align-middle"><?php echo $i;?></div>
                        <div class="col-sm text-center border fw-bold align-middle"><?php print $question['questions']; ?></div>
                        <div class="col-sm text-center border fw-bold align-middle">
                            <?php
                            if(isset($_SESSION['uid']) && $_SESSION['uid'] > 0){
                            ?>
                                <a href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=quiz&qid=<?php echo $question['qid'];?>">Click here to answer!&nbsp<i class="bi bi-arrow-right-circle"></i></a>
                            <?php
                            } else {
                            ?>
                                <a href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=login&qid=<?php echo $question['qid'];?>">Login to answer!&nbsp<i class="bi bi-arrow-right-circle"></i></a>
                            <?php 
                            } 
                            ?>
                        </div>
                    </div>                   
                    <?php
                    $i ++;
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