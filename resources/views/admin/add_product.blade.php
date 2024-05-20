@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Thêm sản phẩm</h4>
            </div>
            <div class="card-body">
                       
                <div class="basic-form">
                        <form action="{{URL::to('/save-product')}}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field()}}
                                    <label class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                        <div class="mb-3 row">
                                          
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"  name ="product_name"  required="" >
                                            </div>
                                            
                                        </div>
                                        <label class="col-sm-3 col-form-label">Giá sản phẩm</label>
                                        <div class="mb-3 row">
                                          
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"  name ="product_price"  required="" >
                                            </div>
                                            
                                        </div>    
                                        <label class="col-sm-3 col-form-label">Hình ảnh</label>
                                        <div class="input-group mb-3">
											<span class="input-group-text">Upload</span>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control" name ="product_image">
                                            </div>
                                        </div> 
                                      
                                     <label class="col-sm-3 col-form-label">Mô tả</label>
                                        <div class="mb-3">
                                  
                                            <textarea class="form-control" rows="4" id="comment" name ="product_desc" required=""></textarea>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Nội dung</label>
                                        <div class="mb-3">
                                  
                                            <textarea class="form-control" rows="4" id="comment" name ="product_content" required=""></textarea>
                                        </div>

                                        
                                        <label class="col-sm-3 col-form-label">Danh mục sản phẩm</label>
                                        <div class="mb-3 row">
                                          
                                          <div class="col-sm-9">
                                        <select class="default-select form-control wide mb-3" name="product_cate" required="">
                                        @foreach($cate_product as $key => $cate)
											<option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
									
										@endforeach
										</select> 
                                        </div>
                                            
                                            </div>


                                        <label class="col-sm-3 col-form-label">Thương hiệu</label>
                                        <div class="mb-3 row">
                                          
                                          <div class="col-sm-9">
                                        <select class="default-select form-control wide mb-3" name="product_brand" required="">
                                        @foreach($brand_product as $key => $brand)
											<option value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
											
                                         @endforeach
										</select> 
                                                    </div>
                                            
                                            </div>



                                        <label class="col-sm-3 col-form-label">Hiển thị</label>
                                        <div class="mb-3 row">
                                          
                                          <div class="col-sm-9">
                                        <select class="default-select form-control wide mb-3" name="product_status" required="">
											<option value ="0">Hiển thị</option>
											<option value ="1">Ẩn</option>
										
										</select> 
                                        </div>
                                            
                                            </div>
                      
                  
                                   
                                     <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"  name ="add_product">Thêm</button>
                                            </div>
                                        </div>
                        </form>
                </div>
            </div>
        </div>
     </div>
</div>
                 
@endsection