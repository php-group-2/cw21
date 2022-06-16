
@extends('layouts.layout')

@section('main')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>  {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{   route('users.store'   )}}" class="w-3/6 h-4/6 text-center m-auto border-2 p-10 mt-28" method="POST">
    @csrf
    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="text" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required name="first_name" id=""  value="{{   old('first_name')  }}" />
        <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">firstname</label>
    </div>
    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="text" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required  name="last_name" id="" value="{{   old('last_name')  }}"  />
        <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">lastname</label>

    </div>
    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="text" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required  name="phone" id="" value="{{   old('phone')  }}"  />
        <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Phone Number</label>
    </div>
    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="datetime-local" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required  name="birthday" id="" value="{{   old('birthday')  }}"  />
        <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Birthday</label>
    </div>
    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="email" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required placeholder="" name="email" id="" value="{{   old('email')  }}"/>
        <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Email</label>
    </div>

    <div class="relative h-14 z-0 mb-5 w-full">



        <select id="underline_select" name="sex" class="block border-b-gray-400  text-center py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option value="null" selected disabled>select your sex</option>
            <option class="bg-indigo-700 hover:text-bold text-white" value="male" >Male</option>
            <option class="bg-indigo-700 hover:text-bold text-white" value="female">Female</option>
        </select>

    </div>
    <button type="submit" value="submit" name="submit" class="bg-indigo-400 mt-9 text-white p-2 w-40 hover:bg-indigo-600 rounded-md duration-300">
        Submit
    </button>
</form>
@endsection
