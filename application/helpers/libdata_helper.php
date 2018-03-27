<?php

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal)
{
    $tgl = date('d-m-Y', strtotime($tanggal));
    if ($tgl == '01-01-1970') {
        return '';
    } else {
        return $tgl;
    }
}

//kode anggota
function nong($data) {
  if($data==0){
    $n = "A";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "A"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
    }
}

//kode simpan
function nosm($data) {
  if($data==0){
    $n = "S";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "S"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }

}

//kode saldo simpan
function nosl($data) {
  if($data==0){
    $n = "SL";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "SL"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }
}

//kode pinjaman
function nopn($data) {
  if($data==0){
    $n = "P";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "P"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }
}

//kode saldo pinjaman
function nopl($data) {
  if($data==0){
    $n = "PL";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "PL"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }
}

function format_rp($rp)
{
    return number_format($rp, 0, ',', '.' );
}

function format_num($data) {
  return str_replace(".", "", $data);
}

function gender($kelamin)
{
    if ($kelamin == '1') {
        return 'Laki-laki';
    } else {
        return 'Perempuan';
    }
}

function status($status)
{
    if ($status == '11') {
        return 'PNS';
    } else {
        return 'Honerer';
    }
}

function simpn($data)
{
    if ($data == '11') {
        return 'Simpanan Pokok';
    } else if($data == '12') {
        return 'Simpanan Wajib';
    } else if($data == '13') {
        return 'Simpanan Sukarela';
    }
}

function simp($data)
{
    if ($data == '11') {
        return 100000;
    } else if($data == '12'){
        return 75000;
    } else if($data == '13') {
       return 0;
    }
}

function pinjm($data)
{
    if ($data == '21') {
        return 'Pinjaman Umum';
    } else if($data == '22') {
        return 'Pinjaman Instidental';
    }
}

function tempo($data) {
  if($data<5000000) {
   return 20;
  } else if($data<=10000000) {
  return 30;
  } else if($data>10000000) {
  return 40;
  }
}

function jlap($data) {
 if($data=='1') {
   return 'Data Anggota';
 } else if($data=='2') {
   return 'Data Pinjaman';
 } else if($data=='3') {
   return 'Data Simpanan';
 }
}
