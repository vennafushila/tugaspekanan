<?php

 

/*  No 1

    Terdapat sebuah variabel bertipe data array, Tuliskan syntax

    untuk menampilkan semua nilai menggunakan looping For, While dan For Each

*/

 

$pelangi = ['Merah', 'Jingga', 'Kuning', 'Hijau', 'Biru', 'Nila','Ungu'];

 

// +++++ Jawaban Soal +++++

print("FOR"."\n");
for($x = 0;$x < count($pelangi);$x++){
    print("Warna ".$pelangi[$x]."\n");
}

print("\n"."WHILE"."\n");
$y = 0;
while($y < count($pelangi)){
    print("Warna ".$pelangi[$y]."\n");
    $y++;
}

print("\n"."FOREACH"."\n");
foreach ($pelangi as $value){
    print("Warna: ".$value."\n");
}

// +++++ End jawaban +++++

 

/** No 2

 * Tuliskan syntax untuk menampilkan banyaknya jumlah array dari

 * variabel $pelangi di atas menggunakan built in function yang sudah

 * ada di PHP

*/

 

// +++++ Jawaban Soal +++++


print("\n"."Jumlah array dari variabel pelangi = ".count($pelangi)."\n"); 

// +++++ End jawaban +++++

 

/** No 3

 *  Tuliskan syntax untuk menampilkan nilai terakhir dari variabel array

 *  $pelangi menggunakan built in function yang sudah ada di PHP

*/

 

// +++++ Jawaban Soal +++++

print("\n"."Nilai terakhir dari variabel array pelangi adalah ".end($pelangi)."\n"); 

// +++++ End jawaban +++++

 

 

/** No 4

 *  Tuliskan syntax untuk mengurutkan secara Descending ( z-a ) variable $pelangi

 */

 

// +++++ Jawaban Soal +++++

print("\n"."Urutan variabel pelangi secara Descending:"."\n");
rsort($pelangi);
foreach ($pelangi as $p){
    print($p."->");
}
print("\n");

// +++++ End jawaban +++++

 

 

/** No 5

 *  Buatlah sebuah function untuk mengecek suatu bilangan termasuk

 *  ke dalam bilangan prima atau bukan prima (bilangan prima merupakan bilangan yang

 *  tidak bisa di bagi dengan bilangan apapun kecuali bilangan itu sendiri dan bilangan 1)

 */

 

// +++++ Jawaban Soal +++++

function cekBilanganPrima($angka)

{
    if($angka/$angka == 1 && $angka/1 == $angka && $angka%2 <> 0 && $angka%3 <> 0){
        print("\n"."Bilangan Prima"."\n");
    } else {
        print("\n"."Bukan Bilangan Prima"."\n");
    }
}

print(cekBilanganPrima(7));

print(cekBilanganPrima(10));

print(cekBilanganPrima(13));

print(cekBilanganPrima(15));

// +++++ End jawaban +++++

 

/** No 6

 * Tuliskan syntax menggunakan looping sehingga bisa menampilkan output seperti berikut.

 *  Boleh menggunakan looping apapun.

 *

 *  || Output :     ||

 *  || *****        ||

 *  || ****         ||

 *  || ***          ||

 *  || **           ||

 *  || *            ||

 */

 

 

 // +++++ Jawaban Soal +++++

for($x=1;$x<=5;$x++){
    for($y=5;$y>=$x;$y-=1){
      print("*");
    }
    print("\n");
} 

// +++++ End jawaban +++++

 

 

/** No 7

 * Tuliskan syntax menggunakan looping apapun sehingga bisa menampilkan output seperti berikut.

 *

 *  || Output :     ||

 *  || *****        ||

 *  ||  ****        ||

 *  ||   ***        ||

 *  ||    **        ||

 *  ||     *        ||

 */

 

 

 // +++++ Jawaban Soal +++++

 for($x=1;$x<=5;$x++){
    for($y=1;$y<=$x;$y++){
        print(" ");
    }
    for($z=5;$z>=$x;$z-=1){
        print("*");
    }
    print("\n");
}  

// +++++ End jawaban +++++

 

/** No 8

 *  Tuliskan syntax untuk mengubah kata 'apel' menjadi 'jeruk' di dalam kalimat 'ibu saya menanam pohon apel, dan saya sangat menyukai buah apel'

 *  kalian bisa menggunakan built in function yang sudah di sediakan oleh PHP

 */

 

 $kalimat = 'ibu saya menanam pohon apel, dan saya sangat menyukai buah apel';

 $ganti = 'jeruk';

  

// +++++ Jawaban Soal +++++

print(str_replace("apel",$ganti,$kalimat));

// +++++ End jawaban +++++

?>