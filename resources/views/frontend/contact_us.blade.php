@extends('frontendApp')

@section('section')
<section class="gray-simple">
    <div class="container">

        <div class="row align-items-center justify-content-between g-4">

            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="contactForm">
                    <form>
                        <div class="row align-items-center">

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="touch-block d-flex flex-column mb-4">
                                    <h2>Drop Us A Mail</h2>
                                    <p>We will reply as soos as we can. </p>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">eMail ID</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone No.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Your Query</label>
                                    <textarea class="form-control ht-120"></textarea>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group mb-0">
                                    <button type="button" class="btn fw-medium btn-primary">Send Message<i
                                            class="fa-solid fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card p-4 rounded-4 border br-dashed text-center mb-4">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="crds-desc">
                        <h5>Drop a Mail</h5>
                        <p class="text-md lh-2 mb-0">
                            adarshpalcsjm1@gmail.com
                            <br>adarshhytrix@gmail.com</p>
                    </div>
                </div>

                <div class="card p-4 rounded-4 border br-dashed text-center">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="crds-desc">
                        <h5>Call Us</h5>
                        <p class="text-md lh-2 mb-0">
                            (+91) 8587957397<br>
                            +91 7348649487</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="row mt-5">
            <div class="col-12">
                <iframe class="full-width ht-400 grayscale rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
                    height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div> --}}

    </div>
</section>
<!-- ============================ Form Section End ================================== -->


@endsection