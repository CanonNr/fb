@include('common.header')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->

            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i> 销 售 统 计 </h3>
                <div class="filters m-b-45">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                    </div>
                </div>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>序号</td>
                            <td>分类名</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key=>$item)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$item['name']}} </td>

                            <td>
                                <a type="button" class="btn btn-outline-danger" href="/admin/category/c/{{$item['id']}}">查看统计</a>
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
