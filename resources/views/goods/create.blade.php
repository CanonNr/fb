@include('common.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong> 添 加 商 品</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/goods/create/action" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">商 品 名 称</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="请输入要添加的商品名称" class="form-control" required>
                            {{--<small class="form-text text-muted"></small>--}}
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">商 品 介 绍</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="description" id="textarea-input" rows="9" placeholder="请 输 入 ..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label"> 商 品 类 型 </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category_id" id="select" class="form-control">
                                <option value="1">{{category(1)}}</option>
                                <option value="2">{{category(2)}}</option>
                                <option value="3">{{category(3)}}</option>
                                <option value="4">{{category(4)}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label"> 商 品 单 格 </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="price" value="0.00" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')" >
                            <small class="form-text text-muted">请输入商品的单价</small>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label"> 商 品 封 面 </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="cover" class="form-control-file" accept="image/jpeg,image/jpg">
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
