<?php
/**
 * Created by PhpStorm.
 * User: lengai
 * Date: 2018/1/22
 * Time: 下午2:05
 */
function translation_permission_conf($field)
{
    $tran_data = [
        'Global' => '全局',
        'Admin' => '管理员',
        'Reports' => '报告',
        'Assets' => '资产',
        'Accessories' => '附属品',
        'Consumables' => '消耗品',
        'Licenses' => '许可证',
        'Components' => '组件',
        'Users' => '用户',
        'Models' => '模型',
        'Categories' => '种类',
        'Departments' => '部门',
        'Status Labels' => '状态标签',
        'Custom Fields' => '自定义字段',
        'Suppliers' => '供应商',
        'Manufacturers' => '制造商',
        'Depreciations' => '折旧',
        'Locations' => '位置',
        'Self' => '用户登陆设置',
    ];

    $data = $tran_data[$field] ?? $tran_data;
    return $data;

}