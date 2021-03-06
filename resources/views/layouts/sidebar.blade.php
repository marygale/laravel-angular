<!-- Left panel : Navigation area -->
<aside id="left-panel">
    <div class="login-info">
				<span>

					<a href="javascript:void(0);" id="show-shortcut">
                        <img src="{{ asset('img/avatars/1.png') }}" alt="me" class="online" />
						<span>
							mary.gale
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

				</span>
    </div>
    <!-- end user info -->
    <nav>
        <ul>
            <li>
                <a href="/" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Users</span></a>
                <ul>
                    <li>
                        <a href="{!! action('UserController@user_list') !!}">All Users</a>
                    </li>
                    <li>
                        <a href="{!! action('UserController@user_create') !!}">New Users</a>
                    </li>
                    <li>
                        <a href="{!! action('UserController@profile_view') !!}">Your Profile</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-file"></i> <span class="menu-item-parent">Pages</span></a>
                <ul>
                    <li>
                        <a href="forum.html">All Pages</a>
                    </li>
                    <li>
                        <a href="profile.html">Add New</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-tasks"></i> <span class="menu-item-parent">Jobs</span></a>
                <ul>
                    <li>
                        <a href="{!! action('JobController@create_job') !!}">Post A Job</a>
                    </li>
                    <li>
                        <a href="form-templates.html">My Jobs</a>
                    </li>
                    <li>
                        <a href="validation.html">My Job Feeds</a>
                    </li>
                    <li>
                        <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
                    </li>
                    <li>
                        <a href="plugins.html">Form Plugins</a>
                    </li>
                    <li>
                        <a href="wizard.html">Wizards</a>
                    </li>
                    <li>
                        <a href="other-editors.html">Bootstrap Editors</a>
                    </li>
                    <li>
                        <a href="dropzone.html">Dropzone <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Projects</span></a>
                <ul>
                    <li>
                        <a href="forum.html">Add Project</a>
                    </li>
                    <li>
                        <a href="profile.html">Project List</a>
                    </li>
                    <li>
                        <a href="timeline.html">Others</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="inbox"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a>
            </li>
            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Calendar</span></a>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-file"></i> <span class="menu-item-parent">Other Pages</span></a>
                <ul>
                    <li>
                        <a href="forum.html">Forum Layout</a>
                    </li>
                    <li>
                        <a href="{!! action('UserController@profile_view') !!}}">Profile</a>
                    </li>
                    <li>
                        <a href="timeline.html">Timeline</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>