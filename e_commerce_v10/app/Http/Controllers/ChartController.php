<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Charts; 
use App\Produit;
use App\Lign_cmd;
use App\Cmd;


class ChartController extends Controller
{
    // 
    public function getdata()
    {
        $listproduitdata = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->select('produits.libelle as nom_pr',DB::raw('SUM(lign_cmds.qte) as sommeP'))
        ->groupBy('produits.libelle')
        ->get();

        $rows = array();

        foreach ($listproduitdata as $k) {
            # code...
            $rows[] = $k;
        }
         
        return json_encode($rows);
    
    }
    public function getdata2()
    {
        $listproduitdata = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->join('cmds', 'cmds.id', '=', 'lign_cmds.cmd_id')
        ->join('users', 'users.id', '=', 'cmds.user_id')
        ->select('users.nom as nom_pr',DB::raw('SUM(lign_cmds.qte) as sommeP'))
        ->groupBy('users.nom')
        ->get();

        $rows = array();

        foreach ($listproduitdata as $k) {
            # code...
            $rows[] = $k;
        }
         
        return json_encode($rows);
    
    }


    public function index()
    {
      	// $products = Produit::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
       //  $chart = Charts::database($products, 'bar', 'highcharts')
			    //   ->title("Product Details")
			    //   ->elementLabel("Total Products")
			    //   ->dimensions(1000, 500)
			    //   ->responsive(true)
			    //   ->groupByMonth(date('Y'), true);

        $listproduitdata = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->select('produits.libelle as nom_pr',DB::raw('SUM(lign_cmds.qte) as sommeP'))
        ->groupBy('produits.libelle')
        ->get();
        $countcmd=Cmd::all();
        $Totalcmd=count($countcmd);

        $countpr=Produit::all();
        $Totalpr=count($countpr);

         $qte = DB::table('lign_cmds')
         ->SUM('qte');

         $fois = DB::table('users')
         ->where('type','=','client')->get();

         $To=count($fois);

        $listproduit = DB::table('produits')->where("prix_vent",">",100)
    	->limit(4)
    	->get();


			      return view('dashbord.index',['pe'=>$listproduit,'prdata'=>$listproduitdata,'counttoatal'=>$Totalcmd,'countpr'=>$Totalpr,'qte'=>$qte,'fois'=>$To]);
    }
}
