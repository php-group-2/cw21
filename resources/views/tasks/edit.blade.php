@extends('layouts.layout')

@section('main')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" class="w-3/6 h-4/6 text-center m-auto border-2 p-10 mt-28"
        method="POST">
        @csrf
        @method('PUT')
        <div class="relative h-14 z-0 mb-5 w-full">
            <input type="text"
                class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer"
                name="title" id="" value="{{ old('title') ?? $task->title }}" />
            <label id="label" for=""
                class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Title<span
                    class="text-red-600 text-sm">*</span></label>
        </div>
        <div class="relative h-14 z-0 mb-5 w-full">
            <input type="text"
                class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer"
                name="description" id="" value="{{ old('description') ?? $task->description }}" />
            <label id="label" for=""
                class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Description</label>

        </div>

        <div class="relative h-14 z-0 mb-5 w-full">
            <input type="datetime-local"
                class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer"
                name="deadline" id="" value="{{ old('deadline') ?? $task->deadline }}" />
            <label id="label" for=""
                class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Dead
                Line</label>
        </div>

        <button type="submit" value="submit" name="submit"
            class="bg-indigo-400 mt-9 text-white p-2 w-40 hover:bg-indigo-600 rounded-md duration-300">
            Submit
        </button>
    </form>
@endsection
