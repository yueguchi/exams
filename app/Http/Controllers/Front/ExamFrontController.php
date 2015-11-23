<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Exam;

class ExamFrontController extends Controller
{
    public function index()
    {
        return view('Exam.index');
    }

    public function showList()
    {
        return view('Exam.list');
    }

    public function showDetail()
    {
        return view('Exam.detail');
    }
}
