<?php
/**
 * 例８－６　簡単な解決策：PurchaseOrderがレポートを生成する
 */

final class PurchaseOrder
{
    private int $purchaseOrderId;
    private int $productId;
    private int $orderedQuantity;
    private bool $wasReceived;

    // ...

    public function forStockReport(): PurchaseOrderForStockReport
    {
        return new PurchaseOrderForStockReport(
            $this->productId,
            $this->orderedQuantity,
            $this->wasReceived
        );
    }
}

final class StockReportController
{
    private PurchaseOrderRepository $repository;

    public function __construct(PurchaseOrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(Request $request): Response
    {
        $allPurchaseOrders = $this->repository->findAll();

        $stockReport = array_map(
            function (PurchaseOrder $purchaseOrder) {
                return $purchaseOrder->forStockReport();
            },
            $allPurchaseOrders
        );

        // ...
    }
}
