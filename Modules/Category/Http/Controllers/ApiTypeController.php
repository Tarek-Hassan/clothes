<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Model\Type\Repositories\TypeRepository;
use Modules\Category\Model\Category\Repositories\CategoryRepository;

class ApiTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */


    private $Type,$Category;
    /**
     * UserRepository constructor.
     * @param User $User
     */
    public function __construct(TypeRepository $Type,CategoryRepository $Category)
    {
        $this->Type = $Type;
        $this->Category = $Category;
    }



    public function all()
    {

        $Type= $this->Type->all();
        return response()->json($Type);
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

        $Type= $this->Type->create($request->all());
        return response()->json([
            'message' => ' success! ',
            'Type' => $Type
        ]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $array = array();
        $categories=$this->Category->all();
        foreach ($categories as $category) {
            # code...
            $category->type_id=explode(',',$category->type_id);
            if(in_array($id, $category->type_id)){
                array_push($array,['id'=>$category->id,'category'=>$category->category_name] );
            }
            else {
                continue;
            }

        }
        return response()->json($array);
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

        $Type= $this->Type->update($id,$request->all());
        return response()->json([
            'message' => ' updated! ',
            'Type' => $Type
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

        $this->Type->delete($id);
        return response()->json([
            'message' => 'Successfully deleted !'
        ]);
    }
}
