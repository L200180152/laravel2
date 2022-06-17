<?php

namespace App\Http\Controllers;

use App\Models\detailproduk;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class produk_controller extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Produk Admin',
            'detailproduk' => detailproduk::all()
        ];
        return view('admin.produkadmin', $data);
    }

    public function indexUser()
    {

        $data = [
            'judul' => 'Belanja | HUTS APPAREL',
            'produk' => detailproduk::all()

        ];

        return view('user.belanja', $data);
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'namaproduk'    => 'required|max:100',
            'hargaproduk'   => 'required|max:100',
            'desc_produk'   => 'required|max:100',
            'beratproduk'   => 'required|max:25',
            'stokproduk'    => 'required|max:10',
            'uploadgambar'  => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        //upload image
        $gambar = $request->file('uploadgambar');
        $gambar->storeAs('public/img', $gambar->hashName());

        //insert post
        $produk = detailproduk::create([
            'id_produk' => $request->id_produk,
            'nama_produk' => $request->namaproduk,
            'harga_produk' => $request->hargaproduk,
            'desc_produk' => $request->desc_produk,
            'berat_produk' => $request->beratproduk,
            'stok_produk' => $request->stokproduk,
            'img_produk' => $gambar->hashName()
        ]);

        if ($produk) {
            return redirect()->route('rute_produkadmin')->with(['Success' => 'Data Berhasil Disimpan']);
        } else {
            return redirect()->route('rute_produkadmin')->with(['Error' => 'Data Gagal Disimpan']);
        }
    }

    //delete post

    public function hapus(Request $request)
    {
        detailproduk::where('id_produk', $request->id_produk)->delete();
        return redirect()->route('rute_produkadmin')->with(['Success' => 'Data Berhasil Dihapus']);
    }

    // edit function
    public function edit(Request $request)
    {
        detailproduk::where('id_produk', $request->id_produk)->get();
    }

    // update function
    public function ubah(Request $request)
    {
        // dd($request->old_image);
        $old_file = $request->old_image;
        $file = $request->file('updategambar');

        if ($file != '') {
            detailproduk::where('id_produk', $request->id_produk)->get();

            $updategambar = $request->file('updategambar');
            $updategambar->storeAs('public/img', $updategambar->hashName());

            detailproduk::where('id_produk', $request->id_produk)->update(
                [
                    'nama_produk' => $request->updatenamaproduk,
                    'harga_produk' => $request->updatehargaproduk,
                    'desc_produk' => $request->updatedesc_produk,
                    'berat_produk' => $request->updateberatproduk,
                    'stok_produk' => $request->updatestokproduk,
                    'img_produk' => $updategambar->hashName()
                ]
            );
        } else {
            detailproduk::where('id_produk', $request->id_produk)->get();
            detailproduk::where('id_produk', $request->id_produk)->update(
                [
                    'nama_produk' => $request->updatenamaproduk,
                    'harga_produk' => $request->updatehargaproduk,
                    'desc_produk' => $request->updatedesc_produk,
                    'berat_produk' => $request->updateberatproduk,
                    'stok_produk' => $request->updatestokproduk
                ]
            );
        }



        return redirect()->route('rute_produkadmin')->with(['Success' => 'Data Berhasil Di Edit']);
    }
}
