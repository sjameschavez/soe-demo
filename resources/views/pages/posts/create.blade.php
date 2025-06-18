@extends('layouts.layout')

@section('title', 'Submit Form')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Contact Form</h2>

        @if (session('success'))
            <div class="mb-4 text-green-700 bg-green-100 p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 text-red-700 bg-red-100 p-4 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- <form action="" method="POST" class="space-y-4"> -->
        <form>
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" class="w-full mt-1 p-2 border rounded" value="{{ old('name') }}">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full mt-1 p-2 border rounded" value="{{ old('email') }}">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium">Message</label>
                <textarea name="message" id="message" rows="4" class="w-full mt-1 p-2 border rounded">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Submit
            </button>
        </form>
    </div>
@endsection
