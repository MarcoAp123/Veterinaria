<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //funcion para mostrar el dashboard principal
    public function index()
    {
        $users = DB::table('users')->count();
        $lista_users = User::all();
        $chart = Charts::database(User::all(),'line', 'highcharts')
                        ->title('Usuarios')
                        ->elementLabel('Total Usuarios')
                        ->dimensions(1055, 300)
                        ->colors(['#158026'])
                        ->Responsive(false)
                        ->groupByMonth('2019', true);
        return view('home', compact('users', 'lista_users', 'chart'));
    }

}
