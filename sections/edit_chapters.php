<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <?php
      if(isset($_SESSION['alert']) && $_SESSION['alert']){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
      }
      $chapter_id = intval($_GET['chapter_id']);
      $questions = $conn->select("chapters", "*", "WHERE chapter_id=$chapter_id LIMIT 1");
      $selected = "";
      ?>
        <div class="col">
            <div class="card card-registration my-4 p-3">
                <div class="row g-0">
                    <div class="col-xl-12">
                        <div class="card-body p-md-5 text-black">
                            <div class="form-right h-100 py-5 px-5">
                                <form action="" method="post" enctype="multipart/form-data" class="row g-4">
                                    <div class="col-12">
                                        <label class="form-label" for="form3Example8">Scripture<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="sid"
                                            data-container="body" required>
                                            <option value="" selected>Please select the Scripture</option>
                                            <?php
                                            foreach($scriptures as $scripture){
                                                if ( $questions[0]['sid'] == $scripture['sid'])
                                                    $selected = "selected";
                                                echo "<option value='".$scripture['sid']."' selected=".$selected.">".$scripture['scripture_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>                                    
                                    <div class="col-12">
                                        <label>Chapter no<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="chapter_no" class="form-control"
                                                placeholder="Enter Chapter no" value="<?php echo $questions[0]['chapter_no'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Chapter name<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="chapter_name" class="form-control"
                                                placeholder="Enter Chapter name" value="<?php echo $questions[0]['chapter_name'];?>" required>
                                        </div>
                                    </div>                                    
                                    <div class="col-12">
                                        <label>Chapter link<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="chapter_url" class="form-control"
                                                placeholder="https://vedabase.io/en/" value="<?php echo $questions[0]['chapter_url'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Cover image</label>
                                        <div class="input-group">
                                            <input type="file" name="chapter_image" class="form-control"
                                                placeholder="Upload the image" />
                                        </div>
                                    </div>                                    
                                    <div class="col-12">
                                        <input type="hidden" name="chapter_id" value="<?php echo $chapter_id;?>">
                                        <input type="hidden" name="edit_chapter_image" value="<?php echo $questions[0]['chapter_image'];?>">
                                        <button type="submit" class="btn btn-primary px-4 float-end mt-4">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>