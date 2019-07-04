<?php
namespace Modules\Category\Model\Category\Repositories;
// use Modules\Category\Model\Category\CategoryType;
use Modules\Category\Model\Category\Category;


class CategoryRepository
{
    /**
     * @var Category
     */
    private $Category;
    /**
     * UserRepository constructor.
     * @param Category $Category
     */
    public function __construct(Category $Category)
    {
        $this->Category = $Category;
        // $this->Cat = $Cat;
    }
    /**
     * Return all users
     *
     * @return mixed
     */

    public function all()
    {
        return $this->Category->all();
    }
    /**
     * Create a new Category
     *
     * @param array $Category
     * @return mixed
     */

    public function create(array $Category)
    {
        $Category['type_id']=implode(',', $Category['type_id']);
        $data=$this->Category->create($Category);
        return $data;
        //  foreach($Category['type_id'] as $type){

        // }
        // $data=$this->Category->create($Category);
        // $data->type()->attach();
        // dd($Category);

        //  $cat=$this->Cat->create();
        //  $Category['category_id'] = $cat->id;
        // dd($data);
        // $data->type()->attach();
    // return $data;
        // $cat=$this->Cat->create();
        // $Category['category_id'] = $cat->id;
        // // dd(count($Category['type_id']));

        //     // $Category['type_id']=$type;
        //
        //     $cat->type()->attach($data);

    }


    /**
     * Find Category by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
        $editData=$this->Category->find($id);
        $editData['type_id']=explode(',',$editData['type_id']);
        return $editData;
    }

    /**
     * Update Category with id
     *
     * @param string $id
     * @param array $Category
     * @return mixed
     */
    public function update(string $id, array $Category)
    {
        $Category['type_id']=implode(',',$Category['type_id']);
        $CategoryToUpdate = $this->Category->find($id);
        $CategoryToUpdate->update($Category);
        return $CategoryToUpdate->fresh();
    }
    /**
     * Delete Category with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->find($id)->delete();
    }

}
