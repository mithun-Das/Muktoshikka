<?php

namespace App\Http\Controllers;
use App\answer;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuesPageController extends Controller
{
     public function index()
    {
        $users10 = DB::table('question')->orderBy('id', 'desc')->get();

         $classes = DB::table('category')
                ->DISTINCT('class_id')
                ->get();

     $totalans6 = DB::table('question')
                ->where('class', '=', 'class6')
                ->count('id');
    $totalans7 = DB::table('question')
                ->where('class', '=', 'class7')
                ->count('id');
    $totalans8 = DB::table('question')
                ->where('class', '=', 'class')
                ->count('id');
    $totalans_ssc = DB::table('question')
                ->where('class', '=', 'ssc')
                ->count('id');
    $totalans_hsc = DB::table('question')
                ->where('class', '=', 'hsc')
                ->count('id');

         return view('ques_feed.new_ques')
                ->with('classes',$classes)
                ->with('totalans7',$totalans7)
                ->with('totalans6',$totalans6)
                ->with('totalans8',$totalans8)
                ->with('totalans_ssc',$totalans_ssc)
                ->with('totalans_hsc',$totalans_hsc)
                ->with('users10', $users10);
    }

 public function noAns()
    {
         $users10 = DB::select('select * from question where id not in (select DISTINCT ques_id from answer)');

 // $query=  DB::table('answer')->select('ques_id')->get();
 //  $users10 = DB::table('question')->whereNotIn('id', $query)->get();

         return view('ques_feed.new_ques')
                
                ->with('users10', $users10);
    }

 public function votes()
    {
        $users10 = DB::table('question')->get();
         return view('ques_feed.new_ques')
                
                ->with('users10', $users10);
    }

         
}
