<?php
/**
 * 例８－１４　イベントを使用してstock_reportテーブルを更新する
 */

final class UpdateStockReport
{

    public function whenPurchaseOrderReceived(
        PurchaseOrderReceived $event
    ): void {
        $this->connection->transactional(function() use($event) {
            try {
                $this->connection
                    ->prepare(
                        'SELECT quantity_in_stock ' .
                        'FROM stock_report ' .
                        'WHERE product_id = :productId FOR UPDATE'
                    )
                    ->bindValue(':productId', $event->productId())
                    ->execute()
                    ->fetch();

                $this->connection
                    ->prepare(
                        'UPDATE stock_report ' .
                        'SET quantity_in_stock = ' .
                        '  quantity_in_stock + :receivedQuantity ' .
                        'WHERE product_id = :productId'
                    )
                    ->bindValue(
                        'productId',
                        $event->productId()
                    )
                    ->bindValue(
                        'receivedQuantity',
                        $event->receivedQuantity()
                    )
                    ->execute();
            } catch (NoResult $exception) {
                $this->connection
                    ->prepare(
                        'INSERT INTO stock_report ' .
                        ' (product_id, quantity_in_stock) ' .
                        'VALUES (:productId, :quantityInStock)'
                    )
                    ->bindValue(
                        'productId',
                        $event->productId()
                    )
                    ->bindValue(
                        'quantityInStock',
                        $event->receivedQuantity()
                    )
                    ->execute();
            }
        });
    }
}
