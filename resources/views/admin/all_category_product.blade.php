@extends('admin_layout')
@section('admin_content')


<div class="container-fluid">
				
		


                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách danh mục sản phẩm</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                             
                                                <th>Tên danh mục</th>
                                                <th>Mô tả</th>
                                                <th>Trạng thái</th>
                                            
                                                <th>Quản lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_category_product as $key => $cate_pro)
                                            <tr>
                                                <td>{{$cate_pro->category_name}}</td>
                                                <td>{{$cate_pro->category_desc}}</td>
                                                <td>
                                                    <?php
                                                    if($cate_pro->category_status==0){
                                                        ?>
                                                            <a href = "{{URL::to('/active-category-product/'.$cate_pro->category_id)}}">Ẩn</a>
                                                            <?php
                                                    }else{
                                                        ?>
                                                       <a href = "{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}">Kích hoạt</i></a>
                                                       <?php
                                                    }
                                                    
                                                    ?>
                                                </td>
                                            
                                              
        
                                                <td>
													<div class="d-flex">
														<a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a  onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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