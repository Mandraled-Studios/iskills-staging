<x-app-layout>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <main class="mx-auto px-4 pb-24 pt-14 sm:px-6 sm:pb-32 sm:pt-16 lg:max-w-7xl lg:px-8">
      <!-- Product -->
      <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
        <!-- Product image -->
        <div class="lg:col-span-4 lg:row-end-1">
          <div class="aspect-h-3 aspect-w-4 overflow-hidden rounded-lg bg-gray-100">
            <img class="w-full" src="https://placehold.co/400x300" alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles." class="object-cover object-center">
          </div>
        </div>
  
        <!-- Product details -->
        <div class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none">
          <div class="flex flex-col-reverse">
            <div class="mt-4">
              <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"> {{ $course->title }} </h1>
  
              <h2 id="information-heading" class="sr-only">Product information</h2>
            </div>
  
            {{--
            <div>
              <h3 class="sr-only">Reviews</h3>
              <div class="flex items-center">
                <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="sr-only">4 out of 5 stars</p>
            </div>
            --}}
          </div>
  
          <p class="mt-6 text-gray-500">
            {{ $course->short_description }}
          </p>

          <div class="mt-8">
            <p class="mt-2 text-sm text-gray-500">Share this course to friends</p>
              <ul role="list" class="mt-4 flex items-center space-x-6">
                <li>
                  <a href="#" class="flex h-6 w-6 items-center justify-center text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Share on Facebook</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex h-6 w-6 items-center justify-center text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Share on Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex h-6 w-6 items-center justify-center text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Share on X</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                    </svg>
                  </a>
                </li>
              </ul>
          </div>
  
          <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
            <button type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-primary px-8 py-3 text-base font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-gray-50">Enroll Now</button>
            <button type="button" class="flex w-full items-center justify-center rounded-md border border-accent bg-transparent px-8 py-3 text-base font-medium text-secondary hover:bg-accent/[20] hover:text-white focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-gray-50">Contact Us</button>
          </div>
  
          <div class="mt-10 border-t border-gray-200 pt-10">
            <h3 class="text-base font-semibold text-gray-800 mb-3">Course Duration</h3>
            <div class="grid grid-cols-6 sm:grid-cols-12 gap-2">
              <div class="col-span-2 flex flex-col justify-center items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6">
                  <path class="bg-secondary" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                </svg>   
                <span class="text-xs text-gray-500"> Option 1 </span>
                <span class="text-sm text-secondary"> {{ $course->frequency_1 }} </span>
              </div>
              <div class="col-span-4 items-start flex flex-col justify-center">
                <p class="text-left"> {{ $course->class_duration_1 }} {{ $course->class_duration_1_unit }} / Day </p>
                <p class="text-left text-sm text-gray-500"> for {{ $course->course_duration_1 }} {{ $course->course_duration_1_unit }} </p>
              </div>

              <div class="col-span-2 flex flex-col justify-center items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6">
                  <path class="bg-secondary" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                </svg>   
                <span class="text-xs text-gray-500"> Option 2 </span>
                <span class="text-sm text-secondary"> {{ $course->frequency_2 }} </span>
              </div>

              <div class="col-span-4 items-start flex flex-col justify-center">
                <p class="text-left"> {{ $course->class_duration_2 }} {{ $course->class_duration_2_unit }} / Day </p>
                <p class="text-left text-sm text-gray-500"> for {{ $course->course_duration_2 }} {{ $course->course_duration_2_unit }} </p>
              </div>
            </div>
            
          </div>
  
          <div class="mt-10 border-t border-gray-200 pt-10">
            <h3 class="text-base font-semibold text-gray-800 mb-3">Course Mode</h3>
            
            {!! $course->additional_info !!}

          </div>

          <div class="mt-10 border-t border-gray-200 pt-10">
            <h3 class="text-base font-semibold text-gray-800 mb-3">Certification Authority</h3>
            
            {!! $course->certification_authority?? "N/A" !!}
          </div>
        </div>
  
        <div class="mx-auto mt-16 w-full max-w-2xl lg:col-span-4 lg:mt-0 lg:max-w-none">
          <div x-data="{ selected: 'tab-details' }">
            <!-- Tab Headings -->
            <div class="border-b-w border-secondary">
              <div class="-mb-px flex overflow-x-auto w-full" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-800" -->
                <button x-on:click="selected = 'tab-details'" id="tab-details" role="tab" type="button" x-bind:class="selected == 'tab-details' ? 'whitespace-nowrap px-4 bg-primary/20 border-b-2 border-primary py-6 text-sm text-primary hover:bg-accent/20 hover:text-accent font-bold' : 'whitespace-nowrap px-4 border-b-2 border-secondary py-6 text-sm font-medium text-gray-700 hover:bg-accent/20 hover:text-accent'" aria-controls="tab-panel-details">Course Details</button>
                <button x-on:click="selected = 'tab-eligibility'" id="tab-eligibility" aria-controls="tab-panel-eligibility" role="tab" type="button" x-bind:class="selected == 'tab-eligibility' ? 'whitespace-nowrap px-4 bg-primary/20 border-b-2 border-primary py-6 text-sm text-primary hover:bg-accent/20 hover:text-accent font-bold' : 'whitespace-nowrap px-4 border-b-2 border-secondary py-6 text-sm font-medium text-gray-700 hover:bg-accent/20 hover:text-accent'">Eligibility</button>
                <button x-on:click="selected = 'tab-curriculum'" id="tab-curriculum" aria-controls="tab-panel-curriculum" role="tab" type="button" x-bind:class="selected == 'tab-curriculum' ? 'whitespace-nowrap px-4 bg-primary/20 border-b-2 border-primary py-6 text-sm text-primary hover:bg-accent/20 hover:text-accent font-bold' : 'whitespace-nowrap px-4 border-b-2 border-secondary py-6 text-sm font-medium text-gray-700 hover:bg-accent/20 hover:text-accent'">Curriculum</button>
                <button x-on:click="selected = 'tab-exam-criteria'" id="tab-exam-criteria" aria-controls="tab-panel-exam-criteria" role="tab" type="button" x-bind:class="selected == 'tab-exam-criteria' ? 'whitespace-nowrap px-4 bg-primary/20 border-b-2 border-primary py-6 text-sm text-primary hover:bg-accent/20 hover:text-accent font-bold' : 'whitespace-nowrap px-4 border-b-2 border-secondary py-6 text-sm font-medium text-gray-700 hover:bg-accent/20 hover:text-accent'">Exam Criteria</button>
              </div>
            </div>

            <!-- Tab Contents -->
            <!-- 'Course Details' panel, show/hide based on tab state -->
            <div x-show="selected == 'tab-details'" id="tab-panel-details" class="pt-8" aria-labelledby="tab-details" role="tabpanel" tabindex="0">
              <h3 class="sr-only">Course Details</h3>
              <div class="prose prose-sm text-gray-600 max-w-none">
                {!! $course->description !!}
              </div>
            </div>
  
            <!-- 'Eligibility' panel, show/hide based on tab state -->
            <div x-show="selected == 'tab-eligibility'" id="tab-panel-eligibility" class="pt-8" aria-labelledby="tab-eligibility" role="tabpanel" tabindex="0">
              <h3 class="sr-only">Eligibility</h3>
              <div class="prose prose-sm text-gray-600 max-w-none">
                {!! $course->eligibility !!}
              </div>
            </div>
  
            <!-- 'Curriculum' panel, show/hide based on tab state -->
            <div x-show="selected == 'tab-curriculum'" id="tab-panel-curriculum" class="pt-8" aria-labelledby="tab-curriculum" role="tabpanel" tabindex="0">
              <h3 class="sr-only">Curriculum</h3>
  
              <div class="prose prose-sm text-gray-600 max-w-none">
                 {!! $course->curriculum !!}
              </div>

              @if (count($course->modules) > 0)
              <div class="py-8">
                <h3 class="font-semibold text-base mb-4">Course Modules </h3>

                @foreach ($course->modules as $module)
                  <div class="mb-6 p-2" x-data="{ open: false }">
                    <!-- Accordion Header -->
                    <div x-on:click="open = ! open" class="border-b border-gray-700 py-2 px-1 flex justify-between cursor-pointer">
                      <!-- Question -->
                      <div>
                        <h4 class="text-gray-400 text-sm uppercase max-w-none">
                          {{ $module->super_header }}
                        </h4>
                        <div class="text-base font-medium text-gray-600 max-w-none">
                          {!! $module->title !!}
                        </div>
                      </div>
                      <!-- Plus -->
                      @if ($module->topics)
                        <div class="w-10 h-10 p-2 text-center">
                          <span class="text-lg"> + </span>
                        </div>
                      @endif
                    </div>
                  @if ($module->topics)
                      <div x-show="open" class="prose prose-sm text-gray-600 max-w-none py-2 px-2">
                        {!! $module->topics !!}
                      </div>
                    </div>
                  @else
                  </div>
                  @endif
                @endforeach
              </div>
              @endif
            </div>

            <!-- 'Exam Criteria' panel, show/hide based on tab state -->
            <div x-show="selected == 'tab-exam-criteria'" id="tab-panel-exam-criteria" class="pt-8" aria-labelledby="tab-exam-criteria" role="tabpanel" tabindex="0">
              <h3 class="sr-only">Exam Criteria</h3>
  
              <div class="prose prose-sm text-gray-600 max-w-none">
                 {!! $course->exam_criteria !!}
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Related products -->
      @if (count($recent) > 0)
        <div class="mx-auto mt-24 max-w-2xl sm:mt-32 lg:max-w-none">
          <div class="flex items-center justify-between space-x-4">
            <h2 class="text-lg font-semibold text-gray-900">Customers also viewed</h2>
            <a href="#" class="whitespace-nowrap text-sm font-medium text-indigo-600 hover:text-indigo-500">
              View all
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </div>
          <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
            @foreach ($recent as $card)
            <div class="group relative">
              <div class="aspect-h-3 aspect-w-4 overflow-hidden rounded-lg bg-gray-100">
                <img class="w-full h-full object-cover object-center" src="https://placehold.co/400x300" alt="{{$card->title}}">
              </div>
              <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
                <h3>
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{$card->title}}
                  </a>
                </h3>
                <p> &gt; </p>
              </div>
              <p class="mt-1 text-sm text-gray-500"> {{ $card->courseCategory->title }} </p>
            </div>
            @endforeach
          </div>
        </div>
      @endif
    </main>
  
  </div>  
</x-app-layout>