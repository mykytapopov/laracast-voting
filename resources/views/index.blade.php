<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none bg-gray-800">
                <option value="Category one">Category one</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other" id="other" class="w-full rounded-xl px-4 py-2 border-none bg-gray-800">
                <option value="Category one">Other one</option>
                <option value="Category two">Other two</option>
                <option value="Category three">Other three</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <div class="absolute top-0 left-0 flex items-center h-full ml-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            <input type="search" placeholder="Find and idea" class="w-full rounded-xl bg-gray-800 px-4 py-2 pl-8 border-none placeholder-text-gray-700">
        </div>
    </div>
</x-app-layout>
