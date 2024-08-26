<?php
/**
 * 例８－１　PurchaseOrderRepositoryはPurchaseOrderを保存および取得できる
 */

interface PurchaseOrderRepository
{
    /**
     * @throws CouldNotSavePurchaseOrder
     */
    public function save(PurchaseOrder $purchaseOrder): void;

    /**
     * @throws CouldNotFindPurchaseOrder
     */
    public function getById(int $purchaseOrderId): PurchaseOrder;
}
