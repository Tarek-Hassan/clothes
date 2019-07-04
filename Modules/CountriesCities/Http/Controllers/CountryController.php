<?php

namespace Modules\CountriesCities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CountriesCities\Model\Country\Repositories\CountryRepository;
use Modules\CountriesCities\Model\Country\Requests\StoreCountryRequest;
use Modules\CountriesCities\Model\Country\Requests\UpdateCountryRequest;


class CountryController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */


    private $Country;
    /**
     * UserRepository constructor.
     * @param Country $Country
     */
    public function __construct(CountryRepository $Country)
    {
        $this->Country = $Country;
    }


  


    public function index()
    {
        $data=$this->Country->all();
        return view('countriescities::Country.index',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
  
    public function create()
    {
        return view('countriescities::Country.create');
    }

    

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(StoreCountryRequest $request)
    {
        $this->Country->create($request->all());
        return redirect()->route('country.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('countriescities::Country.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data=$this->Country->find($id);
        return view('countriescities::Country.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateCountryRequest $request, $id)
    {
       
        //
        $this->Country->update($id,$request->all());
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $this->Country->delete($id);
        return redirect()->route('country.index');
    }
}
