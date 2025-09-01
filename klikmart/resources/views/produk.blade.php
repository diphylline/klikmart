<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container my-5">
    <div class="d-flex justify-content-between">
  <h5 class="mb-4">Produk</h5>
  <button class="btn btn-light"><a href="../keranjang" class="btn btn-light"><i class="fa-solid fa-cart-plus"></i></a></button>
</div><hr>
  <div class="row g-4">
    <!-- Card 1 -->
     @foreach($products as $p)
    <div class="col-md-3 col-sm-6">
      <div class="product-card">
        <img style="width:200px" src="{{ asset('img/'.$p->image) }}" class="product-image mb-3" alt="Product 1">
        <form action="{{ route('tambah_k', $p->id) }}" method="POST">
           @csrf
        <button type="submit" class="btn btn-dark w-100">Masukan Keranjang</button><br><br>
        </form>
        <h6>{{ $p->nama_produk }}</h6>
        <p class="mb-1 text-primary">{{ number_format($p->harga, 0) }} <span class="text-muted text-decoration-line-through">25.000</span></p>
      </div><br><br>
    </div>
    @endforeach
    <!-- Card 2 -->
    
    
    <div class="row">
      
        <div class="d-flex justify-content-between align-item-center"> 
    <h5 class="mb-8">Just For You</h5>
    <button type="button" class="btn btn-light" style="border:1px solid black;">See All</button>
    </div>
    @foreach($rating as $r)
    <div class="col-md-3 col-sm-6">
      
      <div class="product-card">
        <img style="width:200px" src="{{ asset('img/'.$r->image) }}" class="product-image mb-3" alt="Product 1">
        
        <button class="btn btn-dark w-100">Masukan Keranjang</button><br><br>
        <h6{{ $r->nama_produk }}</h6>
        <p class="mb-1 text-primary">{{ number_format($r->harga,0) }} <span class="text-muted text-decoration-line-through">25.000</span></p>
        <div class="d-flex align-items-center">
  <div class="text-warning">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>
  <span class="text-muted ms-2">(5)</span>
  
</div>


</div>


    
      </div>@endforeach
   




</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>