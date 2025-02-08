<x-app-layout>
    <div class="bg-white py-24 md:py-32 lg:py-40">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Placements</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">We’re a dynamic group of individuals who are passionate
                    about what we do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list"
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">
                @foreach ($placements as $placement)
                    <li>
                        <img class="aspect-[3/2] w-full rounded-2xl object-cover"
                            src="{{ '/storage/'.$placement->students_image }}"
                            alt="">
                            <div class="grid grid-cols-12 gap-1 py-2 items-center">
                                <div class="col-span-7">
                                    <h3 class="text-lg font-semibold leading-8 text-primary"> {{ $placement->title }} </h3>
                                    <p class="text-base leading-7 text-gray-400"> {{ $placement->placement_date->format('d M Y')}} </p>
                                </div>
                                @if ($placement->company_name)
                                <div class="col-span-5 gap-1 flex items-center justify-end text-right">
                                    <p class="text-xs text-gray-500"> {{ $placement->company_name }} </p>
                                    @if ($placement->company_logo_image)
                                    <div class="w-12 h-12 border-2 border-gray-500 overflow-hidden">
                                        <img class="w-12 h-12 object-contain mr-4" src="{{ '/storage/'.$placement->company_logo_image }}" alt="">
                                    </div>
                                    @endif
                                </div>
                                @endif
                            </div>


                    </li>
                @endforeach

                <!-- More people... -->
            </ul>
        </div>
    </div>
</x-app-layout>
