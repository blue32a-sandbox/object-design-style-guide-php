<?php
/**
 * 例３－２８　現実には、販売注文は「作成される」ものではなく「出される」もの
 */

final class SalesOrder
{
    public static function place(/* ... */): SalesOrder
    {
        // ...
    }
}

$salesOrder = SalesOrder::place(/* ... */);
