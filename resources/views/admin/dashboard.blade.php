<x-admin-layout>
    <x-slot:title>Dashboard</x-slot:title>
    <h3>Product Items :</h3>
    <br>
    <div class="product-list">
        <div class="main-header mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Add Item!
              </button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item Name</th>
                    <th>Type</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->color }}</td>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
                @endforeach
            
                @if ($products->isEmpty())
                <tr>
                    <td colspan="8">Tidak ada produk yang ditemukan.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Choose Your Image Product!">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Item Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Input Item Name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Serial Number</label>
                        <input type="text" class="form-control" name="serialNumber" placeholder="Input Serial Number ">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Input Type">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Input Pice">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Stock</label>
                        <input type="number" class="form-control" name="stock" placeholder="Input Stock">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
  <!-- end modal -->
  
</x-admin-layout>