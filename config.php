<?php 

// membuat koneksi database
class Database
{
	// membuat global variabel
	public $host="localhost";
	public $user="root";
	public $pass="";
	public $db_name="app_surat";

	// membuat method
	function sambung()
	{
		// menghubungkan ke server database dengan mysql conect
		// host, user, passoword
		mysql_connect($this->host, $this->user, $this->pass) or die('Mohon maaf koneksi tidak tersambung');

		// memilih database 
		mysql_select_db($this->db_name) or die('Database tidak tersambung');
	}

}

class Input
{
}

class Approval
{
	function tampil_approval()
	{
		// menjalankan query database
		$sql = "SELECT * FROM approval";
		$q = mysql_query($sql);

		// membuat data output (hasil akhir) = kosong
		$output = array();
		while ($data = mysql_fetch_assoc($q))
		{
			// menambah data ke dalam array (tampungan yg lebih besar)
			$output[] = $data;
		}
		return $output;
	}
}

class Surat
{
	function input_surat($id_a, $per, $id_pic)
	{
		//memasukan query utuk masuk ke database
		$tanggal = date('Y-m-d H:i:s');
		$sql = "INSERT INTO surat (id_approval, prihal,tanggal,id_pic)	VALUES ('$id_a','$per','$tanggal','$id_pic')";
		mysql_query($sql);
	}
	function tampil_surat()
	{
		//menjalankan query database
		$sql = "SELECT * FROM `surat`
				JOIN pic ON surat.id_pic = pic.id_pic
				JOIN approval ON surat.id_approval = approval.id_approval ";
		$q = mysql_query($sql);

		//membuat data output (hasil akhir) = kosong
		$output = array ();
		while ($data = mysql_fetch_assoc($q))
		 {
			$output[] = $data;
		}
		return $output;
	}
}

class pic
{
	function select_pic()
	{
		$sql = "SELECT * FROM `pic`";
		$q = mysql_query($sql);
		$output = array ();
		while ($date = mysql_fetch_assoc($q))
		{
			$output[] = $date;
		}
		return $output;
	}
}

// memakai class
$db = new Database();

// menjalankan method sambung
$db->sambung();
$approval = new Approval();
$pic = new pic();
$surat = new surat();


//converter romawi

function romanic_number($integer, $upcase = true) 
{ 
    $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1); 
    $return = ''; 
    while($integer > 0) 
    { 
        foreach($table as $rom=>$arb) 
        { 
            if($integer >= $arb) 
            { 
                $integer -= $arb; 
                $return .= $rom; 
                break; 
            } 
        } 
    } 

    return $return; 
} 

