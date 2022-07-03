            <!-- Profile Sidebar -->
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                <div class="profile-sidebar">
                    <div class="widget-profile pro-widget-content"> 
                        <div class="profile-info-widget">
                            <a href="#" class="booking-doc-img">
                                <img src="https://static.toiimg.com/thumb/resizemode-4,msid-76729750,imgsize-249247,width-720/76729750.jpg" alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3>{{ Auth::guard('patient') -> user() -> name }}</h3>
                                <div class="patient-details">
                                    <h5><i class="fas fa-birthday-cake"></i>{{ Auth::guard('patient') -> user() -> email }}</h5>
                                    <h5><i class="fas fa-birthday-cake"></i> {{ Auth::guard('patient') -> user() -> mobile }}</h5>
                                    <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        @include('frontend.patient.menu')
                    </div>

                </div>
            </div>
            <!-- / Profile Sidebar -->