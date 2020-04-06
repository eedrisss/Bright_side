<?php $this->load->view('partials/header') ?>

    <!-- Done Sorting Navigation -->

    <!-- Starting Main Section -->
    <div data-overlay class="bg-primary-3 jarallax text-white" data-jarallax data-speed="0.2">
        <img src="<?= base_url('assets/img/backgrounds/bg01.jpg') ?>" alt="Background" class="jarallax-img opacity-30">
        <section class="pb-0">
            <div class="container pb-5">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-lg-10 col-md-11">
                        <h1 class="display-3" data-aos="fade-up" data-aos-delay="100">What would you like to learn?</h1>
                        <form class="mt-2 d-flex flex-column flex-md-row form-group">
                            <input class="form-control form-control-lg h-100 mb-2 mb-md-0 mr-md-3" name="find-tutor-search" placeholder="Search by subject e.g “Mathematics”, “Physics”" type="search">
                            <button class="btn btn-lg btn-primary" type="submit">Search...</button>
                        </form>
                        <p class="lead" data-aos="fade-up" data-aos-delay="200">
                            Private lessons with young professional tutors
                        </p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center mt-4 mt-md-5" data-aos="fade-up" data-aos-delay="300">
                            <a href="<?= base_url('tutors/find') ?>" class="btn btn-primary btn-lg mx-sm-2 my-1 my-sm-0">Find A tutor</a>
                            <a href="<?= base_url('tutor/join') ?>" class="btn btn-outline-light btn-lg mx-sm-2 my-1 my-sm-0">Join as a tutor</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider divider-bottom bg-white"></div>
        </section>
    </div>

    <section>
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">Popular Subjects</h3>
                    <div class="lead">FInd below a list of curated popular subjects.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Mathematics</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>English</h3>
                            </a>
                            <p>
                                Hire a professional English tutor for any level required; from primary to professional exam level,
                                to help you with grammar, diction, general use of English and also to pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">7 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Physics</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>SSCE/WAEC</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Pre-Primary subjects</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Musical Instruments</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Common Entrance</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>UTME/JAMB</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Musical Instruments</h3>
                            </a>
                            <p>
                                Hire a professional math tutor for any level required; from primary to professional exam level, to tutor, help you improve and also pass your exams.
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('tutors/find') ?>" class="badge badge-pill badge-primary">Find Tutors</a>
                            <div class="text-small text-muted">14 tutors available</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">Getting a professional home tutor hasn’t been easier.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="mx-xl-4">
                        <img src="assets/img/illustrations/help.svg" width="150" alt="Help" class="mb-4">
                        <h5>Tell us where you need help:</h5>
                        <p class="text-justify">
                            Connect with professionals in all subjects, skills and
                            knowledge you might wish to learn
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="mx-xl-4">
                        <img src="assets/img/illustrations/match.svg" width="150" alt="Help" class="mb-4">
                        <h5>Tutor matching:</h5>
                        <p class="text-justify">
                            We offer you the perfect qualified tutor to work with your requirements
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="mx-xl-4">
                        <img src="assets/img/illustrations/meet.svg" width="120" alt="Help" class="mb-4">
                        <h5>Meet your tutor: </h5>
                        <p class="text-justify">
                            Pick a convenient time and place to meet your tutor along with a
                            company agent to discuss proceedings and start your lessons
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pt-0 o-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-around text-center text-lg-left">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
                    <div data-aos="fade-in" data-aos-offset="250">
                        <h2 class="h1">Prepare yourself or your wards for any exams</h2>
                        <p class="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                    <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success-alt">
                            <img src="assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg>
                        </div>
                        <h6 class="mb-0 ml-3">Fully Responsive</h6>
                        </div>
                    </div>
                    <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="200">
                        <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success-alt">
                            <img src="assets/img/icons/interface/icon-check.svg" alt="Layouts icon" class="m-2 icon icon-xs bg-success" data-inject-svg>
                        </div>
                        <h6 class="mb-0 ml-3">Multiple Layouts</h6>
                        </div>
                    </div>
                    <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success-alt">
                            <img src="assets/img/icons/interface/icon-check.svg" alt="Box icon" class="m-2 icon icon-xs bg-success" data-inject-svg>
                        </div>
                        <h6 class="mb-0 ml-3">Modular Components</h6>
                        </div>
                    </div>
                    <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="400">
                        <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success-alt">
                            <img src="assets/img/icons/interface/icon-check.svg" alt="Lightning icon" class="m-2 icon icon-xs bg-success" data-inject-svg>
                        </div>
                        <h6 class="mb-0 ml-3">Suits Your Style</h6>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in" data-aos-offset="250">
                    <img src="assets/img/illustrations/exams.svg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="assets/img/avatars/female-4.jpg" alt="Shelley McNabb avatar image" class="avatar avatar-lg mb-3 mb-md-4">
                    <blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
                        &ldquo;<mark data-aos="highlight-text" data-aos-delay="200">We cut our build times in half</mark> compared to our previous process. Love it.&rdquo;
                    </blockquote>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="mb-1">Shelley McNabb</h6>
                        <span>Software Engineer</span>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="assets/img/avatars/female-3.jpg" alt="Mary Goddard avatar image" class="avatar avatar-lg mb-3 mb-md-4">
                    <blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
                            &ldquo;The support team is super helpful. We're so glad to have them on call.&rdquo;
                        </blockquote>
                    <div class="d-flex flex-column align-items-center">
                    <h6 class="mb-1">Mary Goddard</h6>
                    <span>Business Relations</span>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="assets/img/avatars/male-2.jpg" alt="Bradley Singleton avatar image" class="avatar avatar-lg mb-3 mb-md-4">
                    <blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
                            &ldquo;Reliability is what Jumpstart is known for, and <mark data-aos='highlight-text' data-aos-delay='200'>they've totally delivered</mark> this time.&rdquo;
                        </blockquote>
                    <div class="d-flex flex-column align-items-center">
                    <h6 class="mb-1">Bradley Singleton</h6>
                    <span>Keeper of Tunes</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider position-absolute bottom bg-primary"></div>

    </section>
    
    <!-- Faqs -->
    <section class="pt-5 pb-0 bg-primary">
        <div class="container">
            <div class="row section-title justify-content-center text-center text-white">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">FAQ</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div id="faq-accordion">
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 mr-2">How do you operate?</h6>
                                <img src="assets/img/icons/interface/icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg>
                            </div>
                            </a>
                            <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    The parent/client is required to fill our online <a href="#">request form</a> which helps us collect all the important information or call us to orally give us the information while our agent
                                    fill out the hard copy tutor request form. We need this information to match you to
                                    the best suitable tutor. After a match is made, our agent contacts you to inform you
                                    of the price details and also to arrange a meeting between you, the tutor and a
                                    company agent to discuss proceedings.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 mr-2">In which locations do you operate?</h6>
                                <img src="assets/img/icons/interface/icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg>
                            </div>
                            </a>
                            <div class="collapse" id="accordion-2" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    Our network vastly covers the whole of Kaduna; both the north and south corners of
                                    the town. We have over 5,000 professional tutors on the go, with us in Kaduna, and
                                    they are spread across all the accessible locations in the town. We assure whichever
                                    area, we have a professional within your proximity.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 mr-2">Who are your tutors? And how do I know they are responsible?</h6>
                                <img src="assets/img/icons/interface/icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg>
                            </div>
                            </a>
                            <div class="collapse" id="accordion-3" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    A majority of our tutors are NYSC Corp members -fresh young graduates with
                                    degrees in education, all of whom have gone through our thorough process of
                                    recruitment, for one, to certify that they have proficient knowledge in their
                                    acclaimed specialties as well as the necessary interpersonal skills to connect with
                                    your children. <br/><br/>
                                    Secondly, the home is a sacred place, and we take extra precautions in the
                                    recruitment process to ensure that our team of tutors are highly responsible and not
                                    only that, but in a case of any reported issues, we are able to quickly track them.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-4" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 mr-2">How do you charge and what are your rates?</h6>
                                <img src="assets/img/icons/interface/icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg>
                            </div>
                            </a>
                            <div class="collapse" id="accordion-4" data-parent="#faq-accordion">
                            <div class="px-3 px-md-4 pb-3 pb-md-4">
                                We set our charges based on a number of factors; What is the knowledge or skill to
                                be taught? How many people/children is the tutor expected to handle? The
                                class/educational level of the child/person to be tutored? How many days in a week
                                is the tutor expected to come? And how many hours will each tutorial session last
                                for?... To determine our exact charges for your request, please fill our <a href="#">tutor request
                                form</a> first and our agent will contact you with the price details.
                                <br/><br/>
                                Our charges are fair and affordable and we always have a tutorial plan for your budget.
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center mt-4 mt-md-5">
                <div class="col-auto">
                    <div class="alert text-white links-white bg-white-alt">Is there something we didn't cover here? 
                        <a href="#">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider divider-bottom bg-primary-3"></div>
    </section>
    <!-- // This is where the faq ends -->

    <section class="bg-primary-3 pb-0">
      <div class="container">
        <div class="text-white">
          <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h3 class="display-4">Get a demo</h3>
              <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="card card-body shadow">
              <form data-form-email novalidate action="/forms/request-demo.php">
                <div class="form-group">
                  <label for="demo-name">Your Name</label>
                  <input id="demo-name" name="contact-name" type="text" class="form-control" placeholder="Type here" required>
                  <div class="invalid-feedback">
                    Please type your name.
                  </div>
                </div>
                <div class="form-group">
                  <label for="demo-email">Email Address</label>
                  <input id="demo-email" name="contact-email" type="email" class="form-control" placeholder="you@yoursite.com" required>
                  <div class="invalid-feedback">
                    Please provide your email address.
                  </div>
                </div>
                <div class="form-group">
                  <label for="demo-company-size">Company Size</label>
                  <div class="position-relative">
                    <select class="custom-select" id="demo-company-size" required>
                      <option selected value="">Select an option</option>
                      <option value="1-50">1-50</option>
                      <option value="50-500">50-500</option>
                      <option value="500+">500+</option>
                    </select>
                    <img src="assets/img/icons/interface/icon-caret-down.svg" alt="Arrow Down" class="icon icon-sm">
                    <div class="invalid-feedback">
                      Please provide your company size.
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="demo-budget">Approximate Budget</label>
                  <div class="position-relative">
                    <select class="custom-select" id="demo-budget" required>
                      <option selected value="">Select an option</option>
                      <option value="Up to $10k">Up to $10k</option>
                      <option value="$10k - $50k">$10k - $50k</option>
                      <option value="Over $50k">Over $50k</option>
                    </select>
                    <img src="assets/img/icons/interface/icon-caret-down.svg" alt="Arrow Down" class="icon icon-sm">
                    <div class="invalid-feedback">
                      Please provide your approximate budget.
                    </div>
                  </div>
                </div>
                <div class="d-none alert alert-success w-100 my-md-3" role="alert" data-success-message>
                  Thanks, a member of our team will be in touch shortly.
                </div>
                <div class="d-none alert alert-danger w-100 my-md-3" role="alert" data-error-message>
                  Please fill all fields correctly.
                </div>
                <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE" data-size="invisible" data-badge="bottomleft"></div>
                <button class="btn btn-primary btn-block btn-loading" type="submit" data-loading-text="Requesting Demo">
                  <!-- Icon for loading animation -->
                  <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Icon For Loading</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g>
                        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                      </g>
                      <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                      fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                    </g>
                  </svg>
                  <span>Request Demo</span>
                </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

<?php $this->load->view('partials/footer') ?>