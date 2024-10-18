<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
{
    $data = [
        ['nama' => 'John Doe', 'email' => 'johndoe@gmail.com', 'telp' => '08123456789', 'pekerjaan' => 'Mahasiswa', 'tgl_lahir' => '1998-01-01', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Jane Smith', 'email' => 'janesmith@gmail.com', 'telp' => '08987654321', 'pekerjaan' => 'Karyawan', 'tgl_lahir' => '1995-03-15', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'David Lee', 'email' => 'davidlee@gmail.com', 'telp' => '08555555555', 'pekerjaan' => 'Dokter', 'tgl_lahir' => '1990-07-28', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Emily Brown', 'email' => 'emilybrown@gmail.com', 'telp' => '08111111111', 'pekerjaan' => 'Guru', 'tgl_lahir' => '1988-05-12', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'Michael Wilson', 'email' => 'michaelwilson@gmail.com', 'telp' => '08222222222', 'pekerjaan' => 'Programmer', 'tgl_lahir' => '1992-11-04', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Olivia Jones', 'email' => 'oliviajones@gmail.com', 'telp' => '08333333333', 'pekerjaan' => 'Designer', 'tgl_lahir' => '1994-09-21', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'Christopher Taylor', 'email' => 'christophert@gmail.com', 'telp' => '08444444444', 'pekerjaan' => 'Pengusaha', 'tgl_lahir' => '1985-02-18', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Sophia Garcia', 'email' => 'sophiagarcia@gmail.com', 'telp' => '08555555555', 'pekerjaan' => 'Akuntan', 'tgl_lahir' => '1991-06-03', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'Daniel Rodriguez', 'email' => 'danielrodriguez@gmail.com', 'telp' => '08666666666', 'pekerjaan' => 'Arsitek', 'tgl_lahir' => '1989-08-10', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Isabella Miller', 'email' => 'isabellamiller@gmail.com', 'telp' => '08777777777', 'pekerjaan' => 'Psikolog', 'tgl_lahir' => '1993-12-25', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'William Davis', 'email' => 'williamdavis@gmail.com', 'telp' => '08888888888', 'pekerjaan' => 'Musisi', 'tgl_lahir' => '1986-04-05', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Ava Wilson', 'email' => 'avawilson@gmail.com', 'telp' => '08999999999', 'pekerjaan' => 'Seniman', 'tgl_lahir' => '1997-10-19', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'Matthew Anderson', 'email' => 'matthewanderson@gmail.com', 'telp' => '08100000000', 'pekerjaan' => 'Atlet', 'tgl_lahir' => '1987-01-15', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Mia Thomas', 'email' => 'miathomas@gmail.com', 'telp' => '08200000000', 'pekerjaan' => 'Penulis', 'tgl_lahir' => '1996-05-27', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'Ethan Jackson', 'email' => 'ethanjackson@gmail.com', 'telp' => '08300000000', 'pekerjaan' => 'Pengacara', 'tgl_lahir' => '1984-09-08', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Abigail Martin', 'email' => 'abigailmartin@gmail.com', 'telp' => '08400000000', 'pekerjaan' => 'Jurnalis', 'tgl_lahir' => '1995-11-12', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'Noah Brown', 'email' => 'noahbrown@gmail.com', 'telp' => '08500000000', 'pekerjaan' => 'Peneliti', 'tgl_lahir' => '1990-03-21', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Charlotte Lee', 'email' => 'charlottelee@gmail.com', 'telp' => '08600000000', 'pekerjaan' => 'Perawat', 'tgl_lahir' => '1992-07-05', 'jenis_kelamin' => 'Perempuan'],
        ['nama' => 'James Wilson', 'email' => 'jameswilson@gmail.com', 'telp' => '08700000000', 'pekerjaan' => 'Manajer', 'tgl_lahir' => '1983-10-18', 'jenis_kelamin' => 'Laki-laki'],
        ['nama' => 'Harper Davis', 'email' => 'harperdavis@gmail.com', 'telp' => '08800000000', 'pekerjaan' => 'Aktor', 'tgl_lahir' => '1994-02-01', 'jenis_kelamin' => 'Perempuan'],
    ];

    return view('contact', compact('data'));
}
}