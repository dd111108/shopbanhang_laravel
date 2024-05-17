@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cập nhật sản phẩm</h4>
                            </div>
                            <div class="card-body">
                       
                                <div class="basic-form">
                                @foreach($edit_product as $key => $pro)
                                    <form action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post"  enctype="multipart/form-data">
                                 
                                    {{ csrf_field()}}
                                    <label class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                        <div class="mb-3 row">
                                          
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="{{$pro->product_name}}" name ="product_name"  required="" >
                                            </div>
                                            
                                        </div>
                                        <label class="col-sm-3 col-form-label">Giá sản phẩm</label>
                                        <div class="mb-3 row">
                                          
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"  name ="product_price"value="{{$pro->product_price}}"  required="" >
                                            </div>
                                            
                                        </div>    
                                        <label class="col-sm-3 col-form-label">Hình ảnh</label>
                                        <div class="input-group mb-3">
											<span class="input-group-text">Upload</span>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control" name ="product_image">
                                                <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                                            </div>
                                        </div> 
                                      
                                     <label class="col-sm-3 col-form-label">Mô tả</label>
                                        <div class="mb-3">
                                  
                                            <textarea class="form-control" rows="4" id="comment" name ="product_desc" required="">{{$pro->product_desc}}</textarea>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Nội dung</label>
                                        <div class="mb-3">
                                  
                                            <textarea class="form-control" rows="4" id="comment" name ="product_content" required="">{{$pro->product_content}}</textarea>
                                        </div>

                                        
                                        <label class="col-sm-3 col-form-label">Danh mục sản phẩm</label>
                                        <div class="mb-3 row">
                                          
                                          <div class="col-sm-9">
                                        <select class="default-select form-control wide mb-3" name="product_cate" required="">
                                        @foreach($cate_product as $key => $cate)
                                        @if($cate->category_id==$pro->category_id)
											<option selected value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
									    @else
                                        <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endif
										@endforeach
										</select> 
                                        </div>
                                            
                                            </div>


                                        <label class="col-sm-3 col-form-label">Thương hiệu</label>
                                        <div class="mb-3 row">
                                          
                                          <div class="col-sm-9">
                                        <select class="default-select form-control wide mb-3" name="product_brand" required="">
                                        @foreach($brand_product as $key => $brand)
                                        @if($brand->brand_id==$pro->brand_id)
											<option selected value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                            @else	
                                            <option value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                            @endif
                                         @endforeach
										</select> 
                                                    </div>
                                            
                                            </div>



                                       
                                            
                                            </div>
                            </div>
                        </div>
					</div>
                  
                                   
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"  name ="add_product">Cập nhật</button>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                 
@endsection