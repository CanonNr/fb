@include('common.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i>{{$user['username']}} 的 收货地址 </h3>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>序号</td>
                            <td>收货人</td>
                            <td>手机号</td>
                            <td>详细地址</td>
                            <td>默认地址</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($address as $key=>$item)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$item['name']}} </td>
                            <td> {{$item['tel']}} </td>
                            <td> {{$item['address']}} </td>
                            <td>
                                @if($item['status'] == \App\Address::ON)
                                    <span class="badge badge-success">√</span>
                                @else
                                    <span class="badge badge-danger">×</span>
                                @endif

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
