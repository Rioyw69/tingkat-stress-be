<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Question;
use App\Information;
use App\Advice;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user_agent = $request->header('User-Agent');
        $ip = $request->ip();
        

        return response()->json([
            'type' => 'success',
            'data' => [
                'user_agent' => $user_agent,
                'ip' => $ip,
                'last_login' => Carbon::parse(auth()->user()->updated_at)->format('F jS, Y')
            ]
        ], 200);
    }

    public function question(Request $request)
    {
        $questions = Question::paginate(10);

        return response()->json([
            'type' => 'success',
            'data' => $questions
        ], 200);
    }

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'is_no' => 'required|numeric',
            'is_yes' => 'required|numeric'
        ]);

        $question = new Question;
        $question->title = $request->question;
        $question->is_no = $request->is_no;
        $question->is_yes = $request->is_yes;
        $question->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Data saved successfully'
        ], 201);
    }

    public function deleteQuestion($id)
    {
        $question = Question::find($id);
        $question->delete();

        return response()->json([
            'type' => 'success',
            'message' => 'Data deleted successfully'
        ], 201);
    }

    public function showQuestion($id)
    {
        $question = Question::find($id);
        
        return response()->json([
            'type' => 'success',
            'data' => $question
        ], 201);
    }

    public function updateQuestion(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'is_no' => 'required|numeric',
            'is_yes' => 'required|numeric'
        ]);

        $question = Question::find($id);
        $question->title = $request->question;
        $question->is_no = $request->is_no;
        $question->is_yes = $request->is_yes;
        $question->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Data updated successfully'
        ], 201);
    }

    public function information()
    {
        $information = Information::first();

        return response()->json([
            'type' => 'success',
            'data' => $information
        ], 200);
    }

    public function storeInformation(Request $request)
    {
        $check = Information::first();

        if (!empty($check)) {
            $information = Information::first();
        } else {
            $information = new Information;
        }

        $information->content = $request->content;
        $information->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Updated successfully!',
            'data' => $information
        ], 200);
    }

    public function advice()
    {
        $advice = Advice::first();

        return response()->json([
            'type' => 'success',
            'data' => $advice
        ], 200);
    }

    public function storeAdvice(Request $request)
    {
        $check = Advice::first();

        if (!empty($check)) {
            $advice = Advice::first();
        } else {
            $advice = new Advice;
        }

        $advice->content = $request->content;
        $advice->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Updated successfully!',
            'data' => $advice
        ], 200);
    }
}
