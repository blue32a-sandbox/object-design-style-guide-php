<?php
/**
 * 例８－１３　ReceiveItemsは記録されたあらゆるドメインイベントを発行する
 */

final class ReceiveItems
{
    // ...

    public function receivedItems(int $purchaseOrderId): void
    {
        // ...

        $this->repository->save($purchaseOrder);

        $this->eventDispathcer->dispatchAll(
            $purchaseOrder->recordedEvents()
        );
    }
}
