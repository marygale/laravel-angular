@extends('layouts.master')
@section('content')
    <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-custombutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Create New User </h2>

        </header>

        <!-- widget div-->
        <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body no-padding">

                    {!! Form::open(['url' => action('Auth\AuthController@register'), 'id' => "smart-form-register", 'class' => "smart-form client-form"]) !!}
                    <fieldset>
                        <section>
                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                {{--<input type="text" name="username" placeholder="Username">--}}
                                {!! Form::text('username', null, ['placeholder' => 'Username']) !!}
                                <b class="tooltip tooltip-bottom-right">Needed to enter the website</b> </label>
                        </section>

                        <section>
                            <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                {{--<input type="email" name="email" placeholder="Email address">--}}
                                {!! Form::email('email', null, ['placeholder' => 'Email address']) !!}
                                <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                        </section>

                        <section>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                {{--<input type="password" name="password" placeholder="Password" id="password">--}}
                                {!! Form::password('password', null, ['placeholder' => 'Password', 'id' => 'password']) !!}
                                <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                        </section>

                        <section>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                {{--<input type="password" name="password_confirmation" placeholder="Confirm password">--}}
                                {!! Form::password('password_confirmation', null, ['placeholder' => 'Confirm password']) !!}
                                <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                        </section>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    {{--<input type="text" name="title" placeholder="Title">--}}
                                    {!! Form::text('title', null, ['placeholder' => 'Title']) !!}
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    {{--<input type="text" name="first_name" placeholder="First name">--}}
                                    {!! Form::text('first_name', null, ['placeholder' => 'First name']) !!}
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    {{--<input type="text" name="middle_name" placeholder="Middle name">--}}
                                    {!! Form::text('middle_name', null, ['placeholder' => 'Middle name']) !!}
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    {{--<input type="text" name="last_name" placeholder="Last name">--}}
                                    {!! Form::text('middle_name', null, ['placeholder' => 'Middle name']) !!}
                                </label>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-6">
                                <label class="select">
                                    <select name="gender">
                                        <option value="0" selected="" disabled="">Gender</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option value="e">Prefer not to answer</option>
                                    </select> <i></i> </label>
                            </section>
                            {{--<section class="col col-6">
                                <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                    <input type="text" name="request" placeholder="Request activation on" class="datepicker" data-dateformat='dd/mm/yy'>
                                </label>
                            </section>--}}
                            <section class="col col-6">
                                <label class="select">
                                    <select name="role">
                                        <option value="0" selected="" disabled="">Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Content Editor</option>
                                        <option value="3">Author</option>
                                        <option value="4">Subscriber</option>
                                    </select> <i></i> </label>
                            </section>
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
                {{--</form>--}}
                {!! Form::close() !!}

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
@endsection