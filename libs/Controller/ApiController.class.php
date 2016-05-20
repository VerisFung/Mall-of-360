<?php
    class ApiController{
        //获取全国地区信息
        function getareas($params){
            if(isset($params['areas_id'])){
                $apiModel=M('Api');
                $areasInfo=$apiModel->getAreas($params['areas_id']);
                echo J($areasInfo);
            }else{
                echo J(array(
                    'status'=>'0',
                    'error_info'=>'接口提交错误',
                ));
            }
        }
        //获取商品分类信息
        function getclassify($params){
            $apiModel=M('Api');
            if(isset($params['pid'])){
                $pid=$params['pid'];
                $classifyList=$apiModel->getClassifyListArr($pid);
            }else{
                $classifyList=$apiModel->getClassifyListArr();
            }
            // echo '<pre>';
            // print_r($classifyList);
            echo J($classifyList);
        }

        //异步验证表单
        function checkform($params){
            $apiModel=M('Api');
            if(isset($params['action'])){
                $action=S($params['action']);
                $data=S($params['data']);
                $apiModel=M('Api');
                $result=$apiModel->checkForm($action,$data);
                echo $result;
            }
        }
    }