@extends('master')

@section('content')

<div class="container">
    <form action="students" method="POST">
        @csrf
        <label for="name">Enter Your name</label> <br>
        <input class="bg-red-200 h-10 w-100 border rounded rounded-4xl hover:border-color-blue-500" type="text" name="name" value="{{old('name')}}" id=""><br>
        @error('name')
        <p class="text-xl text-red-800">{{$message}}</p>            
        @enderror <br>
        <label for="name">Enter Your Email</label> <br>
        <input class="bg-red-200 h-10 w-100 border rounded rounded-4xl hover:border-color-blue-500" type="email" name="email" id="" value="{{old('email')}}"><br>
        @error('email')
        <p class="text-xl text-red-800">{{$message}}</p>            
        @enderror
        <button class="mt-2 rounded rounded-2xl bg-green-800 hover:bg-green-1000 p-4 text-white text-4xl" type="submit">Submit</button>
    
    </form>
    <div>
        @foreach ($students as $item)

        <p>{{$item->name}} <span>({{$item->email}})</span></p>
        
            
        @endforeach
    </div>
</div>
    
@endsection