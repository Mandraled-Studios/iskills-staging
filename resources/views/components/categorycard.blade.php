<div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full">
    <div class="relative h-48 m-2 object-cover object-center overflow-hidden text-white rounded-md">
        <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
    </div>
    <div class="p-4">
        <h3 class="mb-2 text-slate-800 text-xl font-semibold">
            {{ $category->title }}
        </h3>
        <p class="text-accent uppercase mb-3"> COURSES : 3 </p>
        <ul type="none" class="checkmark-bulleted-list mb-6">
            <li class="mb-4">Basic Medical Coding</li>
            <li class="mb-4">Advanced Medical Coding</li>
            <li class="mb-4">Corporate Training</li>
        </ul>
    </div>
    <div class="flex justify-between items-center px-4 pb-4 pt-0 mt-2">
        <a href=""> Learn More </a>
        <button class="rounded-full bg-primary py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-accent-dark hover:bg-accent active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
            Enroll Now
        </button>
    </div>
</div>