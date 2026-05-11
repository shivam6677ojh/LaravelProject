<nav x-data="{ open: false }" class="bg-gradient-to-r from-yoga-500 to-zen-400 shadow-yoga-md sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-white hover:scale-105 transition-transform">
                        🧘 YogaPlanner
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : 'text-white hover:bg-white/20' }}">
                        📊 {{ __('Dashboard') }}
                    </a>
                    <a href="{{ route('plans.index') }}" class="nav-link {{ request()->routeIs('plans.*') ? 'active' : 'text-white hover:bg-white/20' }}">
                        🌅 {{ __('Plans') }}
                    </a>
                    <a href="{{ route('chatbot.index') }}" class="nav-link {{ request()->routeIs('chatbot.*') ? 'active' : 'text-white hover:bg-white/20' }}">
                        💬 {{ __('Chatbot') }}
                    </a>
                    <a href="{{ route('videos.index') }}" class="nav-link {{ request()->routeIs('videos.*') ? 'active' : 'text-white hover:bg-white/20' }}">
                        🎥 {{ __('Videos') }}
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 rounded-lg bg-white/20 text-white font-medium hover:bg-white/30 transition-all duration-300 border border-white/40">
                            <div>👤 {{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="hover:bg-yoga-50">
                            👤 {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="hover:bg-yoga-50 text-yoga-600">
                                🚪 {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-lg text-white hover:bg-white/20 transition duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-gradient-to-b from-yoga-500 to-yoga-600">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded-lg text-white font-medium hover:bg-white/20 {{ request()->routeIs('dashboard') ? 'bg-white/30' : '' }}">
                📊 {{ __('Dashboard') }}
            </a>
            <a href="{{ route('plans.index') }}" class="block px-4 py-2 rounded-lg text-white font-medium hover:bg-white/20 {{ request()->routeIs('plans.*') ? 'bg-white/30' : '' }}">
                🌅 {{ __('Plans') }}
            </a>
            <a href="{{ route('chatbot.index') }}" class="block px-4 py-2 rounded-lg text-white font-medium hover:bg-white/20 {{ request()->routeIs('chatbot.*') ? 'bg-white/30' : '' }}">
                💬 {{ __('Chatbot') }}
            </a>
            <a href="{{ route('videos.index') }}" class="block px-4 py-2 rounded-lg text-white font-medium hover:bg-white/20 {{ request()->routeIs('videos.*') ? 'bg-white/30' : '' }}">
                🎥 {{ __('Videos') }}
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-white/20">
            <div class="px-4">
                <div class="font-medium text-base text-white">👤 {{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white/80">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 rounded-lg text-white font-medium hover:bg-white/20">
                    ⚙️ {{ __('Profile') }}
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();"
                       class="block px-4 py-2 rounded-lg text-white font-medium hover:bg-white/20">
                        🚪 {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
