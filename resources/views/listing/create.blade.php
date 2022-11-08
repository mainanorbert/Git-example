@extends('master')
@include('flash-message')

@section ("content")

<div class="bg-gray-50 border border-gray-200 p-10 text-4xl rounded max-w-2xl mx-auto mt-24">
<header class="text-center">
	<h2 class="font-bold uppercase mb-1">Creat a Laragig</h2>
	<p class="mb-4">Post a gig to find a developer</p>
</header>

<form method="POST" action="listingstr" enctype="multipart/form-data">
	@csrf
	<div class="mb-6">

	<label for="company" class="inline-block text-xl mb-2"> Company Name</label>
	<input type="text" class="border-gray-200 round p-2 w-full" name="company" value="{{old('company')}}">
	@error('company')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
		
	</div>
		<div class="mb-6">

	<label for="title" class="inline-block text-xl mb-2"> Job Title</label>
	<input type="text" class="border-gray-200 round p-2 w-full" name="title" value="{{old('title')}}">
	@error('company')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
		
	</div>
		<div class="mb-6">

	<label for="location" class="inline-block text-xl mb-2"> Job Location</label>
	<input type="text" class="border-gray-200 round p-2 w-full" name="location" value="{{old('location')}}">
	@error('company')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
		
	</div>
	<div class="mb-6">

	<label for="email" class="inline-block text-xl mb-2">Contact Email</label>
	<input type="email" class="border-gray-200 round p-2 w-full" name="email" value="{{old('email')}}">
	@error('email')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
		
	</div>
		<div class="mb-6">

	<label for="website" class="inline-block text-xl mb-2"> Website/Application Url</label>
	<input type="text" class="border-gray-200 round p-2 w-full" name="website" value="{{old('website')}}">
	@error('website')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
		
	</div>
	<div class="mb-6">

	<label for="tags" class="inline-block text-xl mb-2"> Tags (Comma Seperated)</label>
	<input type="text" class="border-gray-200 round p-2 w-full" name="tags" value="{{old('tags')}}">
	@error('tags')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
		
	</div>
		<div class="mb-6">

	<label for="logo" class="inline-block text-xl mb-2"> Company Logo</label>
	<input type="file" class="border-gray-200 round p-2 w-full" name="logo" value="{{old('logo')}}">
	@error('logo')
	<p class="text-red-500 text-lg">{{$message}}</p>
	@enderror
	</div>
		<div class="mb-6">

	<label for="company" class="inline-block text-xl mb-2"> Description</label>
	<textarea class="border border-gray-200 p-10 w-full rounded" name="description" rows="10" placeholder="Include salary, requirements, tasks to be accomplished">
		"{{old('description')}}"
		
	</textarea>
	@error('description')
	<p class="text-red-500 text-sm">{{$message}}</p>
	@enderror
		
	</div>
	<div class="mb-6">
	<button class="bg-pink text-blue rounded-xl py-2 px-4 hover:bg-blue-900 hover:text-white">Create Gig</button>
	<a class="text-black ml-4" href="listings">Back</a>
		
	</div>
	
</form>
	
</div>


@endsection