<?php

namespace Modules\CountriesCities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CountriesCities\Model\Country\Repositories\CountryRepository;
// use Modules\ManageUsers\Model\ManageUsers\Repositories\ManageUsersRepository;

class ApiCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */


    private $country;
    /**
     * UserRepository constructor.
     * @param User $User
     */
    public function __construct(CountryRepository $country)
    {
        $this->country = $country;
    }



    public function all()
    {

        $country= $this->country->all();
        return response()->json($country);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //

        $country= $this->country->create($request->all());
        return response()->json([
            'message' => ' success! ',
            'country' => $country
        ]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

        $country= $this->country->find($id);
        return response()->json([
            'message' => ' country'.$id,
            'country' => $country
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update($id,Request $request )
    {
        //

        $country= $this->country->update($id,$request->all());
        return response()->json([
            'message' => ' updated! ',
            'country' => $country
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //

        $this->country->delete($id);
        return response()->json([
            'message' => 'Successfully deleted !'
        ]);
    }
}
