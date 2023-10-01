@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-semibold text-center mb-6">Contact Us</h1>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v6m0 2v2m0 4h.01m-6.938 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2h-1.062a2 2 0 01-1.789-1.105l-3.333-6.666a2 2 0 01-.358-.896l-1-4a2 2 0 00-2.103-1.4L5.17 6.264a1.997 1.997 0 01-.171-.964l1-4a2 2 0 013.76-.768L12 6l3.241-4.502a2 2 0 013.77.768l1 4a2 2 0 01-.172.964l-3.333 6.666a2 2 0 01-.358.896l-3.46 5.785a2 2 0 01-1.79 1.105z" />
            </svg>
        </span>
    </div>
    @endif

    <form action="{{ route('contact.send') }}" method="post" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
            <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300 focus:outline-none focus:ring focus:ring-blue-200">Send Message</button>
    </form>
</div>
@endsection
