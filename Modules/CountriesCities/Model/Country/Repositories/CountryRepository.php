<?php
namespace Modules\CountriesCities\Model\Country\Repositories;
use Modules\CountriesCities\Model\Country\Country;


class CountryRepository 
{
    /**
     * @var Country
     */
    private $Country;
    /**
     * UserRepository constructor.
     * @param Country $Country
     */
    public function __construct(Country $Country)
    {
        $this->Country = $Country;
    }
    /**
     * Return all users
     *
     * @return mixed
     */
   
    public function all()
    {
        return $this->Country->all();
    }

    public function allData()
    {
        return  $this->Country->With('cities')->get();
    }
    public function selectedCountry()
    { 
        // return  $this->Country->where('selected',1)->With('students')->get();
        return  $this->Country->where('selected',1)->get();
    }


 
    /**
     * Create a new Country
     *
     * @param array $Country
     * @return mixed
     */
    public function create(array $Country)
    {

        return $this->Country->create($Country);
    }

    /**
     * Find Country by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
        return $this->Country->find($id);
    }

    /**
     * Update Country with id
     *
     * @param string $id
     * @param array $Country
     * @return mixed
     */
    public function update(string $id, array $Country)
    {
       
        $CountryToUpdate = $this->Country->find($id);
        $CountryToUpdate->update($Country);
        return $CountryToUpdate->fresh();
    }
    /**
     * Delete Country with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->find($id)->delete();
    }
   
}
