<?php


namespace App\Http\Repository;
use App\Personne;
use Illuminate\Http\Request;

class PersonneRepository
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::where('status','active')->paginate(15);
        return $personnes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personne = new Personne();
        return $this->saveData($personne,$request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personne = Personne::where('id',$id)->first();
        if ($personne){
            return $personne;
        }else{
            return null;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personne = Personne::where('id',$id)->first();
        if ($personne){
            return $this->saveData($personne,$request);
        }else{
            return null;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personne = Personne::where('id',$id)->first();
        if ($personne){
            $personne->status = "supprimé";
            return $personne->save();
        }else{
            return null;
        }
    }

    private function saveData($personne,$request)
    {
        $personne->code = $request->code;
        $personne->gpe_international = $request->gpe_international;
        $personne->ancienne_ref = $request->ancienne_ref;
        $personne->nom = $request->nom;
        $personne->gpe_national = $request->gpe_national;
        $personne->segment = $request->segment;
        $personne->charge_client = $request->charge_client;
        $personne->referent = $request->referent;
        $personne->type_client = $request->type_client;
        $personne->ide_intitule = $request->ide_intitule;
        $personne->ide_qualite = $request->ide_qualite;
        $personne->ide_domaine = $request->ide_domaine;
        $personne->ide_prospect = $request->ide_prospect;
        $personne->ide_statut = $request->ide_statut;
        $personne->ide_client_inactif = $request->ide_client_inactif;
        $personne->ide_n_voie = $request->ide_n_voie;
        $personne->ide_adresse1 = $request->ide_adresse1;
        $personne->ide_adresse2 = $request->ide_adresse2;
        $personne->ide_adresse3 = $request->ide_adresse3;
        $personne->ide_code_post = $request->ide_code_post;
        $personne->ide_ville = $request->ide_ville;
        $personne->ide_pays = $request->ide_pays;
        $personne->ide_longitude = $request->ide_longitude;
        $personne->ide_latitude = $request->ide_latitude;
        $personne->ide_telephone = $request->ide_telephone;
        $personne->ide_phone = $request->ide_phone;
        $personne->ide_email = $request->ide_email;
        $personne->ide_fax = $request->ide_fax;
        $personne->ide_n_sms = $request->ide_n_sms;
        $personne->ide_n_nci = $request->ide_n_nci;
        $personne->ide_n_taxe = $request->ide_n_taxe;
        $personne->ent_n_rcs = $request->ent_n_rcs;
        $personne->ent_longitude = $request->ent_longitude;
        $personne->ent_latitude = $request->ent_latitude;
        $personne->ent_description = $request->ent_description;
        $personne->save();
        return $personne;
    }
}
