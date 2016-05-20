<?php
/**
 * @Author: Veris
 * @Date:   2016-03-17 15:43:20
 * @Last Modified by:   Veris
 * @Last Modified time: 2016-03-18 15:56:21
 */
    
    /**
     * [up 上传函数]
     * @param  string  $myfile [表单中name的属性值]
     * @param  integer $size   [允许上传文件的大小,单位是字节]
     * @param  array   $type   [允许上传文件的主类型]
     * @param  string  $dir    [指定保存的目录]
     * @return 成功返回文件名,失败返回false
     */
    function upload($myfile='myfile',$size=10485760,$type=array('image','text'),$dir='/uploads/'){
        //判断$_FILES是否为空
        if (empty($_FILES)) {
            echo '可能设置错误,请检查html的属性设置或php.ini中的post设置<br>';
            return false;//跳出函数的执行
        }
        // echo '<pre>';
        //  print_r($_FILES);
        
        //接收上传上来的两个文件名
        $fileName = $_FILES[$myfile]['name'];  //原文件名
        $fileTmp = $_FILES[$myfile]['tmp_name']; //临时文件路径
        $fileError = $_FILES[$myfile]['error']; //错误号
        $fileSize = $_FILES[$myfile]['size']; //文件的大小
        $fileType = $_FILES[$myfile]['type']; //文件MIME类型
    
        //判断上传是否有错误
        if ($fileError > 0 ) {
            //提示信息
            echo '上传文件出错<br>';
            //输出错误信息
            switch ($fileError) {
                case 1:
                    echo '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值<br>';
                    break;
                case 2:
                    echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值<br>';
                    break;
                case 3:
                    echo '文件只有部分被上传<br>';
                    break;
                case 4:
                    echo '没有文件被上传<br>';
                    break;
                case 6:
                    echo '找不到临时文件夹<br>';
                    break;
                case 7:
                    echo '文件写入失败<br>';
                    break;
            }
            //一旦出错,在此中止
            return false;
        }

        //自由限制文件上传大小
        if ($fileSize > $size) {
            echo '文件超出限制大小';
            return false;
        }

        //做文件类型的限制
        //拿到MIME的主类型
        list($mainType) = explode('/',$fileType);
        //搜索主类型是否存在于 给定数组之中
        if (!in_array($mainType,$type)) {
            echo '文件类型不合法!<br>';
            return false;
        }

        //生成保存的文件名
        //获得原文件的后缀
        $ext = pathinfo($fileName,PATHINFO_EXTENSION);
        //生成新的具有格式化的文件名
        $saveName = date('Ymd').uniqid().'.'.$ext;
        //上传的位置目录
        $savePath = rtrim($dir,'/').'/'.date('Y/m/d/');
        //储存的路径
        $saveFile = $savePath.$saveName;

        //检测并生成相应目录
        if (!file_exists($savePath)) {
            mkdir($savePath,0777,true);
        }
        
        //移动上传上来的临时文件
        if (move_uploaded_file($fileTmp,$saveFile)) {
            //echo '上传成功!<br>';
            return $saveName;
        }else{
            echo '上传失败<br>';
            return false;
        }
    }


    /**
     * [zoom 图片缩放]
     * @param  [str] $imagefile [图片的路径]
     * @param  [int] $zoom_w    [缩放的宽度]
     * @param  [int] $zoom_h    [缩放的高度]
     * @return [str]            [返回缩放完成的文件名字]
     */
    function zoom($imagefile,$zoom_w=200,$zoom_h=200){

        //得到图片的信息
        $img_info = getimagesize($imagefile);
        if (!$img_info) {
            return '非法图片!!!';
        }
        // echo '<pre>';
        //  print_r($img_info);
        
        //获取图片的宽高
        list($src_w,$src_h) = $img_info;
        //获取图片的MIME类型
        $mime = $img_info['mime'];
        //拿到子类型
        list($type,$subtype) = explode('/',$mime);

        //打开图片为背景
        $create_img = 'imagecreatefrom'.$subtype;
        $save_img = 'image'.$subtype;

        //处理等比缩放的问题
        //首先判断源图是宽>高? 还是高>宽?
        if ($src_w > $src_h) {
            //宽>高  按宽度来缩放  高度的值就变成了按比例的值
            $zoom_h = $zoom_w / $src_w * $src_h;
            $pre = $zoom_w;//生成缩放的前缀
        }else{
            //高>宽  按高度来缩放  宽度的值就变成了按比例的值
            $zoom_w = $zoom_h / $src_h * $src_w;
            $pre = $zoom_h;//生成缩放的前缀
        }

        //创建画布
        $src_img = $create_img($imagefile); //源图
        $zoom_img = imagecreatetruecolor($zoom_w,$zoom_h); //缩放的画布

        //开始缩放
        // imagecopyresampled()
        // 参1 缩放的图片资源
        // 参2 源图的资源
        // 参3,4 缩放图片的起始点坐标
        // 参5,6 源图的起始点坐标
        // 参7,8 缩放图片的宽和高
        // 参9,10 源图的宽和高 
        imagecopyresampled($zoom_img,$src_img, 0,0, 0,0, $zoom_w,$zoom_h, $src_w,$src_h);
        
        //保存图片
        //生成一个唯一的文件名
        $save_name = dirname($imagefile).'/'.$pre.'_'.basename($imagefile);
        $save_img($zoom_img,$save_name);
        
        //销毁图片
        imagedestroy($src_img);
        imagedestroy($zoom_img);
        return $save_name;
    }
    /**
     * [getpath 获取图片的路径]
     * @param  [str] $url      [调用的根路经]
     * @param  [str] $filename [数据库查出来的图片名]
     * @param  string $a        [前缀]
     * @return [str] 组装好的图片路径URL
     */
    function getImagePath($url,$filename,$a='d'){
        switch ($a) {
            case 'a':
                $pap = '32_';
                break;
            case 'b':
                $pap = '64_';
                break;
            case 'c':
                $pap = '180_';
                break;
            case 'd':
                $pap = null;
                break;
        }
        $img_path = $url;
        $img_path .= substr($filename,0,4).'/';
        $img_path .= substr($filename,4,2).'/';
        $img_path .= substr($filename,6,2).'/';
        $img_path .= $pap.$filename;
        return $img_path;
    }