<?php $this->load->view('partials/header') ?>

<div class="bg-primary-3 o-hidden" data-overlay>
    <section class="text-white pb-0">
        <div class="container pb-5">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h1 class="display-3">We just want to see you <mark data-aos="highlight-text" data-aos-delay="250">succeed</mark></h1>
                    <p class="lead mb-0">BrightSide Tutors is an EdTech (Educational Technology) Company that prides in connecting
                        potential learners to suitable professional tutors.
                    </p>
                </div>
            </div>
        </div>
        <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
            <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
        </div>
        <div class="divider divider-bottom bg-white"></div>
    </section>
</div>


<section>
    <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-in">
                <h2 class="h2">We interest not only in subjects of formal education but other forms of knowledge that add positive value to a child/person. </h2>
                <p class="lead">We have over 5,000 tutors who are professionals in their respective fields and we basically provide a tutor for anything a client wishes to learn.</p>
                <a href="#" class="lead">Check to start learning</a>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
                <img src="assets/img/about-2.jpg" alt="Image" class="img-fluid rounded shadow">
                <img src="assets/img/about-2a.jpg" alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top left shadow-lg mt-5 ml-n5 ml-lg-n3 ml-xl-n5 d-none d-md-block" data-jarallax-element="-20 0">
            </div>
        </div>
    </div>
</section>

<section class="pt-0 o-hidden">
    <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
                <div data-aos="fade-in" data-aos-offset="250">
                    <h2 class="h2">Our network covers the whole of Kaduna town, both the north and south corners, and every accessible area in the town.</h2>
                    <p class="lead">We are also fast working towards extending a strong network to Abuja and Kano.</p>
                    <a href="#" class="lead">Check to contact us</a>
                </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5" data-aos="fade-in" data-aos-offset="250">
                <img src="assets/img/about-1.jpg" alt="Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-in">
                <h2 class="h2">The philosophy we lay for our tutors is <mark>“communicating difficult concepts in an easy to understand manner”</mark>. </h2>
                <p class="lead">We have turned down a number of people with amazing qualifications because effective enough at this. We believe the goal of private tutoring is to help students understand. If you can help with their understanding, they can pretty much learn anything.</p>
                <a href="#" class="lead">Check to join as a tutor</a>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
                <img src="assets/img/about-2.jpg" alt="Image" class="img-fluid rounded shadow">
                <img src="assets/img/about-2a.jpg" alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top left shadow-lg mt-5 ml-n5 ml-lg-n3 ml-xl-n5 d-none d-md-block" data-jarallax-element="-20 0">
            </div>
        </div>
    </div>
</section>

<section class="pb-0">
    <div class="container">
        <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="display-4">An amazing team of, <mark data-aos="highlight-text" data-aos-delay="250">dedicated tutors.</mark></h3>
                <div class="lead">We have over 5,000 tutors who are professionals in their respective fields and we basically provide a tutor for anything a client wishes to learn.</div>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col">
            <ul class="avatar-group avatar-group-lg flex-wrap justify-content-center">
                <li>
                    <img src="assets/img/avatars/male-1.jpg" alt="Joshua Lapinsky profile image" class="avatar avatar-xl">
                </li>
                <li>
                    <img src="assets/img/avatars/female-1.jpg" alt="Glenda Spence profile image" class="avatar avatar-xl">
                </li>
                <li>
                    <img src="assets/img/avatars/male-2.jpg" alt="Michael Trossino profile image" class="avatar avatar-xl">
                </li>
                <li>
                    <img src="assets/img/avatars/male-3.jpg" alt="Patrik Janssen profile image" class="avatar avatar-xl">
                </li>
                <li>
                    <img src="assets/img/avatars/female-2.jpg" alt="Mirembe Nkrumah profile image" class="avatar avatar-xl">
                </li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-4 mt-md-5">
        <div class="col-auto">
            <div class="alert bg-secondary">Interested in joining as a tutor? <a href="<?= base_url('tutors/join') ?>">Click to Join</a>
            </div>
        </div>
    </div>
    </div>
</section>

<?php $this->load->view('partials/footer') ?>