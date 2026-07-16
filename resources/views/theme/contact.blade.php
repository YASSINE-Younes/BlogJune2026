@extends('theme.master')


@section('title', 'Contact')

@section('active-contact', 'active')




@section('content')

    <!--================ Hero sm banner start =================-->
    @include('theme.partials.hero', ['title' => 'Contact'])
    <!--================ Hero sm banner end =================-->

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>California United States</h3>
                            <p>Santa monica bullevard</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">

                    <!-- ============== Start Form Contact ============== -->


                    <!-- ++++++++ Start Message ajouter avec succees +++++++++++ -->
                    @if (session('status-Contact'))
                        <div class="alert alert-success">
                            {{ session('status-Contact') }}
                        </div>
                    @endif
                    <!-- ++++++++ END Message ajouter avec succees +++++++++++ -->



                    <form action="{{ route('contact.store') }}" method="POST" class="form-contact contact_form"
                        id="contactForm" novalidate="novalidate">

                        @csrf

                        <div class="row">

                            <div class="col-lg-5">


                                <!-- name -->
                                <div class="form-group">
                                    <input class="form-control" name="name"  type="text"
                                        placeholder="Enter your name" value="{{ old('name') }}">

                                    <!--  start message error -->
                                    @error('name')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                    <!--  end message error -->

                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <input class="form-control" name="email"  type="email"
                                        placeholder="Enter email address" value="{{ old('email') }}">

                                    <!--  start message error -->
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                    <!--  end message error -->

                                </div>

                                <!-- subject -->
                                <div class="form-group">
                                    <input class="form-control" name="subject"  type="text"
                                        placeholder="Enter Subject" value="{{ old('subject') }}">

                                    <!--  start message error -->
                                    @error('subject')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                    <!--  end message error -->
                                </div>
                            </div>


                            <div class="col-lg-7">
                                <div class="form-group">
                                    <!-- Message -->
                                    <textarea class="form-control different-control w-100" name="message"  cols="30" rows="5"
                                        placeholder="Enter Message" >
                                       {{ old('message') }}
                                    
                                    </textarea>

                                    <!--  start message error -->
                                    @error('message')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                    <!--  end message error -->
                                </div>
                            </div>
                        </div>


                        <div class="form-group text-center text-md-right mt-3">

                            <!-- Button submit -->
                            <button type="submit" class="button button--active button-contactForm">Send Message</button>
                        </div>


                    </form>
                    <!-- ============== Start Form Contact ============== -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->



@endsection
