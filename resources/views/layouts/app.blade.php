<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside 
            class="fixed inset-y-0 left-0 w-64 bg-blue-700 text-white transform transition-transform duration-200 ease-in-out"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        >
            <div class="p-4">
                <h2 class="text-2xl font-bold mb-6">Student System</h2>
                <nav class="space-y-2">
                    <a href="{{ route('students.index') }}" class="block px-3 py-2 rounded hover:bg-blue-600">👨‍🎓 Students</a>
                    
                </nav>
            </div>
        </aside>

        <!-- Overlay (mobile only) -->
        <div 
            class="fixed inset-0 bg-black bg-opacity-50 lg:hidden"
            x-show="sidebarOpen"
            @click="sidebarOpen = false"
        ></div>

        <!-- Main Content -->
        <main class="flex-1 p-6 lg:ml-64">
            <!-- Topbar -->
            <header class="flex justify-between items-center mb-6">
                <button 
                    class="lg:hidden px-3 py-2 bg-blue-600 text-white rounded"
                    @click="sidebarOpen = !sidebarOpen"
                >
                    ☰ Menu
                </button>
                <h1 class="text-2xl font-bold">@yield('page-title')</h1>
                <span class="text-gray-700">Hello, Admin 👋</span>
            </header>

            @yield('content')
        </main>
    </div>
</body>
</html>