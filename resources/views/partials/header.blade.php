<nav class="bg-white shadow">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
    <!-- Company Logo / Name -->
    <div class="flex-shrink-0 flex items-center">
        <span class="text-xl font-bold text-indigo-600">LaraQuiz</span>
    </div>

    <!-- Navigation Links -->
    <div class="hidden md:flex md:items-center md:space-x-6">
        <a href="{{route('show.landing')}}" class="text-gray-700 hover:text-indigo-600 font-medium">Home</a>
        <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium">About</a>
        <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium">Contact</a>
        @if(url()->current() == route('show.user.login'))
            <a href="{{route('show.user.register')}}" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">Register</a>
        @else
            <a href="{{route('show.user.login')}}" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">Login</a>
        @endif    
    </div>

    <!-- Mobile Menu Button -->
    <div class="flex items-center md:hidden">
        <button type="button" class="text-gray-600 hover:text-indigo-600 focus:outline-none" id="menu-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        </button>
    </div>
    </div>
</div>

<!-- Mobile Menu (hidden by default, shown via JavaScript) -->
<div class="md:hidden hidden px-4 pb-4" id="mobile-menu">
    <a href="{{route('show.landing')}}" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">Home</a>
    <a href="#" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">About</a>
    <a href="#" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">Contact</a>
    @if(url()->current() == route('show.user.login'))
        <a href="{{route('show.user.register')}}" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">Register</a>
    @else
        <a href="{{route('show.user.login')}}" class="block py-2 text-gray-700 hover:text-indigo-600 font-medium">Login</a>
    @endif
</div>

<script>
    // Simple mobile menu toggle
    document.getElementById('menu-button').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</nav>
