@extends('templete.default')
@section('title', 'NTFLEX')

@section('content')
<div class="content text-light p-5" >
  <span class="mb-5" style="color: #424C64">Veja titulos sobre: filmes</span><br><br>

   <h3 class="sub-title">Videos em destaque</h3>
   <div class="row align-self-center ">
       @foreach(range(1,6) as $item)
       <div class="m-1 bg-white" style="width: 250px; --bs-bg-opacity: 0;">
          <img src="imgs\images-13.jpeg" alt="" class="img-responsive "style="width: 245px; height: 170px">
       </div>
       @endforeach
   </div>
   

   <h3 class="sub-title mt-5">Minha Lista</h3>
   <div class="row align-self-center">
       @foreach(range(1,5) as $item)
       <div class="m-1 bg-white" style="width: 250px;     --bs-bg-opacity: 0;">
          <img src="imgs\maxresdefault.jpg" alt="" class="img-responsive "style="width: 245px; height: 170px">
       </div>
       @endforeach
   </div>

</div>
@endsection