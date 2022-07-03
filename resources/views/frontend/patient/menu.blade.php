<nav class="dashboard-menu">
    <ul>
        <li class="active">
            <a href="patient-dashboard.html">
                <i class="fas fa-columns"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="favourites.html">
                <i class="fas fa-bookmark"></i>
                <span>Favourites</span>
            </a>
        </li>
        <li>
            <a href="chat.html">
                <i class="fas fa-comments"></i>
                <span>Message</span>
                <small class="unread-msg">23</small> 
            </a>
        </li> 
        <li>
            <a href="{{ route('patient.settings.page') }}">
                <i class="fas fa-user-cog"></i>
                <span>Profile Settings</span>   
            </a>
        </li>
        <li>
            <a href="{{ route('patient.password.page') }}">
                <i class="fas fa-lock"></i>
                <span>Change Password</span>
            </a>
        </li>
        <li>
            <a href="{{ route('patient.logout') }}">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</nav>