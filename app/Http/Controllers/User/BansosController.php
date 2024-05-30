<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bansos; 

class BansosController extends Controller
{
    public function index($id = null)
{
    $breadcrumb = (object) [
        'title' => 'Pengajuan Bantuan Sosial',
        'list'  => ['Beranda', 'Pengajuan Bantuan Sosial']
    ];

    if ($id) {
        $bansos = Bansos::findOrFail($id);
    } else {
        $bansos = Bansos::with('penduduk')->get();
    }

    return view('user.bansos.index', compact('breadcrumb', 'bansos'));
}

    public function detail()
    {
        $breadcrumb = (object) [
            'title' => 'Detail Pengajuan Bantuan Sosial',
            'list'  => ['Beranda', 'Pengajuan Bantuan Sosial', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Pengajuan Bantuan Sosial'
        ];

        $activeMenu = 'bansos';

        return view('user.bansos.detail', compact('breadcrumb', 'page', 'activeMenu'));
    }
}