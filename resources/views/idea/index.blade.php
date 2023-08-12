<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none bg-gray-800">
                <option value="Category one">Category one</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other" id="other" class="w-full rounded-xl px-4 py-2 border-none bg-gray-800">
                <option value="Category one">Other one</option>
                <option value="Category two">Other two</option>
                <option value="Category three">Other three</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <div class="absolute top-0 left-0 flex items-center h-full ml-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            <input type="search" placeholder="Find and idea" class="w-full rounded-xl bg-gray-800 px-4 py-2 pl-8 border-none placeholder-gray-500">
        </div>
    </div>
    <div class="ideas-container space-y-6 my-6">
        @foreach($ideas as $idea)
            <div
                    x-data
                    @click="const target = $event.target.tagName.toLowerCase();
                        const ignores = ['button', 'path', 'svg', 'a'];
                        if (!ignores.includes(target)) {
                            $event.target.closest('.idea-container').querySelector('.idea-link').click();
                        }
                    "
                    class="idea-container bg-gray-800 rounded-xl flex hover:shadow-md hover:shadow-gray-700 transition duration-150 ease-in cursor-pointer">
            <div class="hidden md:block border-r border-gray-500 px-5 py-8">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="bg-gray-500 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-2 py-6 w-full">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#"><img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                </div>
                <div class="mx-4 w-full flex flex-col justify-between">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
                    </h4>
                    <div class="text-gray-500 line-clamp-3">{{ $idea->description }}</div>
                    <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-600">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-300">3 comments</div>
                        </div>

                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center text-xs font-semibold space-x-2 mt-4 md:mt-0"
                        >
                            <div class="bg-gray-500 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">Open</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul
                                    x-cloak
                                    x-transition.origin.top.left
                                    x-show="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left md:ml-6 top-8 md:top-6 right-0 md:left-0"
                                >
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                        <div class="mt-4 md:mt-0 md:hidden flex items-center">
                            <div class="bg-gray-700 text-center rounded-xl px-4 py-2 h-10 pr-8">
                                <div class="text-sm font-bold leading-none text-gray-300">12</div>
                                <div class="text-xs font-semibold leading-none text-gray-500">Votes</div>
                            </div>
                            <button class="-mx-6 bg-gray-500 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="idea-container bg-gray-800 rounded-xl flex hover:shadow-md hover:shadow-gray-700 transition duration-150 ease-in cursor-pointer">
            <div class="hidden md:block border-r border-gray-500 px-5 py-8">
                <div class="text-center">
                    <div class="text-2xl font-semibold text-blue-500">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="bg-blue-500 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-500 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ratione, rem! Aut commodi, doloribus eius magnam maxime quis ratione. Accusantium alias architecto beatae, commodi libero nisi rerum temporibus tenetur vero?</div>
                    <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold md:space-x-2 text-gray-600">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-300">3 comments</div>
                        </div>

                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div class="bg-yellow-600 text-xs font-bold uppercase leading-none rounded-full text-center w-32 h-7 px-4 py-2">In progress</div>
                            <button class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-gray-800 rounded-xl flex hover:shadow-md hover:shadow-gray-700 transition duration-150 ease-in cursor-pointer">
            <div class="hidden md:block border-r border-gray-500 px-5 py-8">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="bg-gray-500 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-500 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequatur corporis debitis ex facere laboriosam natus quo sit totam unde. Maxime, quo!</div>
                    <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold md:space-x-2 text-gray-600">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-300">3 comments</div>
                        </div>

                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div class="bg-red-600 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">Closed</div>
                            <button class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-gray-800 rounded-xl flex hover:shadow-md hover:shadow-gray-700 transition duration-150 ease-in cursor-pointer">
            <div class="hidden md:block border-r border-gray-500 px-5 py-8">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="bg-gray-500 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-500 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ratione, rem! Aut commodi, doloribus eius magnam maxime quis ratione. Accusantium alias architecto beatae, commodi libero nisi rerum temporibus tenetur vero?</div>
                    <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold md:space-x-2 text-gray-600">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-300">3 comments</div>
                        </div>

                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div class="bg-green-600 text-xs font-bold uppercase leading-none rounded-full text-center w-32 h-7 px-4 py-2">Implemented</div>
                            <button class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-gray-800 rounded-xl flex hover:shadow-md hover:shadow-gray-700 transition duration-150 ease-in cursor-pointer">
            <div class="hidden md:block border-r border-gray-500 px-5 py-8">
                <div class="text-center">
                    <div class="text-2xl font-semibold">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="bg-gray-500 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-500 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ratione, rem! Aut commodi, doloribus eius magnam maxime quis ratione. Accusantium alias architecto beatae, commodi libero nisi rerum temporibus tenetur vero?</div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold md:space-x-2 text-gray-600">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-300">3 comments</div>
                        </div>

                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div class="bg-violet-600 text-xs font-bold uppercase leading-none rounded-full text-center w-32 h-7 px-4 py-2">Considering</div>
                            <button class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-8 ">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
