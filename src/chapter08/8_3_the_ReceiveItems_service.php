<?php
/**
 * 例８－３　ReceiveItemsサービス
 */

final class ReceiveItems
{
    private PurchaseOrderRepository $repository;

    public function __construct(PurchaseOrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function receiveItems(int $purchaseOrderId): void
    {
        $purchaseOrder = $this->repository->findById($purchaseOrderId);

        $purchaseOrder->markAsReceived();

        $this->repository->save($purchaseOrder);
    }
}
