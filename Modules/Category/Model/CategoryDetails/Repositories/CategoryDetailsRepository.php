<?php
namespace Modules\Category\Model\CategoryDetails\Repositories;
use Modules\Category\Model\CategoryDetails\CategoryDetails;
use Modules\Category\Entities\Image;
use Modules\Category\Entities\SizeCategory;
use Modules\Category\Entities\FavourateCategory;
use Auth;


class CategoryDetailsRepository
{
    /**
     * @var CategoryDetails
     */
    private $CategoryDetails;
    /**
     * UserRepository constructor.
     * @param CategoryDetails $CategoryDetails
     */
    public function __construct(CategoryDetails $CategoryDetails )
    {
        $this->CategoryDetails = $CategoryDetails;
    }
    /**
     * Return all users
     *
     * @return mixed
     */
    // this two function to  Start::favourate or unfavourate
    public function favorite($id)
{
    $favourate=FavourateCategory::where('user_id',Auth::user()->id)
    ->where('categorydetails_id',$id)->get();
    if(count($favourate)==0){
        return Auth::user()->favourate()->attach($id);
    }
        else{
           return Auth::user()->favourate()->detach($id);
        }
}

public function myFavorites()
{
    return FavourateCategory::where('user_id',Auth::user()->id)->get();
}


/**
 * Unfavorite a particular post
 *
 * @param  Post $post
 * @return Response
 */

    // this two function to  End::favourate or unfavourate


    public function all()
    {
        return $this->CategoryDetails->all();
        // return $this->CategoryDetails->with('user')->get();
    }
    public function allData()
    {
        return $this->CategoryDetails->with('image','size')->get();
        // return $this->CategoryDetails->with('user')->get();
    }

    /**
     * Create a new CategoryDetails
     *
     * @param array $CategoryDetails
     * @return mixed
     */

    public function create(array $CategoryDetails)
    {

        $data = $this->CategoryDetails->create($CategoryDetails);

        foreach ($CategoryDetails['image'] as $item) {
            Image::create(['image'=>$item,'categorydetails_id'=>$data->id]);
        }
        foreach ($CategoryDetails['size'] as $item) {
            SizeCategory::create(['size'=>$item,'categorydetails_id'=>$data->id]);
        }
        return $data->save();

    }


    /**
     * Find CategoryDetails by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
         $CategoryDetails=$this->CategoryDetails->find($id);
        return $CategoryDetails;

    }

    /**
     * Update CategoryDetails with id
     *
     * @param string $id
     * @param array $CategoryDetails
     * @return mixed
     */
    public function update(string $id, array $CategoryDetails)
    {
        if ($CategoryDetails['size'] != []) {
            $sizes = SizeCategory::where('categorydetails_id',$id);
            foreach ($sizes as $size) {
                $size->delete();
            }

            foreach ($CategoryDetails['size'] as $item) {
                SizeCategory::create(['size'=>$item,'categorydetails_id'=>$id]);
            }
        }

        if ($CategoryDetails['image'] != []) {
            $images = Image::where('categorydetails_id',$id);
            foreach ($images as $image) {
                $image->delete();
            }

            foreach ($CategoryDetails['image'] as $item) {
                Image::create(['image'=>$item,'categorydetails_id'=>$id]);
            }
        }
        $CategoryDetailsToUpdate = $this->CategoryDetails->find($id);
        $CategoryDetailsToUpdate->update($CategoryDetails);
        return $CategoryDetailsToUpdate->fresh();
    }
    /**
     * Delete CategoryDetails with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->find($id)->delete();
    }

}
