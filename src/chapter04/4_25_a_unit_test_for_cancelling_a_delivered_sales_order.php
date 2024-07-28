<?php
/**
 * 例４－２５　配送済みの注文をキャンセルするユニットテスト
 */

use PHPUnit\Framework\TestCase;

class SalesOrderTest extends TestCase
{
    /**
     * @test
     */
    public function deliveredSalesOrderCanNotBeCancelled(): void
    {
        $deliveredSalesOrder = /* ... */;
        $deliveredSalesOrder->markAsDelivered(/* ... */);

        $this->expectException(
            LogicException::class,
            'delivered'
        );

        $deliveredSalesOrder->cancel();
    }
}
