<div class="d-flex">
    <nav class="sidebar relative overflow-visible bg-gradient-to-br from-[#1a1c2e] to-[#16181f] flex flex-col transition-all duration-500 ease-in-out text-white w-56 h-[100vh]">

        <!-- Toggle Button -->
        <button
            class="toggle-btn absolute top-10 right-[-15px] bg-black w-[30px] h-[30px] border border-gray-300 rounded-full flex items-center justify-center shadow-xl transition-all duration-500 z-100"
            type="button">
            <i class="fas fa-chevron-left text-white icon transition-transform duration-500"></i>
        </button>

        <!-- Navigation Links -->
        <div class="nav flex flex-col mt-3 space-y-2">
            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-3 p-3 
          {{ request()->routeIs('dashboard') ? 'border border-white bg-blue-300 text-white sidebar transition-all duration-300 ease-in-out ' : 'text-gray-200 hover:bg-gray-700 sidebar' }}">
                <i class="fas fa-home"></i>
                <span class="hide-on-collapse transition-all duration-500 ease-in-out origin-left">Dashboard</span>
            </a>

            <a href="#" class="flex items-center gap-3 p-3
                {{ request()->routeIs('Student') ? 'border border-white bg-blue-300 text-white sidebar transition-all duration-300 ease-in-out' : 'text-gray-200 hover:bg-gray-700 sidebar'}} ">
                <i class="fas fa-chart-bar"></i>
                <span class="hide-on-collapse transition-all duration-500 ease-in-out origin-left">Students</span>
            </a>

            <a href="#" class="flex items-center gap-3 p-3
                {{ request()->routeIs('Employee') ? 'border border-white bg-blue-300 text-white sidebar transition-all duration-300 ease-in-out' : 'text-gray-200 hover:bg-gray-700 sidebar'}} ">
                <i class="fas fa-chart-bar"></i>
                <span class="hide-on-collapse transition-all duration-500 ease-in-out origin-left">Employee</span>
            </a>

            <a href="#" class="flex items-center gap-3 p-3
                {{ request()-> routeIs('Classes') ? 'border border-white bg-blue-300 text-white sidebar transition-all duration-300 ease-in-out' : 'text-gray-200 hover:bg-gray-700 sidebar'}}">
                <i class="fas fa-users"></i>
                <span class="hide-on-collapse transition-all duration-500 ease-in-out origin-left">Classes</span>
            </a>

            <a href="#" class="flex items-center gap-3 p-3">
                <i class="fas fa-box"></i>
                <span class="hide-on-collapse transition-all duration-500 ease-in-out origin-left">Subject</span>
            </a>

            <a href="#" class="flex items-center gap-3 p-3">
                <i class="fas fa-gear"></i>
                <span class="hide-on-collapse transition-all duration-500 ease-in-out origin-left">Settings</span>
            </a>
        </div>
    </nav>

    <main class="main-content flex-1">
        <div class="container-fluid">
            <!-- content -->
        </div>
    </main>
</div>

<script>
    $('.toggle-btn').click(function() {

        $('.icon').toggleClass('rotate-180');

        $('.sidebar').toggleClass('w-56 w-14');
        $('.main').toggleClass('ml-56 ml-14');
        $('.hide-on-collapse').toggleClass('opacity-0 scale-0');
    });
</script>