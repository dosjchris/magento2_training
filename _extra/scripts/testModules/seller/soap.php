<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 11/29/17
 * Time: 4:53 PM
 */
require __DIR__.'/../_tools/init.php';

// Initialize the client
$client = new \SmileCoreTest\SoapClient();
$client->setDebug(true);
$client->setMagentoParams($params);
$client->addService('trainingSellerSellerRepositoryV1');

$object = [
    'object' => [
        'identifier' => 'cd1',
        'name'       => 'Christian DOSJOUB 1',
    ]
];

$search = [
    'searchCriteria' => [
        'filterGroups' => [
            [
                'filters' => [
                    [
                        'field'          => 'identifier',
                        'conditionType' => 'like',
                        'value'          => '%cd1%'
                    ]
                ]
            ]
        ]
    ],
];




$client->trainingSellerSellerRepositoryV1Save($object);
$client->trainingSellerSellerRepositoryV1GetByIdentifier(['objectIdentifier' => $object['object']['identifier']]);
$client->trainingSellerSellerRepositoryV1DeleteByIdentifier(['objectIdentifier' => $object['object']['identifier']]);

$sp = $client->trainingSellerSellerRepositoryV1Save($object);
$client->trainingSellerSellerRepositoryV1GetById(['objectId' => $sp->sellerId]);
$client->trainingSellerSellerRepositoryV1GetList($search);
$client->trainingSellerSellerRepositoryV1DeleteById(['objectId' => $sp->sellerId]);
