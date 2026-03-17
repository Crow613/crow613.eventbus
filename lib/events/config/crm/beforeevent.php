<?php
 $arEvents = [
        "entity" => [
            "add" => "OnBeforeCrmEntityAdd",
            "update" => "OnBeforeCrmEntityUpdate",
            "delete" => "OnBeforeCrmEntityDelete"
        ],
        "lead" => [
            "add" => "OnBeforeCrmLeadAdd",
            "update" => "OnBeforeCrmLeadUpdate",
            "delete" => "OnBeforeCrmLeadDelete"

        ],
        "deal" => [
            "add" => "OnBeforeCrmDealAdd",
            "update" => "OnBeforeCrmDealUpdate",
            "delete" => "OnBeforeCrmDealDelete"
        ],
        "contact" => [
            "add" => "OnBeforeCrmContactAdd",
            "update" => "OnBeforeCrmContactUpdate",
            "delete" => "OnBeforeCrmContactDelete"
        ],
        "company" => [
            "add" => "OnBeforeCrmCompanyAdd",
            "update" => "OnAfterCrmCompanyUpdate",
            "delete" => "OnBeforeCrmCompanyDelete"
        ],
        "activity" => [
            "add" => "OnBeforeCrmActivityAdd",
            "update" => "OnBeforeCrmActivityUpdate",
            "delete" => "OnBeforeCrmActivityDelete"
        ]

    ];



