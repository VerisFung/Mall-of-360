<?php /* Smarty version 3.1.27, created on 2016-03-21 18:48:12
         compiled from "template\Index\allproduct.html" */ ?>
<?php
/*%%SmartyHeaderCode:1593956efd16cb55221_84624258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68cbe23c227b1eaae36240afc4fe0b2abb48dd4c' => 
    array (
      0 => 'template\\Index\\allproduct.html',
      1 => 1458557262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1593956efd16cb55221_84624258',
  'variables' => 
  array (
    'search' => 0,
    'classifyList' => 0,
    'v' => 0,
    'class_id' => 0,
    'order_price' => 0,
    'is_stock' => 0,
    'goodsList' => 0,
    'loginInfo' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56efd16d52ceb8_46449239',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efd16d52ceb8_46449239')) {
function content_56efd16d52ceb8_46449239 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1593956efd16cb55221_84624258';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="main" style="background-color:#F5F5F5">
            <div class="filter-box">
                    <div class="filter js-cates">
                        <?php if (!empty($_smarty_tpl->tpl_vars['search']->value)) {?>
                        <div class="filter">
                            <a href="<?php echo U('index/allproduct');?>
">全部搜索结果</a>
                        </div>
                        <?php }?>
                        <span class="hint">分类:</span>
                        <select id="input-class_id">
                            <option value="">全部商品</option>
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['class_id']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        </select>
                    </div>
                    <div class="filter js-sort last">
                        <span class="hint">排序:</span>
                        <a data-sort="0" <?php if ($_smarty_tpl->tpl_vars['order_price']->value != 'asc' && $_smarty_tpl->tpl_vars['order_price']->value != 'desc') {?> class="active" <?php }?> href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp2=ob_get_clean();
echo U(((('index/allproduct/class_id/').($_tmp1)).('/search/')).($_tmp2));?>
">默认</a>
                        <?php if ($_smarty_tpl->tpl_vars['order_price']->value == 'asc') {?>
                        <a class="active" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp4=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp5=ob_get_clean();
echo U(((((('index/allproduct/class_id/').($_tmp3)).('/price/desc/is_stock/')).($_tmp4)).('/search/')).($_tmp5));?>
">价格↑</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['order_price']->value == 'desc') {?>
                        <a class="active" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp6=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp7=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp8=ob_get_clean();
echo U(((((('index/allproduct/class_id/').($_tmp6)).('/price/asc/is_stock/')).($_tmp7)).('/search/')).($_tmp8));?>
">价格↓</a>
                        <?php } else { ?>
                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp9=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp10=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp11=ob_get_clean();
echo U(((((('index/allproduct/class_id/').($_tmp9)).('/price/asc/is_stock/')).($_tmp10)).('/search/')).($_tmp11));?>
">价格</a>
                        <?php }?>
                        <span class="filter-chkbox">
                            <label><input type="checkbox" id="is-stock" <?php if ($_smarty_tpl->tpl_vars['is_stock']->value == 1) {?> checked="checked" <?php }?>> 仅看有货产品</label>
                        </span>
                    </div>
            </div>
            <div class="contentwrap">
                <ul class="allproduct">
                    <?php if (empty($_smarty_tpl->tpl_vars['search']->value) && count($_smarty_tpl->tpl_vars['goodsList']->value) == 0) {?>
                        <div style="height:320px;line-height:250px;font-size: 48px;text-align:center">商城暂无商品</div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['search']->value) && count($_smarty_tpl->tpl_vars['goodsList']->value) == 0) {?>
                        <div style="height:320px;line-height:250px;font-size: 48px;text-align:center">无搜索结果</div>
                    <?php } else { ?>
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
                    <li>
                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp12=ob_get_clean();
echo U(('index/product/id/').($_tmp12));?>
" target="_blank">
                            <div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['iname'];?>
" alt=""></div>
                            <div class="gname"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</div>
                            <div class="price"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</div>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['loginInfo']->value['loginstatus'] == 0) {?>
                        <div class="link"><a href="javascript:void(0);" onclick="userFrame('login','show')">加入购物车</a></div>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['stock'] == 0) {?>
                        <div class="link">
                            <div class="over">已售完</div>
                        </div>
                            <?php } else { ?>
                        <div class="link"><a href="javascript:void(0);" target="_blank" onclick="addCart(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,1);location.href='<?php echo U('index/shopcart');?>
'">加入购物车</a></div>
                            <?php }?>
                        <?php }?>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    <?php }?>
                </ul>
            </div>

            
                <div class="footer-navbar">
                    <div class="contentwrap">
                        <div class="nav-info">
                            &nbsp;&nbsp;共<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount'];?>
页，当前第<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
页，本页显示<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['rows'];?>
条记录，共<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['total'];?>
条记录
                        </div>
                        <div class="nav-number">
                            <!-- 有数据的情况 -->
                            <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['total'] != 0) {?>
                            <!-- <hr> -->
                            <nav>
                                <ul class="pagination pull-left">
                                    <li>
                                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp13=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['order_price']->value;
$_tmp14=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp15=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp16=ob_get_clean();
echo U((((((((('index/allproduct/class_id/').($_tmp13)).('/price/')).($_tmp14)).('/is_stock/')).($_tmp15)).('/search/')).($_tmp16)).('/page/1'));?>
" aria-label="Previous">首页</a>
                                    </li>
                                    <li>
                                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp17=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['order_price']->value;
$_tmp18=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp19=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp20=ob_get_clean();
echo U((((((((('index/allproduct/class_id/').($_tmp17)).('/price/')).($_tmp18)).('/is_stock/')).($_tmp19)).('/search/')).($_tmp20)).('/page/'));
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
" aria-label="Previous">上一页
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
                                            <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp21=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['order_price']->value;
$_tmp22=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp23=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp24=ob_get_clean();
echo U((((((((('index/allproduct/class_id/').($_tmp21)).('/price/')).($_tmp22)).('/is_stock/')).($_tmp23)).('/search/')).($_tmp24)).('/page/'));
echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</a></li>
                                        <?php }?>
                                    <?php }?>
                                <?php endfor; endif; ?>
                                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['endBanner'] == '...') {?>
                                        <li><a href="javascript:void(0);">...</a></li>
                                    <?php }?>
                                    <li>
                                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp25=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['order_price']->value;
$_tmp26=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp27=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp28=ob_get_clean();
echo U((((((((('index/allproduct/class_id/').($_tmp25)).('/price/')).($_tmp26)).('/is_stock/')).($_tmp27)).('/search/')).($_tmp28)).('/page/'));
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
" aria-label="Next">下一页</a>
                                    </li>
                                    <li>
                                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp29=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['order_price']->value;
$_tmp30=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['is_stock']->value;
$_tmp31=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp32=ob_get_clean();
echo U((((((((('index/allproduct/class_id/').($_tmp29)).('/price/')).($_tmp30)).('/is_stock/')).($_tmp31)).('/search/')).($_tmp32)).('/page/'));
echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount'];?>
" aria-label="Next">尾页</a>
                                    </li>
                                </ul>
                            </nav>
                            <?php }?><!-- 有数据的情况 END -->
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">
            <!--
            $(document).ready( function () {
                //分类下拉菜单
                $("#input-class_id").change(function(){
                    location.href="<?php echo U('index/allproduct/class_id/');?>
"+this.value;
                });


                $("#is-stock").click(function(){
                    if($(this).prop('checked')==true){
                        location.href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp33=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp34=ob_get_clean();
echo U((((('index/allproduct/class_id/').($_tmp33)).('/is_stock/1')).('/search/')).($_tmp34));?>
";
                    }else{
                        location.href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['class_id']->value;
$_tmp35=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_tmp36=ob_get_clean();
echo U((((('index/allproduct/class_id/').($_tmp35)).('/is_stock/0')).('/search/')).($_tmp36));?>
";
                    }
                });
            });
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>