<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CemilanModel;


class CemilanController extends BaseController
{
    protected $CemilanModel;

    public function __construct()
    {
        $this->CemilanModel = new CemilanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Snack Management',
            'page_title' => 'Snack List',
            'snacks' => $this->CemilanModel->findAll()
        ];
        return view('cemilan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Snack Management',
            'page_title' => 'Create Snack'
        ];

        return view('cemilan/create', $data);
    }

    public function store()
    {
        $cemilan = $this->request->getPost('cemilan');

        $new_snack = [
            'cemilan' => $cemilan,
        ];

        $insert_snack = $this->CemilanModel->insert($new_snack);
        return redirect()->to('cemilan');
    }

    public function edit($cemilan_id)
    {
        $data = [
            'title' => 'Snack Management',
            'page_title' => 'Edit Snack',
            'snack' => $this->CemilanModel->find($cemilan_id)
        ];
        return view('cemilan/edit', $data);
    }

    public function update()
    {
        $cemilan_id = $this->request->getPost('cemilan_id');
        $cemilan = $this->request->getPost('cemilan');

        $edit_cemilan = [
            'cemilan' => $cemilan,
        ];

        $update_cemilan = $this->CemilanModel->update($cemilan_id, $edit_cemilan);
        return redirect()->to('cemilan');
    }

    public function delete($cemilan_id)
    {
        $this->CemilanModel->delete($cemilan_id);
        return redirect()->to('cemilan');
    }
}