<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class DepController extends Controller
{
    public function liste()
    {
      //  $nom=DB::table('departements')->get('nom');
      //  $no=DB::table('departements')->get('no');
        $departements = DB::table('departements')->get();
        return view('liste_departements' , ['departements' => $departements]);
    }
}