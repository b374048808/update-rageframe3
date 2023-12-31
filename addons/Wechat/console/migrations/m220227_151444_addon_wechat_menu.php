<?php

use yii\db\Migration;

class m220227_151444_addon_wechat_menu extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');

        /* 创建表 */
        $this->createTable('{{%addon_wechat_menu}}', [
            'id' => "int(10) NOT NULL AUTO_INCREMENT COMMENT '公众号id'",
            'merchant_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '商户id'",
            'store_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '店铺ID'",
            'menu_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '微信菜单id'",
            'type' => "tinyint(4) unsigned NULL DEFAULT '1' COMMENT '1:默认菜单；2个性化菜单'",
            'title' => "varchar(30) NULL DEFAULT '' COMMENT '标题'",
            'tag_id' => "int(10) NULL DEFAULT '0' COMMENT '标签id'",
            'client_platform_type' => "tinyint(4) unsigned NULL COMMENT '手机系统'",
            'menu_data' => "json NULL COMMENT '微信菜单'",
            'status' => "tinyint(4) NULL DEFAULT '0' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_at' => "int(10) NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='微信_自定义菜单'");

        /* 索引设置 */


        /* 表数据 */

        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addon_wechat_menu}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

