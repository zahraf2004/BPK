<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputSuratHukum;
use App\Models\InputSuratHumas;
use App\Models\InputSuratKeu;
use App\Models\InputSuratUmum;
use App\Models\InputSuratSDM;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard',[
            'InputSuratHukum'=> InputSuratHukum::all(),
            'InputSuratHumas'=>InputSuratHumas::all(),
            'InputSuratKeu'=>InputSuratKeu::all(),
            'InputSuratUmum'=>InputSuratUmum::all(),
            'InputSuratSDM'=>InputSuratSDM::all(),
        ]);
    }
}