<!doctype html>
<html>

<head>
</head>
<body>            

<div id="page-wrapper" >
<body>
<div class="row">
<div class="col-12">
<div class="container">

<p style="text-align:center"><center><h2> Laporan Pemasukkan Penyewaan Lapangan Lebak Futsal </center></h2></p>

<p><center><h2>Dari Tanggal {{date_format(date_create($mulai), 'd/m/Y')}} Sampai {{date_format(date_create($akhir), 'd/m/Y')}}</center></h2>
  

<br>  
 <div class="table-responsive">
    <table id="myTable" class="display table-responsive table-stripped" border="2" align="center">
    <thead>
        <tr>
        <th>Nama Tim</th>
         <th>Email</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Lama Booking</th>
          <th>Harga</th>
        </tr>
      </center>
    </thead>
    <tbody>
      @php
          $hargabanget = 0;
          @endphp

       @foreach($carts as $Bookings)
        <tr>
         <th>{{$Bookings->namatim}}</th>
         <th>{{$Bookings->user->email}}</th>
         <th>{{date_format(date_create($Bookings->tanggal), 'd/m/Y')}}</th>
         <th>{{date_format(date_create($Bookings->tanggal), 'h:i:s')}}</th>
         <th>{{$Bookings->jam}} Jam</th>
         <th>Rp. {{$Bookings->harga}}</th>
         
        </tr>
          @php
          $hargabanget += $Bookings->harga;
          @endphp
        @endforeach

        <tr>
          <th rowspan="4" colspan="4" style="text-align:right">
            Total : 
          </th>
          <th>
            Rp. {{$hargabanget}}
          </th> 
        </tr>
    </tbody>
    </table>
  </div>
  
</div>
</div>
</div>
</body>
</div>
</body>
</html>

