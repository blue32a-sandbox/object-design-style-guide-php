<?php
/**
 * 例８－５　PurchaseOrderForStockReportクラス
 */

final class PurchaseOrderForStockReport
{
    private int $productId;
    private int $orderedQuantity;
    private bool $wasReceived;

    public function __construct(
        int $productId,
        int $orderedQuantity,
        bool $wasReceived
    ) {
        $this->productId = $productId;
        $this->orderedQuantity = $orderedQuantity;
        $this->wasReceived = $wasReceived;
    }

    public function productId(): ProductId
    {
        return $this->productId;
    }

    public function orderedQuantity(): int
    {
        return $this->orderedQuantity;
    }

    public function wasReceived(): bool
    {
        return $this->wasReceived;
    }
}
