<?php /* Smarty version 3.1.27, created on 2016-03-21 18:27:30
         compiled from "template\Admin\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:2804156efcc92431231_95163953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a3a5ca6c1f12a86a77684a2ee1b959e31f401d5' => 
    array (
      0 => 'template\\Admin\\order.html',
      1 => 1458556049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2804156efcc92431231_95163953',
  'variables' => 
  array (
    'pageInfo' => 0,
    'orderList' => 0,
    'v' => 0,
    'orderGoodsList' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56efcc92af0e38_77685955',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efcc92af0e38_77685955')) {
function content_56efcc92af0e38_77685955 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2804156efcc92431231_95163953';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container-fluid maincontent">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <a class="btn btn-primary" id="isyes"><span class="glyphicon glyphicon-check"></span> 已处理</a>
                                                <a class="btn btn-primary" id="isno"><span class="glyphicon glyphicon-unchecked"></span> 未处理</a>
                                            </div>
                                            <div class="col-md-6 pull-right">
                                                <div class="col-md-2 control-input">
                                                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] != '') {?>
                                                    <a class="btn btn-default" href="<?php echo U('admin/order/page/1');?>
"><span class="glyphicon glyphicon-refresh"></span> 清空</a>
                                                    <?php }?>
                                                </div>
                                                <div class="col-md-4 control-input">
                                                    <select class="form-control" id="search">
                                                        <option value="num"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'num') {?>selected="selected"<?php }?>>订单号</option>
                                                        <option value="id"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'id') {?>selected="selected"<?php }?>>用户ID</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 control-input">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="搜索您想要的..." name="search" id="input-search" value="<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != 'is') {
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
                                                <!-- 有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['total'] != 0) {?>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['orderList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                                <table class="table table-striped table-condensed table-hover">
                                                    <thead>
                                                        <tr style="background-color: #89D92B;color:white;font-size: 14px;">
                                                            <th style="width:20px">ID</th>
                                                            <td style="width:20px"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                                            <th style="width:60px">订单号</th>
                                                            <td style="width:220px"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
                                                            <th style="width:60px">用户ID</th>
                                                            <td style="width:20px"><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
                                                            <th style="width:40px">姓名</th>
                                                            <td style="width:60px"><?php echo $_smarty_tpl->tpl_vars['v']->value['oname'];?>
</td>
                                                            <th style="width:40px">手机</th>
                                                            <td style="width:100px"><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                                                            <th style="width:40px">地址</th>
                                                            <td style="width:170px"><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
                                                            <th style="width:40px">总价</th>
                                                            <td style="width:60px"><?php echo $_smarty_tpl->tpl_vars['v']->value['allprice'];?>
</td>
                                                            <th style="width:40px">状态</th>
                                                            <td style="width:100px">
                                                            <input type="hidden" class="order_id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 0) {?>
                                                            <select class="form-control ostatus">
                                                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 0) {?> selected="selected" <?php }?>>未发货</option>
                                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 1) {?> selected="selected" <?php }?>>已发货</option>
                                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 2) {?> selected="selected" <?php }?>>已完成</option>
                                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?> selected="selected" <?php }?>>已失效</option>
                                                            </select>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 1) {?>
                                                            <select class="form-control ostatus">
                                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 1) {?> selected="selected" <?php }?>>已发货</option>
                                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 2) {?> selected="selected" <?php }?>>已完成</option>
                                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?> selected="selected" <?php }?>>已失效</option>
                                                            </select>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 2) {?>
                                                            <select class="form-control ostatus">
                                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 2) {?> selected="selected" <?php }?>>已完成</option>
                                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?> selected="selected" <?php }?>>已失效</option>
                                                            </select>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?>
                                                            <select class="form-control ostatus">
                                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?> selected="selected" <?php }?>>已失效</option>
                                                            </select>
                                                            <?php }?>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['orderGoodsList']->value[$_smarty_tpl->tpl_vars['v']->value['id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$foreach_g_Sav = $_smarty_tpl->tpl_vars['g'];
?>
                                                        <tr style="height:50px;font-size: 16px;">
                                                            <td colspan="2"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['id'];
$_tmp1=ob_get_clean();
echo U(('index/product/id/').($_tmp1));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['g']->value['iname'];?>
" alt=""></a></td>
                                                            <td colspan="7"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['id'];
$_tmp2=ob_get_clean();
echo U(('index/product/id/').($_tmp2));?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</a></td>
                                                            <th colspan="1">单价：</th>
                                                            <td colspan="1"><?php echo $_smarty_tpl->tpl_vars['g']->value['price'];?>
</td>
                                                            <td></td>
                                                            <th colspan="2">数量：</th>
                                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['g']->value['qty'];?>
</td>
                                                        </tr>
                                                        <?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?>
                                                    </tbody>
                                                </table>
                                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                                <?php } else { ?>
                                                    <div id="tip" class="alert alert-warning alert-dismissible">暂无订单数据</div>
                                                <?php }?>
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
                                                            <a href="<?php echo U('admin/order/page/1');?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Previous"> <span class="glyphicon glyphicon-step-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo U('admin/order/page/');
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
                                                                <li><a href="<?php echo U('admin/order/page/');
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
                                                            <a href="<?php echo U('admin/order/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Next"> <span class="glyphicon glyphicon-chevron-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo U('admin/order/page/');
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
                $("#isyes").click(function(){
                    location.href="<?php echo U('admin/order/page/1');?>
"+'&search=is'+'&keywords=yes';
                });
                $("#isno").click(function(){
                    location.href="<?php echo U('admin/order/page/1');?>
"+'&search=is'+'&keywords=no';
                });
                //搜索
                $("#btn-search").click(function(){
                    location.href="<?php echo U('admin/order/page/1');?>
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
                    location.href="<?php echo U('admin/order/page/');?>
"+$("#select-gotoPage").val()+'&search='+$("#search").val()+'&keywords='+$("#input-search").val();
                });

                $(".ostatus").change(function(){
                    i=$(".ostatus").index($(this));
                    status=$(".ostatus:eq("+i+")").val();
                    order_id=$(".order_id:eq("+i+")").val();
                    // alert(order_id);
                    $.ajax({
                    url: "<?php echo U('Admin/order/action/updateStatus');?>
",
                    type: 'GET',
                    data:'id='+order_id+'&status='+status,
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        alert('保存成功！');
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