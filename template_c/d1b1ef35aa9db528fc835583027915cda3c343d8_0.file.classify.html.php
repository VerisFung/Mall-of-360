<?php /* Smarty version 3.1.27, created on 2016-03-20 10:52:20
         compiled from "template\Admin\classify.html" */ ?>
<?php
/*%%SmartyHeaderCode:3053356ee10647c0ac0_93407328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b1ef35aa9db528fc835583027915cda3c343d8' => 
    array (
      0 => 'template\\Admin\\classify.html',
      1 => 1458442339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3053356ee10647c0ac0_93407328',
  'variables' => 
  array (
    'pid' => 0,
    'classifyList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ee1064acc9c4_01561088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ee1064acc9c4_01561088')) {
function content_56ee1064acc9c4_01561088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3053356ee10647c0ac0_93407328';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 添加一级分类 -->
<div class="modal fade" id="addClassifyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加一级分类</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-classifyname" class="control-label">分类名:</label>
            <input type="text" class="form-control" id="input-classifyname">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-addClassifyClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-addClassify">添加</button>
      </div>
    </div>
  </div>
</div>
<!-- 修改一级分类 -->
<div class="modal fade" id="editClassifyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">编辑一级分类</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-editclassifyname" class="control-label">分类名:</label>
            <input type="hidden" class="form-control" id="input-editclassifyid">
            <input type="text" class="form-control" id="input-editclassifyname">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-editClassifyClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-editClassify">保存</button>
      </div>
    </div>
  </div>
</div>
<!-- 修改一级分类 -->
<div class="modal fade" id="addSubClassifyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加子分类</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-addsubclassifyname" class="control-label">分类名:</label>
            <input type="text" class="form-control" id="input-addsubclassifyname">
          </div>
        </form>
        <form>
          <div class="form-group">
            <label for="input-addsubclassifypid" class="control-label">PID:</label>
            <input type="text" class="form-control" id="input-addsubclassifypid" readonly="on">
          </div>
        </form>
        <form>
          <div class="form-group">
            <label for="input-addsubclassifypath" class="control-label">PATH:</label>
            <input type="text" class="form-control" id="input-addsubclassifypath" readonly="on">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-addSubClassifyClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-addSubClassify">保存</button>
      </div>
    </div>
  </div>
</div>

<!-- 添加子分类2 -->
<div class="modal fade" id="addSub2ClassifyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加子分类</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-addsub2classifyname" class="control-label">分类名:</label>
            <input type="hidden" class="form-control" id="input-addsub2classifypid">
            <input type="text" class="form-control" id="input-addsub2classifyname">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-addClassifyClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-addSub2Classify">添加</button>
      </div>
    </div>
  </div>
</div>
<!-- 导入分类 -->
<div class="modal fade" id="importClassifyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">导入分类</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-importclassify" class="control-label">分类数据（JSON格式）:</label>
            <textarea class="form-control" rows="17" id="input-importclassify"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-success" id="btn-importClassify">导入</button>
      </div>
    </div>
  </div>
</div>
<!-- 导出分类 -->
<div class="modal fade" id="exportClassifyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">导出分类</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-exportclassify" class="control-label">分类数据（JSON格式）:</label>
            <textarea class="form-control" rows="17" id="input-exportclassify" readonly></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
        <div class="container-fluid maincontent">
          <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-7">
                            <?php if ($_smarty_tpl->tpl_vars['pid']->value == 0) {?>
                            <a class="btn btn-info" data-toggle="modal" data-target="#addClassifyModal"><span class="glyphicon glyphicon-plus"></span> 添加一级分类</a>
                            <?php } else { ?>
                            <a class="btn btn-success" data-toggle="modal" data-target="#addSub2ClassifyModal" id="addSub2ClassifyRun"><span class="glyphicon glyphicon-plus"></span> 添加子分类</a>
                            <?php }?>
                            <?php if (count($_smarty_tpl->tpl_vars['classifyList']->value) > 0) {?>
                            <a class="btn btn-primary" id="checkAllClassify"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                            <a class="btn btn-danger" id="delAllClassify"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                            <?php } else { ?>
                            <a class="btn btn-primary disabled" id="checkAllClassify"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                            <a class="btn btn-danger disabled" id="delAllClassify"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['pid']->value != 0) {?>
                            <a class="btn btn-default" href="javascript:history.back(-1)"><span class="glyphicon glyphicon-refresh"></span> 返回上一级分类</a>
                            <?php } else { ?>
                            <a class="btn btn-default" href="javascript:void(0);" data-toggle="modal" data-target="#importClassifyModal"><span class="glyphicon glyphicon-save"></span> 导入分类</a>
                            <?php if (count($_smarty_tpl->tpl_vars['classifyList']->value) > 0) {?>
                            <a class="btn btn-default" id="btn-exportClassify" href="javascript:void(0);" data-toggle="modal" data-target="#exportClassifyModal"><span class="glyphicon glyphicon-open"></span> 导出分类</a>
                            <?php }?>
                            <?php }?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php if (!isset($_smarty_tpl->tpl_vars['classifyList']->value[0]['pid'])) {?>
                                <div id="tip" class="alert alert-warning alert-dismissible">无更多分类数据</div>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['classifyList']->value[0]['pid'])) {?>
                            <table class="table table-striped table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:20px">#</th>
                                        <th style="width:40px">ID</th>
                                        <th>分类名</th>
                                        <th>PID</th>
                                        <th>PATH</th>
                                        <th>是否显示</th>
                                        <th style="width:360px">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                    <tr>
                                        <td><input type="checkbox" name="checklist[]" /></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                        <td><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp1=ob_get_clean();
echo U(('admin/classify/pid/').($_tmp1));?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['path'];?>
</td>
                                        <td>
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['display'] == 0) {?>
                                        <a href="javascript:void(0);" class="display displayClose"><span class=" text-danger glyphicon glyphicon-eye-close"></span></a>
                                        <?php } else { ?>
                                        <a href="javascript:void(0);" class="display displayOpen"><span class=" text-success glyphicon glyphicon-eye-open"></span></a>
                                        <?php }?>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-default" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp2=ob_get_clean();
echo U(('admin/classify/pid/').($_tmp2));?>
"><span class="glyphicon glyphicon-log-in"></span> 查看子类</a>
                                            <a class="btn btn-sm btn-info btn-addSubClassifyRun" href="javascript:void(0);" data-toggle="modal" data-target="#addSubClassifyModal"><span class="glyphicon glyphicon-plus-sign"></span> 添加子类</a>
                                            <a class="btn btn-sm btn-success btn-editClassifyRun" data-toggle="modal" data-target="#editClassifyModal"><span class="glyphicon glyphicon-edit"></span> 编辑</a>
                                            <!-- <if $v.pid!=0 > -->
                                            <a class="btn btn-sm btn-danger btn-delClassify" href="javascript:void(0);" ><span class="glyphicon glyphicon-remove"></span> 删除</a>
                                            <!-- <else> -->
                                            <!-- <a class="btn btn-sm btn-danger btn-delClassify disabled" href="javascript:void(0);" ><span class="glyphicon glyphicon-remove"></span> 删除</a> -->
                                            <!-- </if> -->
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                </tbody>
                            </table>
                            <?php }?>
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
                //添加分类
                $("#btn-addClassify").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/addclassify');?>
",
                    type: 'GET',
                    data:'classifyname='+$('#input-classifyname').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.href="<?php echo U('admin/classify');?>
";
                    }
                    });
                });
                //点击编辑分类
                $(".btn-editClassifyRun").click(function(){
                  $("#input-editclassifyid").val($("tbody tr:eq("+$(".btn-editClassifyRun").index($(this))+") td:eq(1)").html());
                  $("#input-editclassifyname").val($("tbody tr:eq("+$(".btn-editClassifyRun").index($(this))+") td:eq(2) a").html());
                });
                //保存编辑分类
                $("#btn-editClassify").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/editclassify');?>
",
                    type: 'GET',
                    data:'classifyid='+$('#input-editclassifyid').val()+
                         '&classifyname='+$('#input-editclassifyname').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.reload();
                    }
                    });
                });
                // 显示开启
                $(".displayClose").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/display');?>
",
                    type: 'GET',
                    data:'status=1&classifyid='+$("tbody tr:eq("+$(".display").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.reload();
                    }
                    });
                });
                // 显示关闭
                $(".displayOpen").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/display');?>
",
                    type: 'GET',
                    data:'status=0&classifyid='+$("tbody tr:eq("+$(".display").index($(this))+") td:eq(1)").html(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.reload();
                    }
                    });
                });

                //点击添加子分类
                $(".btn-addSubClassifyRun").click(function(){
                  $("#input-addsubclassifypid").val($("tbody tr:eq("+$(".btn-addSubClassifyRun").index($(this))+") td:eq(1)").html());
                  $("#input-addsubclassifypath").val($("tbody tr:eq("+$(".btn-addSubClassifyRun").index($(this))+") td:eq(4)").html()+$("tbody tr:eq("+$(".btn-addSubClassifyRun").index($(this))+") td:eq(1)").html()+',');
                });

                //添加子分类
                $("#btn-addSubClassify").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/addsubclassify');?>
",
                    type: 'GET',
                    data:'classifyname='+$('#input-addsubclassifyname').val()+
                         '&classifypid='+$('#input-addsubclassifypid').val()+
                         '&classifypath='+$('#input-addsubclassifypath').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert(html);
                        location.reload();
                    }
                    });
                });

                //删除分类
                $(".btn-delClassify").click(function(){
                    if(confirm("确定要删除这条分类吗？")){
                        // $("tbody tr:eq("+$(".btn-delClassify").index($(this))+")").fadeOut();
                        $.ajax({
                        url: "<?php echo U('Admin/classify/action/delclassify');?>
",
                        type: 'GET',
                        data:'classifyid='+$("tbody tr:eq("+$(".btn-delClassify").index($(this))+") td:eq(1)").html(),
                        dataType: 'html',
                        timeout: 1000,
                        success: function(html){
                          alert(html);
                          location.reload();
                        }
                        });
                    }
                });

                //点击添加子分类2
                $("#addSub2ClassifyRun").click(function(){
                  $("#input-addsub2classifypid").val(<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
);
                });

                //添加子分类2
                $("#btn-addSub2Classify").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/addsub2classify');?>
",
                    type: 'GET',
                    data:'classifyname='+$('#input-addsub2classifyname').val()+
                         '&classifypid='+$('#input-addsub2classifypid').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.reload();
                    }
                    });
                });

                //导入分类
                $("#btn-importClassify").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/classify/action/importclassify');?>
",
                    type: 'POST',
                    data:'content='+$('#input-importclassify').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                    }
                    });
                        location.reload();
                });
                //导出分类
                $("#btn-exportClassify").click(function(){
                    $.ajax({
                    url: "<?php echo U('Api/getclassify');?>
",
                    type: 'GET',
                    data:'pid=0',
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                      $("#input-exportclassify").val(html);
                    }
                    });
                });


                //用户全选or反选
                $("#checkAllClassify").click(function(){
                    if($("#checkAllClassify").prop("checked") == true){
                        $("#checkAllClassify").prop("checked", false);
                        $("#checkAllClassify span").attr("class", "glyphicon glyphicon-unchecked");
                        $("input[type='checkbox']").prop("checked", false);
                    }else{
                        $("#checkAllClassify").prop("checked", true);
                        $("#checkAllClassify span").attr("class", "glyphicon glyphicon-check");
                        $("input[type='checkbox']").prop("checked", true);
                    }
                });

                //批量删除分类
                $("#delAllClassify").click(function(){
                    if(confirm("确定要删除这些分类吗？")){
                        for(i=0;i<$("input[type='checkbox']").length;i++){
                            if($("input[type='checkbox']:eq("+i+")").prop("checked")==true){
                              $.ajax({
                              url: "<?php echo U('Admin/classify/action/delclassify');?>
",
                              type: 'GET',
                              data:'classifyid='+$("tbody tr:eq("+i+") td:eq(1)").html(),
                              dataType: 'html',
                              timeout: 1000,
                              success: function(html){
                                if(html!='删除成功！'){
                                  alert(html);
                                }
                              }
                              });
                            }
                        }
                        setTimeout(function(){
                          location.reload();
                        }, 1000);
                    }
                });

            })
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>