<?php

$filename = 'house-votes-84.data.txt';

		// buka dokumen dan simpan
		$dataset = file_get_contents("./dataset/".$filename);
		// simpan ke dalam bentuk array
		$data_mentah = preg_split("/[\n]/", $dataset);
		// buang array terakhir (kosong)
		$data_mentah = array_slice($data_mentah, 0, sizeof($data_mentah)-1);
		
		// print_r($data_mentah);

		/*** pisahkan data yang terdapat missing value 
		     atau tidak
		**/

		// inisialisasi variable
		$data_benar = array();
		$data_salah = array();
		$b_counter = 0;
		$s_counter = 0;

		// pisahkan data
		foreach ($data_mentah as $key => $value) {
			if (strrpos($value, '?') === false) {
				$data_benar[$b_counter++] = $value;
			}else{
				$data_salah[$s_counter++] = $value;
			}
		}

		// foreach ($data_benar as $key => $value) {
		// 	echo $value."<br>";
		// }

		// foreach ($data_salah as $key => $value) {
		// 	echo $value."<br>";
		// }

		// ambil 100 dataset
		$semua_data = array();
		foreach ($data_benar as $key => $value) {
			if($key < 100){
				$semua_data[$key] = $value;
			}
		}

		// pisahkan dataset ke bentuk array masing-masing index
		$semua_data2 = array();
		foreach ($semua_data as $key => $value) {
			$semua_data2[$key] = preg_split("/[,]/", $value);
		}



		// ubah y dan n masing-masing menjadi 1 dan 0
		for ($i=0; $i < count($semua_data2); $i++) { 
			for ($j=0; $j < count($semua_data2[$i]); $j++) { 
				if($j !== 0){
					if($semua_data2[$i][$j] === 'y'){
						$semua_data2[$i][$j] = 1;
					}else{
						$semua_data2[$i][$j] = 0;
					}
				}
			}
		}

		// foreach ($semua_data2 as $row => $value1) {
		// 	foreach ($value1 as $column => $value2) {
		// //		echo $row." ".$column;
		// 		if($column !== 0){
		// 			//echo $row."".$column;
		// 			if($value2 === 'y'){
		// 				$semua_data2[$row][$column] = 1;
		// 				//echo $semua_data2[$row][$column];
		// 				//echo $value = "1";
		// 			}else{
		// 				$semua_data2[$row][$column] = 0;
		// 				//echo $semua_data2[$row][$column];
		// 				////$value = "0";
		// 			}
		// 		}
		// 		//echo $semua_data2[$value1];
		// 	}
		// 	echo "<br>";
		// }

		//print_r($semua_data2);

		// bagi untuk 10 data uji dan 90 data latih
		$data_uji = array();
		$indeks_du = 0;
		$data_latih = array();
		$indeks_dl = 0;
		foreach ($semua_data2 as $key => $value) {
			if($key < 10){
				$data_uji[$indeks_du++] = $value;
			}else{
				$data_latih[$indeks_dl++] = $value;
			}
		}

		// cetak data uji
		// foreach ($data_uji as $key => $value) {
		// 	print_r($value);	
		// 	echo "<br>";
		// }

		// data uji dengan missing value
		$data_uji_mv = array();
		$index_mv = array();
		$indeks_mv = array();
		foreach ($data_uji as $key => $value) {
			$array[$key] = rand(1,16);
			for ($i=0; $i < 17; $i++) { 
				if ($i === $array[$key]) {
					$data_uji_mv[$key][$i] = '?';	
					$indeks_mv[$key] = $i;
				}else{
					$data_uji_mv[$key][$i] = $data_uji[$key][$i];	
				}
			}
		}

		// nilai k
		$k = 3;

		// foreach ($data_uji_mv as $key => $value) {
		// 	print_r($value);	
		// 	echo "<br>";

		// }		

		// hitung proses knn
		$nilai_atribut_mv = array();
		foreach ($data_uji_mv as $key1 => $value) {
			$dc_dalam = array();
			foreach ($data_latih as $key2 => $value2) {
				$total_di = 0;
				for ($i=1; $i < 17; $i++) { 
					if($value[$i] === '?'){
						$total_di += abs(0 - $value2[$i]);
						//echo "0 - ".$value2[$i]." + ";
					}else{
						$total_di += abs($value[$i] - $value2[$i]);
						//echo $value[$i]." - ".$value2[$i]." + ";
					}
				}
				$dc_dalam[$key2] = sqrt($total_di);
				
			}

			// urutkan berdasarkan nilai dc_dalam
			asort($dc_dalam);
		
			// ambil indeks 3 teratas
			$indeks_3 = array();
			$atribut = array();
			$counter = 0;
			$counter2 = 0;
			foreach ($dc_dalam as $key => $value) {			
				if($counter < 3){
					$indeks_3[$counter] = $key;
					$atribut[$counter] = $data_latih[$key][$indeks_mv[$counter]];
					$counter++;
				}
			}
			// print_r($indeks_3);
			// echo " ";
			// print_r($atribut);
			// echo "<br>";

			$nol = 0;
			$satu = 0;
			foreach ($atribut as $key => $value) {
				if ($value === 0) {
					$nol++;
				}else{
					$satu++;
				}
			}
			$nilai_atribut_mv[$key1] = $nol > $satu ? 0 : 1;
		}
		// print_r($indeks_mv);
		// echo "<br>";
		// print_r($nilai_atribut_mv);
		// echo "<br>";
		foreach ($data_uji_mv as $key => $value) {
			// print_r($value);
			// echo "<br>";
		}

		// echo "<br>";
		for ($i=0; $i < 10; $i++) { 
			// print_r($semua_data2[$i]);
			// echo "<br>";
		}

		// cek akurasi
		$total_benar = 0;
		for ($i=0; $i < 10; $i++) { 
			// echo $semua_data2[$i][$indeks_mv[$i]]." ".$nilai_atribut_mv[$i]; 
			if($semua_data2[$i][$indeks_mv[$i]] === $nilai_atribut_mv[$i]){
				$total_benar++;
			}
			// echo "<br>";
		}
		// echo "total data uji benar: ";
		// print_r($total_benar);
		// echo "<br>";

		// echo "akurasi: ";
		// print_r(($total_benar/10)*100);
		// echo "%<br>";		


						
?>