@include('common.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong> 修 改 商 品</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/goods/update/action" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$goods['id']}}">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">商 品 名 称</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="请输入要添加的商品名称" value="{{$goods['name']}}" class="form-control" required>
                            {{--<small class="form-text text-muted"></small>--}}
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">商 品 介 绍</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="description" id="textarea-input" rows="9" placeholder="请 输 入 ..." class="form-control">{{$goods['description']}}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label"> 商 品 类 型 </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category_id" id="select" class="form-control">
                                @for ($i = 1; $i <= 4; $i++)
                                    <option value="{{$i}}" @if($i == $goods['category_id']) selected @endif >{{category($i)}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label"> 商 品 单 格 </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="price" value="{{$goods['price']}}" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')" >
                            <small class="form-text text-muted">请输入商品的单价</small>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label"> 商 品 封 面 </label>
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{$goods['cover']}}" width="50px" class="img"/>
                        </div>
                        <div class="col-6 col-md-3">
                            <input type="file" id="file-input" name="cover" class="form-control-file imgInput" accept="image/jpeg,image/jpg">
                        </div>
                    </div>


            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> 提交
                </button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- END MAIN CONTENT-->
@include('common.footer')
<script>
    $(".imgInput").change(function(){
        $(".img").attr("src",URL.createObjectURL($(this)[0].files[0]));
    });
</script>
