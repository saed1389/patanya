<div class="sidebar p-2 py-md-3 @@cardClass">
    <div class="container-fluid">
        <!-- sidebar: title-->
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">P</span><span>ataniya</span></h4>
        </div>
        <!-- sidebar: Create new -->

        <!-- sidebar: menu list -->
        <div class="main-menu flex-grow-1">
            <ul class="menu-list">
                <li class="divider py-2 lh-sm"><span class="small">MAIN</span><br> <small class="text-muted">Unique dashboard designs </small></li>
                <li>
                    <a class="m-link active" href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path class="fill-secondary" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                        <span class="ms-2">My Dashboard</span>
                    </a>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Applications" href="#">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary" d="M6.5 1C6.10218 1 5.72064 1.15804 5.43934 1.43934C5.15804 1.72064 5 2.10218 5 2.5V3H1.5C1.10218 3 0.720644 3.15804 0.43934 3.43934C0.158035 3.72064 0 4.10218 0 4.5L0 5.884L7.614 7.914C7.86693 7.98136 8.13307 7.98136 8.386 7.914L16 5.884V4.5C16 4.10218 15.842 3.72064 15.5607 3.43934C15.2794 3.15804 14.8978 3 14.5 3H11V2.5C11 2.10218 10.842 1.72064 10.5607 1.43934C10.2794 1.15804 9.89782 1 9.5 1H6.5ZM6.5 2H9.5C9.63261 2 9.75979 2.05268 9.85355 2.14645C9.94732 2.24022 10 2.36739 10 2.5V3H6V2.5C6 2.36739 6.05268 2.24022 6.14645 2.14645C6.24021 2.05268 6.36739 2 6.5 2Z" />
                            <path d="M0 13.5C0 13.8978 0.158035 14.2793 0.43934 14.5606C0.720644 14.8419 1.10218 15 1.5 15H14.5C14.8978 15 15.2794 14.8419 15.5607 14.5606C15.842 14.2793 16 13.8978 16 13.5V6.84998L8.129 8.94698C8.04448 8.96955 7.95552 8.96955 7.871 8.94698L0 6.84998V13.5Z" />
                        </svg>
                        <span class="ms-2">Categories</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Applications">
                        <li><a class="ms-link" href="{{ route('categories') }}">Category</a></li>
                        <li><a class="ms-link" href="{{ route('subcategories') }}">SubCategory</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Account" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z" />
                            <path class="fill-secondary" d="M8.5 11C8.5 11 8 11 8 10.5C8 10 8.5 8.5 11 8.5C13.5 8.5 14 10 14 10.5C14 11 13.5 11 13.5 11H8.5ZM11 8C11.3978 8 11.7794 7.84196 12.0607 7.56066C12.342 7.27936 12.5 6.89782 12.5 6.5C12.5 6.10218 12.342 5.72064 12.0607 5.43934C11.7794 5.15804 11.3978 5 11 5C10.6022 5 10.2206 5.15804 9.93934 5.43934C9.65804 5.72064 9.5 6.10218 9.5 6.5C9.5 6.89782 9.65804 7.27936 9.93934 7.56066C10.2206 7.84196 10.6022 8 11 8V8Z" />
                        </svg>
                        <span class="ms-2">District</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Account">
                        <li><a class="ms-link" href="{{ route('district') }}">District</a></li>
                        <li><a class="ms-link" href="{{ route('subdistrict') }}">SubDistrict</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Post" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path class="fill-secondary" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        <span class="ms-2">Posts</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Post">
                        <li><a class="ms-link" href="{{ route('create.post') }}">Add Post</a></li>
                        <li><a class="ms-link" href="{{ route('all.post') }}">All Posts</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Setting" href="#">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 3C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V12C15 12.2652 14.8946 12.5196 14.7071 12.7071C14.5196 12.8946 14.2652 13 14 13H2C1.73478 13 1.48043 12.8946 1.29289 12.7071C1.10536 12.5196 1 12.2652 1 12V4C1 3.73478 1.10536 3.48043 1.29289 3.29289C1.48043 3.10536 1.73478 3 2 3H14ZM2 2C1.46957 2 0.960859 2.21071 0.585786 2.58579C0.210714 2.96086 0 3.46957 0 4L0 12C0 12.5304 0.210714 13.0391 0.585786 13.4142C0.960859 13.7893 1.46957 14 2 14H14C14.5304 14 15.0391 13.7893 15.4142 13.4142C15.7893 13.0391 16 12.5304 16 12V4C16 3.46957 15.7893 2.96086 15.4142 2.58579C15.0391 2.21071 14.5304 2 14 2H2Z" />
                            <path class="fill-secondary" d="M2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H4.5C4.63261 5 4.75979 5.05268 4.85355 5.14645C4.94732 5.24021 5 5.36739 5 5.5V6.5C5 6.63261 4.94732 6.75979 4.85355 6.85355C4.75979 6.94732 4.63261 7 4.5 7H2.5C2.36739 7 2.24021 6.94732 2.14645 6.85355C2.05268 6.75979 2 6.63261 2 6.5V5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H7.5C7.63261 8 7.75979 8.05268 7.85355 8.14645C7.94732 8.24021 8 8.36739 8 8.5C8 8.63261 7.94732 8.75979 7.85355 8.85355C7.75979 8.94732 7.63261 9 7.5 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H3.5C3.63261 10 3.75979 10.0527 3.85355 10.1464C3.94732 10.2402 4 10.3674 4 10.5C4 10.6326 3.94732 10.7598 3.85355 10.8536C3.75979 10.9473 3.63261 11 3.5 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5ZM5 10.5C5 10.3674 5.05268 10.2402 5.14645 10.1464C5.24021 10.0527 5.36739 10 5.5 10H6.5C6.63261 10 6.75979 10.0527 6.85355 10.1464C6.94732 10.2402 7 10.3674 7 10.5C7 10.6326 6.94732 10.7598 6.85355 10.8536C6.75979 10.9473 6.63261 11 6.5 11H5.5C5.36739 11 5.24021 10.9473 5.14645 10.8536C5.05268 10.7598 5 10.6326 5 10.5ZM8 10.5C8 10.3674 8.05268 10.2402 8.14645 10.1464C8.24021 10.0527 8.36739 10 8.5 10H9.5C9.63261 10 9.75979 10.0527 9.85355 10.1464C9.94732 10.2402 10 10.3674 10 10.5C10 10.6326 9.94732 10.7598 9.85355 10.8536C9.75979 10.9473 9.63261 11 9.5 11H8.5C8.36739 11 8.24021 10.9473 8.14645 10.8536C8.05268 10.7598 8 10.6326 8 10.5ZM11 10.5C11 10.3674 11.0527 10.2402 11.1464 10.1464C11.2402 10.0527 11.3674 10 11.5 10H12.5C12.6326 10 12.7598 10.0527 12.8536 10.1464C12.9473 10.2402 13 10.3674 13 10.5C13 10.6326 12.9473 10.7598 12.8536 10.8536C12.7598 10.9473 12.6326 11 12.5 11H11.5C11.3674 11 11.2402 10.9473 11.1464 10.8536C11.0527 10.7598 11 10.6326 11 10.5Z" />
                        </svg>
                        <span class="ms-2">Settings</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Setting">
                        <li><a class="ms-link" href="{{ route('social.setting') }}">Social Setting</a></li>
                        <li><a class="ms-link" href="{{ route('seo.setting') }}">SEO Setting</a></li>
                        <li><a class="ms-link" href="{{ route('prayer.setting') }}">Prayer Setting</a></li>
                        <li><a class="ms-link" href="{{ route('livetv.setting') }}">Live TV Setting</a></li>
                        <li><a class="ms-link" href="{{ route('notice.setting') }}">Notice Setting</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Website" href="#">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary" d="M3 4.5C3 4.36739 3.05268 4.24021 3.14645 4.14645C3.24021 4.05268 3.36739 4 3.5 4H9.5C9.63261 4 9.75979 4.05268 9.85355 4.14645C9.94732 4.24021 10 4.36739 10 4.5C10 4.63261 9.94732 4.75979 9.85355 4.85355C9.75979 4.94732 9.63261 5 9.5 5H3.5C3.36739 5 3.24021 4.94732 3.14645 4.85355C3.05268 4.75979 3 4.63261 3 4.5ZM3 6.5C3 6.36739 3.05268 6.24021 3.14645 6.14645C3.24021 6.05268 3.36739 6 3.5 6H9.5C9.63261 6 9.75979 6.05268 9.85355 6.14645C9.94732 6.24021 10 6.36739 10 6.5C10 6.63261 9.94732 6.75979 9.85355 6.85355C9.75979 6.94732 9.63261 7 9.5 7H3.5C3.36739 7 3.24021 6.94732 3.14645 6.85355C3.05268 6.75979 3 6.63261 3 6.5ZM3 8.5C3 8.36739 3.05268 8.24021 3.14645 8.14645C3.24021 8.05268 3.36739 8 3.5 8H9.5C9.63261 8 9.75979 8.05268 9.85355 8.14645C9.94732 8.24021 10 8.36739 10 8.5C10 8.63261 9.94732 8.75979 9.85355 8.85355C9.75979 8.94732 9.63261 9 9.5 9H3.5C3.36739 9 3.24021 8.94732 3.14645 8.85355C3.05268 8.75979 3 8.63261 3 8.5ZM3 10.5C3 10.3674 3.05268 10.2402 3.14645 10.1464C3.24021 10.0527 3.36739 10 3.5 10H9.5C9.63261 10 9.75979 10.0527 9.85355 10.1464C9.94732 10.2402 10 10.3674 10 10.5C10 10.6326 9.94732 10.7598 9.85355 10.8536C9.75979 10.9473 9.63261 11 9.5 11H3.5C3.36739 11 3.24021 10.9473 3.14645 10.8536C3.05268 10.7598 3 10.6326 3 10.5ZM3 12.5C3 12.3674 3.05268 12.2402 3.14645 12.1464C3.24021 12.0527 3.36739 12 3.5 12H9.5C9.63261 12 9.75979 12.0527 9.85355 12.1464C9.94732 12.2402 10 12.3674 10 12.5C10 12.6326 9.94732 12.7598 9.85355 12.8536C9.75979 12.9473 9.63261 13 9.5 13H3.5C3.36739 13 3.24021 12.9473 3.14645 12.8536C3.05268 12.7598 3 12.6326 3 12.5ZM11.5 4C11.3674 4 11.2402 4.05268 11.1464 4.14645C11.0527 4.24021 11 4.36739 11 4.5C11 4.63261 11.0527 4.75979 11.1464 4.85355C11.2402 4.94732 11.3674 5 11.5 5H12.5C12.6326 5 12.7598 4.94732 12.8536 4.85355C12.9473 4.75979 13 4.63261 13 4.5C13 4.36739 12.9473 4.24021 12.8536 4.14645C12.7598 4.05268 12.6326 4 12.5 4H11.5ZM11.5 6C11.3674 6 11.2402 6.05268 11.1464 6.14645C11.0527 6.24021 11 6.36739 11 6.5C11 6.63261 11.0527 6.75979 11.1464 6.85355C11.2402 6.94732 11.3674 7 11.5 7H12.5C12.6326 7 12.7598 6.94732 12.8536 6.85355C12.9473 6.75979 13 6.63261 13 6.5C13 6.36739 12.9473 6.24021 12.8536 6.14645C12.7598 6.05268 12.6326 6 12.5 6H11.5ZM11.5 8C11.3674 8 11.2402 8.05268 11.1464 8.14645C11.0527 8.24021 11 8.36739 11 8.5C11 8.63261 11.0527 8.75979 11.1464 8.85355C11.2402 8.94732 11.3674 9 11.5 9H12.5C12.6326 9 12.7598 8.94732 12.8536 8.85355C12.9473 8.75979 13 8.63261 13 8.5C13 8.36739 12.9473 8.24021 12.8536 8.14645C12.7598 8.05268 12.6326 8 12.5 8H11.5ZM11.5 10C11.3674 10 11.2402 10.0527 11.1464 10.1464C11.0527 10.2402 11 10.3674 11 10.5C11 10.6326 11.0527 10.7598 11.1464 10.8536C11.2402 10.9473 11.3674 11 11.5 11H12.5C12.6326 11 12.7598 10.9473 12.8536 10.8536C12.9473 10.7598 13 10.6326 13 10.5C13 10.3674 12.9473 10.2402 12.8536 10.1464C12.7598 10.0527 12.6326 10 12.5 10H11.5ZM11.5 12C11.3674 12 11.2402 12.0527 11.1464 12.1464C11.0527 12.2402 11 12.3674 11 12.5C11 12.6326 11.0527 12.7598 11.1464 12.8536C11.2402 12.9473 11.3674 13 11.5 13H12.5C12.6326 13 12.7598 12.9473 12.8536 12.8536C12.9473 12.7598 13 12.6326 13 12.5C13 12.3674 12.9473 12.2402 12.8536 12.1464C12.7598 12.0527 12.6326 12 12.5 12H11.5Z" />
                            <path d="M2.354 0.645978C2.29798 0.589911 2.22943 0.547966 2.154 0.523602C2.07858 0.499238 1.99845 0.493154 1.92021 0.505852C1.84197 0.518549 1.76787 0.549665 1.70403 0.596631C1.64018 0.643598 1.58842 0.70507 1.553 0.775978L1.053 1.77598C1.01815 1.84551 1.00001 1.92221 1 1.99998V15H0.5C0.367392 15 0.240215 15.0527 0.146447 15.1464C0.0526784 15.2402 0 15.3674 0 15.5C0 15.6326 0.0526784 15.7598 0.146447 15.8535C0.240215 15.9473 0.367392 16 0.5 16H15.5C15.6326 16 15.7598 15.9473 15.8536 15.8535C15.9473 15.7598 16 15.6326 16 15.5C16 15.3674 15.9473 15.2402 15.8536 15.1464C15.7598 15.0527 15.6326 15 15.5 15H15V1.99998C15 1.92221 14.9818 1.84551 14.947 1.77598L14.447 0.775978C14.4115 0.705251 14.3598 0.643947 14.296 0.597106C14.2323 0.550265 14.1583 0.519224 14.0802 0.506534C14.0021 0.493843 13.9221 0.499867 13.8468 0.524108C13.7715 0.54835 13.703 0.590117 13.647 0.645978L13 1.29298L12.354 0.645978C12.3076 0.599415 12.2524 0.562472 12.1916 0.537266C12.1309 0.512059 12.0658 0.499084 12 0.499084C11.9342 0.499084 11.8691 0.512059 11.8084 0.537266C11.7476 0.562472 11.6924 0.599415 11.646 0.645978L11 1.29298L10.354 0.645978C10.3076 0.599415 10.2524 0.562472 10.1916 0.537266C10.1309 0.512059 10.0658 0.499084 10 0.499084C9.93423 0.499084 9.86911 0.512059 9.80837 0.537266C9.74762 0.562472 9.69245 0.599415 9.646 0.645978L9 1.29298L8.354 0.645978C8.30755 0.599415 8.25238 0.562472 8.19163 0.537266C8.13089 0.512059 8.06577 0.499084 8 0.499084C7.93423 0.499084 7.86911 0.512059 7.80837 0.537266C7.74762 0.562472 7.69245 0.599415 7.646 0.645978L7 1.29298L6.354 0.645978C6.30755 0.599415 6.25238 0.562472 6.19163 0.537266C6.13089 0.512059 6.06577 0.499084 6 0.499084C5.93423 0.499084 5.86911 0.512059 5.80837 0.537266C5.74762 0.562472 5.69245 0.599415 5.646 0.645978L5 1.29298L4.354 0.645978C4.30755 0.599415 4.25238 0.562472 4.19163 0.537266C4.13089 0.512059 4.06577 0.499084 4 0.499084C3.93423 0.499084 3.86911 0.512059 3.80837 0.537266C3.74762 0.562472 3.69245 0.599415 3.646 0.645978L3 1.29298L2.354 0.645978ZM2.137 1.84398L2.647 2.35398C2.74076 2.44771 2.86792 2.50037 3.0005 2.50037C3.13308 2.50037 3.26024 2.44771 3.354 2.35398L4 1.70698L4.646 2.35398C4.69245 2.40054 4.74762 2.43748 4.80837 2.46269C4.86911 2.4879 4.93423 2.50087 5 2.50087C5.06577 2.50087 5.13089 2.4879 5.19163 2.46269C5.25238 2.43748 5.30755 2.40054 5.354 2.35398L6 1.70698L6.646 2.35398C6.69245 2.40054 6.74762 2.43748 6.80837 2.46269C6.86911 2.4879 6.93423 2.50087 7 2.50087C7.06577 2.50087 7.13089 2.4879 7.19163 2.46269C7.25238 2.43748 7.30755 2.40054 7.354 2.35398L8 1.70698L8.646 2.35398C8.69245 2.40054 8.74762 2.43748 8.80837 2.46269C8.86911 2.4879 8.93423 2.50087 9 2.50087C9.06577 2.50087 9.13089 2.4879 9.19163 2.46269C9.25238 2.43748 9.30755 2.40054 9.354 2.35398L10 1.70698L10.646 2.35398C10.6924 2.40054 10.7476 2.43748 10.8084 2.46269C10.8691 2.4879 10.9342 2.50087 11 2.50087C11.0658 2.50087 11.1309 2.4879 11.1916 2.46269C11.2524 2.43748 11.3076 2.40054 11.354 2.35398L12 1.70698L12.646 2.35398C12.6924 2.40054 12.7476 2.43748 12.8084 2.46269C12.8691 2.4879 12.9342 2.50087 13 2.50087C13.0658 2.50087 13.1309 2.4879 13.1916 2.46269C13.2524 2.43748 13.3076 2.40054 13.354 2.35398L13.863 1.84398L14 2.11798V15H2V2.11798L2.137 1.84398Z" />
                        </svg>
                        <span class="ms-2">Website</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Website">
                        <li><a class="ms-link" href="{{ route('add.website') }}">Add Website Link</a></li>
                        <li><a class="ms-link" href="{{ route('all.website') }}">All Website Links</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Gallery" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                        <span class="ms-2">Gallery</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Gallery">
                        <li><a class="ms-link" href="{{ route('photo.gallery') }}">Photo Gallery</a></li>
                        <li><a class="ms-link" href="{{ route('video.gallery') }}">Video Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar: footer link -->
        <!-- sidebar: footer link -->

    </div>
</div>
