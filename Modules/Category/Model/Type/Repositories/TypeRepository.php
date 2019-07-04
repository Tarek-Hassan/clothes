<?php
namespace Modules\Category\Model\Type\Repositories;
use Modules\Category\Model\Type\Type;


class TypeRepository
{
    /**
     * @var Type
     */
    private $Type;
    /**
     * UserRepository constructor.
     * @param Type $Type
     */
    public function __construct(Type $Type)
    {
        $this->Type = $Type;
    }
    /**
     * Return all users
     *
     * @return mixed
     */

    public function all()
    {
        return $this->Type->all();
    }


  



    /**
     * Create a new Type
     *
     * @param array $Type
     * @return mixed
     */
    public function create(array $Type)
    {

        return $this->Type->create($Type);
    }

    /**
     * Find Type by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
        return $this->Type->find($id);
    }

    /**
     * Update Type with id
     *
     * @param string $id
     * @param array $Type
     * @return mixed
     */
    public function update(string $id, array $Type)
    {

        $TypeToUpdate = $this->Type->find($id);
        $TypeToUpdate->update($Type);
        return $TypeToUpdate->fresh();
    }
    /**
     * Delete Type with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->find($id)->delete();
    }

}
