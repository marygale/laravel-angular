@extends('layouts.front')
@section('content')
    <div class="row">
        @include('guest.shared.left-side')
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="well no-padding">
                {!! Form::open(['url' => action('Auth\AuthController@register'), 'id' => 'smart-form-register', 'class' => 'smart-form client-form']) !!}
                <header>
                    Registration is FREE*
                </header>

                <fieldset>
                    <section>
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                            {!! Form::text('username', null, ['placeholder' => 'Username']) !!}
                            <b class="tooltip tooltip-bottom-right">Needed to enter the website</b> </label>
                    </section>

                    <section>
                        <label class="input"> <i class="icon-append fa fa-envelope"></i>
                            {!! Form::email('email', null, ['placeholder' => 'Email address']) !!}
                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                    </section>

                    <section>
                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                            {!! Form::password('password', null, ['placeholder' => 'Password', 'id' => 'password']) !!}
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                    </section>

                    <section>
                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                            {!! Form::password('password_confirmation', null, ['placeholder' => 'Confirm password']) !!}
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                    </section>
                </fieldset>

                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('first_name', null, ['placeholder' => 'First name']) !!}
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('middle_name', null, ['placeholder' => 'Middle name']) !!}
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('last_name', null, ['placeholder' => 'Last name']) !!}
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="select">
                                <select name="gender">
                                    <option value="0" selected="" disabled="">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Prefer not to answer</option>
                                </select> <i></i> </label>
                        </section>
                        {{--<section class="col col-6">
                            --}}{{--<label class="input"> <i class="icon-append fa fa-calendar"></i>
                                <input type="text" name="request" placeholder="Request activation on" class="datepicker" data-dateformat='dd/mm/yy'>
                            </label>--}}{{--
                            <label class="select">
                                <select name="role">
                                    <option value="0" selected="" disabled="">Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Content Editor</option>
                                    <option value="3">Author</option>
                                    <option value="4">Subscriber</option>
                                </select> <i></i> </label>
                        </section>--}}
                    </div>

                    <section>
                        <label class="checkbox">
                            <input type="checkbox" name="subscription" id="subscription">
                            <i></i>I want to receive news and special offers</label>
                        <label class="checkbox">
                            <input type="checkbox" name="terms" id="terms">
                            <i></i>I agree with the <a href="#" data-toggle="modal" data-target="#myModal"> Terms and Conditions </a></label>
                    </section>
                </fieldset>
                <footer>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </footer>

                <div class="message">
                    <i class="fa fa-check"></i>
                    <p>
                        Thank you for your registration!
                    </p>
                </div>
                {!! Form::close() !!}

            </div>

            <h5 class="text-center"> - Or sign in using -</h5>

            <ul class="list-inline text-center">
                <li>
                    <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>

        </div>
    </div>

@endsection
