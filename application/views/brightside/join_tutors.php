<?php $this->load->view('partials/header') ?>
    <div class="bg-primary-3 o-hidden" data-overlay>
        <section class="text-white pt-5 pb-0">
            <div class="container pt-3 pb-0">
                <div class="row justify-content-center text-center">
                    <div class="col-md-9 col-lg-8 col-xl-7">
                        <h1 class="display-3 mb-1">Join us as a Tutor <mark data-aos="highlight-text" data-aos-delay="250"></mark></h1>
                        <p class="lead mt-0 mb-0">Join over 5000 tutors</p>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
                <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
            </div>
            <div class="divider divider-bottom bg-white"></div>
        </section>
    </div>

    <section class="bg-light pt-4" id="user_form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <form id="find_a_tutor_1">
                        <h2>1/5. Registration</h2>
                        <p>We need your information for contact</p>
                        <div class="card card-body shadow mt-md-5" id="apply-form">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select required name="title" id="title" class="form-control">
                                    <option value="MR">Mr</option>
                                    <option value="MRS">Mrs</option>
                                    <option value="MS">Ms</option>
                                    <option value="ALH">Alh</option>
                                    <option value="CHIEF">Chief</option>
                                    <option value="DR">Dr</option>
                                    <option value="SEN">Sen</option>
                                    <option value="HON">Hon</option>
                                    <option value="BARR">Barr</option>
                                    <option value="REV">Rev</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="first-name">Full Name</label>
                                        <input required id="first-name" type="text" class="form-control" placeholder="Enter your firstname...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input id="last-name" type="text" required class="form-control" placeholder="Enter your Lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input id="phone" type="text" required class="form-control" placeholder="Enter your Phone Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input required id="email" type="email" class="form-control" placeholder="Enter your Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="locality">Locality</label>
                                <select required name="locality" id="locality" class="form-control">
                                    <option value="KD">Kaduna</option>
                                    <option value="ABJ">Abuja</option>
                                    <option value="KN">Kano</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lga">LGA</label>
                                <select required name="lga" id="lga" class="form-control">
                                    <option value="KD">AIrforce Base</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox mb-3 mb-md-0">
                                    <!-- <input type="checkbox" class="custom-control-input" id="job-agree">
                                    <label class="custom-control-label" for="job-agree">I agree to the <a target="_blank" href="utility-legal-terms.html">Terms &amp; Conditions</a>
                                    </label> -->
                                </div>
                                <button class="btn btn-primary" type="submit">Next : Learner’s Information</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    

<?php $this->load->view('partials/footer') ?>