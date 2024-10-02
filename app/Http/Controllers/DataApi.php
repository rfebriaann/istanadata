<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\Satuan;
use App\Models\Indikator;
use App\Models\SubKegiatan;
use App\Models\BidangUrusan;
use App\Models\DataWalidata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataApi extends Controller
{
    public function index(Request $request){
        $responseAPI = Http::withToken("10a0198c3a18399256cfdc7e487b235e")->get('https://sipd.go.id/sipd_api/rkpd/get_rkpd_skpd?kodepemda=1408&tahun=2024');
        $data = json_decode($responseAPI, true);
        
        // total data
        $responseWaliData = Http::withToken("ea2959910af02481537d63df9c5c8385")->get('https://siakkab.sipd.go.id/ewalidata/serv/get_dssd?kodepemda=1408');
        $dataWaliData = json_decode($responseWaliData, true);
        
        $responeDssd = Http::withToken("ea2959910af02481537d63df9c5c8385")->get('https://siakkab.sipd.go.id/ewalidata/serv/get_ref_dssd?kodepemda=1408');
        $getIndikator = json_decode($responeDssd, true);
        $getSatuan = collect(json_decode($responeDssd, true))->unique('satuan');
        $dataBidang = collect(json_decode($responeDssd, true))->unique('bidangurusan')->pluck('bidangurusan', 'kodeindikator', 'uraian_indikator');

        $walidataCollect = collect($dataWaliData)->map(function($data){ return collect($data)->all();});
        $collectWaliData = collect($walidataCollect);
        $resultWaliData = $collectWaliData->all();
        // $dataIndikator = collect(json_decode($responeDssd, true))->map(function($data){ return collect($data)->all();})->pluck('kodeindikator', 'uraian_indikator');
        
        
        $pilihanBidang = [];
        foreach($data as $item){
            $i = 1;
            array_push($pilihanBidang, array(
                'id' => $i++,
                'kode_skpd' => $item['kodeskpd'],
                'bidang' => $item['uraiskpd'],
                'pilihanbidang' => $item['pilihanbidang'],
            ));
        }

        $skpd = collect($pilihanBidang)->map(function($data){ return collect($data)->all();})->pluck('pilihanbidang', 'bidang');
        $collection = collect($dataBidang);
        $bidangCollection = $collection->all();



        $bidangFilter = [];
        $getKode = [];
        $x = 1;
        foreach ($skpd as $item => $key) {
            // $data = preg_replace("/[^a-zA-Z]/", "", substr($item,9));
            array_push($getKode, array(
                'id' => $x++,
                'bidang' => $item,
                'pilihan' => $key
            ));
        }

        $getKodeCollection = collect($getKode);
        $kodeCollection = $getKodeCollection->all();

        $result = [];
        $j = 1;
        foreach ($bidangCollection as $item) {
            array_push($bidangFilter, array(
                'id' => $i++,
                'kodebidang' => substr($item,0,4),
                'uraian' => preg_replace("/[^a-zA-Z]/", " ", substr($item,7)),
                'kodeindikator' => preg_replace("/[^a-zA-Z]/", " ", substr($item,7)),
                // 'satuan' => $item['satuan']
                // 'idskpd' => $skpd->toArray()
            ));
        }
        // dd($bidangFilter);
        foreach ($bidangFilter as $key1 => $value1) {
            foreach ($getKode as $key2 => $value2){
                if ($value1['kodebidang']==$value2['pilihan']) {
                        array_push($result, array(
                            'id' => $j++,
                            'kodebidang' => $value1['kodebidang'],
                            'uraian' => $value1['uraian'],
                            'namaOpd' => $value2['bidang'],
                            'id_opd' => $value2['id']
                        
                        ));
                    }
                foreach($value2['pilihan'] as $key3){
                    if ($value1['kodebidang']==$key3) {
                    array_push($result, array(
                            'id' => $j++,
                            'kodebidang' => $value1['kodebidang'],
                            'uraian' => $value1['uraian'],
                            'namaOpd' => $value2['bidang'],     
                            'id_opd' => $value2['id']                   
                        ));
                    }
                }
                }
            }
            
            $resultBidang = [];
            $i = 1;
            $arrIndikator = [];
            foreach($getIndikator as $item){
                $i = 1;
                array_push($arrIndikator, array(
                    'id' => $i++,
                    'indikator' => $item['kodeindikator'],
                    'uraian_indikator' => $item['uraian_indikator'],
                    'bidang_urusan' => $item['bidangurusan'],
                    'satuan' => $item['satuan']
                ));
            }
            // dd($arrIndikator);
            $arrSatuan = [];
            $i = 1;
            foreach($getSatuan as $item){
                array_push($arrSatuan, array(
                    'id' => $i++,
                    'satuan' => $item['satuan']
                ));
            }

            $indikatorRelasi = [];
            foreach($arrSatuan as $key1){
                foreach($arrIndikator as $key2){
                    if($key1['satuan'] == $key2['satuan']){
                        array_push($indikatorRelasi, array(
                            'indikator' => $key2['indikator'],
                            'uraian_indikator' => $key2['uraian_indikator'],
                            'bidang_urusan' => $key2['bidang_urusan'],
                            'satuan_id' => $key1['id']
                        ));
                    }
                }
            }
            $subKegiatan = [];
            foreach($getIndikator as $item){
                foreach($item['mendukung_subkegiatan'] as $x){
                    array_push($subKegiatan, array(
                        'kodesubkegiatan' => $x['kodesubkegiatan'],
                        'uraisubkegiatan' => $x['uraisubkegiatan'],
                        'kode' => substr($x['kodesubkegiatan'],0,4),
                        // 'kode' => substr($x['kodesubkegiatan'],0,4)
                    ));
                }
            }

            
            foreach ($indikatorRelasi as $key1) {
                $i = 1;
            foreach ($result as $key2){
                if (substr($key1['bidang_urusan'],0,4)==$key2['kodebidang']) {
                        array_push($resultBidang, array(
                            'new_id' => $i++,
                            'kodebidang' => $key2['kodebidang'],
                            'kodeindikator' => $key1['indikator'],
                            'uraian_indikator' => $key1['uraian_indikator'],
                            'bidang_urusan_id' => $key2['id'],
                            'satuan_id' => $key1['satuan_id']
                        ));
                    }
                }
            }

            $test = 1;
            $id = 1;
            $testArray = [];
            foreach($resultBidang as $key2){
            foreach($subKegiatan as $key1){
                    if($key1['kode'] == $key2['kodebidang']){
                    if($id++ <= 7385){
                            array_push($testArray, array(
                                'nomor' => $test++,
                                'kodesubkegiatan' => $key1['kodesubkegiatan'],
                                'uraiansubkegiatan' => $key1['uraisubkegiatan'],
                                'indikator_id' => $key2['new_id'],
                                'kode' => $key1['kode'],
                                'kodebidang' => $key2['kodebidang']
                            ));
                        }
                    }
                }
            }

            $id_data = 1;
            $arrWalidata = [];
            $indikators = Indikator::all();
            foreach($indikators as $bidang){
                foreach($resultWaliData as $walidata){
                    if($bidang['kode_indikator'] == $walidata['kodeindikator']){
                        array_push($arrWalidata, array(
                            'id' => $id_data++,
                            'kodeindikator' => $walidata['kodeindikator'],
                            'data' => $walidata['data'],
                            'tahun' => $walidata['tahun'],
                            'indikator_id' => $bidang['id']
                        ));
                    }
                }
            }
            
            // dd($bidangFilter);
            // dd($resultWaliData);
            // dd($resultWaliData);
// insert data satuan
            // foreach($arrSatuan as $item){
            //     Satuan::create([
            //         'nama_satuan' => $item['satuan']
            //     ]);
            // }
// insert data opd
            // foreach($pilihanBidang as $item){
            //     Opd::create([
            //                 'kode_skpd' => $item['kode_skpd'],
            //                 'uraian_skpd' => $item['bidang'],
            //     ]);
            // }

// insert data bidang urusan
            // foreach($result as $item){
            //     BidangUrusan::create([
            //         'kode_bidang' => $item['kodebidang'],
            //         'bidang_urusan' => $item['uraian'],
            //         'opd_id' => $item['id_opd']
            //     ]);
            // }

// insert data indikator
            // foreach ($resultBidang as $item){
            //     Indikator::create([
            //         'kode_indikator' => $item['kodeindikator'],
            //         'uraian_indikator' => $item['uraian_indikator'],
            //         'bidang_urusan_id' => $item['bidang_urusan_id'],
            //         'satuan_id' => $item['satuan_id'],
            //     ]);
            // }

// insert subkegiatan
            // dd($testArray);
            // foreach($testArray as $item){
            //         SubKegiatan::create([
            //             'kode_subkegiatan' => $item['kodesubkegiatan'],
            //             'urai_subkegiatan' => $item['uraiansubkegiatan'],
            //             'indikator_id' => $item['indikator_id']
            //         ]);
            //         // dd('gg');
            //     }

// insert walidata
                foreach($arrWalidata as $item){
                    DataWalidata::create([
                        'data' => $item['data'],
                        'tahun' => $item['tahun'] ?: null,
                        'indikator_id' => $item['indikator_id'] ?: null
                    ]);
                }
    }
}
