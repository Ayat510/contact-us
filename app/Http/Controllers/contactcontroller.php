<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class contactcontroller extends Controller
{
    public function index(){
        $contacts= Contact::all()->sortBy("id");;
        return view('index',compact('contacts'));
    }

    public function contact()
    {
        return view('contact');
    }


public function store(Request $request){
    $contact = new Contact;
    $contact->fname=$request->FirstName;
    $contact->lname=$request->LastName;

    $contact->email=$request->email;
    $contact ->save();


    return redirect('/');
}
    


    public function edit($id){
        $contact= Contact::find($id);

        return view('edit',compact('contact'));
    }


    public function update(Request $request,$id){
        $contact= Contact::find($id);
        $contact->fname=$request->FirstName;
        $contact->lname=$request->LastName;

        $contact->email=$request->email;
        
        $contact ->save();

    return redirect('/');
    }


    public function destroy($id){
        $contact= Contact::find($id);

        $contact->delete();
        return redirect('/');

        }

}
