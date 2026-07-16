@extends('theme.master')


@section('title', 'Login')





@section('content')

    <!--================ Hero sm banner start =================-->
    @include('theme.partials.hero', ['title' => 'Login'])
    <!--================ Hero sm banner end =================-->

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">


                    <!-- START FORM -->
                    <form action="{{ route('login') }}" class="form-contact contact_form" method="POST"
                        novalidate="novalidate">

                        @csrf


                        <!-- Email input -->
                        <div class="form-group">
                            <input class="form-control border" name="email" type="email"
                                placeholder="Enter email address" value="{{ old('email') }}">

                            <!-- MESSAGE ERROR email -->

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        <!-- Mot de passe  -->
                        <div class="form-group">
                            <input class="form-control border" name="password" id="name" type="password"
                                placeholder="Enter your password" value="{{ old('password') }}">

                            <!-- MESSAGE ERROR password -->

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>


                        <div class="form-group text-center text-md-right mt-3">


                            <a href="{{ route('register') }}" class="mx-3">Creer un Compte?</a>

                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->



@endsection
