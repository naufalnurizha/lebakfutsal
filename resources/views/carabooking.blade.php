@extends('layouts.home')

@section('body')

<div class="row">
    <div class="col-lg-12" style="color: #222;">
        <div class="box">
            <header>
                <h5>Lebak Futsal</h5>
            </header>
                <!-- <div id="calendar_content" class="body">
                <div id='calendar'></div>
                </div> -->
                 <div class="panel panel-primary">
                 
                    <div class="panel-heading">Tata Cara Membooking lapangan</div>
                    <div class="panel-body">
                    	<p>1. Pelanggan harus memiliki akun sebelum memesan lapangan</p>
                    	<p>2. Setelah memiliki akun pelanggan bisa melihat jadwal kosong lapangan</p>
                    	<p>3. Setelah melihat jadwal kosong pelanggan bisa memesan lapangan dengan cara :</p>
                    	<p>a. Masukkan nama tim</p>
                        <p>b. Memilih tanggal dan waktu</p>
                        <p>- Untuk waktu jika memilih jam 10.40 akan di genapkan menjadi jam 11.00</p>
                        <p>- Untuk waktu jika memilih jam 10.30 akan di genapkan menjadi jam 10.00</p>
                        <p>c. Memilih durasi membooking</p>
                    	<p>d. Untuk harga akan di kalikan secara otomatis sesuai dengan durasi booking</p>                        
                    	<p>4. Setelah berhasil cek email kalian dan jangan lupa tunjukan verifikasi email kalian sesaat sebelum bermain!</p>

              </div>  
            </div>
           
        </div>
    </div>
</div>


@endsection