<?php

use yii\db\Migration;

class m220227_143427_common_attachment extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');

        /* 创建表 */
        $this->createTable('{{%common_attachment}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'member_id' => "int(10) NULL DEFAULT '0' COMMENT '用户'",
            'merchant_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '商户id'",
            'store_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '店铺ID'",
            'cate_id' => "int(10) NULL DEFAULT '0' COMMENT '分类'",
            'drive' => "varchar(50) NULL DEFAULT '' COMMENT '驱动'",
            'upload_type' => "varchar(10) NULL DEFAULT '' COMMENT '上传类型'",
            'specific_type' => "varchar(100) NOT NULL DEFAULT 'image/jpeg' COMMENT '类别'",
            'url' => "varchar(500) NULL DEFAULT '' COMMENT 'url'",
            'path' => "varchar(500) NULL DEFAULT '' COMMENT '本地路径'",
            'md5' => "varchar(100) NULL DEFAULT '' COMMENT 'md5校验码'",
            'name' => "varchar(500) NULL DEFAULT '' COMMENT '文件原始名'",
            'extension' => "varchar(100) NULL DEFAULT 'jpg' COMMENT '扩展名'",
            'size' => "int(11) NULL DEFAULT '0' COMMENT '长度'",
            'format_size' => "varchar(50) NULL DEFAULT '' COMMENT '格式化长度'",
            'year' => "int(10) unsigned NULL DEFAULT '0' COMMENT '年份'",
            'month' => "int(10) NULL DEFAULT '0' COMMENT '月份'",
            'day' => "int(10) unsigned NULL DEFAULT '0' COMMENT '日'",
            'width' => "int(10) unsigned NULL DEFAULT '0' COMMENT '宽度'",
            'height' => "int(10) unsigned NULL DEFAULT '0' COMMENT '高度'",
            'ip' => "varchar(16) NULL DEFAULT '' COMMENT '上传者ip'",
            'req_id' => "varchar(50) NULL DEFAULT '' COMMENT '对外id'",
            'status' => "tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='公用_资源管理'");

        /* 索引设置 */
        $this->createIndex('md5','{{%common_attachment}}','md5',0);


        /* 表数据 */

        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%common_attachment}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

