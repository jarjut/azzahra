@extends('admin.layouts.master')
@section('title','Pelayanan - Admi Az Zahra')

@section('content')
  <section class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
      <div class="portfolio-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="title">PELAYANAN</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </div>


  <div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 funfact-box">
      <div class="card-panel white">
        <div style="padding:20px;">
          <form action="{{ route('admin.pelayanan.submit') }}" method="post">
            {{ csrf_field() }}

            <label>Nama</label>
            <input type="text" name="nama" value="">

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

            <button class="btn waves-effect waves-light brand-bg white-text" type="submit" name="action">Submit</button>
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
  <script type="text/javascript">
    $(document).ready(function(){

     //Memilih Category->Memilih Layanan
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
         $('select[name="service"]').empty().html();
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
