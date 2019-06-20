# keamanan-sistem
Keamanan Sistem adalah tugas pengganti UAS untuk matakuliah keamanan sistem

langkah-langkah peginstalan
1. download dan ekstrak repo keamanan-sistem
2. import database keamanan_sistem.sql ke dalam xampp server
3. jalankan.

langkah-langkah melakukan sql injection

*untuk melakukan sql injection ada 2 cara yaitu:
1). dengan hanya memasukan username yang benar
atau
2). tanpa memasukan username dan password yang benar

cara 1 :
1. masuk ke form login
2. pada input username masukan text berikut "wentoxwtt'-- " (ket : wentoxwtt => merupakan username yang terdapat pada database).
pada langkah ini kita sedang melakukan sql injection dengan cara memasukan username yang benar dan memberikan komentar (-- ) agar perintah pengujian password tidak di eksekusi 
3. pada input password masukan sembarang karakter
4. tekan tombol login
5. web telah berhasil di bobol.

cara 2 :
1. masuk ke form login
2. pada input usrename masukan text berikut "masukpakeko' OR 1=1-- " (ket : masukpakeko => tidak terdaftar di database).
pada langkah berikut kita sedang melakukan sql injection untuk membuat kondisi menjadi true agar kita bisa masuk ke sistem
3. pada input password masukan sembarang karakter
4. tekan tombol login
5. web telah berhasil di bobol.
