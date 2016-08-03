@extends('layouts.master')
@section('content')
    <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-custombutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Edit User </h2>

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

                {!! Form::model($user, ['url' => action('UserController@post_user_edit', $user), 'id' => "smart-form-register", 'class' => "smart-form client-form"]) !!}
                <fieldset>
                    <section>
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                            {!! Form::text('username', null, ['placeholder' => 'Username', 'readonly' => 'readonly']) !!}
                            <b class="tooltip tooltip-bottom-right">Username cannot be change!</b> </label>
                    </section>

                    <section>
                        <label class="input"> <i class="icon-append fa fa-envelope"></i>
                            {!! Form::email('email', null, ['placeholder' => 'Email address']) !!}
                            <b class="tooltip tooltip-bottom-right">Email must be unique</b> </label>
                    </section>

                </fieldset>

                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('title', null, ['placeholder' => 'Title']) !!}
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('first_name', null, ['placeholder' => 'First name']) !!}
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('middle_name', null, ['placeholder' => 'Middle name']) !!}
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('last_name', null, ['placeholder' => 'Last name']) !!}
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="select">
                                @include('admin.others.country_list', ['default' => $user->country])
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="input">
                                {!! Form::text('state', null, ['placeholder' => 'State']) !!}
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="select">
                                {!! Form::select('gender', $gender) !!}
                               <i></i> </label>
                        </section>
                        <section class="col col-6">
                            <label class="select">
                                {!! Form::select('role', $roles) !!}
                                 <i></i> </label>
                        </section>
                    </div>

                    <section>
                        <label class="input">
                            {!! Form::textarea('description', null, ['placeholder' => 'Description', 'cols' => '196', 'rows' => '10', 'class' => 'user-description']) !!}

                    </section>
                </fieldset>
                <footer>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </footer>

                <div class="message">
                    <i class="fa fa-check"></i>
                    <p>
                        User has been updated
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