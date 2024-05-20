@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Thêm thương hiệu sản phẩm</h4>
            </div>
            <div class="card-body">        
                <div class="basic-form">
                    <form action="{{URL::to('/save-brand-product')}}" method="post">
                        {{ csrf_field()}}
                        <label class="col-sm-3 col-form-label">Tên thương hiệu</label>
                        <div class="mb-3 row">
                                          
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  name ="brand_product_name"  required="" >
                            </div>
                                            
                        </div>
                                        
                                
                        <label class="col-sm-3 col-form-label">Mô tả</label>
                        <div class="mb-3">
                                  
                            <textarea class="form-control" rows="4" id="comment" name ="brand_product_desc" required=""></textarea>
                        </div>
                        <label class="col-sm-3 col-form-label">Hiển thị</label>
                                        <select class="default-select form-control wide mb-3" name="brand_product_status" required="">
                                        <option value ="0">Hiển thị</option>
											<option value ="1">Ẩn</option>
										
										</select> 
                   
                  
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"  name ="add_brand_product">Thêm</button>
                                            </div>
                                        </div>
                                 
                    </form>
                </div>   
            </div>
        </div>
    </div>
</div>
                   
@endsection