<div style="overscroll-behavior: none;">
  <!-- Header Section -->
  <div
    class="fixed w-full bg-gradient-to-r from-green-500 to-green-400 h-16 flex items-center justify-between text-white shadow-md px-4"
    style="top: 0;">
    <!-- Back Button -->
    <a href="/dashboard" class="flex items-center hover:opacity-90 transition">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        class="w-8 h-8 mr-2">
        <path
          class="fill-current"
          d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z" />
      </svg>
      <!-- <span class="text-sm font-semibold">Back</span> -->
    </a>
    
    <!-- User Info -->
    <div class="flex items-center space-x-2">
      <!-- <img src="/path-to-profile-icon" alt="User" class="w-10 h-10 rounded-full border-2 border-white"> -->
      <div class="font-bold text-lg tracking-wide">{{$user->name}}</div>
    </div>

    <!-- Options Menu -->
    <div class="relative group">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        class="icon-dots-vertical w-8 h-8 cursor-pointer">
        <path
          class="fill-current"
          fill-rule="evenodd"
          d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
      </svg>
      <div
        class="absolute right-0 mt-2 hidden group-hover:block bg-white text-black rounded shadow-lg py-1 w-32">
        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
      </div>
    </div>
  </div>

  <!-- Messages Section -->
  <div class="mt-20 mb-20">
    @foreach($messages as $message)
    @if($message['sender'] != auth()->user()->name)
    <!-- Received Message -->
    <div class="clearfix w-full flex items-center my-4 px-4">
      <!-- <img src="/path-to-sender-icon" alt="Sender" class="w-10 h-10 rounded-full border-2 border-gray-300"> -->
      <div class="bg-gray-100 ml-4 p-3 rounded-lg shadow-md">
        <!-- <b class="text-gray-800">{{ $message['sender'] }}:</b> -->
        <p class="text-gray-700">{{ $message['message'] }}</p>
      </div>
    </div>
    @else
    <!-- Sent Message -->
    <div class="clearfix w-full flex justify-end my-4 px-4">
      <div class="bg-green-100 p-3 rounded-lg shadow-md text-right">
        <p class="text-gray-700">{{ $message['message'] }}</p>
        <!-- <b class="text-green-700">: You</b> -->
      </div>
    </div>
    @endif
    @endforeach
  </div>

  <!-- Message Input Section -->
  <form wire:submit="sendMessage()" class="fixed w-full bottom-0 bg-white border-t border-gray-300">
    <div class="flex items-center p-2">
      <textarea
        class="flex-grow m-2 py-2 px-4 rounded-full border border-gray-300 bg-gray-100 resize-none focus:outline-none focus:ring-2 focus:ring-green-400"
        rows="1"
        wire:model="message"
        placeholder="Type your message...">
      </textarea>
      <button
        class="bg-green-500 text-white p-2 rounded-full hover:bg-green-600 transition focus:outline-none"
        type="submit">
        <svg
          class="w-6 h-6"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor">
          <path
            d="M21.426 11.079l-18-8A1 1 0 0 0 2 4v16a1 1 0 0 0 1.426.922l18-8a1 1 0 0 0 0-1.843z" />
        </svg>
      </button>
    </div>
  </form>
</div>