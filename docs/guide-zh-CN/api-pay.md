## 支付生成参数

目录

- 生成支付配置

### 生成支付配置

请求地址(Post)

```
/v1/pay/create?access-token=[access-token]
```

参数

参数名 | 参数类型 | 必填 | 默认 | 说明 | 备注                                    
---|---|---|---|---|---------------------------------------
pay_type | int | 是 | 无 | 支付类型 | 100:微信;101:支付宝;102:银联;103:字节跳动;1:余额支付 |
trade_type | string | 是 | 无 | 交易类型 | 具体查看下文具体参数说明                          |
order_group | string | 是 | 无 | 订单类型 | recharge:充值;order:订单                  | 
data | string | 是 | 无 | json格式数组具体看下文 |

tradeType

> 根据对应的支付类型，选择支持的交易类型即可，例如：app

```
支付宝：'web', 'wap', 'app', 'mini', 'sacn'， 'pos'
微信： 'mp'(公众号), 'mini'(小程序), 'sacn', 'app', 'wap'(手机H5)
银联：'web', 'wap', 'sacn'， 'pos'
字节跳动：'byte-dance'
余额：'default'
```

支付宝返回

```
// 不同支付(app/js等)返回的数据不同，以下是app支付返回
{
    "code": 200,
    "message": "OK",
    "data": {
        "config": ""
    }
}
```

微信返回

```
// 不同支付(app/js等)返回的数据不同，以下是app支付返回
{
    "code": 200,
    "message": "OK",
    "data": {
        "appid": "",
        "partnerid": "",
        "prepayid": "",
        "package": "Sign=WXPay",
        "noncestr": "98f97315adbd8992166d57c8b6ce0775",
        "timestamp": ,
        "sign": ""
    }
}
```
