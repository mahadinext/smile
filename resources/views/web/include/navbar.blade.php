<nav class="mainmenu-nav">
    <ul class="mainmenu">
        <li class="with-megamenu position-static">
            <a href="{{ route('home') }}">Home</a>
        </li>

        <li class="with-megamenu">
            <a href="#">Browse Courses</a>
        </li>

        {{-- <li class="has-dropdown has-menu-child-item">
            <a href="#">Dashboard
                <i class="feather-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="#">Instructor</a>
                </li>
                <li><a href="{{ route('student.login-page') }}">Student</a>
                </li>
            </ul>
        </li> --}}

        <li class="has-dropdown has-menu-child-item">
            <a href="#">Pages <i class="feather-chevron-down"></i></a>
            <ul class="submenu">
                <li><a href="about-us-01.html.htm">About Us</a></li>
                <li><a href="contact.html.htm">Contact Us</a></li>
                <li><a href="faqs.html.htm">FAQS</a></li>
                <li><a href="privacy-policy.html.htm">Privacy Policy</a></li>
                <li><a href="404.html.htm">404 Page</a></li>
                <li><a href="wishlist.html.htm">Wishlist Page</a></li>
            </ul>
        </li>
    </ul>
</nav>
