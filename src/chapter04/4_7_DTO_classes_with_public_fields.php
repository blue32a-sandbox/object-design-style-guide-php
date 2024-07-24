<?php
/**
 * 例４－７　パブリックフィールドを持つDTOクラス
 */

final class CreateSalesInvoice
{
    /**
     * @final
     */
    public string $date;

    /**
     * @var Line[]
     * @final
     */
    public array $lines = [];
}

final class Line
{
    /**
     * @final
     */
    public string $productId;

    /**
     * @final
     */
    public int $qantity;
}
