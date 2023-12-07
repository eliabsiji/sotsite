<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function weddings(){

        return view('portfolio-weddings');
    }

    public function events(){

        return view('portfolio-events');
    }

    public function portraits(){

        return view('portfolio-portraits');
    }

    public function doyin_dapo(){

        return view('doyin-dapo-weddings');
    }

    public function pre_doyin_dapo(){

        return view('doyin-dapo-preweddings');
    }

    public function isiwat_kazeem(){

        return view('isiwat-kazeem');
    }

    public function olivia_judah(){

        return view('olivia-judah');
    }

    public function joan_davies(){

        return view('joan-davies');
    }

    public function seun_soyinka(){

        return view('soyinka');
    }
    public function peejay(){

        return view('peejay');
    }
    public function korede(){

        return view('korede');
    }
    public function ogunride(){

        return view('ogunride');
    }
    public function jayesimi(){

        return view('jayesimi');
    }
    public function busayo(){

        return view('busayo');
    }
}
