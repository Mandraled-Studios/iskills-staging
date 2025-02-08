<div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75">
      <img src="https://placehold.co/400x300" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
    </div>
    <div class="flex flex-1 flex-col space-y-2 p-4">
      <h3 class="text-base font-semibold text-gray-800">
        <a href="{{route('coursedetails', ['slug' => $course->slug])}}">
          <span aria-hidden="true" class="absolute inset-0"></span>
          {{ $course->title }}
        </a>
      </h3>
      <p class="text-sm text-gray-500">
         @php
           $card_desc = implode(' ', array_slice(explode(' ', $course->short_description), 0, 20));
         @endphp
         {{ $card_desc }} ...
      </p>
    </div>
</div>