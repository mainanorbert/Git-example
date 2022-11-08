@extends('master')

@section('content')  
<div class="bg-gray-50 border border-gray-200 p-10 h-600 rounded">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 rounded uppercase">Manage Your Gigs</h1>
    </header>
    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless($listings->isEmpty())
                
        
            @foreach($listings as $listing)
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-2xl">{{$listing->title}}</td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-2xl">
                    <a href="/listingstr/{{$listing->id}}/edit">Edit</a></td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-2xl"><form method="POST" action="/listingstr/{{$listing->id}}">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                    </form></td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 px-8 border-t border-b border-gray-500 text-lg">No Listings Found</td>
            </tr>
            @endunless
        </tbody>
    </table>

        </div> 

  
@endsection