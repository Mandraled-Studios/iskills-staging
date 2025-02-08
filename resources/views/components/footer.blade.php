@php
    $categories = App\Models\CourseCategory::all();
@endphp
<footer class="py-24">
    <div class="container pb-8">
        
    </div>
    <div class="container md:flex md:justify-between md:gap-4">
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4">
            <a class="block mb-6" href="/"><img class="h-20" src="{{asset('images/iskills-solutions-logo-optimized.png')}}" alt="iskills soltions logo"></a>
            <ul>
                <li class="flex items-center"><img class="w-4 h-4 mr-2" src="{{asset('images/icons/location-marker.svg')}}" alt="location icon" /><span> No.22, 37 Lake View Road,</span></li>
                <li class="pl-5">West Mambalam,</li>
                <li class="pl-5">Chennai - 600017</li>
            </ul>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4">
            <p class="text-lg md:text-xl xl:text-2xl mb-4 font-bold"> Course Categories </p>
            <ul>
                @foreach ($categories as $category)
                   <li class="mb-1"><a href="">{{$category->title}}</a></li> 
                @endforeach
            </ul>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4">
            <p class="text-lg md:text-xl xl:text-2xl mb-4 font-bold"> The Company </p>
            <ul>
                <li class="mb-1"><a href="/about">About Us </a></li>
                <li class="mb-1"><a href="/terms">Terms & Conditions </a></li>
                <li class="mb-1"><a href="/privacy-policy">Privacy Policy </a></li>
                <li class="mb-1"><a href="/contact">Contact Us </a></li>
            </ul>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4">
            <p class="text-lg md:text-xl xl:text-2xl mb-4 font-bold"> Connect With Us </p>
            <p class="mb-4"> Follow us to receive updates about courses and job openings! </p>
            <ul class="flex">
                <li class="w-8 h-8 mr-2"><a href="https://facebook.com/iskills"><img class="w-8 h-8" src="{{asset('images/icons/facebook.svg')}}" alt="facebook icon}}" /></a></li>
                <li class="w-8 h-8 mr-2"><a href="https://x.com/iskills"><img class="w-8 h-8" src="{{asset('images/icons/x-twitter.svg')}}" alt="x icon}}" /></a></li>
                <li class="w-8 h-8 mr-2"><a href="https://instagram.com/iskills"><img class="w-8 h-8" src="{{asset('images/icons/instagram.svg')}}" alt="instagram icon}}" /></a></li>
                <li class="w-8 h-8 mr-2"><a href="https://linkedin.com/iskills"><img class="w-8 h-8" src="{{asset('images/icons/linkedin.svg')}}" alt="linkedin icon}}" /></a></li>
                <li class="w-8 h-8 mr-2"><a href="https://youtube.com/iskills"><img class="w-8 h-8" src="{{asset('images/icons/youtube.svg')}}" alt="youtube icon}}" /></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="bg-primary py-2">
    <div class="container flex justify-between">
        <p class="text-white"> &copy Copyright {{date('Y')}}. I Skills Solutions  |  Developed by <a href="https://mandraled.com"> Mandraled Studios </a> </p>
    </div>
</div>