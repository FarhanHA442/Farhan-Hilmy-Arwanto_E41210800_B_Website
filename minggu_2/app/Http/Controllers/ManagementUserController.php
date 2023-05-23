<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index() {
        // return "Halo ini adalah method index, dalam controller ManagementUser.";
        $nama = "Farhan Hilmy Arwanto";
        $pelajaran= ["Algoritma & Pemrogaman","Kalkulus", "Pemrogaman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    public function create() {
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    }

    public function store(Request $request) {
        return "Method ini ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id) {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    }

    public function edit($id) {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id-" .$id;
    }

    public function update(Request $request, $id) {
        return "Mehod ini nantinya akan digunakan untuk mengubah data user dengan id-" .$id;
    }

    public function destroy($id) {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id-" .$id;
    }
}