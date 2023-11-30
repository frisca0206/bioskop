<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BioskopModel;
use App\Models\FilmModel;
use App\Models\GenreModel;
use App\Models\KursiModel;
use App\Models\CemilanModel;


class BioskopController extends BaseController
{
    protected $BioskopModel;

    public function __construct()
    {
        $this->BioskopModel = new BioskopModel();
        $this->FilmModel = new FilmModel();
        $this->GenreModel = new GenreModel();
        $this->KursiModel = new KursiModel();
        $this->CemilanModel = new CemilanModel();
    }

    public function index()
    {
        $cinemas = $this->BioskopModel->select('bioskop.*,film.nama_film,genre.genre,kursi.nomor_kursi,cemilan.cemilan')
        ->join('film','film.id = bioskop.nama_film_id')
        ->join('genre','genre.id = bioskop.genre_id')
        ->join('kursi','kursi.id = bioskop.nomor_kursi_id')
        ->join('cemilan','cemilan.id = bioskop.cemilan_id')->findAll();

        foreach ($cinemas as $key => $cinema){
            $cinemas[$key]['harga_tiket'] = $this->rupiah($cinema['harga_tiket']);
        }

        $data = [
            'title' => 'Cinema Management',
            'page_title' => 'Cinema List',
            'cinemas' => $cinemas
        ];
        return view('bioskop/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Cinema Management',
            'page_title' => 'Create Schedule',
            'films' => $this->FilmModel->findAll(),
            'genres' => $this->GenreModel->findAll(),
            'seats' => $this->KursiModel->findAll(),
            'snacks' => $this->CemilanModel->findAll(),
        ];

        return view('bioskop/create', $data);
    }

    public function store()
    {
        $nama_film = $this->request->getPost('nama_film');
        $durasi = $this->request->getPost('durasi');
        $genre = $this->request->getPost('genre');
        $harga_tiket = $this->request->getPost('harga_tiket');
        $nomor_kursi = $this->request->getPost('nomor_kursi');
        $cemilan = $this->request->getPost('cemilan');

        $new_bioskop = [
            'nama_film_id' => $nama_film,
            'durasi' => $durasi,
            'genre_id' => $genre,
            'harga_tiket' => $harga_tiket,
            'nomor_kursi_id' => $nomor_kursi,
            'cemilan_id' => $cemilan,
        ];

        $insert_bioskop = $this->BioskopModel->insert($new_bioskop);
        return redirect()->to('bioskop');
    }

    public function edit($bioskop_id)
    {
        $data = [
            'title' => 'Cinema Management',
            'page_title' => 'Edit Schedule',
            'cinema' => $this->BioskopModel->find($bioskop_id),
            'films' => $this->FilmModel->findAll(),
            'genres' => $this->GenreModel->findAll(),
            'seats' => $this->KursiModel->findAll(),
            'snacks' => $this->CemilanModel->findAll(),
        ];
        return view('bioskop/edit', $data);
    }

    public function update()
    {
        $bioskop_id = $this->request->getPost('bioskop_id');
        $nama_film = $this->request->getPost('nama_film');
        $durasi = $this->request->getPost('durasi');
        $genre = $this->request->getPost('genre');
        $harga_tiket = $this->request->getPost('harga_tiket');
        $nomor_kursi = $this->request->getPost('nomor_kursi');
        $cemilan = $this->request->getPost('cemilan');

        $edit_bioskop = [
            'nama_film_id' => $nama_film,
            'durasi' => $durasi,
            'genre_id' => $genre,
            'harga_tiket' => $harga_tiket,
            'nomor_kursi_id' => $nomor_kursi,
            'cemilan_id' => $cemilan,
        ];

        $update_bioskop = $this->BioskopModel->update($bioskop_id, $edit_bioskop);
        return redirect()->to('bioskop');
    }

    public function delete($bioskop_id)
    {
        $this->BioskopModel->delete($bioskop_id);
        return redirect()->to('bioskop');
    }

    public function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka,2,',',',');
        return $hasil_rupiah;
    }
}