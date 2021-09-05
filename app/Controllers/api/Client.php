<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Client extends ResourceController
{
  protected $modelName = 'App\Models\ClientModel';
  // There used to be a bug in version 4.0.2 now fixed in v4.0.3. No issues in json return
  protected $format    = 'json';

  // Handles GET Request (Client)
  public function index()
  {
    return $this->respond($this->model->orderBy('name', 'asc')->findAll());
  }

  // Handles GET Request (Client/new)
  public function new()
  {
    return $this->respond($this->model->orderBy('name', 'asc')->findAll(3));
  }
  // Handles GET Request (Client/(:num) OR (:segment))
  public function show($id = null)
  {
    return $this->respond($this->model->find($id));
  }
  // Handles POST Request (Client)
  public function create()
  {
    $saveData = $this->request->getPost();
    return $this->respond($this->model->insert($saveData));
  }
  // Handles GET Request (Client/(:segment/edit))
  public function edit($id = null)
  {
    return $this->respond($this->model->find($id));
  }
  // Handles PUT Request (Client/(:segment))
  // Handles PATCH Request (Client/(:segment))
  public function update($id = null)
  {
    $updateData = $this->request->getRawInput();
    return $this->respond($this->model->update($id, $updateData));
  }
  // Handles DELETE Request (Client/(:segment))
  public function delete($id = null)
  {
    $deleteData = $this->request->getRawInput();
    return $this->respond($this->model->delete($deleteData));
  }
}
