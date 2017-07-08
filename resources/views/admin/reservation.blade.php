@extends('admin.layouts.master')

@section('title','Reservasi - Admin AzZahra')

@section('content')
  <!-- Home Section start -->
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-10 col-md-offset-1 funfact-box">
              <div class="card-panel white">
                <h3 class="dashboard-title">Reservasi</h3>

                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <label>Tanggal Reservasi</label>
                    <input type="date" name="date" class="datepicker grey-text text-darken-1">
                  </div>
                </div>

                <div style="margin-top:24px">
                  <table class="table bordered grey-text text-darken-3">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Jam</th>
                        <th>Customer</th>
                        <th>Pegawai</th>
                        <th>Layanan</th>
                        <th>Paket</th>
                      </tr>
                    </thead>
                    <tbody id="reservation-table">

                    </tbody>
                </div>
                </table>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- .container end -->
    </div>
  </section>
    <!-- #home Section end -->
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('css/materialtable.css') }}">
@endsection
@section('js')
  {{-- Date Picker --}}
  <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      firstDay: 1,
      min: new Date(2015,3,20),
      disable: [0],
      formatSubmit: 'yyyy-mm-dd',
    });
  </script>
  {{-- Date Picker --}}

  <script type="text/javascript">
    $(document).ready(function(){

      //Memilih Tanggal
      $('input[name="date"]').on('change',function(){
         var tanggal=$('input[name="date_submit"]').val();
         if(tanggal) {
           console.log(tanggal);
             $.ajax({
               type:'get',
               url:'{!!URL::to('admin/findReservation')!!}',
               data:{'tanggal':tanggal},
               dataType: "json",
               success:function(data) {
                 console.log(data);
                 $('#reservation-table').empty().html();
                 $.each(data, function(index, element) {
                   if(element.service){
                      var $tr = $('<tr>').append(
                          $('<td>').text(element.id_reservasi),
                          $('<td>').text(element.jamreservasi.start),
                          $('<td>').text(element.customer.nama),
                          $('<td>').text(element.pegawai.nama),
                          $('<td>').text(element.service.nama),
                          $('<td>').text("-")
                      ).appendTo('#reservation-table');
                    }else if(element.bundle){
                      var $tr = $('<tr>').append(
                          $('<td>').text(element.id_reservasi),
                          $('<td>').text(element.jamreservasi.start),
                          $('<td>').text(element.customer.nama),
                          $('<td>').text(element.pegawai.nama),
                          $('<td>').text("-"),
                          $('<td>').text(element.bundle.nama)
                      ).appendTo('#reservation-table');
                    }
                  });
             }
             });
         }else{
             $('select[name="jam"]').empty();
         }

     });
     //
    });
  </script>
@endsection
