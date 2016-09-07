@extends('layouts.master')
@section('content')

        <!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">

    <!-- col -->
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-file-o"></i> User <span>>
							Profile </span></h1>
    </div>
    <!-- end col -->

    <!-- right side of the page with the sparkline graphs -->
    <!-- col -->
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <!-- sparks -->
        <ul id="sparks">
            <li class="sparks-info">
                <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                    1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                </div>
            </li>
            <li class="sparks-info">
                <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                    110,150,300,130,400,240,220,310,220,300, 270, 210
                </div>
            </li>
            <li class="sparks-info">
                <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                    110,150,300,130,400,240,220,310,220,300, 270, 210
                </div>
            </li>
        </ul>
        <!-- end sparks -->
    </div>
    <!-- end col -->

</div>
<!-- end row -->

<!-- row -->

<div class="row">

    <div class="col-sm-12">


        <div class="well well-sm">

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="well well-light well-sm no-margin no-padding">

                        <div class="row">

                            <div class="col-sm-12">
                                <div id="myCarousel" class="carousel fade profile-carousel">
                                    <div class="air air-bottom-right padding-10">
                                        <a href="{!! action('UserController@profile_edit', compact('user')) !!}" class="btn txt-color-white bg-color-orangeDark btn-sm"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
                                        <a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp;
                                        <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
                                    </div>
                                    <div class="air air-top-left padding-10">
                                        <h4 class="txt-color-white font-md">{!! Carbon\Carbon::today()->format('l jS \\of F Y') !!}</h4>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <!-- Slide 1 -->
                                        <div class="item active">
                                            <img src="{{ asset('img/demo/s1.jpg') }}" alt="">
                                        </div>
                                        <!-- Slide 2 -->
                                        <div class="item">
                                            <img src="{{ asset('img/demo/s2.jpg') }}" alt="">
                                        </div>
                                        <!-- Slide 3 -->
                                        <div class="item">
                                            <img src="{{ asset('img/demo/m3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">

                                <div class="row">

                                    <div class="col-sm-3 profile-pic">
                                        <img src="{{ asset('img/avatars/1.png') }}">
                                        <div class="padding-10">
                                            <h4 class="font-md"><strong>1,543</strong>
                                                <br>
                                                <small>Followers</small>
                                            </h4>
                                            <br>
                                            <h4 class="font-md"><strong>419</strong>
                                                <br>
                                                <small>Connections</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 editable-hover">
                                        <h1>{!! $user->first_name !!} <span class="semi-bold">{!! $user->last_name !!}</span>
                                            <br>
                                            <small> {!! $user->designation !!}, {!! $user->company !!}</small>
                                        </h1>

                                        <ul class="list-unstyled">
                                            <li>
                                                <p class="text-muted">
                                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;(<span class="txt-color-darken">313</span>) <span class="txt-color-darken">464</span> - <span class="txt-color-darken">6473</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="text-muted">
                                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:{!! $user->email !!}">{!! $user->email !!}</a>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="text-muted">
                                                    <i class="fa fa-skype"></i>&nbsp;&nbsp;<span class="txt-color-darken">{!! $user->skype !!}</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="text-muted">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;<span class="txt-color-darken">{!! $user->facebook !!}</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="text-muted">
                                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="txt-color-darken">Free after <a href="javascript:void(0);" rel="tooltip" title="" data-placement="top"
                                                                                                                                           data-original-title="Create an Appointment">4:30 PM</a></span>
                                                </p>
                                            </li>
                                        </ul>
                                        <br>
                                        <p class="font-md">
                                            <i>A little about me...</i>
                                        </p>
                                        <p>
                                            {!! $user->description !!}
                                        </p>
                                        <br>
                                        <a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
                                        <br>
                                        <br>

                                    </div>
                                    <div class="col-sm-3">
                                        <h1>
                                            <small>Connections</small>
                                        </h1>
                                        <ul class="list-inline friends-list">
                                            <li><img src=" {{ asset('img/avatars/1.png') }}" alt="friend-1">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/2.png') }}" alt="friend-2">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/3.png') }}" alt="friend-3">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/4.png') }}" alt="friend-4">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/5.png') }}" alt="friend-5">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/male.png') }}" alt="friend-6">
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">413 more</a>
                                            </li>
                                        </ul>

                                        <h1>
                                            <small>Recent visitors</small>
                                        </h1>
                                        <ul class="list-inline friends-list">
                                            <li><img src="{{ asset('img/avatars/male.png') }}" alt="friend-1">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/female.png') }}" alt="friend-2">
                                            </li>
                                            <li><img src="{{ asset('img/avatars/female.png') }}" alt="friend-3">
                                            </li>
                                        </ul>

                                    </div>

                                </div>


                                <!-- others  -->

                                <div class="other-profile">

                                    <div class="jarviswidget jarviswidget-color-white" id="wid-id-7" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" role="widget"
                                         data-widget-attstyle="jarviswidget-color-white">

                                        <header role="heading">
                                            @include('shared._color-pallet')
                                            <ul class="nav nav-tabs pull-left in">

                                                <li class="active">

                                                    <a data-toggle="tab" href="#hr1"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> Education </span> </a>

                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#hr2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Certifications <span class="label bg-color-blue txt-color-white"> label <i
                                                                        class="fa fa-exclamation"></i> </span> </span> </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#hr2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Other Profiles <span class="label bg-color-blue txt-color-white"> label <i
                                                                        class="fa fa-exclamation"></i> </span> </span> </a>
                                                </li>

                                            </ul>
                                            <span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span></header>

                                        <!-- widget div-->
                                        <div role="content" style="display: block;">

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body">

                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="hr1">

                                                        <div class="tabbable tabs-below">
                                                            <div class="tab-content padding-10">
                                                                <div class="tab-pane active" id="AA">
                                                                    <p>
                                                                        The broccoli says 'I look like a small tree', the mushroom says 'I look like an umbrella', the walnut says 'I look like a brain', and the banana says 'Can we please change the
                                                                        subject?'
                                                                    </p>
                                                                </div>
                                                                <div class="tab-pane" id="BB">
                                                                    <p>
                                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                                                                        four loko farm-to-table craft beer twee.
                                                                    </p>
                                                                </div>
                                                                <div class="tab-pane" id="CC">
                                                                    <p>
                                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland
                                                                        seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <ul class="nav nav-tabs">
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#AA">Tab 1</a>
                                                                </li>
                                                                <li>
                                                                    <a data-toggle="tab" href="#BB">Tab 2</a>
                                                                </li>
                                                                <li>
                                                                    <a data-toggle="tab" href="#CC">Tab 3</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane" id="hr2">

                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#iss1" data-toggle="tab">Item 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="#iss2" data-toggle="tab">Item 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="#iss3" data-toggle="tab">Item 3</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content padding-10">
                                                            <div class="tab-pane active" id="iss1">
                                                                <p>
                                                                    Three monkeys escaped from the zoo, one was caught watching TV, the other playing hockey, and the third one was caught reading this quote!
                                                                </p>
                                                            </div>
                                                            <div class="tab-pane fade" id="iss2">
                                                                <p>
                                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                                                                    four loko farm-to-table craft beer twee.
                                                                </p>
                                                            </div>
                                                            <div class="tab-pane fade" id="iss3">
                                                                <p>
                                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland
                                                                    seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                        <!-- end widget div -->

                                    </div>
                                </div>

                                <!-- end others -->

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12">

                                <hr>

                                <div class="padding-10">

                                    <ul class="nav nav-tabs tabs-pull-right">
                                        <li class="active">
                                            <a href="#a1" data-toggle="tab">Recent Articles</a>
                                        </li>
                                        <li>
                                            <a href="#a2" data-toggle="tab">New Members</a>
                                        </li>
                                        <li class="pull-left">
                                            <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i> Activity</span>
                                        </li>
                                    </ul>

                                    <div class="tab-content padding-top-10">
                                        <div class="tab-pane fade in active" id="a1">

                                            <div class="row">

                                                <div class="col-xs-2 col-sm-1">
                                                    <time datetime="2014-09-20" class="icon">
                                                        <strong>Jan</strong>
                                                        <span>10</span>
                                                    </time>
                                                </div>

                                                <div class="col-xs-10 col-sm-11">
                                                    <h6 class="no-margin"><a href="javascript:void(0);">Allice in Wonderland</a></h6>
                                                    <p>
                                                        Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi Nam eget dui.
                                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
                                                        sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.
                                                    </p>
                                                </div>

                                                <div class="col-sm-12">

                                                    <hr>

                                                </div>

                                                <div class="col-xs-2 col-sm-1">
                                                    <time datetime="2014-09-20" class="icon">
                                                        <strong>Jan</strong>
                                                        <span>10</span>
                                                    </time>
                                                </div>

                                                <div class="col-xs-10 col-sm-11">
                                                    <h6 class="no-margin"><a href="javascript:void(0);">World Report</a></h6>
                                                    <p>
                                                        Morning our be dry. Life also third land after first beginning to evening cattle created let subdue you'll winged don't Face firmament.
                                                        You winged you're was Fruit divided signs lights i living cattle yielding over light life life sea, so deep.
                                                        Abundantly given years bring were after. Greater you're meat beast creeping behold he unto She'd doesn't. Replenish brought kind gathering Meat.
                                                    </p>
                                                </div>

                                                <div class="col-sm-12">

                                                    <br>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="a2">

                                            <div class="alert alert-info fade in">
                                                <button class="close" data-dismiss="alert">
                                                    ×
                                                </button>
                                                <i class="fa-fw fa fa-info"></i>
                                                <strong>51 new members </strong>joined today!
                                            </div>

                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/female.png') }}"><a href="javascript:void(0);">Jenn Wilson</a>
                                                <div class="email">
                                                    travis@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Marshall Hitt</a>
                                                <div class="email">
                                                    marshall@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Joe Cadena</a>
                                                <div class="email">
                                                    joe@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Mike McBride</a>
                                                <div class="email">
                                                    mike@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Travis Wilson</a>
                                                <div class="email">
                                                    travis@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Marshall Hitt</a>
                                                <div class="email">
                                                    marshall@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="Joe Cadena joe@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Joe Cadena</a>
                                                <div class="email">
                                                    joe@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Mike McBride</a>
                                                <div class="email">
                                                    mike@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Marshall Hitt</a>
                                                <div class="email">
                                                    marshall@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);">Joe Cadena</a>
                                                <div class="email">
                                                    joe@company.com
                                                </div>
                                            </div>
                                            <div class="user" title="email@company.com">
                                                <img src="{{ asset('img/avatars/male.png') }}"><a href="javascript:void(0);"> Mike McBride</a>
                                                <div class="email">
                                                    mike@company.com
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <ul class="pagination pagination-sm">
                                                    <li class="disabled">
                                                        <a href="javascript:void(0);">Prev</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="javascript:void(0);">1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">2</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">3</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">...</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">99</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Next</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div><!-- end tab -->
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- end row -->

                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">

                    <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                        <textarea rows="2" class="form-control" placeholder="What are you thinking?"></textarea>
                        <div class="margin-top-10">
                            <button type="submit" class="btn btn-sm btn-primary pull-right">
                                Post
                            </button>
                            <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                            <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Voice"><i class="fa fa-microphone"></i></a>
                            <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                            <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add File"><i class="fa fa-file"></i></a>
                        </div>
                    </form>

										<span class="timeline-seperator text-center"> <span>10:30PM January 1st, 2013</span>
											<div class="btn-group pull-right">
                                                <a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
                                                <ul class="dropdown-menu text-left">
                                                    <li>
                                                        <a href="javascript:void(0);">Hide this post</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Hide future posts from this user</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Mark as spam</a>
                                                    </li>
                                                </ul>
                                            </div> </span>
                    <div class="chat-body no-padding profile-message">
                        <ul>
                            <li class="message">
                                <img src="{{ asset('img/avatars/sunny.png') }}" class="online">
													<span class="message-text"> <a href="javascript:void(0);" class="username">John Doe
                                                            <small class="text-muted pull-right ultra-light"> 2 Minutes ago</small>
                                                        </a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very
														image let unto fowl isn't in blessed fill life yielding above all moved </span>
                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-primary">Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="message message-reply">
                                <img src="{{ asset('img/avatars/3.png') }}" class="online">
                                <span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">1 minute ago </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="message message-reply">
                                <img src="{{ asset('img/avatars/4.png') }}" class="online">
                                <span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">a moment ago </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                </ul>
                                <input class="form-control input-xs" placeholder="Type and enter" type="text">
                            </li>
                        </ul>

                    </div>

										<span class="timeline-seperator text-center"> <span>11:30PM November 27th, 2013</span>
											<div class="btn-group pull-right">
                                                <a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
                                                <ul class="dropdown-menu text-left">
                                                    <li>
                                                        <a href="javascript:void(0);">Hide this post</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Hide future posts from this user</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Mark as spam</a>
                                                    </li>
                                                </ul>
                                            </div> </span>
                    <div class="chat-body no-padding profile-message">
                        <ul>
                            <li class="message">
                                <img src="{{ asset('img/avatars/1.png') }}" class="online">
                                <span class="message-text"> <a href="javascript:void(0);" class="username">John Doe
                                        <small class="text-muted pull-right ultra-light"> 2 Minutes ago</small>
                                    </a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved </span>
                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-primary">Hide</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="message message-reply">
                                <img src="{{ asset('img/avatars/3.png') }}" class="online">
                                <span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">1 minute ago </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="message message-reply">
                                <img src="{{ asset('img/avatars/4.png') }}" class="online">
                                <span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">a moment ago </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="message message-reply">
                                <img src="{{ asset('img/avatars/4.png') }}" class="online">
                                <span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                <ul class="list-inline font-xs">
                                    <li>
                                        <a href="javascript:void(0);" class="text-muted">a moment ago </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                    </li>
                                </ul>

                            </li>
                            <li>
                                <div class="input-group wall-comment-reply">
                                    <input id="btn-input" type="text" class="form-control" placeholder="Type your message here...">
														<span class="input-group-btn">
															<button class="btn btn-primary" id="btn-chat">
                                                                <i class="fa fa-reply"></i> Reply
                                                            </button> </span>
                                </div>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>

        </div>


    </div>

</div>

<!-- end row -->


@endsection

@section('page_script')

        <!-- SPARKLINES -->
<script src="{{asset('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function () {

        pageSetUp();
    })

</script>

@endsection