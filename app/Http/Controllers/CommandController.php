<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class CommandController extends Controller
{

  public function index()
  {
    return view('command.artisan');
  }

  public function store(Request $request)
  {
    $secret = "pbd_admin";

    if ($request->secret == $secret) {
      if ($request->command == "down") {
        Artisan::call($request->command . " --secret=" . $secret);
      } else {
        Artisan::call($request->command);
      }
      Session::flash('message', 'Command successfully executed');
      return view('command.artisan');
    } else {
      Session::flash('message', 'Secret does not match');
      return view('command.artisan');
    }
  }
}
