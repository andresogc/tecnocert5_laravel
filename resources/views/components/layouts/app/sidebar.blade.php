<div>


    <!-- Start::Off-canvas sidebar-->
    <div id="hs-overlay-chat" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right overflow-auto" tabindex="-1">
        <div class="ti-offcanvas-header !py-2 rounded-none">
            <h5 class="text-[.875rem] uppercase mb-0 text-defaulttextcolor font-semibold" id="sidebarLabel">
                Notifications</h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-chat">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-fill leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body rounded-none p-0">
            <ul class="nav nav-tabs  p-4" role="tablist">
                <div class=" rtl:space-x-reverse" aria-label="Tabs" role="tablist" role="tablist">
                    <button type="button"
                        class="hs-tab-active:bg-primary w-full mb-2 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white  bg-light  font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  active"
                        id="chat-item" data-hs-tab="#chat" aria-controls="chat" role="tab">
                        <i class="fe fe-message-circle text-[.9375rem] me-2 inline-flex"></i>Chat
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-primary w-full mb-2  rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
                        id="notification-item" data-hs-tab="#notification" aria-controls="notification" role="tab">
                        <i class="fe fe-bell text-[.9375rem] me-2 inline-flex"></i> Notifications
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-primary w-full mb-0 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
                        id="friends-item" data-hs-tab="#friends" aria-controls="friends" role="tab">
                        <i class="fe fe-users text-[.9375rem] me-2 inline-flex"></i>Friends
                    </button>
                </div>
            </ul>
            <div class="tab-content !border-0 ">
                <div class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 show border-defaultborder dark:border-defaultborder/10 "
                    id="chat" role="tabpanel" aria-labelledby="chat-item">
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-primary avatar-rounded avatar-md">CH</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>New Websites is Created</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">30 mins ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-danger avatar-rounded avatar-md">N</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Prepare For the Next Project</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">2 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-info avatar-rounded avatar-md">S</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Decide the live Discussion</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">3 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-warning avatar-rounded avatar-md">K</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Meeting at 3:00 pm</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">4 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-success avatar-rounded avatar-md">R</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">1 day ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-pinkmain avatar-rounded avatar-md">MS</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">1 day ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
                        <div class="">
                            <span class="avatar bg-purplemain avatar-rounded avatar-md">L</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">45 minutes ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list flex border-b border-defaultborder dark:border-defaultborder/10 items-center p-3">
                        <div class="">
                            <span class="avatar bg-indigomain avatar-rounded avatar-md">U</span>
                        </div>
                        <a class="w-full ms-3" href="javascript:void(0);">
                            <p class="mb-0 flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                                    <small class="text-textmuted ms-auto">2 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  hidden"
                    id="notification" role="tabpanel" aria-labelledby="notification-item">
                    <div class="ti-list-group ti-list-group-flush ">
                        <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/1.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-textmuted">
                                    3 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/2.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-textmuted">
                                    5 hour ago
                                </div>
                            </div>
                        </div>
                        <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/3.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-textmuted">
                                    45 minutes ago
                                </div>
                            </div>
                        </div>
                        <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/4.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-textmuted">
                                    3 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/5.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-textmuted">
                                    5 hour ago
                                </div>
                            </div>
                        </div>
                        <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-textmuted">
                                    45 minutes ago
                                </div>
                            </div>
                        </div>
                        <div
                            class="ti-list-group-item  !border-b border-defaultborder dark:border-defaultborder/10 !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/7.jpg')}}" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Olivia</strong> Hey! there I' am available....
                                <div class="small text-textmuted">
                                    12 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  active hidden"
                    id="friends" role="tabpanel" aria-labelledby="friends-item">
                    <div class="ti-list-group ti-list-group-flush ">
                        <div class="ti-list-group-item flex !border-t-0 items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/1.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/2.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/5.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/8.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/8.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/9.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/10.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/11.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/12.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/2.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/2.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="ti-list-group-item flex  items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/3.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div
                            class="ti-list-group-item flex !border-b border-defaultborder dark:border-defaultborder/10 items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="{{asset('admin/app/assets/images/faces/4.jpg')}}" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                    data-hs-overlay="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::Off-canvas sidebar-->

    <!--chat-modal-->
    <div class="hs-overlay hidden ti-modal" id="chatmodel">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
            <div class="ti-modal-content chat !border-0">
                <div class="box overflow-hidden !mb-0 !border-0 !shadow-none">
                    <div class="action-header  flex items-center clearfix">
                        <div class="float-start xs:hidden flex">
                            <div class="avatar avatar-lg rounded-circle me-3"> <img
                                    src="{{asset('admin/app/assets/images/faces/6.jpg')}}" class="rounded-circle user_img" alt="img">
                            </div>
                            <div class="items-center">
                                <h5 class="text-fixed-white mb-0">Daneil Scott</h5> <span
                                    class="dot-label bg-success"></span><span
                                    class="me-3 text-fixed-white">online</span>
                            </div>
                        </div>
                        <ul class="ah-actions actions ms-auto items-center float-end">
                            <li class="call-icon"> <a href="#" class="hidden md:block phone-button"
                                    data-hs-overlay="#audiomodal"> <i class="fe fe-phone"></i> </a> </li>
                            <li class="video-icon"> <a href="#" class="hidden md:block phone-button"
                                    data-hs-overlay="#videomodal"> <i class="fe fe-video"></i> </a> </li>
                            <li class="hs-dropdown ti-dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="true"> <i
                                        class="fe fe-more-vertical"></i> </a>
                                <ul class="ti-dropdown-menu hs-dropdown-menu dropdown-menu-end hidden">
                                    <li class="ti-dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                                    <li class="ti-dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                                    <li class="ti-dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                                    <li class="ti-dropdown-item"><i class="fa fa-ban"></i> Block</li>
                                </ul>
                            </li>
                            <li> <a href="#" class="" data-bs-dismiss="modal" aria-label="Close"> <i
                                        class="fe fe-x-circle text-fixed-white"></i> </a> </li>
                        </ul>
                    </div>
                    <div class="box-body msg_card_body">
                        <div class="chat-box-single-line"> <abbr
                                class="timestamp !text-defaulttextcolor dark:!text-defaulttextcolor/70">February
                                1st, 2019</abbr> </div>
                        <div class="flex justify-start">
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                            <div class="msg_cotainer"> Hi, how are you Jenna Side? <span class="msg_time">8:40 AM,
                                    Today</span> </div>
                        </div>
                        <div class="flex justify-end ">
                            <div class="msg_cotainer_send"> Hi Connor Paige i am good tnx how about you? <span
                                    class="msg_time_send">8:55 AM, Today</span> </div>
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/9.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                        </div>
                        <div class="flex justify-start ">
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                            <div class="msg_cotainer"> I am good too, thank you for your chat template <span
                                    class="msg_time">9:00 AM,
                                    Today</span> </div>
                        </div>
                        <div class="flex justify-end ">
                            <div class="msg_cotainer_send"> You welcome Connor Paige <span class="msg_time_send">9:05
                                    AM,
                                    Today</span>
                            </div>
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/9.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                        </div>
                        <div class="flex justify-start ">
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                            <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM,
                                    Today</span> </div>
                        </div>
                        <div class="flex justify-end mb-4">
                            <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and
                                I will give <span class="msg_time_send">9:10 AM, Today</span> </div>
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/9.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                        </div>
                        <div class="flex justify-start ">
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                            <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM,
                                    Today</span> </div>
                        </div>
                        <div class="flex justify-end mb-4">
                            <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and
                                I will give <span class="msg_time_send">9:10 AM, Today</span> </div>
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/9.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                        </div>
                        <div class="flex justify-start ">
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                            <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM,
                                    Today</span> </div>
                        </div>
                        <div class="flex justify-end mb-4">
                            <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and
                                I will give <span class="msg_time_send">9:10 AM, Today</span> </div>
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/9.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                        </div>
                        <div class="flex justify-start">
                            <div class="img_cont_msg"> <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}"
                                    class="rounded-circle user_img_msg" alt="img"> </div>
                            <div class="msg_cotainer"> Okay Bye, text you later.. <span class="msg_time">9:12 AM,
                                    Today</span> </div>
                        </div>
                    </div>
                    <div class="box-footer border-t">
                        <div class="msb-reply flex">
                            <div class="input-group"> <input type="text" class="form-control " placeholder="Typing....">
                                <button type="button" class="ti-btn ti-btn-primary-full !mb-0"> <i
                                        class="far fa-paper-plane" aria-hidden="true"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--chat-modal-->

    <!--Video Modal -->
    <div id="videomodal" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
            <div class="ti-modal-content !bg-[#3b4863] !border-0">
                <div class="mx-auto text-center p-[3rem]">
                    <button type="button"
                        class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-white"
                        data-hs-overlay="#videomodal">
                        <span class="sr-only">Close</span>
                        <i class="bi bi-x"></i>
                    </button>
                    <h5 class="text-white">Valex Video call</h5>
                    <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}" class="rounded-full !h-[90px]  mt-4 mb-3 inline-flex"
                        alt="img">
                    <h4 class="mb-1 font-semibold text-white">Daneil Scott</h4>
                    <h6 class="loading animate-loadingtext text-white">Calling...</h6>
                    <div class="mt-[3rem] mb-[2rem]">
                        <div class="grid grid-cols-12 gap-x-4">
                            <div class="col-span-4">
                                <a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
                                    <i class="fas fa-video-slash"></i>
                                </a>
                            </div>
                            <div class="col-span-4">
                                <a class="icon icon-shape rounded-full text-white mb-0" href="javascript:void(0);"
                                    data-hs-overlay="#videomodal">
                                    <i class="fas fa-phone !bg-danger !text-white"></i>
                                </a>
                            </div>
                            <div class="col-span-4">
                                <a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
                                    <i class="fas fa-microphone-slash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- modal-body -->
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!--End modal -->

    <!-- Audio Modal -->
    <div id="audiomodal" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
            <div class="ti-modal-content border-0">
                <div class="mx-auto text-center p-[3rem]">
                    <button type="button"
                        class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-[#8c9097]"
                        data-hs-overlay="#audiomodal">
                        <span class="sr-only">Close</span>
                        <i class="bi bi-x"></i>
                    </button>
                    <h6 class="text-defaulttextcolor dark:text-defaulttextcolor/70">Valex Voice call</h6>
                    <img src="{{asset('admin/app/assets/images/faces/6.jpg')}}" class="rounded-full !h-[90px] mt-6 mb-4 inline-flex"
                        alt="img">
                    <h5 class="mb-1 font-medium text-defaulttextcolor dark:text-defaulttextcolor/70">Daneil Scott
                    </h5>
                    <h6 class="loading animate-loadingtext text-defaulttextcolor dark:text-defaulttextcolor/70">
                        Calling...</h6>
                    <div class="mt-[2rem] mb-[2rem]">
                        <div class="grid grid-cols-12 gap-x-4">
                            <div class="col-span-4">
                                <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                    <i class="fas fa-volume-up !bg-light !text-defaulttextcolor"></i>
                                </a>
                            </div>
                            <div class="col-span-4">
                                <a class="icon icon-shape rounded-circle text-white mb-0" href="javascript:void(0);"
                                    data-hs-overlay="#audiomodal">
                                    <i class="fas fa-phone text-white !bg-success"></i>
                                </a>
                            </div>
                            <div class="col-span-4">
                                <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                                    <i class="fas fa-microphone-slash !bg-light !text-defaulttextcolor"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- modal-body -->
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!--End modal -->
    <!-- End Country-selector modal -->

    <!--Main-Sidebar-->

    <aside class="app-sidebar" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="{{ route('dashboard') }}" class="header-logo">
                <img src="{{asset('main-page/images/logo.svg')}}" alt="logo" class="desktop-logo" style="width:111">
                <img src="{{asset('main-page/images/logo.svg')}}" alt="logo" class="toggle-logo" style="width:111">
                <img src="{{asset('main-page/images/logo.svg')}}" alt="logo" class="desktop-dark" style="width:111">
                <img src="{{asset('main-page/images/logo.svg')}}" alt="logo" class="toggle-dark" style="width:111">
                <img src="{{asset('main-page/images/logo.svg')}}" alt="logo" class="desktop-white" style="width:111">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    {{-- <li class="slide__category"><span class="category-name">Main</span></li> --}}
                    <!-- End::slide__category -->

                    {{-- <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Dashboard</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0);">Dashboard</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('dashboard') }}" class="side-menu__item">Sales</a>
                            </li>
                           
                            <li class="slide">
                                <a href="index5.html" class="side-menu__item">Analytics</a>
                            </li>
                            <li class="slide">
                                <a href="index11.html" class="side-menu__item">Personal</a>
                            </li>
                        </ul>
                    </li> --}}

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Módulos</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                   {{--  <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3" />
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                            </svg>
                            <span class="side-menu__label">Panel</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0);">Panel</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('homeSections',['pageSection' => 1]) }}" class="side-menu__item">Editar sección inicio</a>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- End::slide -->


                    <!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg>
									<span class="side-menu__label">Panel</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Panel</a>
									</li>
									
									{{-- <li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Editar página web
											<i class="fe fe-chevron-right side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Página principal
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child2">
													<li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 1]) }}" class="side-menu__item">Sección 1 - Inicio</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 5]) }}" class="side-menu__item">Sección 2 - Video</a>
													</li>
													<li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 6]) }}" class="side-menu__item">Sección 3 - Sobre nosotros</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 7]) }}" class="side-menu__item">Sección 4 - Servicios</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 8]) }}" class="side-menu__item">Sección 5 - Clientes</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 9]) }}" class="side-menu__item">Sección 6 - Imagenes</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 10]) }}" class="side-menu__item">Sección 7 - Preguntas frecuentes</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('homeSections', ['pageSection' => 11]) }}" class="side-menu__item">Sección 8 - Contacto</a>
													</li>
												</ul>
											</li> 

                                            <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Legales
													<i class="fe fe-chevron-right side-menu__angle"></i>
                                                </a>
												<ul class="slide-menu child2">
													<li class="slide">
														<a href="{{ route('legalSections',['pageSection' => 2]) }}" class="side-menu__item">Sección - Políticas de privacidad</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('legalSections',['pageSection' => 4]) }}" class="side-menu__item">Sección - Aviso legal</a>
													</li>
                                                    <li class="slide">
														<a href="{{ route('legalSections',['pageSection' => 3]) }}" class="side-menu__item">Sección - Términos y condiciones</a>
													</li>
												</ul>
											</li> 
                                             <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Vacantes
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="{{ route('post-sections') }}" class="side-menu__item">Publicación de Vacantes</a>
													</li>
												</ul>
											</li>
                                            
                                            <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Publicaciones
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="{{ route('post-sections') }}" class="side-menu__item">Novedades Técnicas</a>
													</li>
												</ul>
											</li>
                                            <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Legales
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="{{ route('post-sections') }}" class="side-menu__item">Legales</a>
													</li>
												</ul>
											</li>
										</ul>
									</li> --}}
                                    <li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Publicaciones
											<i class="fe fe-chevron-right side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											
                                             <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Vacantes
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="{{ route('vacancy-sections') }}" class="side-menu__item">Publicación de Vacantes</a>
													</li>
												</ul>
											</li>
                                            
                                            <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Publicaciones
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="{{ route('post-sections') }}" class="side-menu__item">Novedades Técnicas</a>
													</li>
												</ul>
											</li>
                                            <li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Legales
													<i class="fe fe-chevron-right side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="{{ route('legal-sections') }}" class="side-menu__item">Legales</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- End::slide -->



                    <!-- Start::slide -->
                    {{-- <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3" />
                                <path
                                    d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z" />
                            </svg>
                            <span class="side-menu__label">Reservaciones</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1 mega-menu">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0);">Reservaciones</a>
                            </li>
                            <li class="slide">
                                 <a href="{{ route('reservations') }}" class="side-menu__item">Lista</a> 
                            </li>
                            
                        </ul>
                    </li> --}}
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    {{-- <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z"
                                    opacity=".3" />
                                <path
                                    d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z" />
                                <circle cx="6.5" cy="11.5" r="1.5" />
                                <circle cx="9.5" cy="7.5" r="1.5" />
                                <circle cx="14.5" cy="7.5" r="1.5" />
                                <circle cx="17.5" cy="11.5" r="1.5" />
                            </svg>
                            <span class="side-menu__label">Advanced Ui</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0);">Advanced Ui</a>
                            </li>
                            <li class="slide">
                                <a href="accordions-collpase.html" class="side-menu__item">Accordions</a>
                            </li>
                            <li class="slide">
                                <a href="modals-closes.html" class="side-menu__item">Modals</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Timeline
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="timeline.html" class="side-menu__item">Timeline-1</a>
                                    </li>
                                    <li class="slide">
                                        <a href="timeline2.html" class="side-menu__item">Timeline-2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="stepper.html" class="side-menu__item">Stepper</a>
                            </li>
                            <li class="slide">
                                <a href="Indicators.html" class="side-menu__item">Indicators</a>
                            </li>
                            <li class="slide">
                                <a href="form-range.html" class="side-menu__item">Range Slider</a>
                            </li>
                            <li class="slide">
                                <a href="sweet-alerts.html" class="side-menu__item">Sweet Alerts</a>
                            </li>
                            <li class="slide">
                                <a href="ratings.html" class="side-menu__item">Ratings</a>
                            </li>
                            <li class="slide">
                                <a href="search.html" class="side-menu__item">Search</a>
                            </li>
                            <li class="slide">
                                <a href="userlist.html" class="side-menu__item">Userlist</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Blog
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="blog.html" class="side-menu__item">Blog</a>
                                    </li>
                                    <li class="slide">
                                        <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="blog-create.html" class="side-menu__item">Blog Create</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                            </li>
                            <li class="slide">
                                <a href="placeholders.html" class="side-menu__item">Skeleton</a>
                            </li>
                            <li class="slide">
                                <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- End::slide -->
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
    <!-- End Main-Sidebar-->
</div>