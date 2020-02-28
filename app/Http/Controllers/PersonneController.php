<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Personne;
use App\Http\Repository\PersonneRepository;
use App\Http\Resources\PersonneResource;

class PersonneController extends Controller
{
    private $personneRepository;

    public function __construct(PersonneRepository $personneRepository)
    {
        $this->personneRepository = $personneRepository;
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $personnes = $this->personneRepository->index();
        return PersonneResource::collection($personnes);
    }

    /**
     * @param Request $request
     * @return PersonneResource|\Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $personne = $this->personneRepository->store($request);
        if ($personne){
            return new PersonneResource($personne);
        }else{
            return response()->json(['error'=>"Une erreur est survenue lors de l'enregistrement"],500);
        }
    }

    /**
     * @param $id
     * @return PersonneResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $personne = $this->personneRepository->show($id);
        if ($personne){
            return new PersonneResource($personne);
        }else{
            return response()->json(['error'=>"Personne not found"],404);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return PersonneResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $personne = $this->personneRepository->update($request,$id);
        if ($personne){
            return new PersonneResource($personne);
        }else{
            return response()->json(['error'=>"Une erreur est survenue lors de la modification"]);
        }
    }

    /**
     * @param $id
     * @return PersonneResource|\Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $personne = $this->personneRepository->destroy($id);
        if ($personne){
            return response()->json(null,204);
        }else{
            return response()->json(['error'=>"Personne not found"],404);
        }
    }
}
