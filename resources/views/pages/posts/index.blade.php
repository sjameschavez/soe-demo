@extends('layouts.layout')

@section('title', 'Post page')

@section('content')
        <div class="max-w-xl mx-auto bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-bold mb-4">Posts</h1>
        @foreach ($posts as $post)
            <div class="border-b border-gray-200 mb-4 pb-2">
                <p><strong>ID:</strong> {{ $post['id'] }}</p>
                <p><strong>Name:</strong> {{ $post['name'] }}</p>
                <p><strong>Message:</strong> {{ $post['message'] }}</p>
            </div>
        @endforeach
    </div>
@endsection