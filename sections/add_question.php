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
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block border-end">
                    <table class="table">
                        <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Question</th>
                            <th scope="col">Ch no</th>
                            <th scope="col">Verse</th>
                            <th scope="col">Scripture</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($questions as $question){
                        ?>
                        <tr>
                            <td width="5%"><?php echo $i;?></td>
                            <td width="45%"><?php echo $question['questions'];?></td>
                            <td width="10%">
                            <?php 
                                $ch_name = get_name($conn, 'chapters', '*', 'chapter_id', $question['chapter_id']);
                                print $ch_name[0]['chapter_no'];
                            ?>
                            </td>
                            <td width="10%">
                            <?php 
                                $ver_name = get_name($conn, 'verse', '*', 'vid', $question['vid']);
                                print $ver_name[0]['verse_no'];
                            ?>
                            </td>                                                    
                            <td width="30%">
                            <?php
                                $scr_name = get_name($conn, 'scriptures', '*', 'sid', $question['sid']);
                                print $scr_name[0]['scripture_name'];
                            ?>
                            </td>
                        </tr>
                        <?php
                          $i++;
                        }
                        ?>                        
                        </tbody>
                    </table>
                    </div>
                    <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                            <div class="form-right h-100 py-5 px-5">
                                <form action="" method="post" enctype="multipart/form-data" class="row g-4">
                                <div class="col-12">
                                        <label class="form-label" for="admin-sid">Scripture name<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="sid" id="admin-sid"
                                            data-container="body" required>
                                            <option value="" selected>Please select the Scripture</option>
                                            <?php
                                            foreach($scriptures as $scripture){
                                                echo "<option value='".$scripture['sid']."'>".$scripture['scripture_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>                                     
                                    <div class="col-12">
                                        <label class="form-label" for="admin_chapter_id">Chapter no<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="chapter_id" id="admin_chapter_id"
                                            data-container="body" required>
                                            <option value="" selected>Please select the Scripture first!</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="admin_vid">Verse no<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="vid" id="admin_vid"
                                            data-container="body" required>
                                            <option value="" selected>Please select the Chapter first!</option>
                                        </select>
                                    </div>                                                                         
                                    <div class="col-12">
                                        <label>Questions<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <textarea class="form-control" name="questions" rows="3"></textarea>
                                        </div>
                                    </div>                                   
                                    <div class="col-12">
                                        <label>Option 1<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="option_1" class="form-control"
                                                placeholder="Enter the option 1" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Option 2<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="option_2" class="form-control"
                                                placeholder="Enter the option 2" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Option 3<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="option_3" class="form-control"
                                                placeholder="Enter the option 3" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Option 4<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="option_4" class="form-control"
                                                placeholder="Enter the option 4" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="form3Example8">Right answer is<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="right_option"
                                            data-container="body" required>
                                            <option value="" selected>Please select the right answer</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                    </div>                                                                                                                                                
                                    <div class="col-12">
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