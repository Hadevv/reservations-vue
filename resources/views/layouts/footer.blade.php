<footer class="bg-gray-50 mt-auto bg-white shadow-sm sm:rounded-lg z-1">
    <div class="mx-auto max-w-7xl text-xs px-6 py-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="{{ route('about') }}" class="text-gray-400 hover:text-gray-500">
                <span class="text-sm">About</span>
            </a>

            <a href="{{ route('privacy') }}" class="text-gray-400 hover:text-gray-500">
                <span class="text-sm">Privacy Policy</span>
            </a>
        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-center leading-5 text-sm text-gray-500">&copy; {{ now()->format('Y') }} Reservation, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
