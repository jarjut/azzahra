@extends('layouts.single')
@section('title','Reservasi - Az Zahra')

@section('content')
  <section class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
      <div class="portfolio-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="title">RESERVASi</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </div>


  <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 funfact-box">
      <div class="card-panel white">
        <div style="padding:20px;">
          <form action="{{ route('login') }}" method="post">
            <fieldset>
              {{ csrf_field() }}

              <label>Cabang</label>
              <select class="browser-default" name="cabang">
                <option value="" disabled selected>Pilih Cabang Salon</option>
                @foreach ($cabang as $cabang)
                  <option value="{{ $cabang->kodeCabang}}">{{$cabang->nama}}</option>
                @endforeach
              </select>

              <label>Pilih Layanan atau Paket</label>
              <select class="browser-default" name="serviceorbundle">
                <option value="" disabled selected>Pilih Layanan atau Paket</option>
                <option value="service">Layanan</option>
                <option value="bundle">Paket</option>
              </select>

              <div id="category" style="display:none;">
                <label>Category</label>
                <select class="browser-default" name="category">
                  <option value="" disabled selected>Pilih Category Layanan</option>
                  @foreach ($category as $category)
                    <option value="{{$category->id_category}}">{{$category->nama}}</option>
                  @endforeach
                </select>
              </div>

              <div id="service" style="display:none;">
                <label>Layanan</label>
                <select class="browser-default" name="service">
                  <option value="" disabled selected></option>
                </select>
              </div>

            <div id="bundle" style="display:none;">
                <label>Paket</label>
                <select class="browser-default" name="bundle">
                  <option value="" disabled selected>Pilih Paket</option>
                  @foreach ($bundle as $bundle)
                    <option value="{{$bundle->id_bundle}}">{{$bundle->nama}}</option>
                  @endforeach
                </select>
              </div>

              <label>Pegawai</label>
              <select class="browser-default" name="pegawai">
                <option value="" disabled selected></option>
              </select>

              <label>Tanggal Reservasi</label>
              <input type="date" name="date" class="datepicker">

              <label>Jam Reservasi</label>
              <select class="browser-default" name="jam">
                <option value="" disabled selected></option>
              </select>

              <button class="hire-me-btn btn waves-effect waves-light brand-bg white-text" type="submit" name="action">Reservasi</button>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</section>

@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/milligram.min.css') }}">
@endsection

@section('js')
  {{-- Date Picker --}}
  <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      formatSubmit: 'yyyy-mm-dd',
    });
  </script>
  {{-- Date Picker --}}

  <script type="text/javascript">
    $(document).ready(function(){

      //Memilih Cabang
      $('select[name="cabang"]').on('change',function(){
         var cabang_id=$(this).val();
         if(cabang_id) {
             $.ajax({
               type:'get',
               url:'{!!URL::to('findPegawai')!!}',
               data:{'id':cabang_id},
               dataType: "json",
               success:function(data) {
                 $('select[name="pegawai"]').empty().html();
                 $('select[name="pegawai"]').append('<option value="" disabled selected>Pilih Pegawai</option>');
                 $.each(data, function(index, element) {
                     $('select[name="pegawai"]').append('<option value="'+ element.id_pegawai +'">'+ element.nama +'</option>');
                 });
             }
             });
         }else{
             $('select[name="pegawai"]').empty();
         }

     });
     //

     //Memilih Category
     $('select[name="category"]').on('change',function(){
        var id=$(this).val();
        if(id) {
            $.ajax({
              type:'get',
              url:'{!!URL::to('findService')!!}',
              data:{'id':id},
              dataType: "json",
              success:function(data) {
                console.log("success");
                $('select[name="service"]').empty().html();
                $('select[name="service"]').append('<option value="" disabled selected>Pilih Layanan</option>');
                $.each(data, function(index, element) {
                    $('select[name="service"]').append('<option value="'+ element.id_service +'">'+ element.nama +'</option>');
                });
            }
            });
        }else{
            $('select[name="service"]').empty();
        }

    });
    //

     //Memilih Layanan Atau Paket
     $('select[name="serviceorbundle"]').on('change',function(){
       var value=$(this).val();
       var category = document.getElementById("category");
       var service  = document.getElementById("service");
       var bundle   = document.getElementById("bundle");
       if(value=='service'){
         category.style.display="block";
         service.style.display="block";
         bundle.style.display="none";
         $('select[name="bundle"]').val("");
       }else if(value=='bundle'){
         category.style.display="none";
         service.style.display='none';
         bundle.style.display='block';
         $('select[name="category"]').val("");
         $('select[name="service"]').val("");
       }
     });
     //

     //Memilih Tanggal
     $('input[name="date"]').on('change',function(){
        var tanggal=$('input[name="date_submit"]').val();
        var kodeCabang=$('select[name="cabang"]').val();
        var id_pegawai=$('select[name="pegawai"]').val();
        if(tanggal) {
          //console.log(tanggal);
            $.ajax({
              type:'get',
              url:'{!!URL::to('findTime')!!}',
              data:{'tanggal':tanggal, 'kodeCabang':kodeCabang, 'id_pegawai':id_pegawai},
              dataType: "json",
              success:function(data) {
                console.log(data);
                $('select[name="jam"]').empty().html();
                $('select[name="jam"]').append('<option value="" disabled selected>Pilih Jam</option>');
                $.each(data, function(index, element) {
                    $('select[name="jam"]').append('<option value="'+ element.id_jam +'">'+ timeFormat(element.start) +'</option>');
                });
            }
            });
        }else{
            $('select[name="jam"]').empty();
        }

    });
    //


    });

    function timeFormat($time){
      var time = $time.split(":");
      var hours = time[0]
      var minutes = time[1]
      var ampm = hours >= 12 ? 'pm' : 'am';
      hours = hours % 12;
      hours = hours ? hours : 12; // the hour '0' should be '12'
      var strTime = hours + ':' + minutes + ' ' + ampm;
      return strTime
    }

</script>

@endsection
