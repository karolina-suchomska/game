<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ScoreCollection;
use App\Score;

class ScoreController extends Controller
{
    public function index()
    {
      return new ScoreCollection(Score::all());
    }

    public function store(Request $request)
    {
      $score = new Score([
        'score' => $request->get('score'),
        'player' => $request->get('player'),
        'computer' => $request->get('computer'),
      ]);

      $score->save();

      return response()->json('successfully added');
    }

    public function delete()
    {
      $scores = Score::table('scores')->delete();

      return response()->json('successfully deleted');
    }
}
