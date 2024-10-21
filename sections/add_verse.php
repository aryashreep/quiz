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
                            <th scope="col">Scripture</th>
                            <th scope="col">Ch no</th>
                            <th scope="col">Verse</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($verses as $verse){
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td>
                            <?php 
                                $scr_id = get_name($conn, 'chapters', '*', 'chapter_id', $verse['chapter_id']);
                                $scr_name = get_name($conn, 'scriptures', '*', 'sid', $scr_id[0]['sid']);
                                print $scr_name[0]['scripture_name'];
                            ?>
                            </td>
                            <td>
                            <?php 
                                $ch_name = get_name($conn, 'chapters', '*', 'chapter_id', $verse['chapter_id']);
                                print $ch_name[0]['chapter_no'];
                            ?>
                            </td>
                            <td><a href="<?php echo $verse['verse_url'];?>" target="_blank"><?php echo $verse['verse_no'];?></a></td>
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
                                        <label>Verse no<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="verse_no" class="form-control"
                                                placeholder="Enter Verse no" required>
                                        </div>
                                    </div>                                   
                                    <div class="col-12">
                                        <label>Verse link<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="verse_url" class="form-control"
                                                placeholder="https://vedabase.io/en/" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="form3Example8">Scripture<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-lg form-select" name="chapter_id"
                                            data-container="body" required>
                                            <option value="" selected>Please select the Chapter</option>
                                            <?php
                                            foreach($chapters as $chapter){
                                                echo "<option value='".$chapter['chapter_id']."'>".$chapter['chapter_no']."</option>";
                                            }
                                            ?>
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