@extends('master')
@section('content')
<div class="bg-gray-50 border border-gray-200 p-10 text-4xl rounded max-w-2xl mx-auto mt-24">
  <header class="text-center">
      <h2 class="font-bold uppercase mb-1">Login to Post Laragig</h2>
  
  </header>
  
  <form method="POST" action="/users/authenticate">
      @csrf
  
          <div class="mb-6">
  
      <label for="title" class="inline-block text-xl mb-2"> Enter Your Email</label>
      <input type="email" class="border-gray-200 round p-2 w-full" name="email" value="{{old('email')}}"
      placeholder="Enter Email..">
      @error('email')
      <p class="text-red-500 text-sm">{{$message}}</p>
      @enderror
          
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
      <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white rounded-xl py-2 px-4 ">Login</button>
      <a class="text-black ml-20 text-xl" href="/register">Don't have an account? Register</a>
          
      </div>
      
  </form>
      
  </div>
  
</section>
@endsection