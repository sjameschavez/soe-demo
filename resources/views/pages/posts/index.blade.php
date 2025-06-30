@extends('layouts.layout')

@section('title', 'Post page')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded p-4">

    {{-- Success Message --}}
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Posts</h1>
        <a href="/posts/create" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
            Create Post
        </a>
    </div>

    @foreach ($posts as $post)
        <div class="border-b border-gray-200 mb-4 pb-2">
            <!-- <p><strong>ID:</strong> {{ $post->id }}</p> -->
            <p><strong>Name:</strong> {{ $post->name }}</p>
            <p><strong>Message:</strong> {{ $post->message }}</p>

            <div class="flex space-x-2 mt-2">
                <a href="{{ route('posts.edit', $post->id) }}"
                   class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
                    Edit
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
