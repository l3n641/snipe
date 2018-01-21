<?php

return array(

    'Global' => array(
        array(
            'permission' => 'superuser',
            'label'      => '超级管理员',
            'note'       => '确定用户是否完全访问系统的所有方面。此设置覆盖整个系统中的任何特定权限。 ',
            'display'    => true,
        ),
    ),

    'Admin' => array(
        array(
            'permission' => 'admin',
            'label'      => '',
            'note'       => '确定用户是否可以访问管理员的大部分方面。 ',
            'display'    => true,
        )
    ),

    'Reports' => array(
        array(
            'permission' => 'reports.view',
            'label'      => '查看',
            'note'       => '决定用户是否有权限查看.',
            'display'    => true,
        ),
    ),

    'Assets' => array(
        array(
            'permission' => 'assets.view',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.edit',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.delete',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.checkout',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => false,
        ),

        array(
            'permission' => 'assets.checkin',
            'label'      => '归还 ',
            'note'       => '',
            'display'    => true,
        ),

        array(
            'permission' => 'assets.checkout',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),

        array(
            'permission' => 'assets.audit',
            'label'      => '授权 ',
            'note'       => '允许用户标记的资产为身体财产.',
            'display'    => true,
        ),


        array(
            'permission' => 'assets.view.requestable',
            'label'      => '查看请求的资产',
            'note'       => '',
            'display'    => true,
        ),

    ),

    'Accessories' => array(
        array(
            'permission' => 'accessories.view',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'accessories.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'accessories.edit',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'accessories.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'accessories.checkout',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'accessories.checkin',
            'label'      => '归还 ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Consumables' => array(
        array(
            'permission' => 'consumables.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'consumables.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'consumables.edit',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'consumables.delete',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'consumables.checkout',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),
    ),


    'Licenses' => array(
        array(
            'permission' => 'licenses.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'licenses.create',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'licenses.edit',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'licenses.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'licenses.checkout',
            'label'      => '借出 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'licenses.keys',
            'label'      => '查看许可证秘钥',
            'note'       => '',
            'display'    => true,
        ),
    ),


    'Components' => array(
        array(
            'permission' => 'components.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'components.create',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'components.edit',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'components.delete',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'components.checkout',
            'label'      => '借出',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'components.checkin',
            'label'      => '归还 ',
            'note'       => '',
            'display'    => true,
        ),

    ),

    'Users' => array(
        array(
            'permission' => 'users.view',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'users.create',
            'label'      => '创建用户',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'users.edit',
            'label'      => '编辑用户',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'users.delete',
            'label'      => '删除用户',
            'note'       => '',
            'display'    => true,
        ),

    ),


    'Models' => array(
        array(
            'permission' => 'models.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'models.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'models.edit',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'models.delete',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),

    ),

    'Categories' => array(
        array(
            'permission' => 'categories.view',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'categories.create',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'categories.edit',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'categories.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Departments' => array(
        array(
            'permission' => 'departments.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'departments.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'departments.edit',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'departments.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Status Labels' => array(
        array(
            'permission' => 'statuslabels.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'statuslabels.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'statuslabels.edit',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'statuslabels.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Custom Fields' => array(
        array(
            'permission' => 'customfields.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'customfields.create',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'customfields.edit',
            'label'      => '编辑',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'customfields.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),



    'Suppliers' => array(
        array(
            'permission' => 'suppliers.view',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'suppliers.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'suppliers.edit',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'suppliers.delete',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
    ),


    'Manufacturers' => array(
        array(
            'permission' => 'manufacturers.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'manufacturers.create',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'manufacturers.edit',
            'label'      => '编辑  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'manufacturers.delete',
            'label'      => '删除 ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Depreciations' => array(
        array(
            'permission' => 'depreciations.view',
            'label'      => '查看 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'depreciations.create',
            'label'      => '创建',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'depreciations.edit',
            'label'      => '编辑 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'depreciations.delete',
            'label'      => '删除',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Locations' => array(
        array(
            'permission' => 'locations.view',
            'label'      => '查看',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'locations.create',
            'label'      => '创建 ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'locations.edit',
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




    'Self' => array(
        array(
            'permission' => 'self.two_factor',
            'label'      => '双因素认证',
            'note'       => '如果两因素是启用和设置选择，用户可以禁用/启用双因素认证自己。',
            'display'    => true,
        ),

        array(
            'permission' => 'self.api',
            'label'      => '创建API',
            'note'       => '用户创建个人API来利用REST API.',
            'display'    => true,
        ),

    ),





);
