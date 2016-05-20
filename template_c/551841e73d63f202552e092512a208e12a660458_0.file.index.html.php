<?php /* Smarty version 3.1.27, created on 2016-03-22 11:49:58
         compiled from "template\Admin\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:469256f0c0e6daefa4_75928183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '551841e73d63f202552e092512a208e12a660458' => 
    array (
      0 => 'template\\Admin\\index.html',
      1 => 1458618597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469256f0c0e6daefa4_75928183',
  'variables' => 
  array (
    'classCountData' => 0,
    'classCount' => 0,
    'v' => 0,
    'orderStatus' => 0,
    'siteData' => 0,
    'adminInfo' => 0,
    'siteInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f0c0e71549f9_57150044',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f0c0e71549f9_57150044')) {
function content_56f0c0e71549f9_57150044 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '469256f0c0e6daefa4_75928183';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        
        
        <!-- ECharts单文件引入 -->
        <?php echo '<script'; ?>
 src="../echarts/build/dist/echarts.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            // 路径配置
            require.config({
                paths: {
                    echarts: '../echarts/build/dist'
                }
            });
            
            // 使用
            require(
                [
                    'echarts',
                    'echarts/chart/line',
                    'echarts/chart/bar',
                    'echarts/chart/pie',
                    'echarts/chart/funnel',
                ],
                function (ec) {
                    // 基于准备好的dom，初始化echarts图表
                    var myChart = ec.init(document.getElementById('echarts-1')); 
                    var myChart2 = ec.init(document.getElementById('echarts-2')); 
                    var myChart3 = ec.init(document.getElementById('echarts-3')); 
                    var myChart4 = ec.init(document.getElementById('echarts-4')); 
                    
                    option = {
                        title : {
                            text: '商品数据统计图',
                            subtext: 'Product data charts'
                        },
                        tooltip : {
                            trigger: 'axis'
                        },
                        legend: {
                            data:['销量','浏览量']
                        },
                        toolbox: {
                            show : true,
                            feature : {
                                mark : {show: true},
                                dataView : {show: true, readOnly: false},
                                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                                restore : {show: true},
                                saveAsImage : {show: true}
                            }
                        },
        
                        calculable : true,
                        xAxis : [
                            {
                                type : 'category',
                                boundaryGap : false,
                                data : [<?php echo $_smarty_tpl->tpl_vars['classCountData']->value['class_name'];?>
]
                            }
                        ],
                        yAxis : [
                            {
                                type : 'value'
                            }
                        ],
                        series : [
                            {
                                name:'销量',
                                type:'line',
                                smooth:true,
        
                                itemStyle: {normal: {areaStyle: {type: 'default'}}},
        
                                data:[<?php echo $_smarty_tpl->tpl_vars['classCountData']->value['sale'];?>
]
                            },
                            {
                                name:'浏览量',
                                type:'line',
                                smooth:true,
        
                                itemStyle: {normal: {areaStyle: {type: 'default'}}},
        
                                data:[<?php echo $_smarty_tpl->tpl_vars['classCountData']->value['views'];?>
]
                            }
                        ]
                    };
                                        



        
                    option2 = {
                        title : {
                            text: '商品分类统计图',
                            subtext: 'Categories Chart',
                            x:'left'
                        },
                        tooltip : {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                        },
        
                        // legend: {
                        //     orient : 'vertical',
                        //     x : 'left',
                        //     data:[<?php echo $_smarty_tpl->tpl_vars['classCountData']->value['class_name'];?>
]
                        // },
        
                        toolbox: {
                            show : true,
                            feature : {
                                mark : {show: true},
                                dataView : {show: true, readOnly: false},
                                magicType : {
                                    show: true, 
                                    type: ['pie', 'funnel'],
                                    option: {
                                        funnel: {
                                            x: '25%',
                                            width: '50%',
                                            funnelAlign: 'left',
                                            max: 1548
                                        }
                                    }
                                },
                                restore : {show: true},
                                saveAsImage : {show: true}
                            }
                        },
                        calculable : true,
                        series : [
        
                            {
                                name:'访问来源',
                                type:'pie',
                                radius : '55%',
                                center: ['50%', '60%'],
                                data:[
                                    <?php
$_from = $_smarty_tpl->tpl_vars['classCount']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        
                                    {
        
                                        value:<?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
, 
                                        name:'<?php echo $_smarty_tpl->tpl_vars['v']->value['class_name'];?>
'
        
                                    },
        
                                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                ]
                            }
                        ]
                    };
                                        



        
                    option3 = {
                        title : {
                            text: '商品订单状态统计图',
                            subtext: 'Categories Chart',
                            x:'left'
                        },
                        tooltip : {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                        },
                        // legend: {
                        //     orient : 'vertical',
                        //     x : 'left',
                        //     data:['未发货','已发货','已完成','已失效']
                        // },
                        toolbox: {
                            show : true,
                            feature : {
                                mark : {show: true},
                                dataView : {show: true, readOnly: false},
                                magicType : {
                                    show: true, 
                                    type: ['pie', 'funnel'],
                                    option: {
                                        funnel: {
                                            x: '25%',
                                            width: '50%',
                                            funnelAlign: 'left',
                                            max: 1548
                                        }
                                    }
                                },
                                restore : {show: true},
                                saveAsImage : {show: true}
                            }
                        },
                        calculable : true,
                        series : [
        
                            {
                                name:'访问来源',
                                type:'pie',
                                radius : '55%',
                                center: ['50%', '60%'],
                                data:[
        
                                    {
        
                                        value:<?php echo $_smarty_tpl->tpl_vars['orderStatus']->value[0];?>
, 
                                        name:'未发货'
        
                                    },
        
        
                                    {
        
                                        value:<?php echo $_smarty_tpl->tpl_vars['orderStatus']->value[1];?>
, 
                                        name:'已发货'
        
                                    },
        
        
                                    {
        
                                        value:<?php echo $_smarty_tpl->tpl_vars['orderStatus']->value[2];?>
, 
                                        name:'已完成'
        
                                    },
        
        
                                    {
        
                                        value:<?php echo $_smarty_tpl->tpl_vars['orderStatus']->value[3];?>
, 
                                        name:'已失效'
        
                                    },
        
                                ]
                            }
                        ]
                    };


        
                    option4 = {
                        title: {
                            x: 'center',
                            text: '360商城数据统计图',
                            subtext: '360 store data charts',
                        },
                        tooltip: {
                            trigger: 'item'
                        },
                        toolbox: {
                            show: true,
                            feature: {
                                dataView: {show: true, readOnly: false},
                                restore: {show: true},
                                saveAsImage: {show: true}
                            }
                        },
                        calculable: true,
                        grid: {
                            borderWidth: 0,
                            y: 80,
                            y2: 60
                        },
                        xAxis: [
                            {
                                type: 'category',
                                show: false,
                                data: ['昨日订单', '今日订单', '昨日销售额', '今日销售额']
                            }
                        ],
                        yAxis: [
                            {
                                type: 'value',
                                show: false
                            }
                        ],
                        series: [
                            {
                                name: '360商城数据统计图',
                                type: 'bar',
                                itemStyle: {
                                    normal: {
                                        color: function(params) {
                                            // build a color map as your need.
                                            var colorList = [
                                              '#26C0C0','#B5C334','#D1AE1C','#E87C25','#26C0C0',
                                               '#FE8463','#9BCA63'
                                            ];
                                            return colorList[params.dataIndex]
                                        },
                                        label: {
                                            show: true,
                                            position: 'top',
                                            formatter: '{b}\n{c}'
                                        }
                                    }
                                },        
        
                                data: [<?php echo $_smarty_tpl->tpl_vars['siteData']->value['order1'];?>
,<?php echo $_smarty_tpl->tpl_vars['siteData']->value['order2'];?>
,<?php echo $_smarty_tpl->tpl_vars['siteData']->value['price1'];?>
,<?php echo $_smarty_tpl->tpl_vars['siteData']->value['price2'];?>
],
                            }
                        ]
                    };
                                

                    // 为echarts对象加载数据 
                    myChart.setOption(option); 
                    myChart2.setOption(option2); 
                    myChart3.setOption(option3); 
                    myChart4.setOption(option4); 
                }
            );
        <?php echo '</script'; ?>
>
        <div class="container maincontent">
            <div class="row">
                【<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['role_name'];?>
】<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['username'];?>
，您好，欢迎登陆<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['sitetitle'];?>
后台！
                <hr>
                <div class="col-md-10">                
                    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                    <div id="echarts-4" style="height:450px"></div>
                </div>
                <div class="col-md-2">   
                    <ul class="nav nav-pills" role="tablist" style="margin-bottom:20px;">
                      <li role="presentation" class="active"><a href="#">注册用户数 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['siteData']->value['user'];?>
</span></a></li>
                    </ul>
                    <ul class="nav nav-pills" role="tablist" style="margin-bottom:20px;">
                      <li role="presentation" class="active"><a href="#">总订单数 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['siteData']->value['order'];?>
</span></a></li>
                    </ul>
                    <ul class="nav nav-pills" role="tablist" style="margin-bottom:20px;">
                      <li role="presentation" class="active"><a href="#">总销售额 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['siteData']->value['price'];?>
</span></a></li>
                    </ul>
                    <ul class="nav nav-pills" role="tablist" style="margin-bottom:20px;">
                      <li role="presentation" class="active"><a href="#">总商品数 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['siteData']->value['goods'];?>
</span></a></li>
                    </ul>
                </div>
                <div class="col-md-6">                
                    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                    <div id="echarts-2" style="height:450px"></div>
                </div>
                <div class="col-md-6">                
                    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                    <div id="echarts-3" style="height:450px"></div>
                </div>
                <div class="col-md-12">                
                    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                    <div id="echarts-1" style="height:450px"></div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>