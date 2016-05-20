<?php /* Smarty version 3.1.27, created on 2016-03-22 09:04:25
         compiled from "template\Admin\goods.html" */ ?>
<?php
/*%%SmartyHeaderCode:2664656f09a19cfa805_62404751%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f64cb1f1251891fc59e70a66e9670252af49bb' => 
    array (
      0 => 'template\\Admin\\goods.html',
      1 => 1458608655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2664656f09a19cfa805_62404751',
  'variables' => 
  array (
    'classifyList' => 0,
    'v' => 0,
    'pageInfo' => 0,
    'goodsList' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f09a1a679ed4_36408477',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f09a1a679ed4_36408477')) {
function content_56f09a1a679ed4_36408477 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2664656f09a19cfa805_62404751';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- 增加用户框 -->
<div class="modal fade" id="collectionModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">采集入库</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-class_id" class="control-label">商品分类:</label>
            <select name="form-control" id="input-class_id" class="normal">
            <?php
$_from = $_smarty_tpl->tpl_vars['classifyList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
            </select>
            <label><a href="<?php echo U('admin/classify');?>
" target="_blank">添加分类</a></label>
          </div>
          <div class="form-group">
            <label for="input-item_id" class="control-label">360商品ID:</label>
            <input type="text" class="form-control" id="input-item_id">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-success" id="btn-collection">开始采集</button>
      </div>
    </div>
  </div>
</div>
        <div class="container-fluid maincontent">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <a class="btn btn-info" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];
$_tmp1=ob_get_clean();
echo U(('admin/goods/action/addgoods/page/').($_tmp1));?>
"><span class="glyphicon glyphicon-plus"></span> 添加商品</a>
                                                <a class="btn btn-warning" data-toggle="modal" data-target="#collectionModal"><span class="glyphicon glyphicon-cloud-download"></span> 采集</a>
                                                <?php if (count($_smarty_tpl->tpl_vars['goodsList']->value) > 0) {?>
                                                <a class="btn btn-primary" id="checkAllGoods"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                                                <a class="btn btn-danger" id="delAllGoods"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary disabled" id="checkAllGoods"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                                                <a class="btn btn-danger disabled" id="delAllGoods"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                                                <?php }?>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="col-md-12 control-input">
                                                    <select class="form-control" id="searchClass">
                                                        <option value="">全部分类</option>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['classifyList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                                            <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'class_id' && $_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['pageInfo']->value['keywords']) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-2 control-input">
                                                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] != '') {?>
                                                    <a class="btn btn-default" href="<?php echo U('admin/goods/page/1');?>
"><span class="glyphicon glyphicon-refresh"></span> 清空</a>
                                                    <?php }?>
                                                </div>
                                                <div class="col-md-4 control-input">
                                                    <select class="form-control" id="search">
                                                        <option value="gname"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'gname') {?>selected="selected"<?php }?>>商品名称</option>
                                                        <option value="id"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'id') {?>selected="selected"<?php }?>>ID</option>
                                                        <option value="price"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'price') {?>selected="selected"<?php }?>>单价</option>
                                                        <option value="point"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'point') {?>selected="selected"<?php }?>>积分</option>
                                                        <option value="stock"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'stock') {?>selected="selected"<?php }?>>库存</option>
                                                        <option value="sale"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'sale') {?>selected="selected"<?php }?>>销量</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 control-input">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="搜索您想要的..." name="search" id="input-search" value="<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != 'class_id' && $_smarty_tpl->tpl_vars['pageInfo']->value['search'] != 'order') {
echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];
}?>">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default" type="button" id="btn-search"><i class="glyphicon glyphicon-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <!-- 没有搜索,没有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == '' && $_smarty_tpl->tpl_vars['pageInfo']->value['total'] == 0) {?>
                                                    <div id="tip" class="alert alert-warning alert-dismissible">暂无商品数据</div>
                                                <?php }?>
                                                <!-- 有搜索,没有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['total'] == 0) {?>

                                                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != 'class_id' && $_smarty_tpl->tpl_vars['pageInfo']->value['search'] != 'order') {?>
                                                        <div id="tip" class="alert alert-warning alert-dismissible">暂无<strong>
                                                        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'id') {?>
                                                        ID
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'gname') {?>
                                                        商品名称
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'price') {?>
                                                        单价
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'point') {?>
                                                        积分
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'stock') {?>
                                                        库存
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'sale') {?>
                                                        销量
                                                        <?php }?>
                                                        </strong>为<strong> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
 </strong>的数据</div>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'order') {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == 'down') {?>
                                                        <div id="tip" class="alert alert-warning alert-dismissible">暂无下架数据<strong>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == 'up') {?>
                                                        <div id="tip" class="alert alert-warning alert-dismissible">暂无上架数据<strong>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <div id="tip" class="alert alert-warning alert-dismissible">暂无该分类数据<strong>
                                                    <?php }?>
                                                <?php }?>
                                                <!-- 有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['total'] != 0) {?>
                                                <table class="table table-striped table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20px" >#</th>
                                                            <th style="width:40px">ID</th>
                                                            <th>封面</th>
                                                            <th style="width:200px">商品名称</th>
                                                            <th style="width:100px" >商品分类</th>
                                                            <th>单价</th>
                                                            <th>积分</th>
                                                            <th>库存</th>
                                                            <th>销量</th>
                                                            <th>是否新品</th>
                                                            <th>是否热销</th>
                                                            <th>状态</th>
                                                            <th>赞</th>
                                                            <th>操作</th>
                                                            <th>
                                                                <select class="form-control" id="searchOrder">
                                                                    <option value="idd"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'order' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == 'idd') {?>selected="selected"<?php }?>>按新商品降序 ∨</option>
                                                                    <option value="ida"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'order' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == 'ida') {?>selected="selected"<?php }?>>按新商品升序 ∧</option>
                                                                    <option value="up"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'order' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == 'up') {?>selected="selected"<?php }?>>搜上架商品</option>
                                                                    <option value="down"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'order' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == 'down') {?>selected="selected"<?php }?>>搜下架商品</option>
                                                                </select>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['goodsList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                                        <tr style="height:50px">
                                                            <td style="height:64px;"><input type="checkbox" name="checklist[]" /></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                                            <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt=""></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['class_name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['point'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['stock'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sale'];?>
</td>
                                                            <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['isnew'] == 1) {?>
                                                            <a href="javascript:void(0);" class="isnew isnew-yes"><span class="text-success glyphicon glyphicon-ok"></span></a>
                                                            <?php } else { ?>
                                                            <a href="javascript:void(0);" class="isnew isnew-no"><span class="text-danger glyphicon glyphicon-remove"></span></a>
                                                            <?php }?>
                                                            </td>
                                                            <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['ishot'] == 1) {?>
                                                            <a href="javascript:void(0);" class="ishot ishot-yes"><span class="text-success glyphicon glyphicon-ok"></span></a>
                                                            <?php } else { ?>
                                                            <a href="javascript:void(0);" class="ishot ishot-no"><span class="text-danger glyphicon glyphicon-remove"></span></a>
                                                            <?php }?>
                                                            </td>
                                                            <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?>
                                                            <a href="javascript:void(0);" class="status status-up"><span class="text-success glyphicon glyphicon-open"></span></a>
                                                            <?php } else { ?>
                                                            <a href="javascript:void(0);" class="status status-down"><span class="text-danger glyphicon glyphicon-save"></span></a>
                                                            <?php }?>
                                                            </td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zan'];?>
</td>
                                                            <td style="width:316px" colspan="2">
                                                                <a class="btn btn-sm btn-primary" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp2=ob_get_clean();
echo U(('index/product/id/').($_tmp2));?>
" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> 详情</a>
                                                                <a class="btn btn-sm btn-success" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];
$_tmp3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp4=ob_get_clean();
echo U(((('admin/goods/page/').($_tmp3)).('/action/editgoods/id/')).($_tmp4));?>
"><span class="glyphicon glyphicon-edit"></span> 编辑</a>
                                                                <a class="btn btn-sm btn-warning" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_tmp5=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp6=ob_get_clean();
echo U(((('admin/goods/action/goodsimage/page/').($_tmp5)).('/id/')).($_tmp6));?>
" ><span class="glyphicon glyphicon-picture"></span> 图片管理</a>
                                                                <a class="btn btn-sm btn-danger btn-delGoods" href="javascript:void(0);" ><span class="glyphicon glyphicon-remove"></span> 删除</a>
                                                            </td>
                                                        </tr>
                                                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                                <?php }?>
                                                    </tbody>
                                                </table>
                                                <!-- 有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['total'] != 0) {?>
                                                <hr>
                                                共<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount'];?>
页，当前第<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
页，本页显示<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['rows'];?>
条记录，共<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['total'];?>
条记录
                                                <nav>
                                                    <ul class="pagination pull-left">
                                                        <li>
                                                            <a href="<?php echo U('admin/goods/page/1');?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Previous"> <span class="glyphicon glyphicon-step-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo U('admin/goods/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Previous"> <span class="glyphicon glyphicon-chevron-left"></span>
                                                            </a>
                                                        </li>
                                                        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['startBanner'] == '...') {?>
                                                            <li><a href="javascript:void(0);">...</a></li>
                                                        <?php }?>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['total'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pageInfo']->value['pageCount']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?>
                                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 == $_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>
                                                            <li class="active"><a href="javascript:void(0);"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</a></li>
                                                        <?php } else { ?>
                                                            <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 >= $_smarty_tpl->tpl_vars['pageInfo']->value['start']) && ($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 <= $_smarty_tpl->tpl_vars['pageInfo']->value['end']))) {?>
                                                                <li><a href="<?php echo U('admin/goods/page/');
echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</a></li>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php endfor; endif; ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['endBanner'] == '...') {?>
                                                            <li><a href="javascript:void(0);">...</a></li>
                                                        <?php }?>
                                                        <li>
                                                            <a href="<?php echo U('admin/goods/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Next"> <span class="glyphicon glyphicon-chevron-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo U('admin/goods/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount'];?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Next"> <span class="glyphicon glyphicon-step-forward"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="col-md-2 pull-left" style="margin:20px 0;">
                                                        <select class="form-control" id="select-gotoPage">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['total'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pageInfo']->value['pageCount']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?>
                                                            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 == $_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>
                                                                <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
" selected="selected"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</option>
                                                            <?php }?>
                                                        <?php endfor; endif; ?>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-default" style="margin:20px 0;" id="btn-gotoPage">走你</button>
                                                </nav>
                                                <?php }?><!-- 有数据的情况 END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            <!--
            $(document).ready( function () {
                //searchOrder
                $("#searchOrder").change(function(){
                    location.href="<?php echo U('admin/goods/page/1');?>
"+'&search=order&keywords='+this.value;
                });
                //分类下拉菜单
                $("#searchClass").change(function(){
                    location.href="<?php echo U('admin/goods/page/1');?>
"+'&search=class_id&keywords='+this.value;
                });
                //搜索
                $("#btn-search").click(function(){
                    location.href="<?php echo U('admin/goods/page/1');?>
"+'&search='+$("#search").val()+'&keywords='+$("#input-search").val();
                });
                //搜索框回车
                $("#input-search").keydown(function(event){
                    if(event.keyCode ==13){
                        $("#btn-search").trigger("click");
                    }
                });
                //搜索框点击选中文字
                $("#input-search").click(function(){
                    $(this).select();
                });

                //走你
                $("#btn-gotoPage").click(function(){
                    location.href="<?php echo U('admin/goods/page/');?>
"+$("#select-gotoPage").val()+'&search='+$("#search").val()+'&keywords='+$("#input-search").val();
                });


                //用户全选or反选
                $("#checkAllGoods").click(function(){
                    if($("#checkAllGoods").prop("checked") == true){
                        $("#checkAllGoods").prop("checked", false);
                        $("#checkAllGoods span").attr("class", "glyphicon glyphicon-unchecked");
                        $("input[type='checkbox']").prop("checked", false);
                    }else{
                        $("#checkAllGoods").prop("checked", true);
                        $("#checkAllGoods span").attr("class", "glyphicon glyphicon-check");
                        $("input[type='checkbox']").prop("checked", true);
                    }
                });

                //采集
                $("#btn-collection").click(function(){
                    $(this).html('正在采集');
                    $(this).attr('class','btn btn-success disabled');
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/collection');?>
",
                    type: 'GET',
                    data:'class_id='+$('#input-class_id').val()+
                         '&item_id='+$('#input-item_id').val(),
                    dataType: 'html',
                    timeout: 10000,
                    success: function(html){
                        // alert(html);
                        alert('采集成功!');
                        location.href="<?php echo U('Admin/goods/page/1');?>
";
                    }
                    });
                });
                //=============商品===============

                //删除商品
                $("tbody .btn-delGoods").click(function(){
                    if(confirm("确定要删除这条商品吗？")){
                        $("tbody tr:eq("+$(".btn-delGoods").index($(this))+")").fadeOut();
                        $.ajax({
                        url: "<?php echo U('Admin/goods/action/delgoods');?>
",
                        type: 'GET',
                        data:'id='+$("tbody tr:eq("+$(".btn-delGoods").index($(this))+") td:eq(1)").html(),
                        dataType: 'html',
                        timeout: 1000,
                        success: function(html){
                            location.reload();
                        }
                        });
                    }
                });

                //批量删除商品
                $("#delAllGoods").click(function(){
                    if(confirm("确定要删除这些商品吗？")){
                        for(i=0;i<$("input[type='checkbox']").length;i++){
                            if($("input[type='checkbox']:eq("+i+")").prop("checked")==true){
                                $.ajax({
                                url: "<?php echo U('Admin/goods/action/delgoods');?>
",
                                type: 'GET',
                                data:'id='+$("tbody tr:eq("+i+") td:eq(1)").html(),
                                dataType: 'html',
                                timeout: 1000,
                                });
                            }
                        }
                        setTimeout(function(){
                            location.reload();
                        }, 100);
                    }
                });


                // 开启
                $(".isnew-no").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/isnew');?>
",
                    type: 'GET',
                    data:'status=1&goodsid='+$("tbody tr:eq("+$(".isnew").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });
                // 关闭
                $(".isnew-yes").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/isnew');?>
",
                    type: 'GET',
                    data:'status=0&goodsid='+$("tbody tr:eq("+$(".isnew").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });
                // 开启
                $(".ishot-no").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/ishot');?>
",
                    type: 'GET',
                    data:'status=1&goodsid='+$("tbody tr:eq("+$(".ishot").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });
                // 关闭
                $(".ishot-yes").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/ishot');?>
",
                    type: 'GET',
                    data:'status=0&goodsid='+$("tbody tr:eq("+$(".ishot").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });

                // 开启
                $(".status-down").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/status');?>
",
                    type: 'GET',
                    data:'status=1&goodsid='+$("tbody tr:eq("+$(".status").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });
                // 关闭
                $(".status-up").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/goods/action/status');?>
",
                    type: 'GET',
                    data:'status=0&goodsid='+$("tbody tr:eq("+$(".status").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });

            });
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>