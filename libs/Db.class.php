<?php
    //PDO类
    class DB{
        private $link;
        private $dsn;
        public $pref;

        public function __construct($config){
            $this->dsn=$config['type'].':dbname='.$config['name'].';'
                .'host='.$config['host'].';'
                .'port='.$config['port'];
            $this->pref=$config['pref'];
            $this->link=new PDO($this->dsn,$config['user'],$config['pass']);
            $this->query('set names '.$config['char']);
            return $this->link;
        }

        /**
         * 执行SQL语句
         * @param  string $sql          SQL语句
         * @return resource/boolean     执行状态
         */
        public function query($sql){
            // echo $sql,'<br>';
            return $this->link->query($sql);
        }

        /**
         * 查询所有数据
         * @param string $table  表名
         * @param string $fields 显示字段
         * @param string $where  条件
         */
        public function findAll($table='',$fields='*',$where='1'){
            $sql="SELECT $fields FROM `{$this->pref}{$table}` WHERE $where";
            // echo $sql;
            return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        /**
         * 查询一条数据
         * @param string $table  表名
         * @param string $fields 显示字段
         * @param string $where  条件
         */
        public function findOne($table='',$fields='*',$where='1'){
            $sql="SELECT $fields FROM `{$this->pref}{$table}` WHERE $where limit 1";
            // echo $sql;
            return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        /**
         * 插入内容
         * @param  string $table   表名
         * @param  array  $params  键值对
         * @return boolean         执行状态
         */
        function insert($table,$params=array()){
            $keys=$values='';
            foreach($params as $key => $value){
                $keys.="`$key`,";
                $values.="'$value',";
            }
            $keys=rtrim($keys,',');
            $values=rtrim($values,',');
            $sql="INSERT INTO `{$this->pref}{$table}` ($keys) VALUES ($values)";
            // echo $sql;
            $this->query($sql);
            return $this->link->lastInsertId();
        }

        /**
         * 删除内容
         * @param  string $table 表名
         * @param  string $where 条件
         * @return boolean       执行状态
         */
        function delete($table,$where='1'){
            $sql="DELETE FROM `{$this->pref}{$table}` WHERE $where";
            return $this->query($sql);
        }

        /**
         * 更新数据
         * @param  string $table  表名
         * @param  array  $params 参数键值对 array('key'=>'value')
         * @param  string $where  条件
         * @return boolean        执行状态
         */
        public function update($table='',$params=array(),$where='1'){
            $sql="UPDATE `{$this->pref}{$table}` SET ";
            foreach($params as $key => $value){
                $sql.="`$key`='$value',";
            }
            $sql=rtrim($sql,',').' WHERE '.$where;
            // echo $sql;
            return $this->query($sql);
        }

        /**
         * 更新配置数据
         * @param  string $table 表名
         * @param  string $key   受更新的字段
         * @param  string $value 更新值
         * @param  string $where 条件
         * @return boolean       执行状态
         */
        public function updateConfig($table='',$key,$value,$where='1'){
            $sql="UPDATE `{$this->pref}{$table}` SET `$key`='$value' WHERE $where";
            return $this->query($sql);
        }


        public function numRows($table='',$where='1'){
            $sql="SELECT count(*) as total FROM `{$this->pref}{$table}` WHERE $where limit 1";
            // echo $sql;
            return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC)[0]['total'];
        }
    }
?>