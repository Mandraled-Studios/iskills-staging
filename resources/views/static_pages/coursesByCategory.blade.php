<x-app-layout>
<div class="bg-white" x-data="{ filter: false }">
    <div>
  
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
              <div class="flex items-center">
                <a href="{{ route('allcourses') }}" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600 mr-4">All Courses</a>
                <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                  <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                </svg>
              </div>
            </li>

            <li class="text-sm">
              <div class="flex items-center">
                <span aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> {{ $category->title }} </span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
  
      <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        <div class="border-b border-gray-200 pb-10 pt-24">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900"> {{ $category->title }} </h1>
          <p class="mt-4 text-base text-gray-500">Checkout out our latest courses!</p>
        </div>
  
        <!-- Course Cards -->
        <section aria-labelledby="product-heading" class="pb-24 pt-12 mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
          <h2 id="product-heading" class="sr-only">Courses</h2>

          <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
            @foreach ($courses as $course)
              <x-coursecard :course="$course"></x-coursecard>
            @endforeach  
          </div>
        </section>
      </main>
    </div>
</div>
  <script>

  </script>
</x-app-layout>