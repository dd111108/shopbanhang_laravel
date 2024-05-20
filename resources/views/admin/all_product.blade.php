@extends('admin_layout')
@section('admin_content')


<div class="container-fluid">
				
		


                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách sản phẩm</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                             
                                                <th>Tên sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Hình ảnh</th>
                                                <th>Danh mục</th>
                                                <th>Thương hiệu</th>
                                             
                                                <th>Trạng thái</th>
                                            
                                                <th>Quản lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_product as $key => $pro)
                                            <tr>
                                                <td>{{$pro->product_name}}</td>
                                                <td>{{$pro->product_price}}</td>
                                                <td><img src="public/uploads/product/{{$pro->product_image}}" height="100" width="100"></td>
                                                <td>{{$pro->category_name}}</td>
                                                <td>{{$pro->brand_name}}</td>
                                              
                                                <td>
                                                    <?php
                                                    if($pro->product_status==0){
                                                        ?>
                                                            <a href = "{{URL::to('/active-product/'.$pro->product_id)}}">Kích hoạt</a>
                                                            <?php
                                                    }else{
                                                        ?>
                                                       <a href = "{{URL::to('/unactive-product/'.$pro->product_id)}}">Ẩn</i></a>
                                                       <?php
                                                    }
                                                    
                                                    ?>
                                                </td>
                                            
                                              
        
                                                <td>
													<div class="d-flex">
														<a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a  onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
           
            </div>

@endsection