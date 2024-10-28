<ul class="quick-access">
    <li class="access-icon rbt-mini-cart">
        <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
            <i class="feather-shopping-cart"></i>
            <span class="rbt-cart-count">5</span>
        </a>
    </li>
    <li class="access-icon rbt-user-wrapper right-align-dropdown">
        <a class="rbt-round-btn" href="#">
            <i class="feather-user"></i>
        </a>
        <div class="rbt-user-menu-list-wrapper">
            <div class="inner">
                @if (isset(app('student')->id))
                    <div class="rbt-admin-profile">
                        <div class="admin-thumbnail">
                            <img src="{!! asset('web/assets/images/team/avatar.jpg') !!}" alt="User Images">
                        </div>
                        <div class="admin-info">
                            <span class="name">Rainbow IT</span>
                            <a class="rbt-btn-link color-primary" href="profile.html.htm">View
                                Profile</a>
                        </div>
                    </div>
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="{{ route('student.dashboard') }}">
                                <i class="feather-home"></i>
                                <span>My Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather-bookmark"></i>
                                <span>Bookmark</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-enrolled-courses.html.htm">
                                <i class="feather-shopping-bag"></i>
                                <span>Enrolled Courses</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-wishlist.html.htm">
                                <i class="feather-heart"></i>
                                <span>Wishlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-reviews.html.htm">
                                <i class="feather-star"></i>
                                <span>Reviews</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-my-quiz-attempts.html.htm">
                                <i class="feather-list"></i>
                                <span>My Quiz Attempts</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-order-history.html.htm">
                                <i class="feather-clock"></i>
                                <span>Order History</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-quiz-attempts.html.htm">
                                <i class="feather-message-square"></i>
                                <span>Question & Answer</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="mt--10 mb--10">
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="#">
                                <i class="feather-book-open"></i>
                                <span>Getting Started</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="mt--10 mb--10">
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="instructor-settings.html.htm">
                                <i class="feather-settings"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html.htm">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                @elseif (isset(app('teacher')->id))
                    <div class="rbt-admin-profile">
                        <div class="admin-thumbnail">
                            <img src="{!! asset('web/assets/images/team/avatar.jpg') !!}" alt="User Images">
                        </div>
                        <div class="admin-info">
                            <span class="name">Rainbow IT</span>
                            <a class="rbt-btn-link color-primary" href="profile.html.htm">View
                                Profile</a>
                        </div>
                    </div>
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="{{ route('teacher.dashboard') }}">
                                <i class="feather-home"></i>
                                <span>My Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather-bookmark"></i>
                                <span>Bookmark</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-enrolled-courses.html.htm">
                                <i class="feather-shopping-bag"></i>
                                <span>Enrolled Courses</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-wishlist.html.htm">
                                <i class="feather-heart"></i>
                                <span>Wishlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-reviews.html.htm">
                                <i class="feather-star"></i>
                                <span>Reviews</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-my-quiz-attempts.html.htm">
                                <i class="feather-list"></i>
                                <span>My Quiz Attempts</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-order-history.html.htm">
                                <i class="feather-clock"></i>
                                <span>Order History</span>
                            </a>
                        </li>
                        <li>
                            <a href="instructor-quiz-attempts.html.htm">
                                <i class="feather-message-square"></i>
                                <span>Question & Answer</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="mt--10 mb--10">
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="#">
                                <i class="feather-book-open"></i>
                                <span>Getting Started</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="mt--10 mb--10">
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="instructor-settings.html.htm">
                                <i class="feather-settings"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html.htm">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                @else
                    <ul class="user-list-wrapper">
                        <li>
                            <a href="{{ route('teacher.login-page') }}"><span>Instructor</span></a>
                        </li>
                        <li>
                            <a href="{{ route('student.login-page') }}"><span>Student</span></a>
                        </li>
                    </ul>
                @endif

            </div>
        </div>
    </li>
</ul>
