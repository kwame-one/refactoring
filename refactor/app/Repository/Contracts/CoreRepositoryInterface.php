<?php

namespace DTApi\Repository\Contracts;

interface CoreRepositoryInterface
{
  
    public function getModel();

    public function all();

    public function find($id);


    public function with($array);


    public function findOrFail($id);

    
    public function query();

  
    public function instance(array $attributes = []);


    public function paginate($perPage = null);

    public function where($key, $where);


    public function create(array $data = []);

   
    public function update($id, array $data = []);


    public function delete($id);

}