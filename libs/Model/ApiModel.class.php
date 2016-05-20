<?php
    class ApiModel{
        //获取全国地区信息
        function getAreas($areaid){
            global $DB;
            $arr=$DB->findAll('areas','area_id,area_name',"`parent_id`=$areaid");
            $areasInfo=array_combine(array_column($arr, 'area_id'),array_column($arr, 'area_name'));
            return $areasInfo;
        }

        //获取商品分类数据
        function getClassifyList($pid='0'){
            global $DB;
            $row=$DB->findAll('goods_classify','id,name,pid,path',"pid=$pid");
            $rows=array();
            if($row){
                foreach($row as $key => $value){
                    $row[$key]['list']=$this->getClassifyList($value['id']);
                    $rows[]=$row[$key];
                }
            }
            return $rows;
        }

        //以数组形式获取商品分类数据
        function getClassifyListArr($pid='0'){
            global $DB;
            $row=$DB->findAll('goods_classify','id,name',"pid=$pid");
            $rows=array();
            if($row){
                foreach($row as $key => $value){
                    $id=$value['id'];
                    unset($row[$key]['id']);
                    $row[$key]['list']=$this->getClassifyListArr($value['id']);
                    if($row[$key]['list']==array()){
                        unset($row[$key]['list']);
                    }
                    $rows[]=$row[$key];
                }
            }
            return $rows;
        }

        //异步验证表单
        function checkForm($action,$data){
            global $DB;
            switch($action){
                case 'username':
                    if(strlen($data)>14 || strlen($data)<2){
                        return '<font color="red">长度必须在2-14位</font>';
                    }
                    $rex=preg_match("/^[Za-z0-9]{2,14}$/",$data);
                    if($rex){
                        $result=$DB->numRows('user',"username='$data'");
                        if($result!=0){
                            return '<font color="red">用户名已存在</font>';
                        }
                    }else{
                        return '<font color="red">不能包含除英文、数字外的其他字符</font>';
                    }
                    return '<font color="#89D92B">恭喜，该用户名可用！</font>';
                    break;
                case 'email':
                    $rex=preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$data);
                    if($rex){
                        $result=$DB->numRows('user',"email='$data'");
                        if($result!=0){
                            return '<font color="red">此邮箱已存在</font>';
                        }
                    }else{
                        return '<font color="red">邮箱格式错误！</font>';
                    }
                    return '<font color="#89D92B">恭喜，该邮箱可用！</font>';
                    break;
                case 'password':
                    if(strlen($data)<6 || strlen($data)>20){
                        return '<font color="red">长度必须在6-20位</font>';
                    }
                    return '<font color="#89D92B">恭喜，该密码可用！</font>';
                    break;
                case 'verify':
                    if($data!=$_SESSION['verify']){
                        return '<font color="red" size="5">■</font>';
                    }
                    return '<font color="#89D92B" size="5">■</font>';
                    break;
            }
        }
    }