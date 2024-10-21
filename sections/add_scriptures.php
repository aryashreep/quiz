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
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($scriptures as $scripture){
                        ?>
                        <tr>
                            <td width="10%"><?php echo $i;?></td>
                            <td width="70%"><a href="<?php echo $scripture['ref_url'];?>" target="_blank"><?php echo $scripture['scripture_name'];?></a></td>
                            <td width="20%"><img class="img-fluid" src="<?php echo substr( $url, 0, strrpos( $url, "?")) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $scripture['images'];?>" width="60%"></td>
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
                                        <label>Scripture name<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="scripture_name" class="form-control"
                                                placeholder="Enter Scripture name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Scripture link<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="ref_url" class="form-control"
                                                placeholder="https://vedabase.io/en/" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Cover image<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" name="scr_image" class="form-control"
                                                placeholder="Upload the image" required>
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