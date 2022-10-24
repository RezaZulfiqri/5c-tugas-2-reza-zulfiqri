<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){

        // RAW
        $sql = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170072', 'Fathan Pebrilliestyo Ganteng','laki-laki','Jl.Ninjaku No.1','New York','2004-02-17','fathan_mhs.png',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '2010631170115',
                'nama' => 'Reza Zulfiqri',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Modus No.1',
                'tempat_lahir' => 'sidney',
                'tanggal_lahir' => '2003-08-17',
                'photo' => 'reza_mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '2010631170115',
                'nama' => 'Reza Zulfiqri',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Modus No.1',
                'tempat_lahir' => 'Sidney',
                'tanggal_lahir' => '2003-08-17',
                'photo' => 'reza_mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW
        $sql = DB::select("SELECT * FROM mahasiswas");
        dd($sql);

        // SB
        $sql2 = DB::table('mahasiswas')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Mahasiswa::all();
        dd($sql3);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE mahasiswas SET alamat='JL.Moveon No.10',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswas')
        ->where('id','1')
        ->update(
            [
                'alamat' => 'JL.Moveon No.10',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id','1')->first()->update([
            'alamat' => 'JL.NinjMoveonamu No.10',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM mahasiswas WHERE npm=?",['2010631170115']);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswas')
        ->where('npm','2010631170115')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('mahasiswas','2010631170115')->delete();
        dd($sql2);
    }
    
}
