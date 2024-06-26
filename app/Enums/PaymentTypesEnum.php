<?php

namespace App\Enums;

enum PaymentTypesEnum: string
{
    case PIX = "pix";
    case BOLETO = "boleto";
    case CREDIT_CARD = "credit_card";
}