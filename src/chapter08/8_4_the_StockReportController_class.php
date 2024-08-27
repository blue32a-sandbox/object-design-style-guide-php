<?php
/**
 * 例８－４　StockReportControllerクラス
 */

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

        $stockReport = [];

        foreach ($allPurchaseOrders as $purchaseOrder) {
            if (!$purchaseOrder->wasReceived()) {
                continue;
            }

            if (!isset($stockReport[$purchaseOrder->productId()])) {
                $stockReport[$purchaseOrder->productId()] = 0;
            }

            $stockReport[$purchaseOrder->productId()]
                += $purchaseOrder->orderedQuantity();
        }

        return new JsonResponse($stockReport);
    }
}
