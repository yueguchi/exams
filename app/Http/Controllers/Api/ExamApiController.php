<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Model\Exam;

// API。JSONを返却する。
class ExamApiController extends Controller
{
    // $limitに指定した件数を$pageで指定したoffsetから取得する。
    // ユーザーはpageに1,2,3...と指定するのが自然であるため、offsetとしては-1することで自然に取り扱うこととする。
    public function index($lang, $limit = 20, $page = 1)
    {
        if ($page == 0) { // pageが0なら404
            return \Response::json([], 404);
        }
        $exams = Exam::take($limit)->offset($limit * ($page - 1))->get();
        return \Response::json($exams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($lang, $id)
    {
        $exam = new Exam();
        return \Response::json($exam->where('id', '=', (int)$id)->get());
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
