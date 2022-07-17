<header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
    <div class="container-fluid">
        <nav class="navbar">
            <!-- start: toggle btn -->
            <div class="d-flex">
                <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
              <span class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
                </button>
                <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
              <span class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
                </button>
                <a href="{{ route('dashboard') }}" class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">
                    <h2>Pataniya Admin Panel</h2>
                </a>
            </div>
            <!-- start: link -->
            <ul class="header-right justify-content-end d-flex align-items-center mb-0">
                <!-- start: notifications dropdown-menu -->
                <!-- start: quick light dark -->
                <li class="d-none d-xl-inline-block">
                    <a class="nav-link fullscreen" href="javascript:void(0);" onclick="toggleFullScreen(documentElement)">
                        <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.8279 10.172C5.73414 10.0783 5.60698 10.0256 5.4744 10.0256C5.34182 10.0256 5.21467 10.0783 5.1209 10.172L1.0249 14.268V11.5C1.0249 11.3674 0.972224 11.2402 0.878456 11.1464C0.784688 11.0527 0.657511 11 0.524902 11C0.392294 11 0.265117 11.0527 0.171349 11.1464C0.0775808 11.2402 0.0249023 11.3674 0.0249023 11.5V15.475C0.0249023 15.6076 0.0775808 15.7348 0.171349 15.8285C0.265117 15.9223 0.392294 15.975 0.524902 15.975H4.4999C4.63251 15.975 4.75969 15.9223 4.85346 15.8285C4.94722 15.7348 4.9999 15.6076 4.9999 15.475C4.9999 15.3424 4.94722 15.2152 4.85346 15.1214C4.75969 15.0277 4.63251 14.975 4.4999 14.975H1.7319L5.8279 10.879C5.92164 10.7852 5.9743 10.6581 5.9743 10.5255C5.9743 10.3929 5.92164 10.2658 5.8279 10.172ZM10.1719 10.172C10.2657 10.0783 10.3928 10.0256 10.5254 10.0256C10.658 10.0256 10.7851 10.0783 10.8789 10.172L14.9749 14.268V11.5C14.9749 11.3674 15.0276 11.2402 15.1213 11.1464C15.2151 11.0527 15.3423 11 15.4749 11C15.6075 11 15.7347 11.0527 15.8285 11.1464C15.9222 11.2402 15.9749 11.3674 15.9749 11.5V15.475C15.9749 15.6076 15.9222 15.7348 15.8285 15.8285C15.7347 15.9223 15.6075 15.975 15.4749 15.975H11.4999C11.3673 15.975 11.2401 15.9223 11.1463 15.8285C11.0526 15.7348 10.9999 15.6076 10.9999 15.475C10.9999 15.3424 11.0526 15.2152 11.1463 15.1214C11.2401 15.0277 11.3673 14.975 11.4999 14.975H14.2679L10.1719 10.879C10.0782 10.7852 10.0255 10.6581 10.0255 10.5255C10.0255 10.3929 10.0782 10.2658 10.1719 10.172ZM5.8279 5.82799C5.73414 5.92173 5.60698 5.97439 5.4744 5.97439C5.34182 5.97439 5.21467 5.92173 5.1209 5.82799L1.0249 1.73199V4.49999C1.0249 4.6326 0.972224 4.75978 0.878456 4.85355C0.784688 4.94732 0.657511 4.99999 0.524902 4.99999C0.392294 4.99999 0.265117 4.94732 0.171349 4.85355C0.0775808 4.75978 0.0249023 4.6326 0.0249023 4.49999V0.524994C0.0249023 0.392386 0.0775808 0.265209 0.171349 0.17144C0.265117 0.0776723 0.392294 0.0249939 0.524902 0.0249939H4.4999C4.63251 0.0249939 4.75969 0.0776723 4.85346 0.17144C4.94722 0.265209 4.9999 0.392386 4.9999 0.524994C4.9999 0.657602 4.94722 0.784779 4.85346 0.878547C4.75969 0.972315 4.63251 1.02499 4.4999 1.02499H1.7319L5.8279 5.12099C5.92164 5.21476 5.9743 5.34191 5.9743 5.47449C5.9743 5.60708 5.92164 5.73423 5.8279 5.82799Z" />
                            <path class="fill-secondary" d="M10.5253 5.97439C10.3927 5.97439 10.2655 5.92173 10.1718 5.82799C10.078 5.73423 10.0254 5.60708 10.0254 5.47449C10.0254 5.34191 10.078 5.21476 10.1718 5.12099L14.2678 1.02499H11.4998C11.3672 1.02499 11.24 0.972315 11.1462 0.878547C11.0525 0.784779 10.9998 0.657602 10.9998 0.524994C10.9998 0.392386 11.0525 0.265209 11.1462 0.17144C11.24 0.0776723 11.3672 0.0249939 11.4998 0.0249939H15.4748C15.6074 0.0249939 15.7346 0.0776723 15.8283 0.17144C15.9221 0.265209 15.9748 0.392386 15.9748 0.524994V4.49999C15.9748 4.6326 15.9221 4.75978 15.8283 4.85355C15.7346 4.94732 15.6074 4.99999 15.4748 4.99999C15.3422 4.99999 15.215 4.94732 15.1212 4.85355C15.0275 4.75978 14.9748 4.6326 14.9748 4.49999V1.73199L10.8788 5.82799C10.785 5.92173 10.6579 5.97439 10.5253 5.97439Z" />
                        </svg>
                    </a>
                </li>
                <!-- start: Language dropdown-menu -->

                <!-- start: Grid app dropdown-menu -->

                <!-- start: My notes toggle modal -->
                <li class="d-none d-sm-inline-block d-xl-none">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal">
                        <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
                            <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
                        </svg>
                    </a>
                </li>
                <!-- start: Recent Chat toggle modal -->
                <li class="d-none d-sm-inline-block d-xl-none">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
                        <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>
                </li>
                <!-- start: quick light dark -->
                <li>
                    <a class="nav-link quick-light-dark" href="#">
                        <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                            <path class="fill-secondary" d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                        </svg>
                    </a>
                </li>
                <!-- start: User dropdown-menu -->
                @php
                $id = Auth::user()->id;
				$adminDate = App\Models\User::find($id);
                @endphp
                <li>
                    <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                        <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#" role="button" data-bs-toggle="dropdown">
                            <img class="avatar img-thumbnail rounded-circle shadow" src="{{ (!empty($adminDate->image)) ? url('upload/user_image/'.$adminDate->image) : url('upload/no-image.png') }}" alt="">
                        </a>
                        <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                            <div class="card border-0 w240">
                                <div class="card-body border-bottom d-flex">
                                    <img class="avatar rounded-circle" src="{{ (!empty($adminDate->image)) ? url('upload/user_image/'.$adminDate->image) : url('upload/no-image.png') }}" alt="">
                                    <div class="flex-fill ms-3">
                                        <h6 class="card-title mb-0">{{ $adminDate->name }}</h6>
                                        <span class="text-muted">{{ $adminDate->email }}</span>
                                    </div>
                                </div>
                                <div class="list-group m-2 mb-3">
                                    <a class="list-group-item list-group-item-action border-0" href="{{ route('account.setting') }}"><i class="w30 fa fa-user"></i>Account Settings</a>
                                    <a class="list-group-item list-group-item-action border-0" href="{{ route('show.password') }}"><i class="w30 fa fa-gear"></i>Change Password</a>
                                </div>
                                <a href="{{ route('admin.logout') }}" class="btn bg-secondary text-light text-uppercase rounded-0">Sign out</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- start: Settings toggle modal -->
            </ul>
        </nav>
    </div>
</header>
