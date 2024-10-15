<?php

?>
  <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
              <div class="card card-registration my-4">
                  <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                          <img src="./assets/img/ch1.jpg" alt="Sample photo" class="img-fluid"
                              style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                      </div>
                      <div class="col-xl-6">
                          <form name="signup" action="<?php echo $url;?>" method="post">
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

                                  <div class="d-flex justify-content-end pt-3">
                                      <!-- Create fields for the honeypot -->
                                      <input name="firstname" type="text" id="firstname" autocomplete="random_value" class="hide-robot">
                                      <!-- honeypot fields end -->
                                      <input type="hidden" name="number" value="<?php echo $number; ?>">
                                      <button type="reset" data-mdb-button-init data-mdb-ripple-init
                                          class="btn btn-light btn-lg">Reset all</button>
                                      <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                          class="btn btn-warning btn-lg ms-2">Submit</button>
                                  </div>

                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>