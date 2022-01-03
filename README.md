## TUGAS 7 BASIS DATA ORACLE

   Pada kesempatan kali ini saya akan menjawab beberapa poin atau soal berikut ini :
   1. Buat update dan transaksi
   2. Buat Githhub projek baru tugas 7 dan upload
   3. Kumpulkan di form
 
   **Untuk poin 3 & 4 sudah langsung terjawab dengan adanya github penjelasan ini.**
   
   **Oke , langsung saja berikut adalah penjelasan dari beberapa pertanyaan atau poin di atas :**

-------------------------------------------------------------------------------------------
##  1. Pembuatan Update dan Transaksi

    Disini kita akan membuat fungsi update dan juga membuat sebuah transaksi pada sistem informasi
    penjualan pada Toko Laris yang telah kita buat.
    
    1. Kita buat terlebih dahulu tabel jb_backup yang kita gunakan untuk menampung data 
       hasil dari delete data pada tabel jenis_barang. Buatlah query seperti berikut ini :
<img src= "https://user-images.githubusercontent.com/45529723/147112858-9beb03eb-5f0f-41f6-91c7-3c3f963373fe.PNG" />

-------------------------------------------------------------------------------------------
    2. Setelah itu, kita buat trigger yang bernama log_hapus ,
       tuliskan query triggernya sebagai berikut :
 <img src= "https://user-images.githubusercontent.com/45529723/147112876-fc69ee74-0e70-44dd-b479-896bd96da01f.PNG" />      
 
-------------------------------------------------------------------------------------------
    3. Kemudian, kita coba untuk testing dengan melakukan hapus data pada tabel jenis_barang
       Disini saya menghapus data dengan KD_JENIS yaitu K020.
 <img src= "https://user-images.githubusercontent.com/45529723/147112881-b684c4c9-5561-47df-b7b9-277e20622a78.PNG" />  

-------------------------------------------------------------------------------------------
    4. Kita cek terlebih dahulu apakah data K020 sudah hilang dari tabel jenis_barang, dan 
       hasilnya sudah tidak ada K020 seperti gambar berikut :
 <img src= "https://user-images.githubusercontent.com/45529723/147112882-6599b91e-ad5b-4766-8dc2-b23bc414d527.PNG" />      

-------------------------------------------------------------------------------------------
    5. Cek di bagian tabel jb_backup apakah data jenis_barang yang dihapus tadi terecord atau tidak di tabel itu.
<img src= "https://user-images.githubusercontent.com/45529723/147112886-5a390862-657a-4a58-b487-1516110991dc.PNG" />   

-------------------------------------------------------------------------------------------
    6. Done. Jika kita ingin mengecek nama trigger yang telah kita bisa cek dengan query berikut :
<img src= "https://user-images.githubusercontent.com/45529723/147118120-9b51a8ba-eefc-4cd2-81be-82709c031cd4.PNG" />
<img src= "https://user-images.githubusercontent.com/45529723/147118137-929dd5e6-9909-439e-ba09-c404bb3c5287.PNG" />


-------------------------------------------------------------------------------------------
##  2. Buat Githhub projek baru tugas 7 dan upload
       Untuk screenshoot dan penjelasan sudah saya buat di README pada github. Terima Kasih
       Repository github sudah saya buat :
Klik https://github.com/ikhsanmaulana15/Tugas7_BasisDataOracle.git
       
       
-------------------------------------------------------------------------------------------            
##  3. Kumpulkan di form
       Tugas ini sudah saya submit di form tugas. Terima Kasih
       
 -------------------------------------------------------------------------------------------         
Jika kalian memerlukan tutorial mengenai DATABASE ORACLE, silahkan dapat mengunjungi Youtube saya :
 https://www.youtube.com/c/DuaMasaChannel



