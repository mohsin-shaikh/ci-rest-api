<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Product extends ResourceController
{
    protected $modelName = 'App\Models\ProductModel';
    // There used to be a bug in version 4.0.2 now fixed in v4.0.3. No issues in json return
    protected $format    = 'json';

    // Handles GET Request (product)
    public function index()
    {
        return $this->respond($this->model->orderBy('name', 'asc')->findAll());
    }

    // Handles GET Request (product/new)
    public function new()
    {
        return $this->respond($this->model->orderBy('name', 'asc')->findAll(3));
    }
    // Handles GET Request (product/(:num) OR (:segment))
    public function show($id = null)
    {
        return $this->respond($this->model->find($id));
    }
    // Handles POST Request (product)
    public function create()
    {
        $saveData = $this->request->getPost();
        return $this->respond($this->model->insert($saveData));
    }
    // Handles GET Request (product/(:segment/edit))
    public function edit($id = null)
    {
        return $this->respond($this->model->find($id));
    }
    // Handles PUT Request (product/(:segment))
    // Handles PATCH Request (product/(:segment))
    public function update($id = null)
    {
        $updateData = $this->request->getRawInput();
        return $this->respond($this->model->update($id, $updateData));
    }
    // Handles DELETE Request (product/(:segment))
    public function delete($id = null)
    {
        $deleteData = $this->request->getRawInput();
        return $this->respond($this->model->delete($deleteData));
    }
}
