@extends('theme.master')


@section('title', 'Register')





@section('content')

    <!--================ Hero sm banner start =================-->
    @include('theme.partials.hero', ['title' => 'Register'])
    <!--================ Hero sm banner end =================-->

    <!-- ================ Register section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">



                    {{-- DEBUT FORM --}}
                    <form action="{{ route('register') }}" class="form-contact contact_form" action="contact_process.php"
                        method="POST" novalidate="novalidate">

                        @csrf


                        <div class="row">



                            {{-- ===================   START COL 6/1  ============================ --}}
                            <div class="col-6">

                                <!-- NAME-->
                                <div class="form-group">
                                    <input class="form-control border" name="name" type="text"
                                        placeholder="Enter your name" value="{{ old('name') }}">

                                    <!-- MESSAGE ERROR NAME -->
                                   
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />


                                </div>


                                <!-- EMAIL-->
                                <div class="form-group">
                                    <input class="form-control border" name="email" type="email"
                                        placeholder="Enter email address" value="{{ old('email') }}">

                                    <!-- MESSAGE ERROR EMAIL -->
                                     
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            {{-- ===================   end COL 6/2  ============================ --}}





                            {{-- ===================   START COL 6/2  ============================ --}}
                            <div class="col-6">


                                <!-- PASSWORD-->
                                <div class="form-group">
                                    <input class="form-control border" name="password" type="password"
                                        placeholder="Enter your password">

                                    <!-- MESSAGE ERROR password -->
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>



                                <!-- password_confirmation-->
                                <div class="form-group">
                                    <input class="form-control border" name="password_confirmation" type="password"
                                        placeholder="Enter your password confirmation">
                                    <!-- MESSAGE ERROR password_confirmation -->
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                            {{-- ===================   end COL 6/2  ============================ --}}





                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('login') }}" class="mx-3">Deja un Compte ?</a>

                            <!--BUTTON REGISTER  -->
                            <button type="submit" class="button button--active button-contactForm">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Register section end ================= -->



@endsection
