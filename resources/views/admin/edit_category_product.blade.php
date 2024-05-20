@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cập nhật mục sản phẩm</h4>
                            </div>
                            <div class="card-body">
                       
                                <div class="basic-form">
                                
                                @foreach($edit_category_product as $key => $edit_value)
                                    <form action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                    {{ csrf_field()}}
                                    <label class="col-sm-3 col-form-label">Tên danh mục</label>
                                        <div class="mb-3 row">
                                          
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"  name ="category_product_name" value="{{$edit_value->category_name}}" required="" >
                                            </div>
                                            
                                        </div>
                                        
                                <div class="basic-form">
                                <label class="col-sm-3 col-form-label">Mô tả</label>
                                        <div class="mb-3">
                                  
                                            <textarea class="form-control" rows="4" id="comment" name ="category_product_desc"  required="">{{$edit_value->category_desc}}</textarea>
                                        </div>
                                      
                            </div>
                        </div>
					</div>
                  
                                   
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"  name ="update_category_product">Cập nhật</button>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
					</div>
                    </div>
@endsection