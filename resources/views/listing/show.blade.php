@extends('master')

@section('content')
<a href="/listings" class="inline-block bg-gray-500 text-4xl mr-2 px-2 py-1 text-center rounded-xl text-black ml-4 mb-4"> <i class="fa-solid fa-arrow-left"></i>Back</a>

<div class="mx-4">
  <x-card class="p-30 h-500" >
    <div class="flex flex-col items-center justify-center text-center">
      <img class="w-48 h-48 mr-6 mb-6" src="{{$listing->logo ? asset('storage/'.$listing->logo):
       asset('images/img1.jpg')}}">
      <h3 class="text-2xl mb-2"> {{$listing->title}}</h3>
      <div class="text-xl font-bold mb-4 ">{{$listing->company}}</div>
      <x-listing-tag :tagsCsv="$listing->tags" />
      <div class="text-lg my-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}       
      </div>
      <div class="border border-gray-200 w-full mb-6">
        
      </div>
      <div>
        <h3 class="text-4xl font-bold mb-4">Job Description</h3>
        <div class="text-2lg text-2xl space-y-6">
                    {{$listing->description}}

            <a href="mailto:{{$listing->email}}" class="block bg-red-800 text-white mt-6 py-2 rounded-xl hover:opacity-80">
              <i class="fa-solid fa-globe"></i>
              Contact Employer</a>
              <a href="{{$listing->website}}" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
                Visit Website
              </a>
         
        </div>
      </div>
    </div>
          
    
  </x-card>
  <div class="mt-6 p-2 flex space-x-6">
    <a class="text-4xl bg-gray-800 text-white rounded-xl flex items-center space-x-3" href="/listingstr/{{$listing->id}}/edit">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
      </svg>      

      <span>Edit</span>
    </a>
    <form method="POST" action="/listingstr/{{$listing->id}}">
      @csrf
      @method('DELETE')
      <button class="text-black-500 hover:opacity-500 rounded-xl"><i class="fa-solid fa-trash"></i>Delete</button>
    </form>
  </div>
</div>
@endsection