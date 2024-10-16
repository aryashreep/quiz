<?php
$conn = new Query("localhost", "root", "", "scriptures_quiz");
$centers = $conn->select("centers");
if(isset($_POST['submit']) && !empty($_POST['submit'])) {
    if(!empty($_POST['firstname']))
    {
        return;
    } 
    else {
        $phone_check = $conn->select("users", "phone_no", "WHERE phone_no LIKE '%" . $_POST['phone_no'] . "%'");
        if($phone_check){
            $notice = failAlert("Phone/ Mobile number is already exist!");
        } 
        else {
            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'initiated_name' => $_POST['initiated_name'],
                'phone_no' => $_POST['phone_no'],
                'gender' => $_POST['gender'],
                'cid' => $_POST['centers']
            );
            $validate = $conn->validate($data);
            $enc_pass = $conn->hashPassword($_POST['password']);
            $pass['password'] = $enc_pass;
            $validate = array_merge($validate, $pass);
            $user_add = $conn->insert('users',$validate);
            if($user_add){
                successAlert("Thank you for filling out our sign up form. We are glad that you joined us.<br>Please login to answer the quiz!");
                redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=login');
            }
        }
    }
  }
?>
  <div class="container h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
      <?php
    if($notice){
        print $notice;
    }
    ?>     
          <div class="col">
              <div class="card card-registration my-4">
                  <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                          <img src="./assets/img/ch1.jpg" alt="Sample photo" class="img-fluid"
                              style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                      </div>
                      <div class="col-xl-6">
                          <form method="post" action="">
                              <div class="card-body p-md-5 text-black">
                                  <div class="row">
                                      <div class="col-md-6 mb-4">
                                          <div data-mdb-input-init class="form-outline">
                                          <label class="form-label" for="form3Example1m">First name</label>
                                              <input type="text" id="form3Example1m" name="first_name"
                                                  class="form-control form-control-lg" autofocus placeholder="Your First name!" required />
                                          </div>
                                      </div>
                                      <div class="col-md-6 mb-4">
                                          <div data-mdb-input-init class="form-outline">
                                          <label class="form-label" for="form3Example1n">Last name</label>
                                              <input type="text" id="form3Example1n"
                                                  class="form-control form-control-lg" name="last_name" placeholder="Your Last name!" required />
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12 mb-4">
                                          <div data-mdb-input-init class="form-outline">
                                          <label class="form-label" for="form3Example1m1">Initiated name</label>
                                              <input type="text" id="form3Example1m1" class="form-control form-control-lg"  name="initiated_name" placeholder="Your Initiated name!" />
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-outline mb-4">
                                      <label class="form-label" for="form3Example8">Phone Number (format: xxxxxxxxxx):</label>
                                      <input type="text" id="form3Example8" name="phone_no" class="form-control form-control-lg" placeholder="Enter your Phone no!" pattern="^\d{10}$" required />
                                  </div>

                                  <div class="form-outline mb-4">
                                      <label class="form-label" for="form3Example8">Password:</label>
                                      <input type="text" id="form3Example8" name="password" class="form-control form-control-lg" placeholder="Enter your Password!" required />
                                  </div>

                                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                      <h6 class="mb-0 me-4">Gender: </h6>

                                      <div class="form-check form-check-inline mb-0 me-4">
                                          <input class="form-check-input" type="radio" name="gender"
                                              id="femaleGender" value="Male" required />
                                          <label class="form-check-label" for="femaleGender">Male</label>
                                      </div>

                                      <div class="form-check form-check-inline mb-0 me-4">
                                          <input class="form-check-input" type="radio" name="gender"
                                              id="maleGender" value="Female" />
                                          <label class="form-check-label" for="maleGender">Female</label>
                                      </div>
                                  </div>

                                  <div class="form-outline mb-4">
                                      <label class="form-label" for="form3Example8">You are conected to?</label>                        
                                        <select class="form-control form-control-lg form-select" name="centers" data-container="body" required>
                                        <option  value="" selected>Please select the center</option>
                                        <?php
                                        foreach($centers as $center){
                                            echo "<option value='".$center['cid']."'>".$center['center_name']."</option>";
                                        }
                                        ?>
                                        </select>
                                  </div>                                  

                                  <div class="d-flex justify-content-end pt-3">
                                      <!-- Create fields for the honeypot -->
                                      <input name="firstname" type="text" id="firstname" autocomplete="random_value" class="hide-robot">
                                      <!-- honeypot fields end -->
                                      <input type="hidden" name="number" value="<?php echo $time_passed; ?>">
                                      <button type="reset" data-mdb-button-init data-mdb-ripple-init
                                          class="btn btn-light btn-lg">Reset all</button>
                                          <input type="submit" value="submit" class="btn btn-warning btn-lg ms-2" name="submit">
                                  </div>

                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>