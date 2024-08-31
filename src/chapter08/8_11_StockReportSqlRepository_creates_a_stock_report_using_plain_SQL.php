<?php
/**
 * 例８－１１　StockReportSqlRepositoryはプレーンなSQLを使用して在庫レポートを作成する
 */

final class StockReportSqlRepository implements StockReportRepository
{
    public function getStockReport(): StockReport
    {
        $result = $this->connection->execute(
            'SELECT ' .
            ' product_id, ' .
            ' SUM(ordered_quantity) as quantity_in_stock ' .
            'FROM purchase_orders ' .
            'WHERE was_received = 1 ' .
            'GROUP BY product_id'
        );

        $data = $result->fetchAll();

        return new StockReport($data);
    }
}
