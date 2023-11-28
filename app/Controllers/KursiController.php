<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KursiModel;


class KursiController extends BaseController
{
    protected $KursiModel;

    public function __construct()
    {
        $this->KursiModel = new KursiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Seat Number Management',
            'page_title' => 'Seat Number List',
            'seats' => $this->KursiModel->findAll() 
        ];
        return view('kursi/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Seat Number Management',
            'page_title' => 'Create Seat Number',
        ];

        return view('kursi/create', $data);
    }

    public function store()
    {
        $nomor_kursi = $this->request->getPost('nomor_kursi');

        $new_kursi = [
            'nomor_kursi' => $nomor_kursi,
        ];

        $insert_kursi = $this->KursiModel->insert($new_kursi);
        return redirect()->to('kursi');
    }

    public function edit ($kursi_id)
    {
        $data = [
            'title' => 'Seat Number Management',
            'page_title' => 'Edit Seat Number',
            'seat' => $this->KursiModel->find($kursi_id)
        ];
        return view('kursi/edit', $data);
    }

    public function update()
    {
        $kursi_id = $this->request->getPost('kursi_id');
        $nomor_kursi = $this->request->getPost('nomor_kursi');

        $edit_kursi = [
            'nomor_kursi' => $nomor_kursi,
        ];

        $update_kursi = $this->KursiModel->update($kursi_id, $edit_kursi);
        return redirect()->to('kursi');
    }

    public function delete($kursi_id)
    {
        $this->KursiModel->delete($kursi_id);
        return redirect()->to('kursi');
    }
}