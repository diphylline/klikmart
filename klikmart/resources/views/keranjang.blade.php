<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    .cart-item img {
      width: 60px;
    }
    .quantity-select {
      width: 70px;
    }
    .cart-summary {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <h4>Keranjang</h4>

  <!-- Table Header -->
  <div class="row fw-bold border-bottom pb-2 mb-3">
    <div class="col-md-5">Product</div>
    <div class="col-md-2">Price</div>
    <div class="col-md-2">Quantity</div>
    <div class="col-md-3">Subtotal</div>
  </div>

  <!-- Product 1 -->
   @foreach($order_item as $o)
  <div class="row align-items-center cart-item mb-3">
    <div class="col-md-5 d-flex align-items-center gap-3">
        <img style="width:100px" src="{{ asset('img/'.$o->product->image) }}" class="product-image mb-3" alt="Product 1">
      <span>{{ $o->product->nama_produk }}</span>
    </div>
    <div class="col-md-2">{{ number_format($o->harga,0) }}</div>
    <div class="col-md-2">
      <input type="text" class="form-control" value="{{ $o->jumlah }}">
    </div>
    <div class="col-md-3">{{ number_format($o->harga,0) }}</div>
  </div>
  @endforeach

  <!-- Buttons -->
  <div class="d-flex justify-content-between mt-4 flex-wrap gap-2">
    <a href="../produk" class="btn btn-outline-dark">Return To Shop</a>
    <button class="btn btn-outline-dark">Ubah Keranjang</button>
  </div>

  <div class="row mt-5">
    <!-- Coupon -->
    <div class="col-md-6 d-flex gap-2 mb-4">
      <input type="text" class="form-control" placeholder="Coupon Code">
      <button class="btn btn-primary">Apply Coupon</button>
    </div>

    <!-- Cart Total -->
    <div class="col-md-6">
      <div class="cart-summary">
        <h5>Cart Total</h5>
        <div class="d-flex justify-content-between border-bottom py-2">
          <span>Subtotal:</span>
          <span>Rp {{ number_format($totalHarga, 0, ',', '.') }}</span>
        </div>
        <div class="d-flex justify-content-between border-bottom py-2">
          <span>Shipping:</span>
          <span>Free</span>
        </div>
        <div class="d-flex justify-content-between fw-bold py-2">
          <span>Total:</span>
          <span>Rp {{ number_format($totalHarga, 0, ',', '.') }}</span>
        </div>
        <a href="../details" class="btn btn-primary">Proceed to checkout</a>
      </div>
    </div>
  </div>
</div>



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