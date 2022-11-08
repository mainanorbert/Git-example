@extends('master')

@section('content')

<!--How to work with Flex Classes-->
<div class="lg:container bg-green-500 lg:mx-auto">
  <div class="flex gap-8 flex-col md:flex-row">
  <div class="flex-initial font-sans bg-indigo-700 w-40 h-40 text-center text-gray-200 txt-xl">
    flex 1
  </div> 
  <div class="flex-initial font-sans bg-indigo-700 w-40 h-40 text-center text-gray-200 txt-xl">
    flex 1
  </div>
  <div class="flex-initial font-sans bg-indigo-700 w-40 h-40 text-center text-gray-200 txt-xl">
    flex 1
  </div>   
  </div>
</div>

<!--How to deal with css grid-->



<div class="lg:container bg-orange-500 lg:mx-auto mt-4">
  
  <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-3">
    <div class="font-sans bg-purple-300 w-full h-40 text-center text-xl">
      grid 1
      
    </div>
     <div class="font-sans bg-purple-300 w-full h-40 text-center text-xl">
      grid 2
      
    </div>
     <div class="font-sans bg-purple-300 w-full h-40 text-center text-xl">
      grid 3
      
    </div>
     <div class="font-sans bg-purple-300 w-full h-40 text-center text-xl col-span-1">
      grid 4
      
    </div>
     <div class="font-sans bg-purple-300 w-full h-40 text-center text-xl">
      grid 4
      
    </div>
     <div class="font-sans bg-purple-300 w-full h-40 text-center text-xl">
      grid 5
      
    </div>
    
  </div>
</div>
@php
    class Fruit{
      protected $name;
      public $color;
      public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
      }
      public function getName(){
        return $this->name;
      }
      public function setColor(){
        return "The color is ". $this->color;
      }
    }
    $fruit=new Fruit('orange','red');
    echo "The fruit is ".$fruit->getName()." ". $fruit->setColor();
@endphp
  @endsection