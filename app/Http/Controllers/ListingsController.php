<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use repository\search;

class ListingsController extends Controller
{
    public function __construct(){
        return $this->middleware(['auth'])->except('index','sendmail');
    }
function index(Request $request){
    $search=$request->search;
//   search::search =$search;
    // $sc = ;
    // dd($sc);
         $listings=Listing::with('user')->filter(request(['tag','search']))->simplePaginate();
         return view('listing.index',['listings'=>$listings,'search'=>$search]);
        //  orderby('created_at','asc')->paginate(2);
        // return view('listing.index', [
            // 'listings'=>Listing::latest()->filter(request(['tag','search']))->simplePaginate(5)
        // ]);
}

function show($id){
    // dd('listing',$listing);
// $this->authorize('adminview',User::class);

  $listing=Listing::find($id);

    // return view('listing.show')->with('listing',$listing);
    return view('listing.show',['listing'=>$listing]);

}
 
public function create(){
    return view('listing.create');
 }

function store(Request $request){
   
    $formFields=$request->validate([
    'title'=>'required',
    'company'=>'required',
    'location'=>'required',
    'website'=>'required',
    'email'=>'required|email',
    'tags'=>'required',
    'description'=>'required'
    ]);
    if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
     }

$formFields['user_id']=auth()->id();
    Listing::create($formFields);

    return redirect('listings','emails')->with('message','Listing Created Successfully');

}

function edit(Listing $listing){

    return view('listing.edit',['listing'=>$listing]);

}

function update(Request $request, Listing $listing){
    // make sure logged in user is owner
    if($listing->user_id !=auth()->id()){
        abort(403,'Unauthorized action');
    }

     $formFields=$request->validate([
    'title'=>'required',
    'company'=>'required',
    'location'=>'required',
    'website'=>'required',
    'email'=>['required', 'email'],
    'tags'=>'required',
    'description'=>'required'
    ]);
if($request->hasFile('logo')){
    $formFields['logo']=$request->file('logo')->store('logos','public');
}
    $listing->update($formFields);

    return redirect('listings')->with('message','Listing Updated Successfully');
}
//Delete Listing
public function destroy(Listing $listing){
    if($listing->user_id !=auth()->id()){
        abort(403,'Unauthorized action');
    }

    $listing->delete();
    return redirect('listings')->with('message','Listing Deleted Successfully');

}
public function manage(){
    return view('manage',['listings'=>auth()->user()->listings()->get()]);
}
// public function upload(Request $request){
//     $file=$request->hasFile('logo'){

//     }
// }
public function myemail($mailData){
    $mailData=[

        'name'=>'Test Name',
        'dob'=>"7/05/2022"
    ];
    Mail::to('hello@example.com')->send(new TestEmail($mailData));
    return view('email.test')->with('mailData',$mailData);
}


}
