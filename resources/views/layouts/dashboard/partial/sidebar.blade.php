<div class="dashboard-sidebar">
    <div class="dashboard-nav-trigger">
        <div class="dashboard-nav-trigger-btn">
            <i class="la la-bars"></i> Dashboard Navigation
        </div>
    </div>
    <div class="dashboard-nav-container">
        <div class="side-menu-wrap">
            @if(Request::is('admin/*'))
                <ul class="side-menu-ul">
                    <li class="{{ Request::is('admin/dashboard')?'page-active':'' }}"><a href="{{ route('admin.dashboard') }}"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
                    <li><a href="candidate-dashboard-message.html"><i class="la la-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li>
                    <li><a href="candidate-dashboard-bookmark.html"><i class="la la-bookmark icon-element"></i> Bookmarks</a></li>
                    <li>
                        <a href="#"><i class="la la-bell-o icon-element"></i>jobs <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="candidate-dashboard-applied-job.html">Applied Jobs</a></li>
                            <li><a href="candidate-job-alert.html">Jobs Alerts</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('admin/option/*')?'page-active':'' }}">
                        <a href="#"><i class="la la-cog icon-element"></i>Options <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="{{ route('admin.jobtype.index') }}">Job Type</a></li>
                            <li><a href="{{ route('admin.career.index') }}">Career Lavel</a></li>
                            <li><a href="{{ route('admin.category.index') }}">Category</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('admin/setting/*')?'page-active':'' }}">
                        <a href="#"><i class="la la-cog icon-element"></i>Settings <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="{{ route('admin.setting') }}">Edit Profile</a></li>
                            <li><a href="{{ route('admin.password') }}">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="candidate-dashboard-employer-following.html"><i class="la la-user-plus icon-element"></i> Following Employer</a></li>
                    <li>
                        <a href="my-resume.html"><i class="la la-file-text icon-element"></i> Resumes <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="cv-and-cover-letter.html">CV & Cover Letter</a></li>
                            <li><a href="candidate-add-resume.html">Add Resume</a></li>
                            <li><a href="my-resume.html">Education</a></li>
                            <li><a href="my-resume.html">Experience</a></li>
                            <li><a href="my-resume.html">Skills</a></li>
                            <li><a href="my-resume.html">Video</a></li>
                        </ul>
                    </li>
                    <li><div class="section-block mt-3 mb-3"></div></li>
                    <li><a href="candidate-details.html"><i class="la la-user icon-element"></i> View Profile</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="la la-power-off icon-element"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endif
            @if(Request::is('employer/*'))
                <ul class="side-menu-ul">
                    <li class="{{ Request::is('employer/dashboard')?'page-active':'' }}"><a href="{{ route('employer.dashboard') }}"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
                    <li><a href="candidate-dashboard-message.html"><i class="la la-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li>
                    <li><a href="candidate-dashboard-bookmark.html"><i class="la la-bookmark icon-element"></i> Bookmarks</a></li>
                    <li class="{{ Request::is('admin/job/*')?'page-active':'' }}">
                        <a href="#"><i class="la la-bell-o icon-element"></i>jobs <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="{{ route('employer.job.index') }}">Manage Jobs</a></li>
                            <li><a href="candidate-dashboard-applied-job.html"> Applied Jobs</a></li>
                            <li><a href="candidate-job-alert.html">Jobs Alerts</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('employer/setting/*')?'page-active':'' }}">
                        <a href="#"><i class="la la-cog icon-element"></i>Settings <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="{{ route('employer.setting') }}">Edit Profile</a></li>
                            <li><a href="{{ route('employer.password') }}">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="candidate-dashboard-employer-following.html"><i class="la la-user-plus icon-element"></i> Following Employer</a></li>
                    <li>
                        <a href="my-resume.html"><i class="la la-file-text icon-element"></i> Resumes <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="cv-and-cover-letter.html">CV & Cover Letter</a></li>
                            <li><a href="candidate-add-resume.html">Add Resume</a></li>
                            <li><a href="my-resume.html">Education</a></li>
                            <li><a href="my-resume.html">Experience</a></li>
                            <li><a href="my-resume.html">Skills</a></li>
                            <li><a href="my-resume.html">Video</a></li>
                        </ul>
                    </li>
                    <li><div class="section-block mt-3 mb-3"></div></li>
                    <li><a href="candidate-details.html"><i class="la la-user icon-element"></i> View Profile</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="la la-power-off icon-element"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endif
            @if(Request::is('candidate/*'))
                <ul class="side-menu-ul">
                    <li class="page-active"><a href="{{ route('profile') }}"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
                    <li><a href="candidate-dashboard-message.html"><i class="la la-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li>
                    <li><a href="candidate-dashboard-bookmark.html"><i class="la la-bookmark icon-element"></i> Bookmarks</a></li>
                    <li>
                        <a href="#"><i class="la la-bell-o icon-element"></i>jobs <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="candidate-dashboard-applied-job.html"> Applied Jobs</a></li>
                            <li><a href="candidate-job-alert.html">Jobs Alerts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="la la-cog icon-element"></i>Settings <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="candidate-dashboard-change-password.html">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="candidate-dashboard-employer-following.html"><i class="la la-user-plus icon-element"></i> Following Employer</a></li>
                    <li>
                        <a href="my-resume.html"><i class="la la-file-text icon-element"></i> Resumes <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="cv-and-cover-letter.html">CV & Cover Letter</a></li>
                            <li><a href="candidate-add-resume.html">Add Resume</a></li>
                            <li><a href="my-resume.html">Education</a></li>
                            <li><a href="my-resume.html">Experience</a></li>
                            <li><a href="my-resume.html">Skills</a></li>
                            <li><a href="my-resume.html">Video</a></li>
                        </ul>
                    </li>
                    <li><div class="section-block mt-3 mb-3"></div></li>
                    <li><a href="candidate-details.html"><i class="la la-user icon-element"></i> View Profile</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="la la-power-off icon-element"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endif
        </div><!-- end side-menu-wrap -->
    </div>
</div><!-- end profile-sidebar -->
