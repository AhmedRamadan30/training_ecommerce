<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Products</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="{{ route('admin.categories.index') }}"> Categories </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.brands.index') }}"> Brands </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                        <span>Apps</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                    <li>
                        <a href="apps_chat.html"> Chat </a>
                    </li>
                    <li>
                        <a href="apps_mailbox.html"> Mailbox  </a>
                    </li>
                    <li>
                        <a href="apps_todoList.html"> Todo List </a>
                    </li>
                    <li>
                        <a href="apps_notes.html"> Notes </a>
                    </li>
                    <li>
                        <a href="apps_scrumboard.html">Scrumboard</a>
                    </li>
                    <li>
                        <a href="apps_contacts.html"> Contacts </a>
                    </li>
                    <li>
                        <a href="#appInvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Invoice <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="appInvoice" data-parent="#app">
                            <li>
                                <a href="apps_invoice-list.html"> List </a>
                            </li>
                            <li>
                                <a href="apps_invoice-preview.html"> Preview </a>
                            </li>
                            <li>
                                <a href="apps_invoice-add.html"> Add </a>
                            </li>
                            <li>
                                <a href="apps_invoice-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="apps_calendar.html"> Calendar </a>
                    </li>
                </ul>
            </li>



        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
<!--  END SIDEBAR  -->
