@extends('layouts.master')
@section('content')

    <div class="row">

        <!-- NEW COL START -->
        <article class="col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Post a job </h2>

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

                        <form class="smart-form">
                            <header>
                                See your posted jobs on the jobs feeds!!
                            </header>

                            <fieldset>

                                <section>
                                    <label class="label">Title</label>
                                    <label class="input">
                                        {!! Form::text('title', null, ['placeholder' => 'Job Title']) !!}
                                    </label>
                                    {{--<div class="note">
                                        <strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
                                    </div>--}}
                                </section>

                                <section>
                                    <label class="label">Description</label>
                                    <label class="textarea textarea-expandable">
                                        {!! Form::textarea('description', null, ['placeholder' => 'Job Description', 'class' => 'custom-scroll', 'rows' => '5']) !!}
                                    </label>
                                    <div class="note">
                                        <strong>Note:</strong> expands on focus.
                                    </div>
                                </section>

                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label">Minimum budget</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            {!! Form::text('minbudget', null, ['class' => 'form-control', 'type' => 'text']) !!}
                                            <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                        </div>
                                    </section>

                                    <section class="col col-6">
                                        <label class="label">Max budget</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            {!! Form::text('maxbudget', null, ['class' => 'form-control', 'type' => 'text']) !!}
                                            <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                        </div>
                                    </section>
                                </div>


                            </fieldset>

                            <fieldset>

                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label">Start Date</label>
                                        <div class="input-group">
                                            {!! Form::text('start_date', null, ['placeholder' => 'Select a date', 'class' => 'form-control datepicker', 'data-dateformat' => 'dd/mm/yy']) !!}
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>

                                    </section>

                                    <section class="col col-6">
                                        <label class="label">Freelancer(s) required</label>
                                        <label class="input">
                                            {!! Form::text('freelancers_required', null, ['placeholder' => '0']) !!}
                                        </label>
                                        {{--<div class="note">
                                            <strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
                                        </div>--}}
                                    </section>
                                </div>

                                <section>
                                    <label class="label">Type and enter to add job tag(s)</label>
                                    <label class="input">
                                        <input class="form-control tagsinput" value="Php, Angularjs, Laravel, Bootstrap" data-role="tagsinput">
                                    </label>
                                    <div class="note">
                                        <strong>Note:</strong> jobs tag(s) usually the skills needed for this job eg. php, angularjs & etc.
                                    </div>
                                </section>
                            </fieldset>



                            <fieldset>
                                <section>
                                    <label class="label">Job Type</label>
                                    <div class="inline-group">
                                        <label class="radio">
                                            <input type="radio" name="radio-inline" checked="checked">
                                            <i></i>Fixed / By Project</label>
                                        <label class="radio">
                                            <input type="radio" name="radio-inline">
                                            <i></i>Hourly</label>
                                    </div>
                                </section>
                            </fieldset>

                            <fieldset>
                                <section>
                                    <label class="label">Job Category</label>
                                    <div class="row">
                                        <div class="col col-4">{{--{{count($category_list)}}--}}
                                            {{--@for ($i = 0; $i < count($category_list); $i++)
                                                {{$category_list['label']}}
                                            @endfor--}}
                                        @foreach($category_list as $cl)
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox" checked="checked">
                                                <i></i>{{$cl->label}}</label>
                                        @endforeach
                                        </div>
                                    </div>
                                    {{--<div class="row">
                                        <div class="col col-4">
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox" checked="checked">
                                                <i></i>Web & Mobile Design</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Other - Software Development</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Web Development</label>
                                        </div>
                                        <div class="col col-4">
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Other - Admin Support</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Personal / Virtual Assistant</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Web Research</label>
                                        </div>
                                        <div class="col col-4">
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Data Entry</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>Graphic Design</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <i></i>SEO - Search Engine Optimization</label>
                                        </div>
                                    </div>--}}
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="button" class="btn btn-default" onclick="window.history.back();">
                                    Back
                                </button>
                            </footer>
                        </form>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>
        <!-- END COL -->


    </div>

@endsection

@section('page_script')

        <!-- SPARKLINES -->
<script src="{{asset('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js')}}"></script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();
    })

</script>

@endsection