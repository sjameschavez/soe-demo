@extends('layouts.layout')

@section('title', isset($data) ? 'Update Form' : 'Submit Form')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">
        {{ isset($data) ? 'Update Contact' : 'Contact Form' }}
    </h2>

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

    <form
        action="{{ isset($data) ? route('posts.update', $data->id) : route('posts.store') }}"
        method="POST"
        class="space-y-4">
        <!-- to protect against Cross-Site Request Forgery (CSRF) attacks -->
        @csrf 
        @if(isset($data))
        @method('PATCH')
        @endif

        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                class="w-full mt-1 p-2 border rounded"
                value="{{ old('name', isset($data) ? $data->name : '') }}">
        </div>

        <div>
            <label for="message" class="block text-sm font-medium">Message</label>
            <textarea
                name="message"
                id="message"
                rows="4"
                class="w-full mt-1 p-2 border rounded">{{ old('message', isset($data) ? $data->message : '') }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-3 rounded hover:bg-green-700" style="padding: 4px;">
            {{ isset($data) ? 'Update' : 'Submit' }}
        </button>
        <a href="/posts" class="bg-blue-600 text-white px-3 rounded hover:bg-blue-700" style="padding: 5.5px;">
            Cancel
        </a>
    </form>
</div>
@endsection
