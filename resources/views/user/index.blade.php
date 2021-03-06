@include('common.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i> 用 户 列 表 </h3>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>序号</td>
                            <td>用户名</td>
                            <td>密码</td>
                            <td>注册时间</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $key=>$user)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$user['username']}} </td>
                            <td> {{$user['password']}} </td>
                            <td> {{$user['created_at']}} </td>
                            <td>
                                <a type="button" class="btn btn-outline-secondary" href="/admin/user/address/{{$user['id']}}">收货地址</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END USER DATA-->
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@include('common.footer')
