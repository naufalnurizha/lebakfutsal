@extends('layouts.home')

@section('body')
<style type="text/css">
.shrink{
    -webkit-transform:scale(0.9);
    -moz-transform:scale(0.9);
    -ms-transform:scale(0.9);
    transform:scale(0.9);
}
.fc-title{
  font-size: 22px !important;
  color: #fff !important;
  font-weight: bold;
}
.fc-time{
  font-size: 22px !important;
  color: #fff !important;
  font-weight: bold;
}
</style>
<div class="row">
    <div class="col-lg-12" style="color: #222;">
        <div class="box">
            <header>
                <h5>Booking</h5>
            </header>
                <!-- <div id="calendar_content" class="body">
                <div id='calendar'></div>
                </div> -->
                 <div class="panel panel-primary">
                  @if (session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                      @elseif (session('succes'))
                      <div class="alert alert-success">
                        {{ session('succes') }}
                      </div>
                  @endif
                    <div class="panel-heading">Jadwal Lapangan Lebak Futsal</div>
                    <div class="panel-body" >
                    <div class="shrink"> 
                        {!! $calendar_details->calendar() !!}
                    </div>
                    <form action="{{route('tambah')}}" method="post" class='tanya'>
                      {{ csrf_field() }}
                      <div class="col-xs-4 col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="events"> Nama Tim  </label>
                            <div class="">
                            <input id="events" type="text" name="namatim" class="form-control">
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>  

                      <div class="col-xs-4 col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for=""> Start Date  </label>
                            <div class="">
                              <div class='input-group date' id='datetimepicker1' style="margin-bottom:10px;"> 
                                <input type="text" name="tanggal" class="form-control">
                                  <span class="input-group-addon">  
                                    <span class="glyphicon glyphicon-calendar"><i class="fa fa-calender"></i></span>
                                  </span>
                               </div>
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div> 

                      <div class="col-xs-4 col-sm-4 col-md-3">
                        <div class="form-group">
                          <label for="Jam"> Lama Booking </label>
                          <div class="">
                          <select name="jam" class="form-control">
                          <option value="1">1 Jam</option>
                          <option value="2">2 Jam</option>
                          <option value="3">3 Jam</option>
                          <option value="4">4 Jam</option>
                          </select>
                          
                          {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="harga"> Harga  </label>
                            <div class="">
                            <input id="harga" type="text" name="harga" value="120000" readonly="readonly" class="form-control">
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>  

                      <div class="col-xs-4 col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="submit">Submit</label>
                            <div class="">
                            <input type="submit" name="add_event" class="btn btn-lg btn-primary btn-block">
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>  
                    </form>

              </div>  
            </div>
           
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
      })
</script>
<script>

</script>
{!! $calendar_details->script() !!}
@endsection