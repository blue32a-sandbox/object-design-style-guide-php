<?php
/**
 * 例４－２　SalesInvoiceは作成時に識別子を受け取る
 */

final class SalesInvoice
{
    private SalesInvoiceId $salesInvoiceId;

    public static function create(
        SalesInvoiceId $salesInvoiceId
    ): SalesInvoice {
        $object = new SalesInvoice();

        $object->salesInvoiceId = $salesInvoiceId;

        return $object;
    }
}
