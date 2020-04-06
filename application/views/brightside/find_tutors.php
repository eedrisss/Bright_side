<?php $this->load->view('partials/header') ?>
    <div class="bg-primary-3 o-hidden" data-overlay>
        <section class="text-white pt-5 pb-0">
            <div class="container pt-3 pb-0">
                <div class="row justify-content-center text-center">
                    <div class="col-md-9 col-lg-8 col-xl-7">
                        <h1 id="hightlight-text" class="display-3 mb-1">Find a Tutor <mark data-aos="highlight-text" data-aos-delay="250"></mark></h1>
                        <p class="lead mt-0 mb-0">Please fill the form below and a personnel will be in touch with you</p>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
                <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
            </div>
            <div class="divider divider-bottom bg-light"></div>
        </section>
    </div>

    <section class="bg-light pt-4" id="user_form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div id="flickity-container" class="highlight-selected" data-flickity='{ "imagesLoaded": true,"draggable": false, "wrapAround":true, "prevNextButtons": false, "pageDots":false, "navButtons":false, "adaptiveHeight":true, "autoPlay":false }'>
                        <div class="carousel-cell col">
                            <form class="find_a_tutor" method="POST" action="<?= base_url('tutors/do_find') ?>">
                                <h2>1/3. Client's Information</h2>
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
                                                <input required id="first-name" name="firstname" type="text" class="form-control" placeholder="Enter your firstname...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="last-name">Last Name</label>
                                                <input id="last-name" type="text" name="lastname" required class="form-control" placeholder="Enter your Lastname">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input id="phone" type="text" name="phone"  class="form-control" placeholder="Enter your Phone Number">
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
                                        <input type="hidden" name="form_stage" value="client" />
                                        <button class="btn btn-primary" type="submit">Next : Learner’s Information</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="carousel-cell col">
                            <form class="find_a_tutor" method="POST" action="<?= base_url('tutors/do_find') ?>">
                                <h2>2/3. Learner’s Information</h2>
                                <p>Tell us about the child/person to learn</p>
                                <div class="card card-body shadow mt-md-5" id="apply-form">
                                    <div class="form-group">
                                        <label for="title">Select class of learner</label>
                                        <select required name="learner_class" id="title" class="form-control">
                                            <option value="Pre Primary">Pre Primary</option>
                                            <option value="Primary 1 - 5">Primary 1 - 5</option>
                                            <option value="Common Entrance">Common Entrance</option>
                                            <option value="JSS 1-3">JSS 1 - 3</option>
                                            <option value="Junior WAEC">Junior WAEC</option>
                                            <option value="SSS 1-3">SSS 1-3</option>
                                            <option value="SSCE/WAEC">SSCE/WAEC</option>
                                            <option value="Undergraduate">Undergraduate</option>
                                            <option value="GMAT">GMAT</option>
                                            <option value="SAT">SAT</option>
                                            <option value="Adult learning">Adult learning</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name">How many kids/persons require a tutor?</label>
                                        <input required id="learner_count" name="learner_count" min="1" value="1" type="number" class="form-control" placeholder="How many students.">
                                    </div>
                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox mb-3 mb-md-0">
                                            <!-- <input type="checkbox" class="custom-control-input" id="job-agree">
                                            <label class="custom-control-label" for="job-agree">I agree to the <a target="_blank" href="utility-legal-terms.html">Terms &amp; Conditions</a>
                                            </label> -->
                                        </div>
                                        <input type="hidden" name="form_stage" value="learner" />
                                        <button class="btn btn-primary" type="submit">Next : Tutorial Plan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="carousel-cell col">
                            <h2>3.Tutorial Plan</h2>
                            <p>How would you like to plan the lessons?</p>
                            <div class="card card-body shadow mt-md-5" id="apply-form">
                                <div class="form-group">
                                    <label for="class_per_week">Classes Per Week</label>
                                    <select required name="class_per_week" id="class_per_week" class="form-control">
                                        <option value="1">1 Day Weekly</option>
                                        <option value="2">2 Days Per Week</option>
                                        <option value="3">3 Days Per Week</option>
                                        <option value="4">4 Days Per week</option>
                                        <option value="5">5 Days Per Week</option>
                                        <option value="6">6 Days Per Week</option>
                                        <option value="7">7 Days Per Week</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="class_length">How long for each class</label>
                                    <select required name="class_length" id="class_length" class="form-control">
                                        <option value="1">1 Hour Per Class</option>
                                        <option value="2">2 Hours Per Class</option>
                                        <option value="3">3 Hours Per Class</option>
                                        <option value="4">4 Hours Per Class</option>
                                        <option value="5">5 Hours Per Class</option>
                                        <option value="6">6 Hours Per Class</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="class_per_week">Minimum duration for the lessons</label>
                                    <select required name="class_per_week" id="class_per_week" class="form-control">
                                        <option value="1">1 Month</option>
                                        <option value="2">2 Months</option>
                                        <option value="3">3 Months</option>
                                        <option value="4">4 Months</option>
                                        <option value="5">5 Months</option>
                                        <option value="6">6 Months</option>
                                        <option value="7">7 Months</option>
                                        <option value="8">8 Months</option>
                                        <option value="9">9 Months</option>
                                        <option value="10">10 Months</option>
                                        <option value="11">11 Months</option>
                                        <option value="12">12 Months</option>
                                    </select>
                                </div>
                                
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox mb-3 mb-md-0">
                                        <!-- <input type="checkbox" class="custom-control-input" id="job-agree">
                                        <label class="custom-control-label" for="job-agree">I agree to the <a target="_blank" href="utility-legal-terms.html">Terms &amp; Conditions</a>
                                        </label> -->
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).on("submit", ".find_a_tutor", function(event) {
            event.preventDefault();
            let form_data = $("#find_a_tutor").serialize();
            let url = $(this).attr("action");
            $.ajax({url:url, data:form_data, type:'POST',
                success:function(request) {
                    //  let response = JSON.parse(request);
                    $("#flickity-container").flickity('next');
                    $('html, body').animate({
                        scrollTop: 200
                    }, 500);
                    //console.log(response)
                },
                error:function()
                {

                }
            })
        })
    </script>

<?php $this->load->view('partials/footer') ?>