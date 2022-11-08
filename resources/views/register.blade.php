@extends('master')
@section('content')
<div class="bg-gray-50 border border-gray-200 p-10 text-4xl rounded max-w-2xl mx-auto mt-24">
    <header class="text-center">
        <h2 class="font-bold uppercase mb-1">Register to Craate Laragig</h2>
    
    </header>
    
    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">    
        <label for="company" class="inline-block text-xl mb-2"> Name</label>
        <input type="text" class="border-gray-200 round p-2 w-full" name="name" value="{{old('name')}}" placeholder="Your Name">
        @error('name')
        <p class="text-red-500 text-sm">{{$message}}</p>
        @enderror
            
        </div>
            <div class="mb-6">
    
        <label for="title" class="inline-block text-xl mb-2"> Email</label>
        <input type="email" class="border-gray-200 round p-2 w-full" name="email" value="{{old('email')}}"
        placeholder="Enter Email..">
        @error('email')
        <p class="text-red-500 text-sm">{{$message}}</p>
        @enderror
            
        </div>

        <div class="mb-6">
            <label for="role" class="inline-block text-xl mb-2">Role (User or Admin)</label>
    
            <select class="border-gray-200 p-2 w-full" name="role" id="">
                <option value="user">user</option>
                <option value="admin">admin</option>
               
            </select>
            {{-- <select name="role" id="" class="border-gray-200 p-2 w-full @error('role') @enderror">
                <option value="" class="bg-slate-700">Type of user</option>
                <option value="admin" {{old('role')==='admin' ? 'selected' : ''}} class="bg-slate-700">Admin</option>
                <option value="user" {{old('role')==='user' ? 'selected' : ''}} class="bg-slate-700">User</option>
            </select> --}}
                
            </div>
            <div class="mb-6">
    
        <label for="location" class="inline-block text-xl mb-2"> Password</label>
        <input type="password" class="border-gray-200 round p-2 w-full" name="password" value="{{old('password')}}"
        placeholder="Enter Password..">
        @error('password')
        <p class="text-red-500 text-sm">{{$message}}</p> 
        @enderror
            
        </div>
        <div class="mb-6">
    
        <input type="password" class="border-gray-200 round p-2 w-full" name="password_confirmation"
         value="{{old('password_confirmation')}}" placeholder="Confirm Password..">
        @error('password_confirmation')
        <p class="text-red-500 text-sm">{{$message}}</p>
        @enderror
        </div>
        <div class="mb-6">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white rounded-xl py-2 px-4 ">Register</button>
        <a class="text-black ml-20 text-xl" href="/login">Are You already Registered</a>
            
        </div>
        
    </form>
        
    </div>

@endsection