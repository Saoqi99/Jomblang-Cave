<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RadioValue;
use App\Models\ExpertValue;
use App\Models\CalculationResult;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\Output\SummaryPrinter;

class FormController extends Controller
{
    function rate(){
        $data['rate']=RadioValue::all();
        return view('rate',$data);
    }
    function expert(){
        $expert['expert.expert']=ExpertValue::all();
        return view('expert.expert',$expert);
    }
//SImpan Data Kuesioner Wisatawan
    function store_data(Request $request){
        
        $validated = $request->validate([
            'Radio1' => 'required',
            'Radio2' => 'required',
            'Radio3' => 'required',
            'Radio4' => 'required',
            'Radio5' => 'required',
            'Radio6' => 'required',
            'Radio7' => 'required',
            'Radio8' => 'required',
            'Radio9' => 'required',
            'Radio10' => 'required',
            'Radio11' => 'required',
            'Radio12' => 'required',
            'Radio13' => 'required',
            'Radio14' => 'required',
            'Radio15' => 'required',
            'Radio16' => 'required',
            'Radio17' => 'required',
            'Radio18' => 'required',
            'Radio19' => 'required',
            'Radio20' => 'required',
            'Radio21' => 'required',
            'Radio22' => 'required',
            'Radio23' => 'required',
            'Radio24' => 'required',
            'Radio25' => 'required',
            'Radio26' => 'required',
            'Radio27' => 'required',
            'Radio28' => 'required',
            'Radio29' => 'required',
            'Radio30' => 'required',
            'Radio31' => 'required',
            'Radio32' => 'required',
            'Radio33' => 'required',
            'Radio34' => 'required',
            'Radio35' => 'required',
            'Radio36' => 'required',
            'Radio37' => 'required',
            'Radio38' => 'required',
            'checkbox'=> 'required'

        ],[
            'Radio1.required'=>'Please complete the following questionnaire',
            'Radio2.required'=>'Please complete the following questionnaire',
            'Radio3.required'=>'Please complete the following questionnaire',
            'Radio4.required'=>'Please complete the following questionnaire',
            'Radio5.required'=>'Please complete the following questionnaire',
            'Radio6.required'=>'Please complete the following questionnaire',
            'Radio7.required'=>'Please complete the following questionnaire',
            'Radio8.required'=>'Please complete the following questionnaire',
            'Radio9.required'=>'Please complete the following questionnaire',
            'Radio10.required'=>'Please complete the following questionnaire',
            'Radio11.required'=>'Please complete the following questionnaire',
            'Radio12.required'=>'Please complete the following questionnaire',
            'Radio13.required'=>'Please complete the following questionnaire',
            'Radio14.required'=>'Please complete the following questionnaire',
            'Radio15.required'=>'Please complete the following questionnaire',
            'Radio16.required'=>'Please complete the following questionnaire',
            'Radio17.required'=>'Please complete the following questionnaire',
            'Radio18.required'=>'Please complete the following questionnaire',
            'Radio19.required'=>'Please complete the following questionnaire',
            'Radio20.required'=>'Please complete the following questionnaire',
            'Radio21.required'=>'Please complete the following questionnaire',
            'Radio22.required'=>'Please complete the following questionnaire',
            'Radio23.required'=>'Please complete the following questionnaire',
            'Radio24.required'=>'Please complete the following questionnaire',
            'Radio25.required'=>'Please complete the following questionnaire',
            'Radio26.required'=>'Please complete the following questionnaire',
            'Radio27.required'=>'Please complete the following questionnaire',
            'Radio28.required'=>'Please complete the following questionnaire',
            'Radio29.required'=>'Please complete the following questionnaire',
            'Radio30.required'=>'Please complete the following questionnaire',
            'Radio31.required'=>'Please complete the following questionnaire',
            'Radio32.required'=>'Please complete the following questionnaire',
            'Radio33.required'=>'Please complete the following questionnaire',
            'Radio34.required'=>'Please complete the following questionnaire',
            'Radio35.required'=>'Please complete the following questionnaire',
            'Radio36.required'=>'Please complete the following questionnaire',
            'Radio37.required'=>'Please complete the following questionnaire',
            'Radio38.required'=>'Please complete the following questionnaire',
            'checkbox'=> 'please check the checkbox'
        ]);

        $data = new RadioValue();
        for ($i = 1; $i <= 38; $i++) {
            $data["Q$i"] = $request->input("Radio$i");
        }
      
        $data->save();
        return view('thanks');
    }

//Simpan Data Pakar atau Expert

    function store_expert(Request $request){
        
        $validated = $request->validate([
            'Radio1' => 'required',
            'Radio2' => 'required',
            'Radio3' => 'required',
            'Radio4' => 'required',
            'Radio5' => 'required',
            'Radio6' => 'required',
            'Radio7' => 'required',
            'Radio8' => 'required',
            'Radio9' => 'required',
            'Radio10' => 'required',
            'Radio11' => 'required',
            'Radio12' => 'required',
            'Radio13' => 'required',
            'Radio14' => 'required',
            'Radio15' => 'required',
            'Radio16' => 'required',
            'Radio17' => 'required',
            'Radio18' => 'required',
            'Radio19' => 'required',
            'Radio20' => 'required',
            'Radio21' => 'required',
            'Radio22' => 'required',
            'Radio23' => 'required',
            'Radio24' => 'required',
            'Radio25' => 'required',
            'Radio26' => 'required',
            'Radio27' => 'required',
            'Radio28' => 'required',
            'Radio29' => 'required',
            'Radio30' => 'required',
            'Radio31' => 'required',
            'Radio32' => 'required',
            'Radio33' => 'required',
            'Radio34' => 'required',
            'Radio35' => 'required',
            'Radio36' => 'required',
            'Radio37' => 'required',
            'Radio38' => 'required',
            'checkbox'=> 'required'
        ],[
            'Radio1.required'=>'Please complete the following questionnaire',
            'Radio2.required'=>'Please complete the following questionnaire',
            'Radio3.required'=>'Please complete the following questionnaire',
            'Radio4.required'=>'Please complete the following questionnaire',
            'Radio5.required'=>'Please complete the following questionnaire',
            'Radio6.required'=>'Please complete the following questionnaire',
            'Radio7.required'=>'Please complete the following questionnaire',
            'Radio8.required'=>'Please complete the following questionnaire',
            'Radio9.required'=>'Please complete the following questionnaire',
            'Radio10.required'=>'Please complete the following questionnaire',
            'Radio11.required'=>'Please complete the following questionnaire',
            'Radio12.required'=>'Please complete the following questionnaire',
            'Radio13.required'=>'Please complete the following questionnaire',
            'Radio14.required'=>'Please complete the following questionnaire',
            'Radio15.required'=>'Please complete the following questionnaire',
            'Radio16.required'=>'Please complete the following questionnaire',
            'Radio17.required'=>'Please complete the following questionnaire',
            'Radio18.required'=>'Please complete the following questionnaire',
            'Radio19.required'=>'Please complete the following questionnaire',
            'Radio20.required'=>'Please complete the following questionnaire',
            'Radio21.required'=>'Please complete the following questionnaire',
            'Radio22.required'=>'Please complete the following questionnaire',
            'Radio23.required'=>'Please complete the following questionnaire',
            'Radio24.required'=>'Please complete the following questionnaire',
            'Radio25.required'=>'Please complete the following questionnaire',
            'Radio26.required'=>'Please complete the following questionnaire',
            'Radio27.required'=>'Please complete the following questionnaire',
            'Radio28.required'=>'Please complete the following questionnaire',
            'Radio29.required'=>'Please complete the following questionnaire',
            'Radio30.required'=>'Please complete the following questionnaire',
            'Radio31.required'=>'Please complete the following questionnaire',
            'Radio32.required'=>'Please complete the following questionnaire',
            'Radio33.required'=>'Please complete the following questionnaire',
            'Radio34.required'=>'Please complete the following questionnaire',
            'Radio35.required'=>'Please complete the following questionnaire',
            'Radio36.required'=>'Please complete the following questionnaire',
            'Radio37.required'=>'Please complete the following questionnaire',
            'Radio38.required'=>'Please complete the following questionnaire',
            'checkbox'=> 'please check the checkbox'
        ]);

        $expert = new ExpertValue();
        for ($i = 1; $i <= 38; $i++) {
            $expert["E$i"] = $request->input("Radio$i");
        }
        $expert->save();
        return view('thanks');
    }

    public function show()
    {
        $data = RadioValue::all();
        $experts = ExpertValue::all();
        return view('admin.show_data', compact('data','experts'));
    }

    //Kontrol menu login admin

    function index()
    {
        return view('/login');

    }

    function login(Request $request)
    {
        Session::flash('email',$request->email);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'

        ]);
    
        $infologin=[
        'email'=>$request->email,
        'password'=>$request->password

        ];
       if(Auth::attempt($infologin)){
        return view('admin.dashboard')->with('success','Anda Berhasil Login');
       } else {
        return redirect()->route('login')->withErrors('Periksa Kembali Email dan Password Anda');
       } 
    }


//function untuk logut
    function logout(){
        Auth::logout();
        return redirect('login')->with('success','You are Logout from the Dashboard');
    }

//function register

    function register()
    {
        return view('/register');
    }

    function create_register(Request $request)
    {
    
        Session::flash('name', $request->name); // Simpan nama sesi
        Session::flash('email', $request->email); // Simpan email sesi

        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah pernah dipakai',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        // Menyimpan data ke dalam tabel users
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        // Mencoba login dengan data yang baru saja didaftarkan
        $infologin = [
            'email' => $request->email,
            'password' =>$request->password
        ];


            return view('/Registerdone')->with('success','Registrasi Berhasil');


        
    }

    // function perhitungan MGAM

    public function show_matrix()
    {
        $minTValue1 = PHP_FLOAT_MAX; // Inisialisasi untuk T1-T12
        $minTValue2 = PHP_FLOAT_MAX; // Inisialisasi untuk T13-T38
        $minTIndex1 = '';
        $minTIndex2 = '';

        for ($i = 1; $i <= 38; $i++) {
            $averages['Q'.$i] = RadioValue::avg('Q'.$i);
        }

        for ($i = 1; $i <= 38; $i++) {
            $averages['E'.$i] = ExpertValue::avg('E'.$i);
        }
        for ($i = 1; $i <= 38; $i++) {          
            $averages['T'.$i] =$averages['Q'.$i] * $averages['E'.$i];


        // nilai Im dan GAM
        $imVSE = $averages['Q1'] + $averages['Q2'] + $averages['Q3'] + $averages['Q4'];
        $imVSA = $averages['Q5'] + $averages['Q6'] + $averages['Q7'] + $averages['Q8'];
        $imVPr = $averages['Q9'] + $averages['Q10'] + $averages['Q11'] + $averages['Q12'];
        $imVFn = $averages['Q13'] + $averages['Q14'] + $averages['Q15'] + $averages['Q16'] +
                 $averages['Q17'] + $averages['Q18'];
        $imVTr = $averages['Q19'] + $averages['Q20'] + $averages['Q21'] + $averages['Q22'] +
                 $averages['Q23'] + $averages['Q24'];
        $imVSf = $averages['Q25'] + $averages['Q26'] + $averages['Q27'] + $averages['Q28'] +
                 $averages['Q29'] + $averages['Q30'] + $averages['Q31'];
        $imVEj = $averages['Q32'] + $averages['Q33'] + $averages['Q34'] + $averages['Q35'] +
                 $averages['Q36'] + $averages['Q37'] + $averages['Q38'];
        
        $GVSE = $averages['E1'] + $averages['E2'] + $averages['E3'] + $averages['E4'];
        $GVSA = $averages['E5'] + $averages['E6'] + $averages['E7'] + $averages['E8'];
        $GVPr = $averages['E9'] + $averages['E10'] + $averages['E11'] + $averages['E12'];
        $GVFn = $averages['E13'] + $averages['E14'] + $averages['E15'] + $averages['E16'] +
                          $averages['E17'] + $averages['E18'];
        $GVTr = $averages['E19'] + $averages['E20'] + $averages['E21'] + $averages['E22'] +
                          $averages['E23'] + $averages['E24'];
        $GVSf = $averages['E25'] + $averages['E26'] + $averages['E27'] + $averages['E28'] +
                          $averages['E29'] + $averages['E30'] + $averages['E31'];
        $GVEj = $averages['E32'] + $averages['E33'] + $averages['E34'] + $averages['E35'] +
                          $averages['E36'] + $averages['E37'] + $averages['E38'];

            //    // nilai Im dan GAM
            //    $imVSE = ['Q1', 'Q2', 'Q3', 'Q4'];
            //    $imVSA = ['Q5', 'Q6', 'Q7', 'Q8'];
            //    $imVPr = ['Q9', 'Q10', 'Q11', 'Q12'];
            //    $imVFn = ['Q13', 'Q14', 'Q15', 'Q16', 'Q17', 'Q18'];
            //    $imVTr = ['Q19', 'Q20', 'Q21', 'Q22', 'Q23', 'Q24'];
            //    $imVSf = ['Q25', 'Q26', 'Q27', 'Q28', 'Q29', 'Q30', 'Q31'];
            //    $imVEj = ['Q32', 'Q33', 'Q34', 'Q35', 'Q36', 'Q37', 'Q38'];
               
            //    $GVSE = ['E1', 'E2', 'E3', 'E4'];
            //    $GVSA = ['E5', 'E6', 'E7', 'E8'];
            //    $GVPr = ['E9', 'E10', 'E11', 'E12'];
            //    $GVFn = ['E13', 'E14', 'E15', 'E16', 'E17', 'E18'];
            //    $GVTr = ['E19', 'E20', 'E21', 'E22', 'E23', 'E24'];
            //    $GVSf = ['E25', 'E26', 'E27', 'E28', 'E29', 'E30', 'E31'];
            //    $GVEj = ['E32', 'E33', 'E34', 'E35', 'E36', 'E37', 'E38'];
        
        // Memeriksa nilai terendah dalam rentang T1-T12
            if ($i <= 12 && $averages['T'.$i] < $minTValue1) {
            $minTValue1 = $averages['T'.$i];
            $minTIndex1 = 'T'.$i;
        }
        // Memeriksa nilai terendah dalam rentang T13-T38
            if ($i >= 13 && $averages['T'.$i] < $minTValue2) {
            $minTValue2 = $averages['T'.$i];
            $minTIndex2 = 'T'.$i;
        }
        }

        
        $messages = [];

        // Pesan khusus untuk indeks T1-T12
        if ($minTIndex1) {
            switch ($minTIndex1) {
                case 'T1':
                    $messages['T1'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    berikan pengetahuan lebih mengenai ciri khas Goa Jomblang';
                    break;
                case 'T2':
                    $messages['T2'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    wisatawan kurang mendapatkan pengetahuan ,berikan pengetahuan tentang proses terbentuknya goa, batuan-batuan, hutan purba dan benda-benda lain di Goa Jomblang.';
                    break;
                case 'T3':
                    $messages['T3'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    berikan pengetahuan mengenai Goa Jomblang lewat media digital atau cetak.';
                    break;
                case 'T4':
                    $messages['T4'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    berikan pengetahuan proses terbentuknya goa, batuan-batuan atau benda-benda di area goa lebih komunikatif.';
                    break;
                case 'T5':
                    $messages['T5'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    berikan spot wisata yang lebih menarik.';
                    break;
                case 'T6':
                    $messages['T6'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    menunjukan ukuran Goa yang luas dan merupakan tempat konservasi tumbuhan purba.';
                    break;
                case 'T7':
                    $messages['T7'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    menunjukan panorama yang indah berupa mulut goa berbentuk vertikal , adanya vegetasi tanaman yang tumbuh subur, dan tidak adanya kerusakan karena aktivitas manusia.   ';
                    break;
                case 'T8':
                    $messages['T8'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    menunjukan keserasian Goa Jomblang dengan pemandangan alam lain yang ada disekitar goa jomblang, baik dilihat dari segi warna, bentuk, dan lainya , sehingga pemandangan menjadi lebih indah  ';
                    break;
                case 'T9':
                    $messages['T9'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    menjaga Goa Jomblang dari aktivitas wisatawan untuk menghindari kerusakan lingkungan';
                    break;
                case 'T10':
                    $messages['T10'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    melakukakan tindakan pencegahan oleh masyarakat sekitar, pengelola, pemerintah daerah , nasional ataupun internasional untuk melindungi goa Jomblang dari kerusakan';
                    break;
                case 'T11':
                    $messages['T11'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    menjaga kondisi goa dari aktivitas manusia atau kondisi alam menjadi perhatian penting';
                    break;
                case 'T12':
                    $messages['T12'] = 'Evaluasi untuk meningkatkan nilai MV dengan cara 
                    pembatasan pengunjung Goa Jomblang sesuai dengan arahan Peraturan Daerah Kabupaten Gunungkidul Nomor 3 Tahun 2014, Pasal 20 huruf e.';
                    break;
            }
        }
    
        // Pesan khusus untuk indeks T13-T38
        if ($minTIndex2) {
            switch ($minTIndex2) {
                case 'T13':
                    $messages['T13'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    mempermudah akses jalan menuju objek wisata Goa Jomblang';
                    break;
                case 'T14':
                    $messages['T14'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan informasi objek wisata alam yang dekat dengan Goa Jomblang';
                    break;
                case 'T15':
                    $messages['T15'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan informasi objek wisata budaya yang dekat dengan Goa Jomblang';
                    break;
                case 'T16':
                    $messages['T16'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    mempermudah akses menuju objek wisata Goa Jomblang berupa memberikan informasi rute terdekat dari pusat Kota';
                    break;
                case 'T17':
                    $messages['T17'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    mempermudah akses menuju objek wisata Goa Jomblang berupa jaringan jalan lokal dan nasional di dekat goa Jomblang';
                    break;
                case 'T18':
                    $messages['T18'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    mempermudah akses menuju objek wisata Goa Jomblang berupa fasilitas pendukung seperti tempat parkir, SPBU, meeting point, di dekat goa Jomblang sehingga memudahkan wisatawan untuk berkunjung di goa Jomblang';
                    break;
                case 'T19':
                    $messages['T19'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    mengenalkan Goa Jomblang lewat media digital agar dikenal baik di skala Nasional maupun internasional ';
                    break;
                case 'T20':
                    $messages['T20'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    mengatur jumlah wisatawan oleh pengelola';
                    break;
                case 'T21':
                    $messages['T21'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan rasa aman kepada wisawatan bahwa pemandu merupakan orang yang handal';
                    break;
                case 'T22':
                    $messages['T22'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    meningkatkan infrastruktur seperti toilet, tempat istirahat, jalur pejalan kaki, sumber air dan lainnya ';
                    break;
                case 'T23':
                    $messages['T23'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan tempat penginapan atau peristirahatan';
                    break;
                case 'T24':
                    $messages['T24'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    melakukan pelatihan sertifikasi berkaitan keamanan susur goa kepada pemandu';
                    break;
                case 'T25':
                    $messages['T25'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan rambu-rambu bahaya, memberi pembatas, dan penggunaan alat dengan standar keamanan yang tinggi';
                    break;
                case 'T26':
                    $messages['T26'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan prosedur kesiapsiagaan dalam kondisi bahaya.';
                    break;
                case 'T27':
                    $messages['T27'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    selalu melakukan pemantauan kondisi infrastruktur wisata dan praktik keamanan.' ;
                    break;
                case 'T28':
                    $messages['T28'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    bekerjasama dengan pihak kepolisian terdekat untuk memberikan rasa aman kepada wisatawan';
                    break;
                case 'T29':
                    $messages['T29'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan prosedur keamanan dan simbol-simbol bahaya di destinasi wisata ';
                    break;
                case 'T30':
                    $messages['T30'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan instruksi-instruksi keamanan yang ada di wisata goa Jomblang mudah untuk dipahami. ';
                    break;
                case 'T31':
                    $messages['T31'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan sarana-prasarana kesehatan dan keamanan wisatawan ';
                    break;
                case 'T32':
                    $messages['T32'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara
                     memberikan aura positif dan semangat keapda wisatawan';
                    break;
                case 'T33':
                    $messages['T33'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan pengalaman baru yang belum pernah dirasakan di objek pariwisata lain';
                    break;
                case 'T34':
                    $messages['T34'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    melibatkan wisatawan dalam proses berwisata sehingga dapat meningkatkan hubungan baik antar wisatawan';
                    break;
                case 'T35':
                    $messages['T35'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan suasana yang menyenangkan baik dari alam maupun pemandu';
                    break;
                case 'T36':
                    $messages['T36'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan suasana yang menyenangkan baik dari alam maupun pemandu';
                    break;
                case 'T37':
                    $messages['T37'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan suasana yang menyenangkan baik dari alam maupun pemandu';
                    break;
                case 'T38':
                    $messages['T38'] = 'Evaluasi untuk meningkatkan nilai AV dengan cara 
                    memberikan suasana yang menyenangkan baik dari alam maupun pemandu';
                    break;
            }
        }
    
        // Menghitung total VSE, VSA, VPr, VFn, VTr, VSf, VEj
        $VSE = $averages['T1'] + $averages['T2'] + $averages['T3'] + $averages['T4'];
        $VSA = $averages['T5'] + $averages['T6'] + $averages['T7'] + $averages['T8'];
        $VPr = $averages['T9'] + $averages['T10'] + $averages['T11'] + $averages['T12'];
        $VFn = $averages['T13'] + $averages['T14'] + $averages['T15'] + $averages['T16'] +
                $averages['T17'] + $averages['T18'];
        $VTr = $averages['T19'] + $averages['T20'] + $averages['T21'] + $averages['T22'] +
                $averages['T23'] + $averages['T24'];
        $VSf = $averages['T25'] + $averages['T26'] + $averages['T27'] + $averages['T28'] +
                $averages['T29'] + $averages['T30'] + $averages['T31'];
        $VEj = $averages['T32'] + $averages['T33'] + $averages['T34'] + $averages['T35'] +
                $averages['T36'] + $averages['T37'] + $averages['T38'];
    
        $MV = $VSE + $VSA + $VPr;
        $AV = $VFn + $VTr + $VSf + $VEj;

        // Menyimpan nilai-nilai dalam array
        $values1 = [
            'VSE' => $VSE,
            'VSA' => $VSA,
            'VPr' => $VPr,
        ];
        $values2 = [
            'VFn' => $VFn,
            'VTr' => $VTr,
            'VSf' => $VSf,
            'VEj' => $VEj
        ];

        // Mencari nilai terendah MV dan AV
        $minValue1 = min($values1);
        $minKey1 = array_search($minValue1, $values1);

        $minValue2 = min($values2);
        $minKey2 = array_search($minValue2, $values2);

        // Menyimpan pesan dalam array
        $messages2 = [];

        // Pesan jika variabel tersebut adalah yang terendah pada MV
        switch ($minKey1) {
            case 'VSE':
                $messages2['MV'] = "Variabel $minKey1 merupakan yang terendah dalam MV dengan nilai $minValue1. 
                                    Pengetahuan mengenai Goa Jomblang lebih di sampaikan kepada wisatawan baik saat berwisata maupun melalui media digital atau cetak.";
                break;
            case 'VSA':
                $messages2['MV'] = "Variabel $minKey1 merupakan yang terendah dalam MV dengan nilai $minValue1. 
                                    Berikan spot pemandangan yang paling menarik kepada wisatawan.";
                break;
            case 'VPr':
                $messages2['MV'] = "Variabel $minKey1 merupakan yang terendah dalam MV dengan nilai $minValue1. 
                                    Berikan batasan kepada wisatawan untuk tidak menyentuh atau masuk ke area tertentu.";
                break;
        }

        // Pesan jika variabel tersebut adalah yang terendah pada AV
        switch ($minKey2) {
            case 'VFn':
                $messages2['AV'] = "Variabel $minKey2 merupakan yang terendah dalam AV dengan nilai $minValue2. 
                                    Bekerja sama dengan pemerintah daerah untuk meningkatkan akses menuju Goa Jomblang.";
                break;
            case 'VTr':
                $messages2['AV'] = "Variabel $minKey2 merupakan yang terendah dalam AV dengan nilai $minValue2.
                                     Mengenalkan Goa Jomblang sebagai pariwisata Internasional dengan memberikan pelayanan, fasilitas, dan keamanan bagi wisatawan.";
                break;
            case 'VSf':
                $messages2['AV'] = "Variabel $minKey2 merupakan yang terendah dalam AV dengan nilai $minValue2. 
                                    Tingkatkan rasa aman saat berwisata dengan adanya pelatihan sertifikasi caving kepada pemandu, kerjasama dengan pihak keamanan terdekat, dan memberikan rambu-rambu pada area tertentu yang dirasa cukup berbahaya.";
                break;
            case 'VEj':
                $messages2['AV'] = "Variabel $minKey2 merupakan yang terendah dalam AV dengan nilai $minValue2. 
                                    Memberi aura positif dari pemandu kepada wisatawan untuk membangun rasa nyaman kepada wisatawan.";
                break;
        }

    
        return view('admin.show_matrix', compact('averages', 'VSE', 'VSA', 'VPr',
                                                             'VFn', 'VTr', 'VSf', 'VEj',
                                                             'imVSE','imVSA','imVPr','imVFn','imVTr','imVSf','imVEj',
                                                             'GVSE','GVSA','GVPr','GVFn','GVTr','GVSf','GVEj',
                                                              'MV', 'AV', 'messages', 'messages2'));
    } 

    function matrix(){
        return view('admin.show_matrix');
    }

    function gallery()
    {
    // Mendapatkan path ke folder 'public/images'
    $directory = public_path('images');

    // Mengambil semua file dari folder 'public/images'
    $allImages = File::files($directory);

    // Mengirim data ke view
    return view('gallery', ['images' => $allImages]);   
    }
}