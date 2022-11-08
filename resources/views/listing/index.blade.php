@extends('master')

@section('content')
@if (session('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=>show=false, 3000)" x-show="show" 
        class="alert alert-success transform-translate-x-1/2 fixed top-14 left-1/2 px-30 py-3">
        {{ session('message') }}
    </div>
@endif

<div class="w-full grid lg:grid-cols-3 gap-4 p-4 md:grid-cols-2 sm:grid-cols-1 space-y-2 md:space-y-0 mx-0">
    @foreach($listings as $listing)
    <div class="lg:grid lg:grid-cols gap-2 space-y-4 md:space-y-0 mx-4">
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
      <div class="flex w-full">
      <img class="w-48 h-49 mr-6 md:block" src="{{$listing->logo ? asset('storage/'.$listing->logo):
        asset('/images/img1.jpg')}}">
         <div>
         <h2 class="text-2xl">
            {{$listing->title}}
            @can('view', $listing)
            <a class="btn btn-sm btn-success" href="mylistings/{{$listing->id}}">View Listing</a>
            @endcan
        {{$search}}
         </h2>
         <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
         <x-listing-tag :tagsCsv="$listing->tags" />
         <div class="text-lf mt-4"><i class="fa-solid fa-location-dot"></i>{{$listing->location}}</div>
         <p><i><b>Created:</b>{{$listing->created_at}}</i> <br>
         <i><b>Updated:</b>{{$listing->updated_at}}</i>
</p>
        </div>    
        
            </div>
            
                </div>
      
            </div>
    @endforeach
    
    

{{-- <div class="mt-5 p-3 bg-black-200 x-20 y-30"><h3>{{$listings->links()}}</h3></div>  --}}
  
@endsection
</div>
    