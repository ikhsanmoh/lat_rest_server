<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\tb_buku;

use App\Http\Controllers\Controller;

class TbBukuController extends Controller
{
    public function index() {

        $data = tb_buku::all();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Mengambil Data',
            'data' => $data
        ], 200);
    }
}
