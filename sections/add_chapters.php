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
                            <th scope="col">Ch no</th>
                            <th scope="col">Cover image</th>
                            <th scope="col">Chapter name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($chapters as $chapter){
                            $scripture_name = get_name($conn, 'scriptures', '*', 'sid', $chapter['sid']);
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $chapter['chapter_no'];?></td>
                            <td><img class="img-fluid" src="<?php echo substr( $url, 0, strrpos( $url, "?")) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $chapter['chapter_image'];?>" width="60%"></td>
                            <td><a href="<?php echo $chapter['chapter_url'];?>" target="_blank"><?php echo $chapter['chapter_name'];?></a> from <?php print $scripture_name[0]['scripture_name'];?></td>                            
                            <td><a class="icon-link" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=edit_chapters&chapter_id=<?php echo $chapter['chapter_id'];?>">Edit</td>
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
                                        <label class="form-label" for="form3Example8">Scripture<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="sid"
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
                                        <label>Chapter no<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="chapter_no" class="form-control"
                                                placeholder="Enter Chapter no" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Chapter name<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="chapter_name" class="form-control"
                                                placeholder="Enter Chapter name" required>
                                        </div>
                                    </div>                                    
                                    <div class="col-12">
                                        <label>Chapter link<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="chapter_url" class="form-control"
                                                placeholder="https://vedabase.io/en/" required>
                                        </div>
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