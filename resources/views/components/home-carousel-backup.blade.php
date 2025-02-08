<figure id="mainCarousel" class="carousel w-full relative">
    <div class="carousel-inner h-full">
        <div x-data="{open: false}" x-on:mouseover="open=true" x-on:mouseout="open=false" class="carousel-item relative h-full active">
            <img width="1920" height="400" class="w-full object-cover object-top carousel-img" src="{{asset('images/medical-coding.jpg')}}" alt="medical coding">
            <div x-show="open" class="absolute w-full h-full top-0 bottom-0 left-0 right-0 bg-teal-800/50">
                <div class="h-full">
                    <div class="w-full h-full text-white flex flex-col justify-start items-center py-12">
                        <h3 class="text-5xl mb-12 text-center"> Corporate Gifts </h3>
                        <a class="px-6 py-2 border border-white rounded-full hover:bg-white/[0.2]" href="/products"> View All Products </a>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{open: false}" x-on:mouseover="open=true" x-on:mouseout="open=false" class="carousel-item relative h-full">
            <img width="1920" height="400" class="w-full object-cover object-top carousel-img" src="{{asset('images/work-from-home.jpg')}}" alt="work from home with medical coding">
            <div x-show="open" class="absolute w-full h-full top-0 bottom-0 left-0 right-0 bg-teal-800/50">
                <div class="h-full">
                    <div class="w-full h-full text-white flex flex-col justify-start items-center py-12">
                        <h3 class="text-5xl mb-12 text-center"> Festive Gifts </h3>
                        <a class="px-6 py-2 border border-white rounded-full hover:bg-white/[0.2]" href="/products"> View All Products </a>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{open: false}" x-on:mouseover="open=true" x-on:mouseout="open=false" class="carousel-item relative h-full">
            <img width="1920" height="400" class="w-full object-cover object-top carousel-img" src="{{asset('images/cpc-course.jpg')}}" alt="cpc course">
            <div x-show="open" class="absolute w-full h-full top-0 bottom-0 left-0 right-0 bg-teal-800/50">
                <div class="h-full">
                    <div class="w-full h-full text-white flex flex-col justify-start items-center py-12">
                        <h3 class="text-5xl mb-12 text-center"> Eco Friendly Gifts </h3>
                        <a class="px-6 py-2 border border-white rounded-full hover:bg-white/[0.2]" href="/products"> View All Products </a>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{open: false}" x-on:mouseover="open=true" x-on:mouseout="open=false" class="carousel-item relative h-full">
            <img width="1920" height="400" class="w-full object-cover object-top carousel-img" src="{{asset('images/online-assessment.jpg')}}" alt="online assessments">
            <div x-show="open" class="absolute w-full h-full top-0 bottom-0 left-0 right-0 bg-teal-800/50">
                <div class="h-full">
                    <div class="w-full h-full text-white flex flex-col justify-start items-center py-12">
                        <h3 class="text-5xl mb-12 text-center"> Corporate Gifts </h3>
                        <a class="px-6 py-2 border border-white rounded-full hover:bg-white/[0.2]" href="/products"> View All Products </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="carouselPrev" class="w-6 2xs:w-8 xs:w-12 md:w-16 carousel-control-prev" href="#mainCarousel" role="button">
        <span class="carousel-control-prev-icon dark:filter-none" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a id="carouselNext" class="w-6 2xs:w-8 xs:w-12 md:w-16 carousel-control-next" href="#mainCarousel" role="button">
        <span class="carousel-control-next-icon dark:filter-none" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</figure>