<?php
return [
    'adminEmail' => 'admin@example.com',
    'mdm.admin.configs' => [
        'defaultUserStatus' => 10, // 0 = inactive, 10 = active
    ],
    'code_type' => [
        ['id' => 1,  'name' => '身份证'],
        ['id' => 2,  'name' => '房产证'],
        ['id' => 3,  'name' => '车牌号'],
        ['id' => 4,  'name' => '营业执照'],
    ],
    'assure_type' => [
        ['id' => 1,  'name' => '公司担保'],
        ['id' => 2,  'name' => '公务员担保'],
        ['id' => 3,  'name' => '房产抵押'],
        ['id' => 4,  'name' => '车辆抵押'],
    ],
    'loan_status' => [
        ['id' => 0,  'name' => '未结束借款'],
        ['id' => 1,  'name' => '结束借款'],
        ['id' => 2,  'name' => '法院起诉中'],
    ],
];
