<?php

namespace App\Http\Controllers\Bacaan;

use App\Models\Bacaan;
use App\Models\BacaanDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BacaanController extends Controller
{
    public function main(Request $request)
    {
        return DB::table($request->table)->first();
        $data['menu'] = 'beranda';

        // return $data['bacaans'];
        // return $data['bacaans'][2]->bacaan_detail[0]->segmen_parent;
        return view('bacaan.main',$data);
    }

    public function cariContent(Request $request)
    {
        $cari = strtolower($request->cari);
        $bacaans = Bacaan::with('cek_parent')->
        when($request->cari,function($q) use ($cari){
            $q->whereRaw("lower(judul_latin) like '%$cari%'")->
                orWhereRaw("lower(judul_arb) like '%$cari%'");
        })->get();
        $data['content'] = view('bacaan.content',['bacaans' => $bacaans])->render();
        return response()->json($data);
    }

    public function detail(Request $request, $slug)
    {
        // return $request->type == 'segmen' && $request->segmen != null;
        $bacaan = Bacaan::where('slug',$slug)->first();

        $data['menu'] = 'beranda';
        $data['title'] = $bacaan->judul_latin;
        $data['slug'] = $slug;
        $data['type'] = $request->type;
        // $data['segmen'] = $request->segmen;
        $data['content'] = $request->content;
        // if ($request->type == 'segmen' && $request->segmen != null) {
        if ($request->type == 'segmen' && $request->content != null) {
            // $data['awal'] = BacaanDetail::where('bacaan_id',$bacaan->id_bacaan)->where('segmen_child',0)->first();
            $data['segmens'] = BacaanDetail::where('bacaan_id',$bacaan->id_bacaan)->whereNull('segmen_child')->get();
            $data['bacaan_details'] = BacaanDetail::where('bacaan_id',$bacaan->id_bacaan)/*->where('segmen_parent',$request->segmen)*/->get();//->skip(2);
            return view('bacaan.detail',$data);
        }elseif ($request->type == 'segmen') {
            $data['segmens'] = BacaanDetail::where('bacaan_id',$bacaan->id_bacaan)->whereNull('segmen_child')->get();
            return view('bacaan.segmen',$data);
        }else{
            $data['awal'] = BacaanDetail::where('bacaan_id',$bacaan->id_bacaan)->where('segmen_child',0)->first();
            $data['bacaan_details'] = BacaanDetail::where('bacaan_id',$bacaan->id_bacaan)->get()->skip(1);
            return view('bacaan.detail',$data);
        }
    }
}
