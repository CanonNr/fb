@include('common.header')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->

            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i> 订 单 管 理 </h3>
                <div class="filters m-b-45">

                </div>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>序号</td>
                            <td>订单号</td>
                            <td>商品名</td>
                            <td>用户名</td>
                            <td>总价</td>
                            <td>收货人</td>
                            <td>收货地址</td>
                            <td>联系方式</td>
                            <td>订单状态</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $key=>$item)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$item['order_id']}} </td>
                            <td> {{$item['goods']['name']}} </td>
                            <td> {{$item['user']['username']}} </td>
                            <td> ￥ {{$item['total']}} </td>
                            <td> {{$item['name']}} </td>
                            <td> {{$item['address']}} </td>
                            <td> {{$item['tel']}} </td>
                            <td> {{ getOrderStatus($item['status']) }} </td>
                            <td>
                                @if($item['status'] == \App\Order::未发货)
                                    <a type="button" class="btn btn-outline-danger" href="/admin/order/fh/{{$item['id']}}">发货</a>
                                @elseif($item['status'] == \App\Order::配送中)
                                    <a type="button" class="btn btn-outline-primary" href="/admin/order/sd/{{$item['id']}}">已送达</a>
                                @endif
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
