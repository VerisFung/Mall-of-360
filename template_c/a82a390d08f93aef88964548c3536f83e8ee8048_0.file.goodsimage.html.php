<?php /* Smarty version 3.1.27, created on 2016-03-20 15:52:24
         compiled from "template\Admin\goodsimage.html" */ ?>
<?php
/*%%SmartyHeaderCode:2875256ee56b82b1412_47269363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82a390d08f93aef88964548c3536f83e8ee8048' => 
    array (
      0 => 'template\\Admin\\goodsimage.html',
      1 => 1458460343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2875256ee56b82b1412_47269363',
  'variables' => 
  array (
    'page' => 0,
    'goods_name' => 0,
    'goods_id' => 0,
    'imageInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ee56b84cd661_85342025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ee56b84cd661_85342025')) {
function content_56ee56b84cd661_85342025 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2875256ee56b82b1412_47269363';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container maincontent">
            <div class="row">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_tmp1=ob_get_clean();
echo U(('Admin/goods/page/').($_tmp1));?>
" class="btn btn-default" style="margin-bottom:10px" ><span class="glyphicon glyphicon-menu-left"></span> 返回</a>

                            <div class="row">
                              <div class="col-md-12">
                                <p style="font-size:18px">您正在管理的商品是:<label class="label label-default"><?php echo $_smarty_tpl->tpl_vars['goods_name']->value;?>
</label></p>
                                <hr>
                                <form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_tmp2=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['goods_id']->value;
$_tmp3=ob_get_clean();
echo U(((('Admin/goods/action/uploadgoodsimage/page/').($_tmp2)).('/id/')).($_tmp3));?>
" method="POST" enctype="multipart/form-data">
                                    <input class="btn btn-success" style="display:none" id="file" type="file" name="file[]" multiple>
                                    <input class="btn btn-warning" type="button" onclick="file.click()" value="添加图片">
                                    <input class="btn btn-success" type="submit" value="上传">
                                    <?php if (count($_smarty_tpl->tpl_vars['imageInfo']->value) > 1) {?>
                                    <a class="btn btn-primary" id="checkAllImage"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                                    <a class="btn btn-danger" id="delAllImage"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                                    <?php } else { ?>
                                    <a class="btn btn-primary disabled" id="checkAllImage"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                                    <a class="btn btn-danger disabled" id="delAllImage"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                                    <?php }?>
                                </form>

                              </div>
                            </div>
                            <hr />
                            <div class="row">
                            <?php
$_from = $_smarty_tpl->tpl_vars['imageInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                              <div class="col-sm-6 col-md-3 div-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                <div class="thumbnail">
                                  <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['iname'];?>
" style="width:253px;height:253px;">
                                  <div class="caption">
                                    <h4>ID:<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['cover'] == 1) {?><label class="label label-success">是封面</label><?php } else { ?><label class="label label-danger">非封面</label><?php }?></h4>
                                    <p>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['cover'] == 1) {?>
                                        <a href="#" class="btn btn-primary disabled" role="button">设为封面</a>
                                        <a href="#" class="btn btn-danger disabled" role="button">删除</a>
                                    <?php } else { ?>
                                        <input type="checkbox" name="checklist[]" image-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
                                        <a href="javascript:void(0);" image-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-primary btn-setCover" role="button">设为封面</a>
                                        <a href="javascript:void(0);" image-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-danger btn-delImage" role="button">删除</a>
                                    <?php }?>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </div>


                        </div>
                    </div>
            </div>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">
            <!--
            $(document).ready( function () {
                //设置封面
                $(".btn-setCover").click(function(){
                    $.ajax({
                    url: "<?php echo U('admin/goods/action/setcover');?>
",
                    type: 'GET',
                    data:'id='+$(this).attr("image-id"),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });

                //删除图片
                $(".btn-delImage").click(function(){
                    if(confirm("确定要删除这张图片吗？")){
                        $(".div-"+$(this).attr("image-id")).fadeOut();
                        $.ajax({
                        url: "<?php echo U('admin/goods/action/delgoodsimage');?>
",
                        type: 'GET',
                        data:'id='+$(this).attr("image-id"),
                        dataType: 'html',
                        timeout: 1000,
                        });
                    }
                });

                //批量删除图片
                $("#delAllImage").click(function(){
                    if(confirm("确定要删除这些图片吗？")){
                        for(i=0;i<$("input[type='checkbox']").length;i++){
                            if($("input[type='checkbox']:eq("+i+")").prop("checked")==true){
                                $(".div-"+$("input[type='checkbox']:eq("+i+")").attr("image-id")).fadeOut();
                                $.ajax({
                                url: "<?php echo U('admin/goods/action/delgoodsimage');?>
",
                                type: 'GET',
                                data:'id='+$("input[type='checkbox']:eq("+i+")").attr("image-id"),
                                dataType: 'html',
                                timeout: 1000,
                                });
                            }
                        }
                        // location.reload();
                    }
                });

                //全选or反选
                $("#checkAllImage").click(function(){
                    if($("#checkAllImage").prop("checked") == true){
                        $("#checkAllImage").prop("checked", false);
                        $("#checkAllImage span").attr("class", "glyphicon glyphicon-unchecked");
                        $("input[type='checkbox']").prop("checked", false);
                    }else{
                        $("#checkAllImage").prop("checked", true);
                        $("#checkAllImage span").attr("class", "glyphicon glyphicon-check");
                        $("input[type='checkbox']").prop("checked", true);
                    }
                });
            });
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>