<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class QuotesController extends Controller
{
public function quotes(Request $request){
    $name=$request->get('name');
    $email=$request->get('email');
    $contact=$request->get('contact');
    $freight=$request->get('freight');
    $departure=$request->get('departure');
    $incoterms=$request->get('incoterms');
    $weight=$request->get('weight');
    $height=$request->get('height');
    $width=$request->get('width');
    $length=$request->get('length');
    $extra=$request->get('extra');
    $values=array('name'=>$name,'email'=>$email,'contact'=>$contact,'freight'=>$freight,'departure'=>$departure,'incoterms'=>$incoterms,'weight'=>$weight,'height'=>$height,'width'=>$width,'length'=>$length,'extra'=>$extra);
    Quotes::insert($values);
    return redirect(route('quotes'));

}
}
