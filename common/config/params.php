<?php

return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,

    /** ------ 总管理员配置 ------ **/
    // 系统管理员账号id
    'adminAccount' => [1],
    // 无需授权的路由别名
    'noAuthRoute' => [],
    // 开发模式
    'devPattern' => 'b2b2c',
    // 多店铺 (saas、连锁)
    'multiShop' => false,
    // 请求全局唯一ID
    'uuid' => '',
    // 全局缓存优化
    'cacheSwitch ' => false,
    // 全局缓存过期时间 (建议用 redis 缓存)
    'cacheExpirationTime' => [
        'default' => 0, // 常用数据缓存
        'common' => 10, // 常用数据缓存
        'ordinary' => 60, // 一般数据缓存
        'rarely' => 60 * 6, // 不常用数据缓存
    ],
    // 真实 app id
    'realAppId' => '',
    // 百度编辑器默认上传驱动
    'UEditorUploadDrive' => 'local',
    // 全局上传配置
    'uploadConfig' => [
        // 图片
        'images' => [
            'originalName' => false, // 是否保留原名
            'fullPath' => true, // 是否开启返回完整的文件路径
            'takeOverUrl' => '', // 配置后，接管所有的上传地址
            'drive' => 'local', // 默认本地 可修改 qiniu/oss/cos 上传
            'md5Verify' => true, // md5 校验
            'maxSize' => 1024 * 1024 * 10,// 图片最大上传大小,默认10M
            'extensions' => ["png", "jpg", "jpeg", "gif", "bmp"],// 可上传图片后缀不填写即为不限
            'path' => 'images/', // 图片创建路径
            'subName' => 'Y/m/d', // 图片上传子目录规则
            'prefix' => 'image_', // 图片名称前缀
            'mimeTypes' => 'image/*', // 媒体类型
            'compress' => false, // 是否开启压缩
            'compressibility' => [ // 100不压缩 值越大越清晰 注意先后顺序
                1024 * 100 => 100, // 0 - 100k 内不压缩
                1024 * 1024 => 30, // 100k - 1M 区间压缩质量到30
                1024 * 1024 * 2  => 20, // 1M - 2M 区间压缩质量到20
                1024 * 1024 * 1024  => 10, // 2M - 1G 区间压缩质量到20
            ],
        ],
        // 视频
        'videos' => [
            'originalName' => true, // 是否保留原名
            'fullPath' => true, // 是否开启返回完整的文件路径
            'takeOverUrl' => '', // 配置后，接管所有的上传地址
            'drive' => 'local', // 默认本地 可修改 qiniu/oss/cos 上传
            'md5Verify' => true, // md5 校验
            'maxSize' => 1024 * 1024 * 50,// 最大上传大小,默认50M
            'extensions' => ['mp4', 'mp3'],// 可上传文件后缀不填写即为不限
            'path' => 'videos/',// 创建路径
            'subName' => 'Y/m/d',// 上传子目录规则
            'prefix' => 'video_',// 名称前缀
            'mimeTypes' => 'video/*', // 媒体类型
        ],
        // 语音
        'voices' => [
            'originalName' => true, // 是否保留原名
            'fullPath' => true, // 是否开启返回完整的文件路径
            'takeOverUrl' => '', // 配置后，接管所有的上传地址
            'drive' => 'local', // 默认本地 可修改 qiniu/oss/cos 上传
            'md5Verify' => true, // md5 校验
            'maxSize' => 1024 * 1024 * 30,// 最大上传大小,默认30M
            'extensions' => ['amr', 'mp3'],// 可上传文件后缀不填写即为不限
            'path' => 'voice/',// 创建路径
            'subName' => 'Y/m/d',// 上传子目录规则
            'prefix' => 'voice_',// 名称前缀
            'mimeTypes' => 'image/*', // 媒体类型
        ],
        // 文件
        'files' => [
            'originalName' => true, // 是否保留原名
            'fullPath' => true, // 是否开启返回完整的文件路径
            'takeOverUrl' => '', // 配置后，接管所有的上传地址
            'drive' => 'local', // 默认本地 可修改 qiniu/oss/cos 上传
            'md5Verify' => true, // md5 校验
            'maxSize' => 1024 * 1024 * 150,// 最大上传大小,默认150M
            'extensions' => [],// 可上传文件后缀不填写即为不限
            'path' => 'files/',// 创建路径
            'subName' => 'Y/m/d',// 上传子目录规则
            'prefix' => 'file_',// 名称前缀
            'mimeTypes' => '*', // 媒体类型
            'blacklist' => [ // 文件后缀黑名单
                'php', 'php5', 'php4', 'php3', 'php2', 'php1',
                'java', 'asp', 'jsp', 'jspa', 'javac',
                'py', 'pl', 'rb', 'sh', 'ini', 'svg', 'html', 'jtml','phtml','pht', 'js'
            ],
        ],
        // 缩略图
        'thumb' => [
            'path' => 'thumb/',// 图片创建路径
        ],
    ],

    /** ------ 微信配置 ------ **/

    // 微信配置 具体可参考EasyWechat
    'wechatConfig' => [],
    // 微信支付配置 具体可参考EasyWechat
    'wechatPaymentConfig' => [],
    // 微信小程序配置 具体可参考EasyWechat
    'wechatMiniProgramConfig' => [],
    // 微信开放平台第三方平台配置 具体可参考EasyWechat
    'wechatOpenPlatformConfig' => [],
    // 微信企业微信配置 具体可参考EasyWechat
    'wechatWorkConfig' => [],
    // 微信企业微信开放平台 具体可参考EasyWechat
    'wechatOpenWorkConfig' => [],

    /** ------ 插件类型 ------ **/
    'addonsGroup' => [
        'plug' => [
            'name' => 'plug',
            'title' => '功能扩展',
            'icon' => 'fa fa-feather',
        ],
        'business' => [
            'name' => 'business',
            'title' => '主要业务',
            'icon' => 'fa fa-lemon',
        ],
        'customer' => [
            'name' => 'customer',
            'title' => '客户关系',
            'icon' => 'fa fa-user-friends',
        ],
        'activity' => [
            'name' => 'activity',
            'title' => '营销及活动',
            'icon' => 'fa fa-palette',
        ],
        'services' => [
            'name' => 'services',
            'title' => '常用服务及工具',
            'icon' => 'fa fa-magnet',
        ],
        'biz' => [
            'name' => 'biz',
            'title' => '行业解决方案',
            'icon' => 'fa fa-gem',
        ],
        'h5game' => [
            'name' => 'h5game',
            'title' => 'H5游戏',
            'icon' => 'fa fa-gamepad',
        ],
    ],

    'bsVersion' => '4.x',
    'bsDependencyEnabled' => false,
];