<x-app-layout>
    <div class="relative isolate overflow-hidden bg-primary py-6">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto mb-4 max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">Work with us</h2>
            <p class="mt-4 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
          </div>
          <div class="mx-auto max-w-2xl lg:mx-0">
            <dl class="mt-6 grid grid-cols-1 gap-8 sm:mt-8 sm:grid-cols-2">
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Branches</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">2</dd>
              </div>
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Full-time employees</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">100+</dd>
              </div>
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Hours per week</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
              </div>
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Paid time off</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">18</dd>
              </div>
            </dl>
          </div>
        </div>
    </div>  
    
    <div class="bg-white">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-8 px-4 py-10 sm:px-6 sm:py-12 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
          <div>
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"> {{ $career->designation }} </h2>
            <p class="mt-4 text-gray-500"> {{ $career->description }} </p>
      
            <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Vacancy</dt>
                <dd class="mt-2 text-sm text-gray-500"> {{ $career->vacancies }} </dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Salary</dt>
                <dd class="mt-2 text-sm text-gray-500"> {{ $career->salary }} </dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Requirements</dt>
                <dd class="mt-2 text-sm text-gray-500"> {{ $career->requirements }} </dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900"> Skillset </dt>
                <dd class="mt-2 text-sm text-gray-500"> {{ $career->skillset }} </dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900"> Job Location </dt>
                <dd class="mt-2 text-sm text-gray-500"> {{ $career->job_location }} </dd>
              </div>
            </dl>
          </div>
          <div class="px-4 lg:px-6 py-4 mt-0 lg:-mt-80 relative bg-white shadow">
            <div class="flex flex-col md:ml-auto w-full md:py-8">
                <h2 class="text-gray-900 text-2xl lg:text-3xl mb-1 font-semibold">Apply for the role</h2>
                <p class="leading-relaxed mb-5 text-gray-600"> Expect a call back or email from us shortly! </p>
                <div class="relative mb-4">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
                  <input type="phone" id="phone" name="tel" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
                  <div class="relative mb-4">
                    <label for="qualification" class="leading-7 text-sm text-gray-600">Qualification</label>
                    <input type="text" id="qualification" name="qualification" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                  <div class="relative mb-4">
                    <label for="experience" class="leading-7 text-sm text-gray-600">Experience (Years)</label>
                    <input type="text" id="experience" name="experience" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="relative mb-4">
                  <label for="address" class="leading-7 text-sm text-gray-600">Address</label>
                  <textarea id="address" name="address" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
                  <div class="relative mb-4">
                    <label for="city" class="leading-7 text-sm text-gray-600">City</label>
                    <input type="text" id="city" name="city" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                  <div class="relative mb-4">
                    <label for="state" class="leading-7 text-sm text-gray-600">State</label>
                    <input type="text" id="state" name="state" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="relative mb-4">
                  <label for="resume" class="leading-7 text-sm text-gray-600">Resume</label>
                  <input type="file" id="resume" name="resume" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="text-white bg-secondary border-0 py-2 px-6 focus:outline-none hover:bg-accent rounded text-lg">Submit Application</button>
                <p class="text-xs text-gray-500 mt-3"> By clicking on submit you agree that the information shared is true to the best of your knowledge </p>
              </div>
          </div>
        </div>
    </div>      
</x-app-layout>
