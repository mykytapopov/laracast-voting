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
        <div class="flex px-4 py-6 w-full">
            <div class="flex-none">
                <a href="#"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                                 class="w-14 h-14 rounded-xl"></a>
            </div>
            <div class="mx-4 w-full">
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
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-600">
                        <div class="font-bold text-gray-300">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-300">3 comments</div>
                    </div>

                    <div class="flex items-center text-xs font-semibold space-x-2">
                        <div
                            class="bg-gray-500 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                            Open
                        </div>
                        <button
                            class="relative bg-gray-500 hover:bg-gray-400 rounded-full h-7 transition duration-150 ease-in px-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                            <ul class="invisible absolute w-44 font-semibold bg-gray-900 shadow-lg shadow-gray-800 rounded-xl py-3 text-left ml-6">
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

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button
                class="bg-blue-500 w-32 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150">
                <span>Reply</span>
            </button>
            <button type="button"
                    class="flex w-32 items-center justify-center bg-gray-500 text-xs rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">
                <span class="mr-1">Set Status</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
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

    <div class="comments-container relative space-y-6 ml-24 my-8 pt-4">
        <div class="comment-container relative bg-gray-800 rounded-xl flex mt-4">
            <div class="flex px-4 py-6 w-full">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
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
        <div class="admin comment-container relative bg-gray-800 rounded-xl flex mt-4">
            <div class="flex px-4 py-6 w-full">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue-500 text-xs font-bold mt-2">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Under construction"</a>
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
