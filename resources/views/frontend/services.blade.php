@extends('frontendApp')

@section('section')
	<!-- ================================ Article Section Start ======================================= -->
    <section>
        <div class="container">

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                    <div class="secHeading-wrap text-center mb-5">
                        <h2>Our Services</h2>
                        <p>Our company specializes in creating responsive websites using popular frameworks and secure backend solutions, integrating robust database systems for effective analytics and ensuring frontend templates are user-friendly.</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center g-4">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="blogGrid-wrap d-flex flex-column h-100">
                        <div class="blogGrid-pics">
                            <a href="#" class="d-block"><img src="{{ asset('assets/frontend')}}/img/blog-1.jpg" class="img-fluid rounded" alt="Blog image"></a>
                        </div>
                        <div class="blogGrid-caps pt-3">
                            {{-- <div class="d-flex align-items-center mb-1"><span
                                    class="label text-success bg-light-success">Destination</span></div> --}}
                            <h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Web Development</a></h4>
                            <p class="mb-3">Building web applications for project management, customer relationship management (CRM), or inventory management.</p>
                            <a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="blogGrid-wrap d-flex flex-column h-100">
                        <div class="blogGrid-pics">
                            <a href="#" class="d-block"><img src="{{ asset('assets/frontend')}}/img/blog-2.jpg" class="img-fluid rounded" alt="Blog image"></a>
                        </div>
                        <div class="blogGrid-caps pt-3">
                            {{-- <div class="d-flex align-items-center mb-1"><span
                                    class="label text-success bg-light-success">Journey</span></div> --}}
                            <h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Website Design</a></h4>
                            <p class="mb-3">Creating an intuitive and user-friendly interface to enhance the overall user experience.								</p>
                            <a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="blogGrid-wrap d-flex flex-column h-100">
                        <div class="blogGrid-pics">
                            <a href="#" class="d-block"><img src="{{ asset('assets/frontend')}}/img/blog-3.jpg" class="img-fluid rounded" alt="Blog image"></a>
                        </div>
                        <div class="blogGrid-caps pt-3">
                            {{-- <div class="d-flex align-items-center mb-1"><span
                                    class="label text-success bg-light-success">Business</span></div> --}}
                            <h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Responsive Design</a></h4>
                            <p class="mb-3">Ensuring that websites are optimized for various devices, including desktops, tablets, and mobile phones.</p>
                            <a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
{{-- ************************************************************************************************************************** --}}
    <section>
        <div class="container">

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                    <div class="secHeading-wrap text-center mb-5">
                        <h2>Support for Clients</h2>
                        <p>We are providing additional features to support our clients..</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center g-4">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        <li>
                            <strong>Performance Optimization:</strong>
                            Minimize HTTP requests and use lazy loading for images. Optimize assets (images, scripts) for faster loading times.
                        </li>
                        <li>
                            <strong>Accessibility (a11y):</strong>
                            Ensure your website is usable for people with disabilities. Follow WCAG guidelines.
                        </li>
                        <li>
                            <strong>SEO Optimization:</strong>
                            Use semantic HTML and ensure proper use of meta tags. Optimize loading speed and mobile-friendliness.
                        </li>
                        <li>
                            <strong>Security:</strong>
                            Use HTTPS to encrypt data. Validate and sanitize user inputs to prevent attacks.
                        </li>
                        <li>
                            <strong>Customizable:</strong>
                            Customize the website according to client specifications.
                        </li>
                        <li>
                            <strong>Free Maintenance:</strong>
                            Enjoy 3 months of free maintenance services.
                        </li>
                        <li>
                            <strong>Support:</strong>
                            24/7 support available.
                        </li>
                    </ul>
                    
                </div>

               

            </div>
        </div>
    </section>
    <!-- ================================ Article Section Start ======================================= -->

@endsection