@include('common.header')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->

            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i> 商 品 列 表 </h3>
                <div class="filters m-b-45">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <div class="dropDownSelect2"> <a type="button" class="btn btn-outline-primary" href="/admin/goods/create/"> 添 加 商 品</a> </div>
                    </div>
                    @if(isset($_GET['msg']) )
                    <div class="alert alert-info" role="alert">
                        {{$_GET['msg']}}
                    </div>
                    @endif
                </div>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>序号</td>
                            <td>商品名</td>
                            <td>介绍</td>
                            <td>分类</td>
                            <td>价格</td>
                            <td>封面</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($goods as $key=>$item)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$item['name']}} </td>
                            <td> {{$item['description']}} </td>
                            <td> {{category($item['category_id'])}} </td>
                            <td> {{round($item['price'],2)}} </td>
                            <td>
                                <img src="{{$item['cover']}}" width="50px">
                            </td>
                            <td>
                                <a type="button" class="btn btn-outline-success" href="/admin/goods/delete/{{$item['id']}}">删除</a>
                                <a type="button" class="btn btn-outline-danger" href="/admin/goods/update/{{$item['id']}}">修改</a>
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
<!-- END MAIN CONTENT-->
@include('common.footer')
