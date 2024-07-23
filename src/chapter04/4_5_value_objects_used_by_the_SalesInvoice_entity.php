<?php
/**
 * 例４－５　SalesInvoiceエンティティで使用されるバリューオブジェクト
 */

final class SalesInvoiceId
{
    // ...
}

final class Date
{
    // ...
}

final class Quantity
{
    // ...
}

final class ProductId
{
    // ...
}

final class SalesInvoice
{
    public static function create(
        SalesInvoiceId $salesInvoiceId,
        Date $date
    ): SalesInvoice {
        // ...
    }

    public function addLine(
        ProductId $productId,
        Quantity $quantity
    ): void {
        $this->lines[] = Line::create(
            $productId,
            $quantity
        );
    }
}
