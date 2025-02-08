<header class="relative isolate z-10 bg-white">
    <div class="top-bar bg-secondary">
        <div class="md:flex md:flex-wrap">
            <div class="w-full md:w-1/2 ms-skew-16">
                <div class="w-full bg-primary skew-this py-1 md:py-3 md:pr-6">
                    <div class="left-container text-center md:flex md:items-center -skew-x-12">
                        <a class="text-white mr-4" href="tel:918428080909">
                            <svg class="inline w-6 h-6 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <span> info@iskillssolutions.com </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 bg-secondary py-1 md:py-3">
                <div class="right-container text-center md:text-right">
                    <a class="text-white mr-4" href="mailto:info@iskillssolutions.com">
                        <svg class="inline w-6 h-6 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <span> +91 84280 80909 </span>
                    </a>
                    {{-- 
                    <a class="text-white mr-4" href="{{ route('login') }}">
                        <svg class="inline w-6 h-6 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <span> Login </span>
                    </a>
                    --}}
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="relative isolate z-10 bg-white">
        <nav class="container mx-auto flex items-center justify-between p-2 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{route('homepage')}}" class="-m-1.5 p-1.5">
                    <span class="sr-only">Iskills Solutions</span>
                    <img width="195" height="96" class="w-auto h-20 object-fit"
                    src="{{ asset('images/iskills-solutions-logo-optimized.png') }}" alt="iskills-solutions-logo">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    @click="open = true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div x-data="{ deskMenu: false }" @keydown.escape="onEscape">
                    <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                        @click="deskMenu = true" :aria-expanded="open.toString()">
                        Courses
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
    
    
                    <div x-show="deskMenu" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-1"
                        x-description="'Product' flyout menu, show/hide based on flyout menu state."
                        class="absolute inset-x-0 top-0 -z-10 bg-white pt-14 shadow-lg ring-1 ring-gray-900/5"
                        x-ref="panel" @click.away="deskMenu = false" style="display: none;">
                        <div class="mx-auto grid max-w-7xl grid-cols-4 gap-x-4 px-6 py-10 lg:px-8 xl:gap-x-8">
                            <div class="group relative rounded-lg p-6 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z"></path>
                                    </svg>
                                </div>
                                <a href="{{route('coursesByCategory', ['cat' => 1])}}" class="mt-6 block font-semibold text-gray-900">
                                    Basic Iskills Courses
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Get a better understanding where your traffic is coming from
                                </p>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59">
                                        </path>
                                    </svg>
                                </div>
                                <a href="{{route('coursesByCategory', ['cat' => 2])}}" class="mt-6 block font-semibold text-gray-900">
                                    Advanced Courses
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool</p>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33">
                                        </path>
                                    </svg>
                                </div>
                                <a href="{{route('coursesByCategory', ['cat' => 3])}}" class="mt-6 block font-semibold text-gray-900">
                                    AAPC
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z">
                                        </path>
                                    </svg>
                                </div>
                                <a href="{{route('coursesByCategory', ['cat' => 4])}}" class="mt-6 block font-semibold text-gray-900">
                                    AHIMA
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers' data will be safe and secure</p>
                            </div>
    
                        </div>
                        <div class="bg-secondary h-1"></div>
                    </div>
    
                </div>
    
                <a href="{{ route('corporateTraining') }}" class="text-sm font-semibold leading-6 text-gray-900">Corporate Training</a>
                <a href="{{ route('placements') }}" class="text-sm font-semibold leading-6 text-gray-900">Placements</a>
                <a href="{{ route('careers') }}" class="text-sm font-semibold leading-6 text-gray-900">Career</a>
                <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-gray-900">About</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{ route('contact') }}" class="bg-primary px-5 py-3 rounded-full text-sm font-semibold leading-6 text-white"> Contact Us </a>
            </div>
        </nav>
        <div x-description="Mobile menu, show/hide based on menu open state." class="lg:hidden" x-ref="dialog"
            x-show="open" aria-modal="true" style="display: none;">
            <div x-description="Background backdrop, show/hide based on slide-over state." class="fixed inset-0 z-10">
            </div>
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                @click.away="open = false">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Iskills Solutions</span>
                        <img width="195" height="96" class="h-20" src="{{ asset('images/iskills-solutions-logo-optimized.png') }}" alt="iskills-solutions-logo">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <div x-data="{ open: false }" class="-mx-3">
                                <button type="button"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                    aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    Courses
                                    <svg class="h-5 w-5 flex-none"
                                        x-description="Expand/collapse icon, toggle classes based on menu open state."
                                        x-state:on="Open" x-state:off="Closed" :class="{ 'rotate-180': open }"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="mt-2 space-y-2"
                                    x-description="'Product' sub-menu, show/hide based on menu state." id="disclosure-1"
                                    x-show="open" style="display: none;">
                                    <a href="{{route('coursesByCategory', ['cat' => 1])}}" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Basic Iskills Courses</a>
                                    <a href="{{route('coursesByCategory', ['cat' => 2])}}" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Advanced Courses</a>
                                    <a href="{{route('coursesByCategory', ['cat' => 3])}}" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">AAPC</a>
                                    <a href="{{route('coursesByCategory', ['cat' => 4])}}" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">AHIMA</a>
                                </div>
                            </div>
                            <a href="{{route('corporateTraining')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Corporate Training</a>
                            <a href="{{ route('placements') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Placements</a>
                            <a href="{{ route('careers') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Career</a>
                            <a href="{{ route('about') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About</a>
                        </div>
                        <div class="py-6">
                            <a href="{{ route('contact') }}" class="-mx-3 block bg-primary rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-secondary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</header>




