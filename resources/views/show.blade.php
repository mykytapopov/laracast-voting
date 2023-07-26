<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container bg-gray-800 rounded-xl flex mt-4">
        <div class="flex flex-col md:flex-row px-4 py-6 w-full">
            <div class="flex-none mx-4">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                         alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-2 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aspernatur, magnam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam, cum dicta
                    natus porro quas repudiandae rerum unde ut voluptatum! Deserunt eum nemo pariatur praesentium
                    quibusdam, quidem reiciendis sunt tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ad cum dolore exercitationem illum labore neque nostrum officiis rem soluta ut! Aut corporis
                    distinctio ipsum modi nihil, odit reiciendis velit. Dolore.
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-4">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-600">
                        <div class="md:block hidden font-bold text-gray-300">John Doe</div>
                        <div class="md:block hidden ">&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-300">3 comments</div>
                    </div>

                    <div
                        x-data="{ isOpen: false }"
                        class="flex items-center text-xs font-semibold space-x-2 mt-4 md:mt-0"
                    >
                        <div
                            class="bg-gray-500 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                            Open
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                            <ul
                                x-cloak
                                x-transition.origin.top.left
                                x-show="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left md:ml-6 top-8 md:top-6 right-0 md:left-0"
                            >
                                <li>
                                    <a href="#"
                                       class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in"
                                    >
                                        Mark as spam
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in"
                                    >
                                        Delete post
                                    </a>
                                </li>
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

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center md:space-x-4 md:ml-6">
            <div
                x-data="{ isOpen: false }"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="bg-blue-500 w-32 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150"
                >
                    <span>Reply</span>
                </button>
                <div
                    x-cloak
                    x-transition.origin.top.left
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-80 md:w-96 font-semibold text-sm bg-gray-800 border border-gray-700 shadow-lg shadow-gray-800 rounded-xl py-3 text-left mt-2"
                >
                    <form action="#" method="POST" class="space-y-4 px-4">
                        <div>
                        <textarea name="idea_add" id="idea_add" cols="30" rows="4"
                                  class="w-full rounded-xl bg-gray-700 text-sm border-none px-4 py-2 placeholder-gray-500"
                                  placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                    class="flex w-1/2 items-center justify-center bg-gray-500 text-xs rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform -rotate-45">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button
                                class="bg-blue-500 w-1/2 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150"
                                type="submit">
                                <span>Post</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div
                x-data="{ isOpen: false }"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="mt-2 md:mt-0 flex w-32 items-center justify-center bg-gray-500 text-xs rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150"
                >
                    <span class="mr-1">Set Status</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div
                    x-cloak
                    x-transition.origin.top.left
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-72 font-semibold text-sm bg-gray-800 border border-gray-700 shadow-lg shadow-gray-800 rounded-xl py-3 text-left mt-2"
                >
                    <form action="#" method="POST" class="space-y-4 px-4">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio"
                                           class="text-gray-500 border-none focus:ring-offset-0 focus:ring-0" checked
                                           name="status" value="open">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio"
                                           class="text-purple-500 border-none focus:ring-offset-0 focus:ring-0"
                                           name="status" value="considering">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio"
                                           class="text-yellow-500 border-none focus:ring-offset-0 focus:ring-0"
                                           name="status" value="in_progress">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio"
                                           class="text-green-500 border-none focus:ring-offset-0 focus:ring-0"
                                           name="status" value="implemented">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio"
                                           class="text-red-500 border-none focus:ring-offset-0 focus:ring-0"
                                           name="status" value="closed">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div>
                        <textarea name="idea_add" id="idea_add" cols="30" rows="2"
                                  class="w-full rounded-xl bg-gray-700 text-xs border-none px-4 py-2 placeholder-gray-500"
                                  placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                    class="flex w-1/2 items-center justify-center bg-gray-500 text-xs rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform -rotate-45">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button
                                class="bg-blue-500 w-1/2 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150"
                                type="submit">
                                <span>Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="inline-flex items-center font-normal">
                                <input type="checkbox"
                                       class="rounded bg-gray-200 border-none focus:ring-offset-0 focus:ring-0"
                                       name="notify_voters" value="closed">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="hidden md:flex items-center space-x-3">
            <div class="bg-gray-800 font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-gray-300 text-xl leading-snug">12</div>
                <div class="text-gray-500 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                    class="w-32 bg-gray-500 uppercase text-xs rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">
                <span class="mr-1">Vote</span>
            </button>
        </div>
    </div>

    <div class="comments-container relative space-y-6 md:ml-24 my-8 pt-4">
        <div class="comment-container relative bg-gray-800 rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row px-4 py-6 w-full">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="md:mx-4 w-full mt-2 md:mt-0">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="#" class="hover:underline">A random title can go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aspernatur, magnam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        doloremque est expedita, explicabo harum illo illum neque quos ratione similique sit tempora
                        tenetur ut velit!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-600">
                            <div class="font-bold text-gray-300">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center text-xs font-semibold space-x-2"
                        >
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul
                                    x-cloak
                                    x-transition.origin.top.left
                                    x-show="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute z-10 w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left md:ml-6 top-8 md:top-6 right-0 md:left-0"
                                >
                                    <li><a href="#"
                                           class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Mark as
                                            spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in">Delete
                                            post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin comment-container relative bg-gray-800 rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row px-4 py-6 w-full">
                <div class="flex-none mx-4">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue-500 text-xs font-bold mt-2">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Accusamus at cum cumque dicta distinctio
                        doloremque earum enim facere harum illum impedit ipsa ipsam iste maxime molestiae molestias
                        nihil officia omnis possimus quae quibusdam quidem ratione recusandae reiciendis rem, soluta
                        temporibus?
                        Aspernatur, magnam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-600">
                            <div class="font-bold text-blue-500">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <button
                                class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="invisible absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
                                    <li>
                                        <a href="#"
                                           class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in"
                                        >Mark as spam</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in"
                                        >Delete post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative bg-gray-800 rounded-xl flex mt-4">
            <div class="flex px-4 py-6 w-full">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="#" class="hover:underline">A random title can go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aspernatur, magnam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        doloremque est expedita, explicabo harum illo illum neque quos ratione similique sit tempora
                        tenetur ut velit!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-600">
                            <div class="font-bold text-gray-300">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <button
                                class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="invisible absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
                                    <li>
                                        <a href="#"
                                           class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in"
                                        >Mark as spam</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hover:bg-gray-800 block px-5 py-3 transition duration-150 ease-in"
                                        >Delete post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
