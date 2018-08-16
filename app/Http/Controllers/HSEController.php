<?php

namespace App\Http\Controllers;

//Lirbary
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

//Model
use App\pengantar;
use App\catatan;
use App\desc_project;
use App\emergency;
use App\gmp;
use App\kontraktor;
use App\nutrifood;
use App\JSA;
use App\ADL;
use App\IPB;
use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;
use App\IPB_Status;
use App\lampiran;
use App\ruang_terbatas;
use App\keterangan_ruang_terbatas;
use App\kebakaran;
use App\keterangan_kebakaran;
use App\ketinggian;
use App\keterangan_ketinggian;
use App\utility;

class HSEController extends Controller
{

    /**
     * Show IKO Form
     *
     * @return \Illuminate\Http\Response
     */
    public function IKO(Request $request) {
        $air = utility::where('jenis', 'air')->first();
        $angin = utility::where('jenis', 'angin')->first();
        $listrik = utility::where('jenis', 'listrik')->first();
        $steam = utility::where('jenis', 'steam')->first();

        $request->session()->get('pengantar');
        $request->session()->get('kontraktor');
        $request->session()->get('nutrifood');
        $request->session()->get('emergency');
        $request->session()->get('deskripsi');
        $request->session()->get('gmp');
        $request->session()->get('catatan');
        $request->session()->get('IKO-Status');
        return view('IKO', [
          'air' => $air,
          'angin' => $angin,
          'listrik' => $listrik,
          'steam' => $steam
        ]);
    }

    /**
     * Post Request stroe Data iko ke dalam session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        //Pengantar
        $pengantar = new pengantar;
        $pengantar->nama_pekerjaan  = $request->nama_pekerjaan;
        $pengantar->jenis           = $request->jenis;
        $pengantar->tgl_mulai       = $request->tgl_mulai;
        $pengantar->tanggal_mulai   = $request->tanggal_mulai;
        $pengantar->tgl_selesai     = $request->tgl_selesai;
        $pengantar->tanggal_selesai = $request->tanggal_selesai;

        //Pengantar menuju session
        $request->session()->put('pengantar', $pengantar);


        //Kontraktor
        $kontraktor = new kontraktor;
        $kontraktor->nama_kontraktor        = $request->nama_kontraktor;
        $kontraktor->pj_kontraktor          = $request->pj_kontraktor;
        $kontraktor->telp_pj_kontraktor     = $request->telp_pj_kontraktor;
        $kontraktor->pj_lapangan            = $request->pj_lapangan;
        $kontraktor->telp_pj_lapangan       = $request->telp_pj_lapangan;

        //Kontraktor menuju session
        $request->session()->put('kontraktor', $kontraktor);

        //PJ Nutrifood
        $nutrifood = new nutrifood;
        $nutrifood->pj_project      = $request->pj_project;
        $nutrifood->telp_pj_project = $request->telp_pj_project;

        //nutri to session
        $request->session()->put('nutrifood', $nutrifood);

        //emergency
        $emergency = new emergency;
        $emergency->lokasi = $request->lokasi;

        //emergency to session
        $request->session()->put('emergency', $emergency);

        //Description
        $deskripsi = new desc_project;
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->area      = $request->area;

        //Description to session
        $request->session()->put('deskripsi', $deskripsi);

        //GMP
        $gmp = new gmp;
        $gmp->area_gmp          = $request->area_gmp ?? 'Tidak Bekerja pada Area GMP';
        $gmp->brg_yang_disimpan   = $request->brg_yang_disimpan;
        $gmp->lokasi_gudang     = $request->lokasi_gudang;

        //GMP to session
        $request->session()->put('gmp', $gmp);

        // Pekerjaan Berbahaya Array check
        if (is_array($request->pekerjaan_berbahaya)){
            $pekerjaan_berbahaya = implode(' ',  array_values($request->pekerjaan_berbahaya));
        } else {
            $pekerjaan_berbahaya =  $request->pekerjaan_berbahaya;
        }

        // Dokumen lampiran array check
        if (is_array($request->doc_lampiran)){
            $doc_lampiran = implode(' ',  array_values($request->doc_lampiran));
        } else {
            $doc_lampiran =  $request->doc_lampiran;
        }

        // utility Array Check
        if (is_array($request->utility)){
            $utility = implode(' ',  array_values($request->utility));
        } else {
            $utility =  $request->utility;
        }



        // sistem terganggu array check
        if (is_array($request->sistem_terganggu)){
            $sistem_terganggu = implode(' ',  array_values($request->sistem_terganggu));
        } else {
            $sistem_terganggu =  $request->sistem_terganggu;
        }

        //Catatan
        $catatan = new catatan;
        $catatan->pekerjaan_berbahaya   = $pekerjaan_berbahaya;
        $catatan->doc_lampiran          = $doc_lampiran;
        $catatan->utility               = $utility;
        $catatan->sistem_terganggu      = $sistem_terganggu;

        //Catatan to session
        $request->session()->put('catatan', $catatan);

        //Status IKO
        $status = new IKO_Status;
        $status->status = 'Pending';
        $request->session()->put('IKO-Status', $status);

        return redirect('/JSA');
    }

    /**
     * Menampilkan Form JSA
     *
     * @return \Illuminate\Http\Response
     */
    public function JSA(Request $request) {
        $JSA = $request->session()->get('JSA');
        $JSA = $request->session()->get('JSA-Status');
        return view('JSA');
    }

    /**
     * Post Request untuk menyimpan data Form JSA ke dalam Session
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeJSA(Request $request) {

        if (is_array($request->aktivitas)){
            $aktivitas = implode(' ',  array_values($request->aktivitas));
        } else {
            $aktivitas =  $request->aktivitas;
        }

        if (is_array($request->potensi_bahaya)){
            $potensi_bahaya = json_encode($request->potensi_bahaya);
        } else {
            $potensi_bahaya =  $request->potensi_bahaya;
        }

        if (is_array($request->pengendalian_berbahaya)){
            $pengendalian_bahaya = json_encode($request->pengendalian_bahaya);
        } else {
            $pengendalian_bahaya =  $request->pengendalian_bahaya;
        }

        if (is_array($request->penanggung_jawab)){
            $penanggung_jawab = json_encode($request->penanggung_jawab);
        } else {
            $penanggung_jawab =  $request->penanggung_jawab;
        }

        if (is_array($request->keterangan)){
            $keterangan = json_encode($request->keterangan);
        } else {
            $keterangan =  $request->keterangan;
        }

        // JSA
        $JSA = new JSA;
        $JSA->aktivitas             = $aktivitas;
        $JSA->potensi_bahaya        = $potensi_bahaya;
        $JSA->pengendalian_bahaya   = $pengendalian_bahaya;
        $JSA->penanggung_jawab      = $penanggung_jawab;
        $JSA->keterangan            = $keterangan ?? 'Tidak ada keterangan';

        //JSA to Session
        $request->session()->put('JSA', $JSA);

        //attach Status JSA
        $status = new JSA_Status;
        $status->status = 'Pending';

        // Attached JSA Status to Session
        $request->session()->put('JSA-Status', $status);

        return redirect('/ADL');
    }

    /**
     * Menampilkan halaman Form ADL
     *
     * @return \Illuminate\Http\Response
     */
    public function ADL(Request $request){
        $request->session()->get('ADL');
        $request->session()->get('ADL-Status');
        return view('ADL');
    }

    /**
     * Post Request untuk menyimpan data Form ADL ke dalam Session
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeADL(Request $request) {

        if (is_array($request->aktivitas)){
            $aktivitas = json_encode($request->aktivitas);
        } else {
            $aktivitas =  $request->aktivitas;
        }

        if (is_array($request->adb)){
            $adb = json_encode($request->adb);
        } else {
            $adb =  $request->adb;
        }

        if (is_array($request->jenis_pencemaran)){
            $jenis_pencemaran = json_encode($request->jenis_pencemaran);
        } else {
            $jenis_pencemaran =  $request->jenis_pencemaran;
        }

        if (is_array($request->potensi_pencemaran)){
            $potensi_pencemaran = json_encode($request->potensi_pencemaran);
        } else {
            $potensi_pencemaran =  $request->potensi_pencemaran;
        }
        if (is_array($request->penanggung_jawab)){
            $penanggung_jawab = json_encode($request->penanggung_jawab);
        } else {
            $penanggung_jawab =  $request->penanggung_jawab;
        }

        if (is_array($request->pengendalian)){
            $pengendalian = json_encode($request->pengendalian);
        } else {
            $pengendalian =  $request->pengendalian;
        }

        if (is_array($request->keterangan)){
            $keterangan = json_encode($request->keterangan);
        } else {
            $keterangan =  $request->keterangan;
        }

        //ADL
        $ADL = new ADL;
        $ADL->aktivitas                 = $aktivitas;
        $ADL->penanggung_jawab          = $penanggung_jawab;
        $ADL->adb                       = $adb;
        $ADL->jenis_pencemaran          = $jenis_pencemaran;
        $ADL->potensi_pencemaran        = $potensi_pencemaran;
        $ADL->pengendalian              = $pengendalian;
        $ADL->keterangan                = $keterangan ?? 'Tidak Ada Keterangan';

        //ADL to session
        $request->session()->put('ADL', $ADL);

        // Attach status to ADL
        $status = new ADL_Status;
        $status->status = 'Pending';
        $request->session()->put('ADL-Status', $status);

        $catatan = $request->session()->get('catatan');

        if(false !== strpos($catatan->doc_lampiran, 'IPB')) {
            return redirect('/IPB');
        } else {
        $request->session()->get('pengantar')->save();
        $request->session()->get('kontraktor')->save();
        $request->session()->get('nutrifood')->save();
        $request->session()->get('emergency')->save();
        $request->session()->get('deskripsi')->save();
        $request->session()->get('gmp')->save();
        $request->session()->get('catatan')->save();
        $request->session()->get('IKO-Status')->save();
        $request->session()->get('JSA')->save();
        $request->session()->get('JSA-Status')->save();
        $request->session()->get('ADL')->save();
        $request->session()->get('ADL-Status')->save();

        $request->session()->flush();

        return redirect('/IKO');
        }
    }


    public function IPB(Request $request) {
        $request->session()->get('IPB-Status');
        $request->session()->get('IPB');
        $jenis = $request->session()->get('catatan');

        $ipb = new IPB;


        if (false !== strpos($jenis->pekerjaan_berbahaya, 'Api')){
          $ipb->kebakaran = 'true';

        } else {
          $ipb->kebakaran = 'false';
        }

        if (false !== strpos($jenis->pekerjaan_berbahaya, 'Ketinggian')){
          $ipb->ketinggian = 'true';
        } else {
          $ipb->ketinggian = 'false';
        }

        if (false !== strpos($jenis->pekerjaan_berbahaya, 'Ruang Terbatas')){
          $ipb->ruang_terbatas = 'true';
        } else {
          $ipb->ruang_terbatas = 'false';
        }
        $request->session()->put('IPB', $ipb);

        $status = new IPB_Status;
        $status->status = 'Pending';
        $request->session()->put('IPB-Status', $status);

        if($ipb->ruang_terbatas == 'true') {
            return redirect('/IPB/ruang-terbatas');
        }
        elseif($ipb->kebakaran == 'true') {
            return redirect('/IPB/kebakaran');
        }
        elseif($ipb->ketinggian == 'true') {
            return redirect('/IPB/ketinggian');
        }

    }


    // View Ruangan Terbatas
    public function ruangTerbatas(Request $request) {
        $request->session()->get('ruang_terbatas');
        $request->session()->get('keterangan_ruang_terbatas');
        return view('IPB-RT');
    }

    // Store Form Ruangan Terbatas
    public function storeRuangTerbatas(Request $request) {

        $ruang_terbatas = new ruang_terbatas;
        $ruang_terbatas->pemenuhan_1 = $request->input('pemenuhan_1');
        $ruang_terbatas->pemenuhan_2 = $request->input('pemenuhan_2');
        $ruang_terbatas->pemenuhan_3 = $request->input('pemenuhan_3');
        $ruang_terbatas->pemenuhan_4 = $request->input('pemenuhan_4');
        $ruang_terbatas->pemenuhan_5 = $request->input('pemenuhan_5');
        $ruang_terbatas->pemenuhan_6 = $request->input('pemenuhan_6');
        $ruang_terbatas->pemenuhan_7 = $request->input('pemenuhan_7');
        $ruang_terbatas->pemenuhan_8 = $request->input('pemenuhan_8');
        $ruang_terbatas->pemenuhan_9 = $request->input('pemenuhan_9');
        $ruang_terbatas->pemenuhan_10 = $request->input('pemenuhan_10');
        $ruang_terbatas->pemenuhan_11 = $request->input('pemenuhan_11');
        $ruang_terbatas->pemenuhan_12 = $request->input('pemenuhan_12');
        $ruang_terbatas->pemenuhan_13 = $request->input('pemenuhan_13');

        $request->session()->put('ruang_terbatas', $ruang_terbatas);

        $keterangan = new keterangan_ruang_terbatas;
        $keterangan->keterangan_1 = $request->input('keterangan_1') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_2 = $request->input('keterangan_2') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_3 = $request->input('keterangan_3') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_4 = $request->input('keterangan_4') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_5 = $request->input('keterangan_5') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_6 = $request->input('keterangan_6') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_7 = $request->input('keterangan_7') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_8 = $request->input('keterangan_8') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_9 = $request->input('keterangan_9') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_10 = $request->input('keterangan_10') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_11 = $request->input('keterangan_11') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_12 = $request->input('keterangan_12') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_13 = $request->input('keterangan_13') ?? 'Tidak Ada Keterangan';

        $request->session()->put('keterangan_ruang_terbatas', $keterangan);

        $lampiran = $request->session()->get('IPB');

        if($lampiran->kebakaran == 'true') {
            return redirect('/IPB/kebakaran');
        }
        elseif($lampiran->kebakaran == 'false' && $lampiran->ketinggian == 'true') {
            return redirect('/IPB/ketinggian');
        }
        elseif($lampiran->kebakaran == 'false' && $lampiran->ketinggian == 'false') {
            $request->session()->get('pengantar')->save();
            $request->session()->get('kontraktor')->save();
            $request->session()->get('nutrifood')->save();
            $request->session()->get('emergency')->save();
            $request->session()->get('deskripsi')->save();
            $request->session()->get('gmp')->save();
            $request->session()->get('catatan')->save();
            $request->session()->get('IKO-Status')->save();
            $request->session()->get('JSA')->save();
            $request->session()->get('JSA-Status')->save();
            $request->session()->get('ADL')->save();
            $request->session()->get('ADL-Status')->save();
            $request->session()->get('IPB')->save();
            $request->session()->get('IPB-Status')->save();
            $request->session()->get('ruang_terbatas')->save();
            $request->session()->get('keterangan_ruang_terbatas')->save();

            $request->session()->flush();

            return redirect('/IKO');
        }
    }

    public function kebakaran(Request $request) {
        $request->session()->get('kebakaran');
        $request->session()->get('keterangan_kebakaran');
        return view('IPB-Kebakaran');
    }

    public function storeKebakaran(Request $request) {
        $kebakaran = new kebakaran;
        $kebakaran->pemenuhan_1 = $request->input('pemenuhan_1');
        $kebakaran->pemenuhan_2 = $request->input('pemenuhan_2');
        $kebakaran->pemenuhan_3 = $request->input('pemenuhan_3');
        $kebakaran->pemenuhan_4 = $request->input('pemenuhan_4');
        $kebakaran->pemenuhan_5 = $request->input('pemenuhan_5');
        $kebakaran->pemenuhan_6 = $request->input('pemenuhan_6');
        $kebakaran->pemenuhan_7 = $request->input('pemenuhan_7');
        $kebakaran->pemenuhan_8 = $request->input('pemenuhan_8');
        $kebakaran->pemenuhan_9 = $request->input('pemenuhan_9');
        $kebakaran->pemenuhan_10 = $request->input('pemenuhan_10');
        $kebakaran->pemenuhan_11 = $request->input('pemenuhan_11');
        $kebakaran->pemenuhan_12 = $request->input('pemenuhan_12');
        $kebakaran->pemenuhan_13 = $request->input('pemenuhan_13');

        $request->session()->put('kebakaran', $kebakaran);

        $keterangan = new keterangan_kebakaran;
        $keterangan->keterangan_1 = $request->input('keterangan_1') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_2 = $request->input('keterangan_2') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_3 = $request->input('keterangan_3') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_4 = $request->input('keterangan_4') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_5 = $request->input('keterangan_5') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_6 = $request->input('keterangan_6') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_7 = $request->input('keterangan_7') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_8 = $request->input('keterangan_8') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_9 = $request->input('keterangan_9') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_10 = $request->input('keterangan_10') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_11 = $request->input('keterangan_11') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_12 = $request->input('keterangan_12') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_13 = $request->input('keterangan_13') ?? 'Tidak Ada Keterangan';

        $request->session()->put('keterangan_kebakaran', $keterangan);

        $lampiran = $request->session()->get('IPB');

        if($lampiran->ketinggian == 'true') {
            return redirect('/IPB/ketinggian');
        }
        elseif($lampiran->ketinggian == 'false') {
            $request->session()->get('pengantar')->save();
            $request->session()->get('kontraktor')->save();
            $request->session()->get('nutrifood')->save();
            $request->session()->get('emergency')->save();
            $request->session()->get('deskripsi')->save();
            $request->session()->get('gmp')->save();
            $request->session()->get('catatan')->save();
            $request->session()->get('IKO-Status')->save();
            $request->session()->get('JSA')->save();
            $request->session()->get('JSA-Status')->save();
            $request->session()->get('ADL')->save();
            $request->session()->get('ADL-Status')->save();
            $request->session()->get('IPB')->save();
            $request->session()->get('IPB-Status')->save();

            if($lampiran->ruang_terbatas == 'true') {
                $request->session()->get('ruang_terbatas')->save();
                $request->session()->get('keterangan_ruang_terbatas')->save();
                $request->session()->flush();

                return redirect('/IKO');
            } else {
                $request->session()->flush();

                return redirect('/IKO');
            }
        }
    }

    public function ketinggian(Request $request) {
        $request->session()->get('ketinggian');
        $request->session()->get('keterangan_ketinggian');
        return view('IPB-Ketinggian');
    }

    public function storeKetinggian(Request $request) {
        $ketinggian = new ketinggian;
        $ketinggian->pemenuhan_1 = $request->input('pemenuhan_1');
        $ketinggian->pemenuhan_2 = $request->input('pemenuhan_2');
        $ketinggian->pemenuhan_3 = $request->input('pemenuhan_3');
        $ketinggian->pemenuhan_4 = $request->input('pemenuhan_4');

        $request->session()->put('ketinggian', $ketinggian);

        $keterangan = new keterangan_ketinggian;
        $keterangan->keterangan_1 = $request->input('keterangan_1') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_2 = $request->input('keterangan_2') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_3 = $request->input('keterangan_3') ?? 'Tidak Ada Keterangan';
        $keterangan->keterangan_4 = $request->input('keterangan_4') ?? 'Tidak Ada Keterangan';

        $request->session()->put('keterangan_ketinggian', $keterangan);

        $request->session()->get('pengantar')->save();
        $request->session()->get('kontraktor')->save();
        $request->session()->get('nutrifood')->save();
        $request->session()->get('emergency')->save();
        $request->session()->get('deskripsi')->save();
        $request->session()->get('gmp')->save();
        $request->session()->get('catatan')->save();
        $request->session()->get('IKO-Status')->save();
        $request->session()->get('JSA')->save();
        $request->session()->get('JSA-Status')->save();
        $request->session()->get('ADL')->save();
        $request->session()->get('ADL-Status')->save();
        $request->session()->get('IPB')->save();
        $request->session()->get('IPB-Status')->save();
        $request->session()->get('ketinggian')->save();
        $request->session()->get('keterangan_ketinggian')->save();

        $lampiran = $request->session()->get('IPB');

        if($lampiran->ruang_terbatas == 'true'){
            $request->session()->get('ruang_terbatas')->save();
            $request->session()->get('keterangan_ruang_terbatas')->save();

            if($lampiran->kebakaran == 'true') {
                $request->session()->get('kebakaran')->save();
                $request->session()->get('keterangan_kebakaran')->save();
                $request->session()->flush();

                return redirect('/IKO');
            } else {
                $request->session()->flush();

                return redirect('/IKO');
            }
        } else {
        $request->session()->flush();

        return redirect('/IKO');
        }
    }

}
