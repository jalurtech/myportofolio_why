<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Di Controller
    public function showFoto()
    {
        // Dapatkan shareable link dari Google Drive (pastikan set ke "Anyone with the link")
        // Ganti bagian https://drive.google.com/file/d/FILE_ID/view?usp=sharing
        // Menjadi:
        // https://drive.google.com/file/d/1XIxA3BtMRvHVYZ2x-2eb6_izm5MIeHpV/view?usp=sharing
              
        $fileId = "1XIxA3BtMRvHVYZ2x-2eb6_izm5MIeHpV"; // Ganti dengan ID file Anda
        //$imageUrl = "https://drive.google.com/uc?export=view&id=" . $fileId;
        $imageUrl = "https://drive.google.com/thumbnail?id=" . $fileId . "&sz=w1000"; // `sz` mengatur ukuran
        //dd($imageUrl); // Sebelum return view
        return view('home', ['imageUrl' => $imageUrl]);
        
    }

    // Di Controller
    public function projectImageshow()
    {
        // https://drive.google.com/file/d/17bUC7l74LBvyXW0ehz9gKOt3RZysbbOR/view?usp=sharing  Sistem Informasi Koperasi
        // https://drive.google.com/file/d/1uimEpvSIwhn0138riVWZN9gljKoKfY0I/view?usp=sharing  akuntansi
        // https://drive.google.com/file/d/1pzOeNLFpUI325tjft9UHPXo94marOVH0/view?usp=sharing 
              
       // $fileIds = [
        //    "17bUC7l74LBvyXW0ehz9gKOt3RZysbbOR",
        //    "1uimEpvSIwhn0138riVWZN9gljKoKfY0I",
        //    "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw"
        //];
    
        //$imageProjectUrls = array_map(function ($id) {
        //    return "https://drive.google.com/thumbnail?id=" . $id . "&sz=w1000";
        //}, $fileIds);
    
        $images = [
            'koperasi' => "17bUC7l74LBvyXW0ehz9gKOt3RZysbbOR",
            'akuntansi' => "1uimEpvSIwhn0138riVWZN9gljKoKfY0I",
            'retail' => "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw",
            'timbangan' => "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw",
            'portofolio' => "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw",
            'jimpitan' => "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw",
            'rtrw' => "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw"
        ];
    
        // Konversi ke URL thumbnail Google Drive
        $imageProjectUrls = [];
        foreach ($images as $key => $id) {
            $imageProjectUrls[$key] = "https://drive.google.com/thumbnail?id={$id}&sz=w1000";
        }
        return view('home', ['imageProjectUrls' => $imageProjectUrls]);
        
    }


    public function home()
{

    // https://drive.google.com/file/d/17bUC7l74LBvyXW0ehz9gKOt3RZysbbOR/view?usp=sharing  Sistem Informasi Koperasi
    // https://drive.google.com/file/d/1uimEpvSIwhn0138riVWZN9gljKoKfY0I/view?usp=sharing  akuntansi
    // https://drive.google.com/file/d/1pzOeNLFpUI325tjft9UHPXo94marOVH0/view?usp=sharing 
    // https://drive.google.com/file/d/1YlMqjFaXu9YrsrxrDtU9FpDrtjelAWAV/view?usp=sharing  Timbangan
   
    // Gambar profil
    $imageUrl = "https://drive.google.com/thumbnail?id=1XIxA3BtMRvHVYZ2x-2eb6_izm5MIeHpV&sz=w1000";

    // Gambar project
    $images = [
        'koperasi' => "17bUC7l74LBvyXW0ehz9gKOt3RZysbbOR",
        'akuntansi' => "1uimEpvSIwhn0138riVWZN9gljKoKfY0I",
        'retail' => "1pzOeNLFpUI325tjft9UHPXo94marOVH0",
        'timbangan' => "1YlMqjFaXu9YrsrxrDtU9FpDrtjelAWAV",
        'portofolio' => "14LZUGJpG9HSi6odebxCWyaRSdZQuCWS9",
        'jimpitan' => "12j703Myn9rneMCWYzAMeSbv17aHX7SPK",
        'rtrw' => "1XIxA3BtMRvHVYZ2x-2eb6_izm5MI12pw",
        'logo' => "1UaesHflMH5rKyx4NRvAPeZ27arzOL8aV"
    ];

    $imageProjectUrls = [];
    foreach ($images as $key => $id) {
        $imageProjectUrls[$key] = "https://drive.google.com/thumbnail?id={$id}&sz=w1000";
    }

    return view('home', [
        'imageUrl' => $imageUrl,
        'imageProjectUrls' => $imageProjectUrls
    ]);
}
}
