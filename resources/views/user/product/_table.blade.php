<!-- <div class="table-responsive"> -->
    <div class="row">
        @foreach($products as $product)
      <div class="col-md-4">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('image_products/'.$product->image) }}" class="card-img" alt="Gambar Produk">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">{{ $product['product_name'] }}</h5>
                </div>
              </div>
              <div class="col-md-1">
                <div class="card-body">
                 <a href="#" id="handleEdit" data-id="{{ $product->id }}" data-product_name="{{ $product->product_name }}"  data-tag="{{ $product->tag }}" data-price="{{ $product->price }}" data-editor="{{ $product->content }}" data-image="{{ $product->image }}" class="text-info">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" id="handleDelete" data-id="{{ $product->id }}" url="{{ url('user/products/destroy') }}" class="text-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>

      {{ $products->links() }}
<!-- </div> -->
