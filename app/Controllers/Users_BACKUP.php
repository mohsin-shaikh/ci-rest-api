<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    protected $modelName = 'App\Models\UsersModel';
    // There used to be a bug in version 4.0.2 now fixed in v4.0.3. No issues in json return
    protected $format    = 'json';

    // Handles GET Request (users)
    public function index()
    {
        return $this->respond($this->model->orderBy('username', 'asc')->findAll());
    }

    // Handles GET Request (users/new)
    public function new()
    {
        return $this->respond($this->model->orderBy('username', 'asc')->findAll(3));
    }
    // Handles GET Request (users/(:num) OR (:segment))
    public function show($id = null)
    {
        return $this->respond($this->model->find($id));
    }
    // Handles POST Request (users)
    public function create()
    {
        $saveData = $this->request->getPost();
        return $this->respond($this->model->insert($saveData));
    }
    // Handles GET Request (users/(:segment/edit))
    public function edit($id = null)
    {
        return $this->respond($this->model->find($id));
    }
    // Handles PUT Request (users/(:segment))
    // Handles PATCH Request (users/(:segment))
    public function update($id = null)
    {
        $updateData = $this->request->getRawInput();
        return $this->respond($this->model->update($id, $updateData));
    }
    // Handles DELETE Request (users/(:segment))
    public function delete($id = null)
    {
        $deleteData = $this->request->getRawInput();
        return $this->respond($this->model->delete($deleteData));
    }
}
