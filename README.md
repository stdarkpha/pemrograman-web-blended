
# Tugas Praktikum Pertemuan 10 - Pemrograman Blended

Farouq Mulya Al Simabua - 2022071087


## Soal

1. Jika user mengakses: http://pemrograman-web-blended.test/hallo, maka akan menghasilkan: halo selamat datang.
2. Jika diakses http://pemrograman-web-blended.test/hallo/apakabar, maka akan menghasilkan: selamat datang, halo apa kabar.
3. Jika diakses http://pemrograman-web-blended.test/hallo/doni, maka akan menghasilkan: halo doni apa kabar.

## Jawaban
1. untuk menjawab soal 1 kita dapat membuat sebuah route baru pada file [web.php](https://github.com/stdarkpha/pemrograman-web-blended/blob/main/routes/web.php)
dengan kode seperti berikut
```
Route::get('/hallo', function () {
    return 'halo selamat datang';
});
```
setelah membuat route kita dapat mengakses url /hallo dan output yang dihasilkan seperti berikut
![image](https://github.com/user-attachments/assets/cd4ce3c7-3c75-446d-9c2e-b557c0ae9b0a)

2. untuk menjawab soal 2 kita dapat cara sebelumnya dengan menambahkan route baru pada [web.php](https://github.com/stdarkpha/pemrograman-web-blended/blob/main/routes/web.php)
dengan kode seperti berikut
```
Route::get('/hallo/apakabar', function () {
    return 'selamat datang, halo apa kabar';
});
```
setelah membuat route kita dapat mengakses url /hallo/apakabar dan output yang dihasilkan seperti berikut
![image](https://github.com/user-attachments/assets/92503bcd-16f4-4c1d-973a-a83f9af6783c)

3. untuk menjawab soal 3 kita dapat membuat route baru pada [web.php](https://github.com/stdarkpha/pemrograman-web-blended/blob/main/routes/web.php)
dengan menggunakan metode slug yang menggunakan {} sehingga ketika url diisi nama seperti doni maka slug akan kita pass kedalam route dan router akan menampilkan data sesuai dengan url yang dituju
```
Route::get('/hallo/{name}', function ($name) {
    return 'halo ' . $name . ' apa kabar';
});
```
output yang dihasilkan seperti berikut <br>
![image](https://github.com/user-attachments/assets/bae3ed49-37a3-47f7-a121-99422eb35227)
![image](https://github.com/user-attachments/assets/538b2161-5304-4571-a40b-1622cd3b4a0a)




