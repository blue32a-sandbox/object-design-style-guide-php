<?php
/**
 * 例８－９　在庫レポートの作成は依然としてライトモデルに依存している
 */

final class StockReportController
{
    //...

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
