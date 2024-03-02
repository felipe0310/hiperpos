<?php

namespace App\Enums;

enum TipoPagoEnum :string
{
    case Efectivo = 'efectivo';

    case Transferencia = 'transferencia';

    case Tarjeta = 'tarjeta';

    case Credito = 'credito';
}
