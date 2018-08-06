@extends('layouts.home')

@section('body')

<div class="row" style="background: white;margin-bottom: 30px;">
<div class="col-lg-12" style="color: #222;">
    <div class="box">
        <header>
            <h5>Lebak Futsal</h5>
        </header>
   <div class="panel-heading" style="background: #6bb9f0;">Laporan Lapangan Lebak Futsal</div>
</div>
<div class="col-lg-12">
<form action="{{route('pdf')}}" method="POST">
      @csrf
        <input type="submit" class="btn btn-info" value="Download">
        <br>
        <div class="col-md-6">
           <div class="form-group">
                  <label for=""> Start Date  </label>
                  <div class="">
                    <div class='input-group date' id='datetimepicker1' style="margin-bottom:10px;"> 
                      <input type="text" name="mulai" class="form-control">
                        <span class="input-group-addon">  
                          <span class="glyphicon glyphicon-calendar"><i class="fa fa-calender"></i></span>
                        </span>
                     </div>
                  </div>
              </div>
        </div>
          <div class="col-md-6">
           <div class="form-group">
                  <label for=""> End Date  </label>
                  <div class="">
                    <div class='input-group date' id='datetimepicker2' style="margin-bottom:10px;"> 
                      <input type="text" name="akhir" class="form-control">
                        <span class="input-group-addon">  
                          <span class="glyphicon glyphicon-calendar"><i class="fa fa-calender"></i></span>
                        </span>
                     </div>
                  </div>
              </div>
            </div>
      </form>
</div>
<div class="col-lg-12" style="margin-left:5px;">
      <div class="table-responsive">
      <center>
        <table id="myTable" class="display nowrap table table-hover table-striped table-bordered">
        <thead>
            <tr>
              <th>Nama Tim</th>
              <th>Email</th>
              <th>Tanggal</th>
              <th>Jam</th>
              <th>Lama Booking</th>
              <th>Harga</th>
              <th>Delete</th>

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

             <td> 
<!--         <form action="/laporan/{{$Bookings->id}}"  method="POST" >
            
        <input type="submit" name="submit" value="Delete">
         {{csrf_field()}}
        <input type="hidden" name="_method" value="delete">    -->
              <a href="/laporan/{{$Bookings->id}}" input type="submit" class="btn btn-danger" value="Delete">Delete</a>
            </td>
            </tr>
          @php
          $hargabanget += $Bookings->harga;
          @endphp
            @endforeach

           <tr>
          <th rowspan="5" colspan="5" style="text-align:right">
            Total : 
          </th>
          <th>
            Rp. {{$hargabanget}}
          </th> 
        </tr>
        </tbody>
        </table>
      </center>
      </div>
</div>
</div>
@endsection

@section('js')
  <script type="text/javascript">
      $(document).ready(function() {
        $('#datetimepicker1').datetimepicker({
          "setDate": new Date(),
        });
          $('#datetimepicker2').datetimepicker({
          "setDate": new Date(),
        });

      })
    
</script>
@endsection

