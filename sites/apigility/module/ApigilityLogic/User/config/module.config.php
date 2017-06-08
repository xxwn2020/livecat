<?php
return [
    'router' => [
        'routes' => [
            'apigility-logic\\user.rest.doctrine.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/apigility-logic/user/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'ApigilityLogic\\User\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'apigility-logic\\user.rest.doctrine.user',
        ],
    ],
    'zf-rest' => [
        'ApigilityLogic\\User\\V1\\Rest\\User\\Controller' => [
            'listener' => \ApigilityLogic\User\V1\Rest\User\UserResource::class,
            'route_name' => 'apigility-logic\\user.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user',
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
            'entity_class' => \ApigilityLogic\User\Doctrine\Entity\User::class,
            'collection_class' => \ApigilityLogic\User\V1\Rest\User\UserCollection::class,
            'service_name' => 'User',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ApigilityLogic\\User\\V1\\Rest\\User\\Controller' => 'HalJson',
        ],
        'accept-whitelist' => [
            'ApigilityLogic\\User\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.apigility-logic\\user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content-type-whitelist' => [
            'ApigilityLogic\\User\\V1\\Rest\\User\\Controller' => [
                0 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \ApigilityLogic\User\Doctrine\Entity\User::class => [
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-logic\\user.rest.doctrine.user',
                'hydrator' => 'ApigilityLogic\\User\\V1\\Rest\\User\\UserHydrator',
            ],
            \ApigilityLogic\User\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-logic\\user.rest.doctrine.user',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \ApigilityLogic\User\V1\Rest\User\UserResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ApigilityLogic\\User\\V1\\Rest\\User\\UserHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'ApigilityLogic\\User\\V1\\Rest\\User\\UserHydrator' => [
            'entity_class' => \ApigilityLogic\User\Doctrine\Entity\User::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'ApigilityLogic\\User\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'ApigilityLogic\\User\\V1\\Rest\\User\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ApigilityLogic\\User\\V1\\Rest\\User\\Validator' => [
            0 => [
                'name' => 'nickname',
                'required' => false,
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
            1 => [
                'name' => 'avatar',
                'required' => false,
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
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'sex',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'age',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'name' => 'birthday',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'stature',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'weight',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            7 => [
                'name' => 'education',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            8 => [
                'name' => 'emotion',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            9 => [
                'name' => 'zodiac',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            10 => [
                'name' => 'chinese_zodiac',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];
