<?php

namespace App\Http\Controllers;

use App\Achat;
use App\Detaillant;
use App\Fabricant;
use App\Marche;
use App\Plan;
use App\Vente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    { 
            //$request->session()->flush();
            //$request->session()->save();

        if (!$request->session()->has('marche'))
        {
            $request->session()->put('today', 1);
            $request->session()->put('semaine', 1);
            $request->session()->save();
            return view('index');
        }
        else
        {
            $marche = Marche::find($request->session()->get('marche'))->first();


            return view('index')->with(['fabricants' => $marche->fabricants,
                                            'detaillants' => $marche->detaillants,
                                            'achats' => $marche->achats,
                                            'ventes' => $marche->ventes,
                                            'Fplans' => $marche->Fplans,
                                            'Dplans' => $marche->Dplans]);
        }
    }

    public function start(Request $request)
    {
        $marche = new Marche();
        $marche->save();

        $fabricant1 = new Fabricant();
        $fabricant1->marche_id = $marche->id;
        $fabricant1->nom = "Equipe 1";
        $fabricant1->capital = 300;
        $fabricant1->save();

        $fabricant2 = new Fabricant();
        $fabricant2->marche_id = $marche->id;
        $fabricant2->nom = "Equipe 2";
        $fabricant2->capital = 300;
        $fabricant2->save();

        $detaillant = new Detaillant();
        $detaillant->marche_id = $marche->id;
        $detaillant->capital = 300;
        $detaillant->save();

        $request->session()->put('marche.id', $marche->id);
        $request->session()->put('marche.done', 0);
        $request->session()->put('equipe.f1', $fabricant1->id);
        $request->session()->put('equipe.f2', $fabricant2->id);
        $request->session()->put('equipe.d', $detaillant->id);
        $request->session()->put('credit.f1', 0);
        $request->session()->put('credit.f2', 0);
        $request->session()->put('D.totalU', 0);
        $request->session()->put('D.totalA', 0);
        $request->session()->put('F1.totalU', 0);
        $request->session()->put('F1.totalA', 0);
        $request->session()->put('F2.totalU', 0);
        $request->session()->put('F2.totalA', 0);
        $request->session()->save();
    }

    public function vendredi(Request $request)
    {
        if ($request->session()->get('today') == 30)
            $this->reset($request);
        else
        {
            $planF1 = new Plan();
            $planF1->fabricant_id = $request->session()->get('equipe.f1');
            $planF1->detaillant_id = null;
            $planF1->achats = "MP";
            $planF1->depenses = $request->input('depensesF1');
            $planF1->economies = $request->input('economiesF1');
            $planF1->semaine = $request->session()->get('semaine');
            $planF1->save();

            $planF2 = new Plan();
            $planF2->fabricant_id = $request->session()->get('equipe.f2');
            $planF1->detaillant_id = null;
            $planF2->achats = "MP";
            $planF2->depenses = $request->input('depensesF2');
            $planF2->economies = $request->input('economiesF2');
            $planF2->semaine = $request->session()->get('semaine');
            $planF2->save();

            $planD = new Plan();
            $planD->detaillant_id = $request->session()->get('equipe.d');
            $planF1->fabricant_id = null;
            $planD->achats = "CH";
            $planD->depenses = $request->input('depensesD');
            $planD->economies = $request->input('economiesD');
            $planD->semaine = $request->session()->get('semaine');
            $planD->save();

            //Calcul du capital des détaillants (Jeudi prochain)
            $detaillant = Detaillant::find($request->session()->get('equipe.d'))->first();
            $detaillant->update(['capital'=> $detaillant->capital + ($request->input('prixD') * $request->input('nbD'))]);
            $detaillant->save();
            $request->session()->put('D.prix', $request->input('prixD'));
            $request->session()->put('D.nb', $request->input('nbD'));
            $request->session()->put('D.totalU', $request->session()->get('D.totalU') + $request->input('nbD'));
            $request->session()->put('D.totalA', $request->session()->get('D.totalA') + ($request->input('nbD') * $request->input('prixD')));
            $request->session()->save();

            $achat1 = new Achat();
            $achat1->detaillant_id = $request->session()->get('equipe.d');
            $achat1->fabricant_id = $request->session()->get('equipe.f1');
            $achat1->prix = $request->input('prixF1');
            $achat1->nombre = $request->input('nbF1');
            $achat1->save();

            $achat2 = new Achat();
            $achat2->detaillant_id = $request->session()->get('equipe.d');
            $achat2->fabricant_id = $request->session()->get('equipe.f2');
            $achat2->prix = $request->input('prixF2');
            $achat2->nombre = $request->input('nbF2');
            $achat2->save();
        }

        if (!($request->session()->get('today') == 30))
            $request->session()->put('today', $request->session()->get('today') + 1);
        else
        {
            $request->session()->put('today', 0);
            $request->session()->put('marche.done', 1);
        }
        $request->session()->save();

        return redirect()->route('Calendar');
    }

    public function samedi(Request $request)
    {
        $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
        $fabricant1->update(['capital' => $fabricant1->capital - 110]);
        $fabricant1->save();

        $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
        $fabricant2->update(['capital' => $fabricant2->capital - 110]);
        $fabricant2->save();

        $detaillant = Detaillant::where('id', $request->session()->get('equipe.d'))->first();
        $detaillant->update(['capital' => $detaillant->capital - 110]);
        $detaillant->save();

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function dimanche(Request $request)
    {
        //Economies
        $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
        $plan1 = Plan::where('fabricant_id', $fabricant1->id)
                    ->where('semaine', $request->session()->get('semaine'))->first();
        $fabricant1->update(['capital' => $fabricant1->capital - $plan1->economies]);
        $fabricant1->save();

        $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
        $plan2 = Plan::where('fabricant_id', $fabricant2->id)
                    ->where('semaine', $request->session()->get('semaine'))->first();
        $fabricant2->update(['capital' => $fabricant2->capital - $plan2->economies]);
        $fabricant2->save();

        $detaillant = Detaillant::where('id', $request->session()->get('equipe.d'))->first();
        $plan = Plan::where('detaillant_id', $detaillant->id)
                    ->where('semaine', $request->session()->get('semaine'))->first();
        $detaillant->update(['capital' => $detaillant->capital - $plan->economies]);
        $detaillant->save();

        //Paiement des Clients
        $venteC1 = Vente::where('fabricant_id', $fabricant1->id)
                        ->where('client', 1)
                        ->where('mode', 2)
                        ->where('semaine', $request->session()->get('semaine'))->first();
        if($venteC1 != null)
        {
            $fabricant1->update(['capital' => $fabricant1->capital + (($venteC1->nombre * $venteC1->prix) / 2)]);
            $fabricant1->save();
            $request->session()->put('F1.totalU', $request->session()->get('F1.totalU') + $venteC1->nombre);
            $request->session()->put('F1.totalA', $request->session()->get('F1.totalA') + ($venteC1->nombre * $venteC1->prix));
            $request->session()->save();
        }

        $venteC2 = Vente::where('fabricant_id', $fabricant2->id)
                        ->where('client', 1)
                        ->where('mode', 2)
                        ->where('semaine', $request->session()->get('semaine'))->first();
        if($venteC2 != null)
        {
            $fabricant2->update(['capital' => $fabricant2->capital + (($venteC2->nombre * $venteC2->prix) / 2)]);
            $fabricant2->save();
            $request->session()->put('F2.totalU', $request->session()->get('F2.totalU') + $venteC2->nombre);
            $request->session()->put('F2.totalA', $request->session()->get('F2.totalA') + ($venteC2->nombre * $venteC2->prix));
            $request->session()->save();
        }

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function lundi(Request $request)
    {
        $request->session()->put('semaine', $request->session()->get('semaine') + 1);
        $request->session()->save();

        $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
        $fabricant1->update(['capital' => $fabricant1->capital - 40]);
        $fabricant1->save();

        $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
        $fabricant2->update(['capital' => $fabricant2->capital - 40]);
        $fabricant2->save();

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function mardi(Request $request)
    {
        if ($request->session()->get('today') == 27)
        {
            $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
            $fabricant1->update(['capital' => $fabricant1->capital - 100]);
            $fabricant1->save();

            $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
            $fabricant2->update(['capital' => $fabricant2->capital - 100]);
            $fabricant2->save();

            $detaillant = Detaillant::where('id', $request->session()->get('equipe.d'))->first();
            $detaillant->update(['capital' => $detaillant->capital - 100]);
            $detaillant->save();
        }

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function mercredi(Request $request)
    {
        $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
        $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
        $detaillant = Detaillant::where('id', $request->session()->get('equipe.d'))->first();

        if ($request->input('mode') == "v_q")
        {
            //Qobaati
            $venteQ1 = new Vente();
            $venteQ1->fabricant_id = $fabricant1->id;
            $venteQ1->prix = 80;
            $venteQ1->nombre = $request->input('nbQ1');
            $venteQ1->semaine = $request->session()->get('semaine');
            $venteQ1->client = 0;
            $venteQ1->save();
            $fabricant1->update(['capital' => $fabricant1->capital + ($venteQ1->nombre * $venteQ1->prix)]);
            $fabricant1->save();

            $request->session()->put('F1.totalU', $request->session()->get('F1.totalU') + $request->input('nbQ1'));
            $request->session()->put('F1.totalA', $request->session()->get('F1.totalA') + ($request->input('nbQ1') * 80));
            $request->session()->save();

            $venteQ2 = new Vente();
            $venteQ2->fabricant_id = $fabricant2->id;
            $venteQ2->prix = 80;
            $venteQ2->nombre = $request->input('nbQ2');
            $venteQ2->semaine = $request->session()->get('semaine');
            $venteQ2->client = 0;
            $venteQ2->save();
            $fabricant2->update(['capital' => $fabricant2->capital + ($venteQ2->nombre * $venteQ2->prix)]);
            $fabricant2->save();

            $request->session()->put('F2.totalU', $request->session()->get('F2.totalU') + $request->input('nbQ2'));
            $request->session()->put('F2.totalA', $request->session()->get('F2.totalA') + ($request->input('nbQ2') * 80));
            $request->session()->save();
        }
        elseif ($request->input('mode') == "v_n")
        {
            //Détaillants
            $achat1 = Achat::where('fabricant_id', $fabricant1->id)
                            ->where('detaillant_id', $detaillant->id)
                            ->where('semaine', null)->first();
            $achat1->update(['semaine' => $request->session()->get('semaine')]);
            $achat1->save();
            $fabricant1->update(['capital' => $fabricant1->capital + ($achat1->nombre * $achat1->prix)]);
            $fabricant1->save();

            $request->session()->put('F1.totalU', $request->session()->get('F1.totalU') + $achat1->nombre);
            $request->session()->put('F1.totalA', $request->session()->get('F1.totalA') + ($achat1->nombre * $achat1->prix));
            $request->session()->save();

            $achat2 = Achat::where('fabricant_id', $fabricant2->id)
                            ->where('detaillant_id', $detaillant->id)
                            ->where('semaine', null)->first();
            $achat2->update(['semaine' => $request->session()->get('semaine')]);
            $achat2->save();
            $fabricant2->update(['capital' => $fabricant2->capital + ($achat2->nombre * $achat2->prix)]);
            $fabricant2->save();

            $request->session()->put('F2.totalU', $request->session()->get('F2.totalU') + $achat2->nombre);
            $request->session()->put('F2.totalA', $request->session()->get('F2.totalA') + ($achat2->nombre * $achat2->prix));
            $request->session()->save();
        }
        elseif ($request->input('mode') == "v_c")
        {
            //Crédit
            $venteC1 = new Vente();
            $venteC1->fabricant_id = $fabricant1->id;
            $venteC1->prix = 90;
            $venteC1->nombre = $request->input('nbC1');
            $venteC1->mode = $request->input('de1');
            $venteC1->semaine = $request->session()->get('semaine');
            $venteC1->client = 1;
            $venteC1->save();

            $request->session()->put('F1.totalU', $request->session()->get('F1.totalU') + $venteC1->nombre);
            $request->session()->save();
            if ($venteC1->mode == 1)
            {
                $request->session()->put('credit.f1', ($venteC1->nombre * $venteC1->prix));
                $request->session()->put('F1.totalA', $request->session()->get('F1.totalA') + ($venteC1->nombre * $venteC1->prix));
                $request->session()->save();
            }
            elseif ($venteC1->mode == 4)
            {
                $request->session()->put('credit.f1', ($venteC1->nombre * $venteC1->prix)/2);
                $request->session()->put('F1.totalA', $request->session()->get('F1.totalA') + ($venteC1->nombre * $venteC1->prix)/2);
                $request->session()->save();
            }
            else
            {
                $request->session()->put('credit.f1', 0);
                $request->session()->save();
            }

            $venteC2 = new Vente();
            $venteC2->fabricant_id = $fabricant2->id;
            $venteC2->prix = 90;
            $venteC2->nombre = $request->input('nbC2');
            $venteC2->mode = $request->input('de2');
            $venteC2->semaine = $request->session()->get('semaine');
            $venteC2->client = 1;
            $venteC2->save();

            $request->session()->put('F2.totalU', $request->session()->get('F2.totalU') + $venteC1->nombre);
            $request->session()->save();
            if ($venteC2->mode == 1)
            {
                $request->session()->put('credit.f2', ($venteC2->nombre * $venteC2->prix));
                $request->session()->put('F2.totalA', $request->session()->get('F2.totalA') + ($venteC2->nombre * $venteC2->prix));
                $request->session()->save();
            }
            elseif ($venteC2->mode == 4)
            {
                $request->session()->put('credit.f2', ($venteC2->nombre * $venteC2->prix)/2);
                $request->session()->put('F2.totalA', $request->session()->get('F2.totalA') + ($venteC2->nombre * $venteC2->prix)/2);
                $request->session()->save();
            }
            else
            {
                $request->session()->put('credit.f2', 0);
                $request->session()->save();
            }
        }

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function jeudi(Request $request)
    {
        if ($request->session()->get('today') == 1)
        {
            $this->start($request);
        }
        elseif ($request->session()->get('today') == 29)
        {
            $this->jour29($request);
        }
        else
        {
            //Fabricants
            $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
            $ventesC1 = Vente::where('fabricant_id', $fabricant1->id)
                ->where('client', 1)
                ->where('semaine', $request->session()->get('semaine'))->get();
            foreach ($ventesC1 as $venteC1)
            {
                if ($venteC1->mode == 1)
                    $fabricant1->update(['capital' => $fabricant1->capital + ($venteC1->nombre * $venteC1->prix)]);
                elseif ($venteC1->mode == 4)
                    $fabricant1->update(['capital' => $fabricant1->capital + ($venteC1->nombre * $venteC1->prix) / 2]);
                $fabricant1->save();
            }

            $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
            $ventesC2 = Vente::where('fabricant_id', $fabricant2->id)
                ->where('client', 1)
                ->where('semaine', $request->session()->get('semaine'))->get();
            foreach ($ventesC2 as $venteC2)
            {
                if ($venteC2->mode == 1)
                    $fabricant2->update(['capital' => $fabricant2->capital + ($venteC2->nombre * $venteC2->prix)]);
                elseif ($venteC2->mode == 4)
                    $fabricant2->update(['capital' => $fabricant2->capital + ($venteC2->nombre * $venteC2->prix) / 2]);
                $fabricant2->save();
            }

            //Détaillants
            //Calculé le Vendredi précédent
        }

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function jour29(Request $request)
    {
        $fabricant1 = Fabricant::where('id', $request->session()->get('equipe.f1'))->first();
        $fabricant1->update(['capital' => $fabricant1->capital - 250]);
        $fabricant1->save();

        $fabricant2 = Fabricant::where('id', $request->session()->get('equipe.f2'))->first();
        $fabricant2->update(['capital' => $fabricant2->capital - 250]);
        $fabricant2->save();

        $detaillant = Detaillant::where('id', $request->session()->get('equipe.d'))->first();
        $detaillant->update(['capital' => $detaillant->capital - 250]);
        $detaillant->save();

        //Remboursement de la fin du mois
        $fabricant1 = Fabricant::find($request->session()->get('equipe.f1'));
        $ventesC1 = Vente::where('fabricant_id', $fabricant1->id)
            ->where('client', 1)
            ->where('mode', 3)->get();
        foreach ($ventesC1 as $venteC1)
        {
            $fabricant1->capital += ($venteC1->nombre * $venteC1->prix);
            $fabricant1->save();
            $request->session()->put('F1.totalU', $request->session()->get('F1.totalU') + $venteC1->nombre);
            $request->session()->put('F1.totalA', $request->session()->get('F1.totalA') + ($venteC1->nombre * $venteC1->prix));
            $request->session()->save();
        }

        $fabricant2 = Fabricant::find($request->session()->get('equipe.f2'));
        $ventesC2 = Vente::where('fabricant_id', $fabricant2->id)
            ->where('client', 1)
            ->where('mode', 3)->get();
        foreach ($ventesC2 as $venteC2)
        {
            $fabricant2->capital += ($venteC2->nombre * $venteC2->prix);
            $fabricant2->save();
            $request->session()->put('F2.totalU', $request->session()->get('F2.totalU') + $venteC2->nombre);
            $request->session()->put('F2.totalA', $request->session()->get('F2.totalA') + ($venteC2->nombre * $venteC2->prix));
            $request->session()->save();
        }
    }

    public function expired(Request $request)
    {

        if (!($request->session()->get('today') == 30))
        {
            $request->session()->put('today', $request->session()->get('today') + 1);
            $request->session()->save();
        }

        return redirect()->route('Calendar');
    }

    public function reset(Request $request)
    {
            $request->session()->flush();
            $request->session()->save();

            return redirect()->route('Calendar');
    }
}
