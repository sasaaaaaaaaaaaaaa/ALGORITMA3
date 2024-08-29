<?php
class makanan{
public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$nasipadang = new makanan("nasi padang", "nasi tumpeng");
$nasipadang = new makanan("nasi padang", "nasi tumpeng");
print_r($nasipadang);
print"<p>";
print_r($nasipadang);

print_r("<p><strong>by: alika naswa sabilaa");
