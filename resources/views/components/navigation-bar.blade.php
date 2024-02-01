<div
    class="flex md:sticky md:-top-2 md:mt-6 min-w-[250px] w-full md:w-1/3 h-fit sm:px-2 lg:px-4 md:rounded-lg overflow-hidden bg-white dark:bg-gray-900">

    <div class="text-nowrap block py-6 w-full">
        <div class="w-full px-2 sm:px-0">
            <div class="flex flex-col gap-y-2 w-full">

                <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <x-clarity-home-line class="w-6 my-auto" />
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <x-clarity-logout-line class="w-6 my-auto" />
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</div>
