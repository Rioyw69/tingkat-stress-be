<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::get();

        return response()->json($questions);
    }

    public function store(Request $request)
    {
        $result = collect($request->data)->flatten()->sum();
        return response()->json($result);
    }
}
