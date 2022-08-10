<?php

return [
    "bundle" => [
        "Pimcore\\Bundle\\EcommerceFrameworkBundle\\PimcoreEcommerceFrameworkBundle" => [
            "enabled" => TRUE,
            "priority" => 1,
            "environments" => [

            ]
        ],
        "CustomerManagementFrameworkBundle\\PimcoreCustomerManagementFrameworkBundle" => TRUE,
        "Pimcore\\Bundle\\NumberSequenceGeneratorBundle\\NumberSequenceGeneratorBundle" => TRUE,
        "Pimcore\\Bundle\\ObjectMergerBundle\\ObjectMergerBundle" => TRUE
    ]
];
