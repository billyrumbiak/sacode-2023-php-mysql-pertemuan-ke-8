<?php

    // membuat variabel database
    $namaServer = 'localhost';
    $namaPengguna = 'root';
    $kataSandi = '';

    // koneksi ke database
    $koneksi = new mysqli($namaServer, $namaPengguna, $kataSandi);

    if($koneksi->connect_error)
    {
        echo "koneksi gagal!";
    } else {
        echo "koneksi berhasil";
    }

    // proses membuat database dengan SQL
    $sql = 'CREATE DATABASE db_billy'; // this is query

    // notifikasi jika database berhasil / gagal dibuat
    if ($koneksi->query($sql) === TRUE) {
        echo "<h1>Database Berhasil dibuat</h1>";
    } else {
        echo "<h1>Database Gagal dibuat</h1>";
    }