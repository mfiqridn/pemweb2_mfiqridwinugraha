<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::menarik($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . 
        " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}


$Ahmad = new AccountBank('0110', 'Ahmad', 500000);
$Budi = new AccountBank('2210', 'Budi', 10000);
$Caca = new AccountBank('1401', 'Caca', 0);

$Ahmad->deposit(1000000);
$Ahmad->cetak();

$Ahmad->doTransfer($Budi, 1000000);
$Ahmad->cetak();

$Ahmad->doTransfer($Caca, 500000);
$Ahmad->cetak();