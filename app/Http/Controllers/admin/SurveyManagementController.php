<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\SurveyQuestion;
use App\Models\QuestionOption;
use Illuminate\Http\JsonResponse;

class SurveyManagementController extends Controller
{
    public function index() : View {
        $questions = SurveyQuestion::with(['options', 'employmentStatus'])
            ->orderBy('question_id', 'ASC')
            ->get();

        return view('admin.survey_management', compact('questions'));
    }

    public function update(Request $request, $id) : JsonResponse {
        $question = SurveyQuestion::findOrFail($id);

        $question->update([
            'question_text'  => $request->question_text,
            'question_type'  => $request->question_type,
        ]);

        QuestionOption::where('question_id', $id)->delete();

        foreach (($request->options ?? []) as $index => $optionText) {
            if (trim($optionText) === '') continue;
            QuestionOption::create([
                'question_id'   => $id,
                'option_text'   => trim($optionText),
                'option_value'  => trim($optionText),
                'display_order' => $index + 1,
                'is_active'     => true,
            ]);
        }

        return response()->json([
            'status'  => 200,
            'message' => 'Question updated successfully.',
        ]);
    }
}
