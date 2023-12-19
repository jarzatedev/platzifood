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
        <nav class="mt-9" x-data="{ activeNavItem: '' }">
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
                        class="ti ti-chevron-down me-auto"></i></span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="m-2 rounded-lg flex-1 flex flex-col overflow-hidden">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
            <!-- Content goes here -->
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-gray-800">Jobs</h1>
                <p class="text-xs text-gray-700">Learn and discover about that page information.</p>
                <!-- Add your main content here -->
                <div class="mt-7 flex space-x-2">
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-gray-500 sm:text-sm"><i class="ti ti-search"></i></span>
                        </div>
                        <input type="search" name="search" id="search"
                               class="rounded-md border-0 py-1 pl-7 pr-20 text-gray-700 ring-1 ring-gray-300 placeholder:text-gray-300 focus:ring-blue-600"
                               placeholder="Search in list">
                    </div>
                    <div class="relative">
                        <select class="appearance-none border border-gray-300 rounded-md py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 12.999l-6-6.003-1.414 1.415L10 15.828l7.414-7.417L16 6.996"></path>
                            </svg>
                        </div>
                    </div>

                    <div>
                        <button>Filter</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
