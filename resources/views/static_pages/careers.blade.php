<x-app-layout>
    <section id="career-list" class="py-20">
        <div class="container">
            <h1 class="font-bold text-xl md:text-2xl text-center mb-6"> Career Opportunities At Iskills Solutions </h1>
        </div>
        <div class="max-w-7xl mx-auto">
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="relative overflow-hidden rounded-lg bg-white px-4 py-4 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>                              
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Job Opportunites</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900"> {{ count($careers) }} </p>
                    </dd>
                </div>
                <div class="relative overflow-hidden rounded-lg bg-white px-4 py-4 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>                              
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500"> Total Open Positions </p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900"> {{ $careers->sum('vacancies') }} </p>
                    </dd>
                </div>
                <div class="relative overflow-hidden rounded-lg bg-white px-4 py-4 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-primary p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Job Applications So Far</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900"> {{ $application_count }} </p>
                    </dd>
                </div>
            </dl>
        </div>
        <div class="max-w-7xl mx-auto">
            <div class="">
                <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                    @if (count($careers) > 0)
                        @foreach ($careers as $career)
                            <article class="relative isolate flex flex-col gap-8 lg:flex-row bg-white rounded-lg shadow">
                                <div
                                    class="relative rounded-lg aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0 overflow-hidden">
                                    <img src="/storage/{{$career->thumbnail}}" alt=""
                                        class="absolute inset-0 h-full w-full bg-gray-50 object-cover">
                                    @if ($career->tag)
                                        <span class="absolute top-2 right-2 z-10 rounded-full bg-accent px-3 py-1.5 font-medium text-gray-800"> {{ $career->tag }} </span>
                                    @endif
                                </div>
                                <div class="py-5">
                                    <div class="flex items-center gap-x-4 text-xs">
                                        <time datetime="2020-03-16" class="text-gray-500"> Posted On: {{ $career->created_at->format('d/m/Y') }} </time>
                                    </div>
                                    <div class="group relative">
                                        <h3
                                            class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                            <a href="{{ route('careerDetail', ['id' => $career->id]) }}">
                                                <span class="absolute inset-0"></span>
                                                {{ $career->designation }}
                                            </a>
                                        </h3>
                                        <p class="mt-5 text-sm leading-6 text-gray-600"> {{ $career->description }} </p>
                                    </div>
                                    <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                            <div class="relative flex items-center gap-x-4">
                                                <div class="flex justify-center items-center w-12 h-12 bg-accent rounded-full">
                                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>  
                                                </div>                                            
                                                <div class="text-sm leading-6">
                                                    <p class="font-semibold text-gray-900">
                                                        <a href="{{ route('careerDetail', ['id' => $career->id]) }}">
                                                            <span class="absolute inset-0"></span>
                                                            Expected Salary
                                                        </a>
                                                    </p>
                                                    <p class="text-gray-600"> {{ $career->salary }} </p>
                                                </div>
                                            </div>
                                            <div class="relative flex items-center gap-x-4">
                                                <div class="flex justify-center items-center w-12 h-12 bg-accent rounded-full">
                                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                    </svg>     
                                                </div>                                            
                                                <div class="text-sm leading-6">
                                                    <p class="font-semibold text-gray-900">
                                                        <a href="{{ route('careerDetail', ['id' => $career->id]) }}">
                                                            <span class="absolute inset-0"></span>
                                                            Vacancies Available
                                                        </a>
                                                    </p>
                                                    <p class="text-gray-600"> {{ $career->vacancies }} </p>
                                                </div>
                                            </div>
                                            <div class="relative flex items-center gap-x-4">
                                                <div class="flex justify-center items-center w-12 h-12 bg-accent rounded-full">
                                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                                                    </svg>                                                        
                                                </div>                                            
                                                <div class="text-sm leading-6">
                                                    <p class="font-semibold text-gray-900">
                                                        <a href="{{ route('careerDetail', ['id' => $career->id]) }}">
                                                            <span class="absolute inset-0"></span>
                                                            Job Location
                                                        </a>
                                                    </p>
                                                    <p class="text-gray-600"> {{ $career->job_location }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @else
                        <p class="text-center"> No job vacancies at the moment. Please try again later. </p>
                    @endif
                    <!-- More posts... -->
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
