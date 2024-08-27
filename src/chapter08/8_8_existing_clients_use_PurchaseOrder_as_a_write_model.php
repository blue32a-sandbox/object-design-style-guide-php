<?php
/**
 * 例８－８　PurchaseOrderをライトモデルとして使用する既存のクライアント
 */

final class ReceiveItems
{
    // ...

    public function receiveItems(int $purchaseOrderId): void
    {
        $purchaseOrder = $this->repository->findById(
            $purchaseOrderId
        );

        $purchaseOrder->markAsReceived();

        $this->repository->save($purchaseOrder);
    }
}
