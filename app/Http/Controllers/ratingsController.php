<?php

namespace App\Http\Controllers;

use App\Ratings;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ratingsController extends Controller
{
   function ratingSubmit(Request $request){
//       return $request->all();
       $rating = new Ratings();
       $rating->product_id= $request->product_id;
       $rating->ratings= $request->ratings;
       $rating->review= $request->ratingsReviews;
       $rating->reviewTitle= $request->reviewTitle;
       $rating->nickname= $request->nickName;
       $rating->email= $request->email;
       $rating->save();
       Toastr::success('Review Added','Success');
       return redirect()->back();
   }
}
