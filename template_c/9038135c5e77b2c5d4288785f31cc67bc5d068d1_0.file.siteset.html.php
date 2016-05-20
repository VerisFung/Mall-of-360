<?php /* Smarty version 3.1.27, created on 2016-03-15 20:29:44
         compiled from "template\Admin\siteset.html" */ ?>
<?php
/*%%SmartyHeaderCode:3048056e80038e769b2_75377807%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9038135c5e77b2c5d4288785f31cc67bc5d068d1' => 
    array (
      0 => 'template\\Admin\\siteset.html',
      1 => 1458024249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3048056e80038e769b2_75377807',
  'variables' => 
  array (
    'siteInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e800392db5f9_45708195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e800392db5f9_45708195')) {
function content_56e800392db5f9_45708195 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3048056e80038e769b2_75377807';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container maincontent">
            <div class="row">
                <div class="alert alert-success alert-dismissible fade in" id="saveOk" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-ok"></span> 设置保存成功！
                </div>
                <div class="alert alert-danger alert-dismissible fade in" id="saveError" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-remove"></span> 设置保存失败！
                </div>
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#baseSet" aria-controls="baseSet" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-wrench"></span> 基本设置</a></li>
                        <li role="presentation"><a href="#seoSet" aria-controls="seoSet" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-globe"></span> SEO设置</a></li>
                        <li role="presentation"><a href="#spiderSet" aria-controls="spiderSet" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-asterisk"></span> 蜘蛛设置</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="baseSet">
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputTitle">站点标题</label>
                                            <div class="col-sm-8 control-input">
                                                <input class="form-control" type="text" id="formGroupInputTitle" name="title" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['sitetitle'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputTitle2">站点副标题</label>
                                            <div class="col-sm-8 control-input">
                                                <input class="form-control" type="text" id="formGroupInputTitle2" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['sitetitle2'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputIcp">ICP备案号</label>
                                            <div class="col-sm-8 control-input">
                                                <input class="form-control" type="text" id="formGroupInputIcp" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['icp'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputFooterInfo">首页底部信息</label>
                                            <div class="col-sm-8 control-input">
                                                <textarea class="form-control" rows="3" id="formGroupInputFooterInfo"><?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['footerinfo'];?>
</textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputSkin">个性皮肤</label>
                                            <div class="col-sm-8 control-input">
                                                <select class="form-control" id="formGroupInputSkin">
                                                  <option value="default" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['skin'] == 'default') {?>selected<?php }?>>default</option>
                                                  <option value="flatly" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['skin'] == 'flatly') {?>selected<?php }?>>flatly</option>
                                                  <option value="journal" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['skin'] == 'journal') {?>selected<?php }?>>journal</option>
                                                  <option value="lumen" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['skin'] == 'lumen') {?>selected<?php }?>>lumen</option>
                                                  <option value="slate" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['skin'] == 'slate') {?>selected<?php }?>>slate</option>
                                                  <option value="superhero" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['skin'] == 'superhero') {?>selected<?php }?>>superhero</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputSiteStatus">站点开关</label>
                                            <div class="col-sm-8 control-input">
                                                <select class="form-control" id="formGroupInputSiteStatus">
                                                  <option value="0" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['sitestatus'] == 0) {?>selected<?php }?>>关闭</option>
                                                  <option value="1" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['sitestatus'] == 1) {?>selected<?php }?>>开启</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputCache">缓存设置</label>
                                            <div class="col-sm-8 control-input">
                                                <select class="form-control" id="formGroupInputCache">
                                                  <option value="0" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['sitecache'] == 0) {?>selected<?php }?>>关闭</option>
                                                  <option value="1" <?php if ($_smarty_tpl->tpl_vars['siteInfo']->value['sitecache'] == 1) {?>selected<?php }?>>开启</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="reset" class="btn btn-default">重置</button>
                                        <button type="button" class="btn btn-default" id="btn-base">保存设置</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- SEO设置 -->
                        <div role="tabpanel" class="tab-pane fade " id="seoSet">
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputSeoTitle">title</label>
                                            <div class="col-sm-8 control-input">
                                                <input class="form-control" type="text" id="formGroupInputSeoTitle" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['seotitle'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputSeoKeywrods">keywords</label>
                                            <div class="col-sm-8 control-input">
                                                <input class="form-control" type="text" id="formGroupInputSeoKeywrods" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['seokeywords'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputSeoDescription">description</label>
                                            <div class="col-sm-8 control-input">
                                                <input class="form-control" type="text" id="formGroupInputSeoDescription" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['seodescription'];?>
">
                                            </div>
                                        </div>
                                        <button type="reset" class="btn btn-default">重置</button>
                                        <button type="button" class="btn btn-default" id="btn-seo">保存设置</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 蜘蛛设置 -->
                        <div role="tabpanel" class="tab-pane fade " id="spiderSet">
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="formGroupInputWeb">蜘蛛状态</label>
                                            <div class="col-sm-8 control-input">
                                                <table class="table table-striped table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>模块</th>
                                                            <th>页面</th>
                                                            <th>统计</th>
                                                            <th>更新时间</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="" title="" class="spiderStatus spiderStatus-active"></a></div>
                                                            </td>
                                                            <td>Index</td>
                                                            <td>product</td>
                                                            <td>11</td>
                                                            <td>2016/03/03 22:55</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="" title="" class="spiderStatus spiderStatus"></a></div>
                                                            </td>
                                                            <td>Index</td>
                                                            <td>index</td>
                                                            <td>23</td>
                                                            <td>2016/03/03 22:55</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="" title="" class="spiderStatus spiderStatus-active"></a></div>
                                                            </td>
                                                            <td>Index</td>
                                                            <td>brands</td>
                                                            <td>56</td>
                                                            <td>2016/03/03 22:55</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <button type="reset" class="btn btn-default">重置</button>
                                        <button type="button" class="btn btn-default" id="btn-spider">保存设置</button>
                                    </form>
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
                $('#btn-base').click ( function () {
                    $.ajax({
                    url: "<?php echo U('Admin/save/action/baseset');?>
",
                    type: 'POST',
                    data:'sitetitle='+$('#formGroupInputTitle').val()+
                         '&sitetitle2='+$('#formGroupInputTitle2').val()+
                         '&icp='+$('#formGroupInputIcp').val()+
                         '&footerinfo='+encodeURIComponent($('#formGroupInputFooterInfo').val())+
                         '&sitestatus='+$('#formGroupInputSiteStatus').val()+
                         '&sitecache='+$('#formGroupInputCache').val()+
                         '&skin='+$('#formGroupInputSkin').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        if(html=='1'){
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveOk').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveOk').slideToggle("slow");
                            }, 2000);
                        }else{
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveError').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveError').slideToggle("slow");
                            }, 2000);
                        }
                    }
                    });
                });
                $('#btn-seo').click ( function () {
                    $.ajax({
                    url: "<?php echo U('Admin/save/action/seoset');?>
",
                    type: 'POST',
                    data:'seotitle='+$('#formGroupInputSeoTitle').val()+
                         '&seokeywords='+$('#formGroupInputSeoKeywrods').val()+
                         '&seodescription='+$('#formGroupInputSeoDescription').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        if(html=='1'){
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveOk').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveOk').slideToggle("slow");
                            }, 2000);
                        }else{
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveError').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveError').slideToggle("slow");
                            }, 2000);
                        }
                    }
                    });
                });
                $('#btn-spider').click ( function () {
                    $.ajax({
                    url: "<?php echo U('Admin/save/action/spider');?>
",
                    type: 'POST',
                    data:'sitetitle='+$('#formGroupInputTitle').val()+
                         '&sitetitle2='+$('#formGroupInputTitle2').val()+
                         '&icp='+$('#formGroupInputIcp').val()+
                         '&footerinfo='+$('#formGroupInputFooterInfo').val()+
                         '&sitestatus='+$('#formGroupInputSiteStatus').val()+
                         '&sitecache='+$('#formGroupInputCache').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        if(html=='1'){
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveOk').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveOk').slideToggle("slow");
                            }, 2000);
                        }else{
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveError').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveError').slideToggle("slow");
                            }, 2000);
                        }
                    }
                    });
                });
            })
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>