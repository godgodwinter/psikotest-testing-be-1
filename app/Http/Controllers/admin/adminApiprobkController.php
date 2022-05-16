<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\importusername;
use App\Models\apiprobk;
use App\Models\apiprobk_deteksi;
use App\Models\apiprobk_deteksi_list;
use App\Models\apiprobk_sertifikat;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class adminApiprobkController extends Controller
{

    public function all(Request $request)
    {
        $items = apiprobk::orderBy('updated_at', 'desc')->orderBy('id', 'desc')->get();
        return response()->json([
            'success'    => true,
            'data'    => $items,
        ], 200);
    }
    public function store(Request $request)
    {
        $items = 'Data berhasil di tambahkan';
        $data = $request->except('_token');
        apiprobk::create($data);
        return response()->json([
            'success'    => true,
            'data'    => $items,
        ], 200);
    }
    public function gagal(Request $request)
    {
        $items = 'Update Proses Gagal';
        apiprobk::where('id', $request->id)->update([
            'sertifikat' => 'gagal',
            'sinkron' => 'gagal',
            'sertifikat_tgl' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return response()->json([
            'success'    => true,
            'data'    => $items,
        ], 200);
    }
    public function api_backup(Request $request)
    {
        $items = 'Data sudah ada';
        $status = false;
        $kode = 500;
        $data = $request->except('_token');
        $periksa = apiprobk_sertifikat::where('apiprobk_id', $request->apiprobk_id)->count();
        if ($periksa < 1) {
            apiprobk_sertifikat::create($data);

            // apiprobk::where('id', $request->apiprobk_id)->update([
            //     'sinkron' => 'sudah',
            //     'sinkron_tgl' => date("Y-m-d H:i:s"),
            //     'sertifikat' => 'sudah',
            //     'sertifikat_tgl' => date("Y-m-d H:i:s"),
            //     'deteksi' => 'sudah',
            //     'deteksi_tgl' => date("Y-m-d H:i:s"),
            //     'updated_at' => date("Y-m-d H:i:s"),
            // ]);
            $items = 'Data berhasil di tambahkan';
            $status = true;
            $kode = 200;
        }
        return response()->json([
            'success'    => $status,
            'data'    => $items,
        ], $kode);
    }

    public function api_backup_deteksi(Request $request)
    {
        $items = 'Data sudah ada';
        $status = false;
        $kode = 500;
        $data = $request->except('_token', 'deteksi_list');
        $datadeteksi = $request->deteksi_list;
        $periksa = apiprobk_deteksi::where('apiprobk_id', $request->apiprobk_id)->count();
        if ($periksa < 1) {
            $data_id = apiprobk_deteksi::create($data);
            for ($i = 0; $i < count($datadeteksi); $i++) {
                $datainsertdeteksi = [
                    'apiprobk_deteksi_id' => $data_id->id,
                    'deteksi_nama' => $datadeteksi[$i]['deteksi_nama'],
                    'deteksi_score' => $datadeteksi[$i]['deteksi_score'],
                    'deteksi_keterangan' => $datadeteksi[$i]['deteksi_keterangan'],
                    'deteksi_rank' => $datadeteksi[$i]['deteksi_rank'],
                ];
                apiprobk_deteksi_list::create($datainsertdeteksi);
            }

            apiprobk::where('id', $request->apiprobk_id)->update([
                'sinkron' => 'sudah',
                'sinkron_tgl' => date("Y-m-d H:i:s"),
                'sertifikat' => 'sudah',
                'sertifikat_tgl' => date("Y-m-d H:i:s"),
                'deteksi' => 'sudah',
                'deteksi_tgl' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
            $items = 'Data berhasil di tambahkan';
            $status = true;
            $kode = 200;
        }
        return response()->json([
            'success'    => $status,
            'data'    => $datadeteksi[0]['deteksi_nama'],
        ], $kode);
    }
    public function upload(Request $request)
    {

        // dd($request,$id->id);
        // $this->validate($request, [
        //     'file' => 'required|mimes:csv,xls,xlsx'
        // ]);

        $file = $request->file('file');

        $nama_file = rand() . $file->getClientOriginalName();

        $file->move('file_temp', $nama_file);

        Excel::import(new importusername, public_path('/file_temp/' . $nama_file));

        // $items = 'Data berhasil di tambahkan';
        // $data = $request->except('_token');
        // apiprobk::create($data);
        return response()->json([
            'success'    => true,
            'data'    => $request->file(),
        ], 200);
    }
    public function reset(Request $request)
    {
        apiprobk::truncate();
        apiprobk_deteksi::truncate();
        apiprobk_deteksi_list::truncate();
        apiprobk_sertifikat::truncate();
        return response()->json([
            'success'    => true,
            'data'    => 'Data berhasil direset',
        ], 200);
    }
}
