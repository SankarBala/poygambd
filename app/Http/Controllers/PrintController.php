<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Barryvdh\DomPDF\Facade as PDF;

class PrintController extends Controller
{

    public function candidateList()
    {

        $data = Candidate::all();
        view()->share('users', $data);
        $pdf = PDF::loadView('pdf.user', $data);

        return $pdf->download('userlist.pdf');
    }

    public function candidatePrint($id)
    {
        $user =   Candidate::find($id);

        view()->share('user', $user);
        $pdf = PDF::loadView('pdf.profile', $user);

        return $pdf->stream('Candidate_' . $id . '_' . $user['name'] . '.pdf');
    }
}
