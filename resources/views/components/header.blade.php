<header class="w-100 min-w-full fixed z-50">
        <div id="top-bar"
            class="bg-lime-600 text-white w-100 p-5 flex items-center justify-center transition-transform duration-300">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="flex flex-row items-center gap-10 justify-between">
                    <div class="flex flex-row items-center gap-10 text-sm">
                        <div class="flex gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-map-pin">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            "Test Road, Volta Redonda, RJ"
                        </div>
                        <div class="flex gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="mailto:lucasporfirioa@gmail.com">lucasporfirioa@gmail.com</a>
                        </div>
                        <div class="flex gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-smartphone">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            <a href="tel:(24)998824755">(24) 99882-4755</a>
                        </div>
                    </div>
                    <div class="md:flex md:flex-nowrap md:items-stretch md:w-auto md:max-w-full">
                        <div class="flex gap-10">
                            <a href="{{ route('login') }}">Restricted area</a>
                            <div class="flex gap-2">
                                <span>Social media</span>
                                <a target="_blank" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                </a>
                                <a target="_blank" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                        </rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="nav-bar"
            class="bg-lime-600/50 text-slate-500 w-100 p-0 text-white flex items-center justify-center ">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="flex items-center justify-between mx-auto max-w-screen-x gap-2">
                    <div>
                        <img src="{{ url('cuidar_files/logo.png') }}" alt="" height="20"
                            class="max-w-xs ">
                    </div>
                    <div class="flex items-center content-center ">
                        <ul class="flex gap-10 text-lg font-bold items-start justify-center">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Who we are?
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Adoption
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button class="p-4 px-6 bg-lime-500 rounded hover:brightness-105">DISCOVER THE SERVICES</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>