<?php
return [
    'router' => [
        'routes' => [
            'apigility-logic\\address.rest.doctrine.region' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/region[/:region_id]',
                    'defaults' => [
                        'controller' => 'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'apigility-logic\\address.rest.doctrine.region',
        ],
    ],
    'zf-rest' => [
        'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller' => [
            'listener' => \ApigilityLogic\Address\V1\Rest\Region\RegionResource::class,
            'route_name' => 'apigility-logic\\address.rest.doctrine.region',
            'route_identifier_name' => 'region_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'region',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityLogic\Address\Doctrine\Entity\Region::class,
            'collection_class' => \ApigilityLogic\Address\V1\Rest\Region\RegionCollection::class,
            'service_name' => 'Region',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller' => 'HalJson',
        ],
        'accept-whitelist' => [
            'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller' => [
                0 => 'application/vnd.apigility-logic\\address.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content-type-whitelist' => [
            'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller' => [
                0 => 'application/vnd.apigility-logic\\address.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \ApigilityLogic\Address\Doctrine\Entity\Region::class => [
                'route_identifier_name' => 'region_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-logic\\address.rest.doctrine.region',
                'hydrator' => 'ApigilityLogic\\Address\\V1\\Rest\\Region\\RegionHydrator',
            ],
            \ApigilityLogic\Address\V1\Rest\Region\RegionCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-logic\\address.rest.doctrine.region',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \ApigilityLogic\Address\V1\Rest\Region\RegionResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ApigilityLogic\\Address\\V1\\Rest\\Region\\RegionHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'ApigilityLogic\\Address\\V1\\Rest\\Region\\RegionHydrator' => [
            'entity_class' => \ApigilityLogic\Address\Doctrine\Entity\Region::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller' => [
            'input_filter' => 'ApigilityLogic\\Address\\V1\\Rest\\Region\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ApigilityLogic\\Address\\V1\\Rest\\Region\\Validator' => [
            0 => [
                'name' => 'code',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
                'description' => '地区代码',
                'field_type' => 'string',
            ],
            1 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'type',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'status',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'ApigilityLogic\\Address\\V1\\Rest\\Region\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
