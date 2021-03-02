<div class="row row-sm">
  <div class="col-lg-12">
      <div class="card custom-card">
          <div class="card-body">
            <h6 class="main-content-label mb-1">Manage Products</h6>
              <div class="d-flex justify-content-between mb-3">
                <div style="width: 23rem">
                  <input type="text" wire:model="search" class="form-control" placeholder="search by name,description,categories or tags">
                </div>
                  <button class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" data-target="#addEditProduct">Add New Product</button> 
              </div>
             {{-- include add product modal --}}
              <div class="table-responsive">
                  <table id="" class="table table-striped table-bordered text-nowrap" >
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Title</th>
                              <th>Purchase Price</th>
                              <th>Selling Price</th>
                              <th>Stock</th>
                              <th>Category</th>
                              <th>Sub Category</th>
                              <th>Tags</th>
                              <th>Description</th>
                              {{-- <th>Actions</th> --}}
                          </tr>
                      </thead>
                      <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td> <img src="{{$product->image_path}}" alt="product image" width="40" height="40"> 
                              {{$product->name}}
                            </td>
                            <td>{{$product->purchase_price}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->categories->name}}</td>
                            <td>{{$product->subCategories->name}}</td>
                            <td>
                              @forelse ($product->tags as $tag)
                                  <button class="btn btn-sm btn-primary">{{$tag->name}}</button>
                              @empty
                                 No tags Available 
                              @endforelse
                             </td>
                            <td>{{$product->desc}}</td>
                            {{-- <td class="d-flex justify-content-center">
                              <a class="modal-effect" data-effect="effect-scale" data-toggle="modal" href="#EditUser_">
                                  <i class="fe fe-edit-2 text-primary mr-4" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                              </a>
                              <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                            </td> --}}
                        </tr>
                    @endforeach
                  </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>

  {{-- where modal lies --}}
  <div  class="modal effect-scale fade" id="addEditProduct" wire:ignore.self>  
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" data-container="#addEditProduct">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                    <h6 class="modal-title">Add New Product</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save"  id="formAdd">
                {{-- Start of modal body --}}
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">title</p>
                        <div id="for-title" >
                        <input data-container="#for-title" wire:model.lazy="product.name" type="text" class="form-control"  placeholder="product title">
                    </div>
                    <x-error name="product.name"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">description</p>
                        <div id="for-name" >
                        <input data-container="#for-name" wire:model.lazy="product.desc" type="text" class="form-control"  placeholder="Description">
                    </div>
                    <x-error name="product.desc"/>
                    </div>
                   </div>
                 
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">purchase price</p>
                        <div  id="for-purchase_price" >
                        <input data-container="#for-purchase_price" wire:model.lazy="product.purchase_price" type="number" class="form-control"  placeholder="purchase price">
                    </div>
                    <x-error name="product.purchase_price"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">selling price</p>
                        <div  id="for-selling_price" >
                        <input data-container="#for-selling_price" wire:model.lazy="product.selling_price" type="number" class="form-control"  placeholder="selling price">
                    </div>
                    <x-error name="product.selling_price"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">stock</p>
                        <div  id="for-stock" >
                        <input data-container="#for-stock" wire:model.lazy="product.stock" type="number" class="form-control"  placeholder="stock">
                    </div>
                    <x-error name="product.stock"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <p class="mg-b-10 mr-2">category</p>
                    <div id="for-category" wire:ignore>
                    <select wire:model="selectedCategory" data-container="#for-category" class="form-control selectpicker" 
                    >
                        <option>category</option>
                        @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <x-error name="selectedCategory"/>
                </div>
               
                   <div class="col-sm-6">
                    <p class="mg-b-10 mr-2">sub category</p>
                    <div  id="for-sub-category">
                    <select wire:model="selectedSubCategory" data-container="#for-sub-category" class="form-control" 
                    >
                        {{-- <option>Sub Category</option> --}}
                        @forelse ($subCategories as $subCat)
                            <option value="{{$subCat->id}}">{{$subCat->name}}</option>
                            @empty
                            <option>select a category first</option>
                        @endforelse
                    </select>
                    </div>
                    <x-error name="selectedCategory"/>
                </div>
                <div class="col-sm-6">
                  <p class="mg-b-10 mr-2">Tags</p>
                  <div id="for-tags" wire:ignore>
                  <select wire:model="selectedTags" data-container="#for-tags" class="form-control selectpicker" multiple="true" searchable="true"
                  >
                      <option>Tags</option>
                      @foreach ($tags as $tag)
                      <option value="{{$tag->id}}">{{$tag->name}}</option>
                      @endforeach
                  </select>
                  </div>
                  <x-error name="tags"/>
              </div>
               <br>
               <div class="col-sm-12 col-md-4 mx-auto mt-2">
                <p class="mg-b-10 mr-4 text-center">Product image</p>
                 <div id="for-image" wire:ignore>
                <input data-container="#for-image" type="file" wire:model="image" class="dropify" data-height="200" />
            </div>
            <x-error name="image"/>
            </div>
            <br> 
            </div>
            <div class="col text-center my-2">
              <h3>total Cost : {{$totalCost}}</h3>
            </div>
            </div>
            {{-- end of modal body --}}
            <br>
            <div class="modal-footer">
                <button class="btn ripple btn-primary btn-with-icon"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
                <button class="btn ripple btn-secondary btn-with-icon">{{ trans('general.save_continue') }} <i class="far fa-copy  ml-2 "></i></button>
                <button class="btn ripple btn-success btn-with-icon">{{ trans('general.save_complete_other') }}<i class="fas fa-folder-plus ml-2 "></i></button>
                <button class="btn ripple btn-light" data-dismiss="modal" type="button">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<!-- End Row -->

{{-- 
<br>
<br>
<img src="{{ $url }}" alt="" width="100" height="200"> --}}
{{-- testing/WDrVcTnCkeoZPTwIK6HoaOwSN8TaLB7SjOV7KcvN.jpg --}}

