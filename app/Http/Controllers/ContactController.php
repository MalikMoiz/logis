<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{public function contact(Request $request){
    $message=$request->get('message');
    $name=$request->get('name');
    $email=$request->get('email');
    $subject=$request->get('subject');
    
    $values=array('message'=>$message,'name'=>$name,'email'=>$email,'subject'=>$subject);
    Contact::insert($values);
    return redirect(route('contact'));

}
}
