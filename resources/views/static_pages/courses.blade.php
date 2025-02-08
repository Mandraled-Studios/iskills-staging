<x-app-layout>
<div class="bg-white" x-data="{ filter: false }">
    <div x-data="{ filterCategories: [@foreach ($categories as $category) '{{$category->id}}', @endforeach] }">
      <!-- Mobile filter dialog. Off-canvas menu for mobile -->
      <div x-show="filter" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
  
        <div class="fixed inset-0 z-40 flex">
          
        <!--
            Off-canvas Filter menu, show/hide based on off-canvas menu state.
  
            Entering: "transition ease-in-out duration-300 transform"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
          <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
            <div class="flex items-center justify-between px-4">
              <h2 class="text-lg font-medium text-gray-900">Filters</h2>
              <button @click="filter = false" type="button" class="relative -mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
  
            <!-- Filters -->
            <form class="mt-4">
              <div class="border-t border-gray-200 pb-4 pt-4">
                <fieldset>
                  <legend class="w-full px-2">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                      <span class="text-sm font-medium text-gray-900">Category</span>
                      <span class="ml-6 flex h-7 items-center">
                        <!--
                          Expand/collapse icon, toggle classes based on section open state.
  
                          Open: "-rotate-180", Closed: "rotate-0"
                        -->
                        <svg class="h-5 w-5 rotate-0 transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </legend>
                  <div class="px-4 pb-2 pt-4" id="filter-section-1">
                    <div class="space-y-6">
                      @foreach ($categories as $category)
                        <div class="flex items-center">
                          <input id="category-0-mobile" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                          <label for="category-0-mobile" class="ml-3 text-sm text-gray-500"> {{ $category->title }} </label>
                        </div>
                      @endforeach    
                    </div>
                  </div>
                </fieldset>
              </div>
            </form>
          </div>
        </div>
      </div>
  
      <!-- Breadcrumb -->
      <div class="border-b border-gray-200">
        <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <ol role="list" class="flex items-center space-x-4 py-4">
            <li>
              <div class="flex items-center">
                <a href="{{route('homepage')}}" class="mr-4 text-sm font-medium text-gray-900">Home</a>
                <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                  <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                </svg>
              </div>
            </li>
  
            <li class="text-sm">
              <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">All Courses</a>
            </li>
          </ol>
        </nav>
      </div>
  
      <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        <div class="border-b border-gray-200 pb-10 pt-24">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900">All Courses</h1>
          <p class="mt-4 text-base text-gray-500">Checkout out our latest courses!</p>
        </div>
  
        <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
          <aside>
            <h2 class="sr-only">Filters</h2>
  
            <!-- Mobile filter dialog toggle -->
            <button x-on:click="filter = true" type="button" class="inline-flex items-center lg:hidden">
              <span class="text-sm font-medium text-gray-700">Filters</span>
              <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
              </svg>
            </button>
  
            <div class="hidden lg:block">
              <!-- Desktop Filters -->
              <form class="space-y-10 divide-y divide-gray-200">
                <div class="pt-10">
                  <fieldset>
                    <legend class="block text-sm font-medium text-gray-900">Category</legend>
                    <div class="space-y-3 pt-6">
                      @foreach ($categories as $category)
                        <div class="flex items-center">
                          <label class="ml-3 text-sm text-gray-500">
                          <input x-model="filterCategories" value={{$category->id}} type="checkbox" class="h-4 w-4 mr-2 rounded border-gray-300 text-accent focus:ring-secondary">
                          {{ $category->title }} 
                          </label>
                        </div>
                      @endforeach    
                    </div>
                  </fieldset>
                </div>
              </form>
            </div>
          </aside>
  
          <!-- Course Cards -->
          <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
            <h2 id="product-heading" class="sr-only">Courses</h2>
  
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
              @foreach ($courses as $course)
                <template x-if="filterCategories.includes(''+{{$course->courseCategory->id}})">
                    <x-coursecard :course="$course"></x-coursecard>
                </template>
              @endforeach  
            </div>
          </section>
        </div>
      </main>
    </div>
</div>
  <script>

  </script>
</x-app-layout>