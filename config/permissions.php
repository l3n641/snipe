<?php

return array(

    '全局' => array(
        array(
            'permission' => 'superuser',
            'label'      => '超级管理员',
            'note'       => '确定用户是否完全访问系统的所有方面。此设置覆盖整个系统中的任何特定权限。 ',
            'display'    => true,
        ),
    ),

    '管理员' => array(
        array(
            'permission' => '管理员',
            'label'      => '',
            'note'       => '确定用户是否可以访问管理员的大部分方面。 ',
            'display'    => true,
        )
    ),

    '报告' => array(
        array(
            'permission' => '报告.查看',
            'label'      => '查看',
            'note'       => '决定用户是否有权限查看.',
            'display'    => true,
        ),
    ),

    '资产' => array(
        array(
            'permission' => '资产.查看',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '资产.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '资产.编辑',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '资产.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '资产.借出',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => false,
        ),

        array(
            'permission' => '资产.归还',
            'label'      => '归还 ',
            'note'       => '',
            'display'    => true,
        ),

        array(
            'permission' => '资产.借出',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),

        array(
            'permission' => '资产.授权',
            'label'      => '授权 ',
            'note'       => '允许用户标记的资产为身体财产.',
            'display'    => true,
        ),


        array(
            'permission' => '资产.查看.请求',
            'label'      => '查看请求的资产',
            'note'       => '',
            'display'    => true,
        ),

    ),

    '附属品' => array(
        array(
            'permission' => '附属品.查看',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '附属品.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '附属品.编辑',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '附属品.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '附属品.借出',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '附属品.归还',
            'label'      => '归还 ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    '消耗品' => array(
        array(
            'permission' => '消耗品.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '消耗品.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '消耗品.编辑',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '消耗品.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '消耗品.借出',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),
    ),


    '许可证' => array(
        array(
            'permission' => '许可证.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '许可证.创建',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '许可证.编辑',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '许可证.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '许可证.借出',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '许可证.秘钥',
            'label'      => '查看许可证秘钥',
            'note'       => '',
            'display'    => true,
        ),
    ),


    '组件' => array(
        array(
            'permission' => 'components.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '组件.创建',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '组件.编辑',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '组件.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '组件.借出',
            'label'      => '借出',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '组件.归还',
            'label'      => '归还 ',
            'note'       => '',
            'display'    => true,
        ),

    ),

    '用户' => array(
        array(
            'permission' => '用户.查看',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '用户.创建',
            'label'      => '创建用户',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '用户.编辑',
            'label'      => '编辑用户',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '用户.删除',
            'label'      => '删除用户',
            'note'       => '',
            'display'    => true,
        ),

    ),


    '模型' => array(
        array(
            'permission' => '模型.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '模型.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '模型.编辑',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '模型.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),

    ),

    '种类' => array(
        array(
            'permission' => '种类.查看',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '种类.创建',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '种类.编辑',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '种类.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    '部门' => array(
        array(
            'permission' => '部门.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '部门.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '部门.编辑',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '部门.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    '状态标签' => array(
        array(
            'permission' => '状态标签.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '状态标签.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '状态标签.编辑',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '状态标签.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    '自定义字段' => array(
        array(
            'permission' => '自定义字段.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '自定义字段.创建',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '自定义字段.编辑',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '自定义字段.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),



    '供应商' => array(
        array(
            'permission' => '供应商.查看',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '供应商.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '供应商.编辑',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '供应商.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
    ),


    '制造商' => array(
        array(
            'permission' => '制造商.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '制造商.创建',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '制造商.编辑',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '制造商.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    '折旧' => array(
        array(
            'permission' => '折旧.查看',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '折旧.创建',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '折旧.编辑',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '折旧.删除',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    '位置' => array(
        array(
            'permission' => '位置.查看',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '位置.创建',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '位置.编辑',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => '位置.删除',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
    ),




    '自身' => array(
        array(
            'permission' => '自身.双因素',
            'label'      => '双因素认证',
            'note'       => '如果两因素是启用和设置选择，用户可以禁用/启用双因素认证自己。',
            'display'    => true,
        ),

        array(
            'permission' => '自身.api',
            'label'      => '创建API',
            'note'       => '用户创建个人API来利用REST API.',
            'display'    => true,
        ),

    ),





);
