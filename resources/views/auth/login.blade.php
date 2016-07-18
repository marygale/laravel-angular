@extends('layouts.front')
@section('content')
    <div class="row">
        @include('guest.shared.left-side')
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
            <div class="well no-padding">
                {!! Form::open(['url' => action('Auth\AuthController@login'), 'id' => 'login-form', 'class' => 'smart-form client-form']) !!}
                    <header>
                        Sign In
                    </header>

                    <fieldset>

                        <section>
                            <label class="label">E-mail</label>
                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                <input type="email" name="email">
                                <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                        </section>

                        <section>
                            <label class="label">Password</label>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                <input type="password" name="password">
                                <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                            <div class="note">
                                <a href="forgotpassword.html">Forgot password?</a>
                            </div>
                        </section>

                        <section>
                            <label class="checkbox">
                                <input type="checkbox" name="remember" checked="">
                                <i></i>Stay signed in</label>
                        </section>
                    </fieldset>
                    <footer>
                        <button type="submit" class="btn btn-primary">
                            Sign in
                        </button>
                    </footer>
               {{-- </form>--}}
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
