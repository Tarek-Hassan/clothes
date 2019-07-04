<?php
namespace Modules\CountriesCities\Model\City\Repositories;
use Modules\CountriesCities\Model\City\City;


class CityRepository 
{
    /**
     * @var City
     */
    private $City;
    /**
     * UserRepository constructor.
     * @param City $City
     */
    public function __construct(City $City)
    {
        $this->City = $City;
    }
    /**
     * Return all users
     *
     * @return mixed
     */
   
    public function all()
    {
        return $this->City->all();
    }

    public function allData()
    {
        // dd( $this->City->With('countries')->get());
        return  $this->City->With('countries')->get();
    }


 
    /**
     * Create a new City
     *
     * @param array $City
     * @return mixed
     */
    public function create(array $City)
    {

        return $this->City->create($City);
    }

    /**
     * Find City by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
        return $this->City->find($id);
    }

    /**
     * Update City with id
     *
     * @param string $id
     * @param array $City
     * @return mixed
     */
    public function update(string $id, array $City)
    {
       
        $CityToUpdate = $this->City->find($id);
        $CityToUpdate->update($City);
        return $CityToUpdate->fresh();
    }
    /**
     * Delete City with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->find($id)->delete();
    }
   
}
