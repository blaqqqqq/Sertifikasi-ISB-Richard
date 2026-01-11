<?php
class Anggota {
    private $nama;
    private $alamat;
    private $no_telp;

    public function __construct($nama, $alamat, $no_telp) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->no_telp = $no_telp;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function getNoTelp() {
        return $this->no_telp;
    }
}
