@extends('frontendApp')

@section('section')
<section>
    <div class="container">

        <div class="row align-items-center justify-content-between g-4">

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="">
                    <h2 class="lh-base fs-1 fw-bold"> Freelance Web Developer</h2>
                    <p>I am a passionate and experienced freelance web developer with a strong track record of creating high-quality, custom websites and
                         web applications tailored to meet the unique needs of each client. 
                        I specialize in delivering solutions that are not only visually stunning but also optimized for performance, scalability, and user experience.</p>
                    <p>With a deep understanding of both front-end and back-end technologies, I am proficient in HTML, CSS, JavaScript, and popular frameworks like 
                        Laravel and codeigniter for creating responsive, 
                        interactive websites. On the server side, I work with PHP, Laravel, and codeigniter to build powerful, secure, and fast web applications. 
                        Whether it’s an eCommerce platform, a business website, or a custom web app, I am committed to delivering top-tier solutions that drive results. </p>
                </div>
            </div>

            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend')}}/img/side-3.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>
        <div class="row align-items-center justify-content-between g-4">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="">
                    <h2 class="lh-base fs-1 fw-bold"> What I Offer     </h2>
                   <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <strong>Custom Web Development:</strong> I build websites from scratch, ensuring that every detail aligns with your business goals and brand identity.</li>
                    <li class="list-group-item"><strong>Responsive Design:</strong> Your website will look perfect on any device, from mobile phones to desktop computers, maximizing engagement with users across all platforms.</li>
                    <li class="list-group-item"><strong>Performance Optimization:</strong> I ensure that your website runs smoothly, with fast load times and efficient navigation, to improve user experience and SEO rankings.</li>
                    <li class="list-group-item"><strong>Content Management Systems (CMS): </strong>I can set up and customize platforms like WordPress to empower you to manage content effortlessly.</li>
                    <li class="list-group-item"><strong>E-Commerce Solutions:</strong> I develop secure, scalable online stores with features that improve sales, including product management, payment gateways, and user-friendly checkout processes.</li>
                    <li class="list-group-item"><strong>Ongoing Support and Maintenance:</strong> Beyond development, I offer reliable support to keep your website up-to-date, secure, and functioning optimally.</li>
                   </ul>
                </div>
            </div>

           

        </div>
    </div>
</section>
@endsection