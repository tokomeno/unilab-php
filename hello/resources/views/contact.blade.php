@extends('layout.layout')

@section('content')
<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Contact Me</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                    as possible!</p>
                <div class="my-5">

                    <form method="POST" action="/contact">
                        @csrf
                        {{-- <input  type="hidden" name="_token" value="asfdasad" /> --}}

                        <div class="form-floating">
                            <input name="name" class="form-control" type="text" placeholder="Enter your name..." />
                            <label for="name">Name</label>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-floating">
                            <input name="email" class="form-control" placeholder="Enter your email..." />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback">An email is required.</div>
                            <div class="invalid-feedback">Email is not valid.</div>
                        </div>
                        <div class="form-floating">
                            <input name="phone" class="form-control" type="tel"
                                placeholder="Enter your phone number..." />
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback">A phone number is required.
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea name="message" class="form-control" id="message" placeholder="Enter your message here..."
                                style="height: 12rem"></textarea>
                            <label for=" message">Message</label>
                            <div class="invalid-feedback">A message is required.
                            </div>
                        </div>
                        <br />

                         

                        @if (session()->has('msg'))
                        <div id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">
                                    {{session('msg')}}
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>



                        <button class="btn btn-primary text-uppercase" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
