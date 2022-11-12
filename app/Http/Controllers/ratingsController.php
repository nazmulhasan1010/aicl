<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Ratings;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ratingsController extends Controller
{
    function ratingSubmit(Request $request)
    {
        $rating = new Ratings();
        $rating->product_id = $request->product_id;
        $rating->ratings = $request->ratings;
        $rating->review = $request->ratingsReviews;
        $rating->reviewTitle = $request->reviewTitle;
        $rating->nickname = $request->nickName;
        $rating->email = $request->email;
        $rating->save();
        return redirect()->back();
    }

    function question(Request $request)
    {
        $question = new Question();
        $question->product_id = $request->product_id;
        $question->name = $request->sender_name;
        $question->question = $request->message_text;
        $question->save();
        return redirect()->back();
    }

    function answer(Request $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->questionId;
        $answer->name = $request->sender_name;
        $answer->answer = $request->message_text;
        $answer->save();
        return redirect()->back();
    }

    function qnaReact(Request $request)
    {
        $react = Answer::where('id','=', $request->input('id'))->get();
        if ($request->input('react')=='yes'){
//            $react[0]->
        }
        $answer->save();
        return redirect()->back();
    }
}
