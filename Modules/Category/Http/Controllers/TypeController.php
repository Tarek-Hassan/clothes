<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Model\Type\Repositories\TypeRepository;
use Modules\Category\Model\Type\Requests\StoreTypeRequest;
use Modules\Category\Model\Type\Requests\UpdateTypeRequest;

class TypeController extends Controller
{

    private $Type;
    /**
     * UserRepository constructor.
     * @param Type $Type
     */
    public function __construct(TypeRepository $Type)
    {
        $this->Type = $Type;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data=$this->Type->all();
        
        return view('category::Type.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */

    public function create()
    {
        return view('category::Type.create');
    }



    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(StoreTypeRequest $request)
    {
        $this->Type->create($request->all());
        return redirect()->route('type.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('category::Type.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data=$this->Type->find($id);
        return view('category::Type.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateTypeRequest $request, $id)
    {

        //
        $this->Type->update($id,$request->all());
        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $this->Type->delete($id);
        return redirect()->route('type.index');
    }
}
