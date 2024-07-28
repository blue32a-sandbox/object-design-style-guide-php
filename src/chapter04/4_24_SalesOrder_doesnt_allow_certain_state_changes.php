<?php
/**
 * 例４－２４　SalesOrderは特定の状態遷移を許可しない
 */

final class SalesOrder
{
    // ...

    public function markAsDelivered(Timestamp $deliveredAt): void
    {
        /**
         * キャンセルされた注文を配送できない
         */
    }

    public function cancel(Timestamp $cancelledAt): void
    {
        /**
         * 配送済みの注文をキャンセルできない
         */
    }

    // など
}
