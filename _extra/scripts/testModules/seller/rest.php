<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 11/29/17
 * Time: 4:11 PM
 */
 require __DIR__.'/../_tools/init.php';


$client = new \SmileCoreTest\RestClient();
$client->setDebug(true);
$client->setMagentoParams($params);
$client->connect();

//  create record

$object = [
    'object' => [
        'identifier' => 'cd1',
        'name'       => 'Christian DOSJOUB 1',
        'description'  => 'The Description REST',
    ]
];


$search = [
    'searchCriteria' => [
        'filterGroups' => [
            [
                'filters' => [
                    [
                        'field'          => 'identifier',
                        'condition_type' => 'like',
                        'value'          => '%cd1%'
                    ]
                ]
            ]
        ]
    ],
];

$client->post('rest/V1/seller/', $object);
$client->get('rest/V1/seller/identifier/'.$object['object']['identifier']);
$client->delete('rest/V1/seller/identifier/'.$object['object']['identifier']);


$ps = $client->post('rest/V1/seller/', $object);
$client->get('rest/V1/seller/id/'.$ps['seller_id']);

$client->get('rest/V1/seller/?'.http_build_query($search));
$client->delete('rest/V1/seller/id/'.$ps['seller_id']);

// delete all


