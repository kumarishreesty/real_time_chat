<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('PingPoint') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-green-100 to-green-50 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold text-green-700 mb-4">User List</h3>
                    <ul class="space-y-3">
                        @foreach($users as $user)
                        <li>
                            <a 
                                href="{{ route('chat', $user->id) }}" 
                                class="flex items-center space-x-3 p-3 rounded-lg bg-white shadow hover:bg-green-50 transition">
                                <!-- <img src="/path-to-avatar" alt="{{ $user->name }}" class="w-10 h-10 rounded-full"> -->

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd" d="M12 2a5 5 0 100 10 5 5 0 000-10zM4 21a8 8 0 1116 0H4z" clip-rule="evenodd" />
</svg>

                                <span class="text-gray-700 font-medium">{{ $user->name }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
