<?php
/**
 * 例８－７　ゲッタを削除したPurchaseOrder
 */

final class PurchaseOrder
{
    private int $purchaseOrderId;
    private int $productId;
    private int $orderedQuantity;
    private bool $wasReceived;

    private function __construct()
    {
    }

    public static function place(
        int $purchaseOrderId,
        int $productId,
        int $orderedQuantity
    ): PurchaseOrder {
        $purchaseOrder = new PurchaseOrder();

        $purchaseOrder->purchaseOrderId = $purchaseOrderId;
        $purchaseOrder->productId = $productId;
        $purchaseOrder->orderedQuantity = $orderedQuantity;
        $purchaseOrder->wasReceived = false;

        return $purchaseOrder;
    }

    public function markAsReceived(): void
    {
        $this->wasReceived = true;
    }
}
