<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/icons-react/dist/index.umd.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64">
        <div class="flex items-center justify-center mt-8">
            <img class="h-14 w-28" src="{{ asset('images/laravel-logo.svg') }}" alt="logo">
        </div>
        <nav class="mt-9" x-data="{ activeNavItem: 'jobs' }">
            <a href="#" @click="activeNavItem = 'overview'"
               class="navbar-item"
               :class="{ 'navbar-item-active': activeNavItem === 'overview' }">
                <span class="mx-2"><i class="ti ti-layout-grid mr-2"></i>Overview</span>
            </a>
            <a href="#" @click="activeNavItem = 'candidates'"
               class="navbar-item"
               :class="{ 'navbar-item-active': activeNavItem === 'candidates' }">
                <span class="mx-2"><i class="ti ti-users mr-2"></i>Candidates</span>
            </a>
            <a href="#" @click="activeNavItem = 'jobs'"
               class="navbar-item"
               :class="{ 'navbar-item-active': activeNavItem === 'jobs' }">
                <span class="mx-2"><i class="ti ti-file-text mr-2"></i>Jobs</span>
            </a>
            <a href="#" @click="activeNavItem = 'settings'"
               class="navbar-item"
               :class="{ 'navbar-item-active': activeNavItem === 'settings' }">
                <span class="mx-2"><i class="ti ti-settings mr-2"></i>Settings<i
                        class="ti ti-chevron-down pl-24"></i></span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="m-2 rounded-lg flex-1 flex flex-col overflow-hidden">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
            <!-- Content goes here -->
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-gray-800">Jobs</h1>
                <p class="text-xs text-gray-400">Learn and discover about that page information.</p>
                <!-- Add your main content here -->
                <div class="mt-7 flex justify-between items-center">
                    <div class="ml-2">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-gray-500 sm:text-sm"><i class="ti ti-search"></i></span>
                        </div>
                        <input type="search" name="search" id="search"
                               class="rounded-md border-0 py-1 pl-7 pr-20 text-gray-600 ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-blue-600"
                               placeholder="Search in list">
                    </div>
                    <div class="ml-2">
                        <select
                            class="appearance-none rounded-md border-0 py-1 pl-7 pr-20 text-gray-400 ring-1 ring-gray-300 focus:ring-blue-600">
                            <option>Sort A-Z</option>
                        </select>
                    </div>

                    <div class="ml-2">
                        <button type="button"
                                class="rounded-md border-0 py-1 pl-2 pr-7 text-gray-400 ring-1 ring-gray-300"><i
                                class="ti ti-filter px-2"></i>Filter
                        </button>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="bg-gray-800 text-white rounded-md py-2 px-4 hover:bg-gray-950"><i
                                class="ti ti-plus mr-1"></i>Create job</a>
                    </div>
                </div>
                <div class="relative overflow-x-auto py-6 ml-2">
                    <table class="w-full">
                        <thead class="bg-gray-100 text-gray-400 text-sm text-left font-light">
                        <tr>
                            <th scope="col" class="px-4 py-2 rounded-s-lg">Company</th>
                            <th scope="col" class="px-4 py-2">Job Name</th>
                            <th scope="col" class="px-4 py-2">Status</th>
                            <th scope="col" class="px-4 py-2">Work Type</th>
                            <th scope="col" class="px-4 py-2">Publish Date</th>
                            <th scope="col" class="px-4 py-2">Created by</th>
                            <th scope="col" class="px-4 py-2"></th>
                            <th scope="col" class="px-4 py-2 rounded-e-lg"></th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-left text-sm">
                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-meta"></i>
                                <i class="ti ti-point-filled"></i>
                                Meta
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Ethical Hacker</h3>
                                <p class="text-gray-600 italic">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-gray-300 rounded-lg px-1">DRAFT</span>
                            </td>
                            <td class="px-4 py-4">Remote</td>
                            <td class="px-4 py-4">13 Oct 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Marie S.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-medium"></i>
                                <i class="ti ti-point-filled"></i>
                                Medium
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Software Development Manager</h3>
                                <p class="text-gray-600 italic">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-gray-300 rounded-lg px-1">DRAFT</span>
                            </td>
                            <td class="px-4 py-4">On-Site</td>
                            <td class="px-4 py-4">13 Aug 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Elisa B.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <select class="rounded-md border-0 py-1 text-gray-900 ring-1 ring-gray-200">
                                    <option>Details</option>
                                </select>
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-slack"></i>
                                <i class="ti ti-point-filled"></i>
                                Slack
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Software Development</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-red-200 text-red-600 rounded-lg px-1">CLOSED</span>
                            </td>
                            <td class="px-4 py-4">Hybrid</td>
                            <td class="px-4 py-4">03 Sep 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Anna M.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-paypal-filled"></i>
                                Paypal
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Project Manager</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-gray-300 uppercase rounded-lg px-1">draft</span>
                            </td>
                            <td class="px-4 py-4">Remote</td>
                            <td class="px-4 py-4">19 Jul 2022</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Jonas H.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-twitter"></i>
                                Twitter
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">UI/UX Designer</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-green-200 text-green-800 uppercase rounded-lg px-1">active</span>
                            </td>
                            <td class="px-4 py-4">On-Site</td>
                            <td class="px-4 py-4">11 Sep 2011</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Luis M.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-telegram"></i>
                                Telegram
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Team Leader</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-gray-300 uppercase rounded-lg px-1">draft</span>
                            </td>
                            <td class="px-4 py-4">Hybrid</td>
                            <td class="px-4 py-4">01 Jan 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Emilia W.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-zapier"></i>
                                Zapier
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Software Tester</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-green-200 text-green-700 uppercase rounded-lg px-1">active</span>
                            </td>
                            <td class="px-4 py-4">Remote</td>
                            <td class="px-4 py-4">12 Dec 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Lina H.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-amazon"></i>
                                Amazon
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Software Tester</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-gray-300 uppercase rounded-lg px-1">draft</span>
                            </td>
                            <td class="px-4 py-4">Remote</td>
                            <td class="px-4 py-4">12 Dec 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Lina H.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="px-4 py-4 font-semibold">
                                <i class="ti ti-brand-amazon"></i>
                                Amazon
                            </td>
                            <td class="px-6 py-4">
                                <h3 class="font-semibold">Software Tester</h3>
                                <p class="text-gray-600 italic">
                                </p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="bg-gray-300 uppercase rounded-lg px-1">draft</span>
                            </td>
                            <td class="px-4 py-4">Remote</td>
                            <td class="px-4 py-4">12 Dec 2023</td>
                            <td class="px-4 py-4">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-8 w-8 flex-none rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="profile-image">
                                    <div class="min-w-0 flex-none">
                                        <p class="leading-8">Lina H.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                            </td>
                            <td class="px-4 py-4">
                                <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <i class="ti ti-dots"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <nav class="flex justify-center mx-auto border-t border-gray-200 px-4">
                        <div class="hidden md:-mt-px md:flex">
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                <i class="ti ti-chevron-left"></i>
                            </a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">1</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"" aria-current="page">2</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600" aria-current="page">3</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">4</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">5</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">6</a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                <i class="ti ti-chevron-right"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
>
