<?php
/**
 * 例４－２６　SalesOrderがすでにキャンセルされていた場合は、そのリクエストを無視する
 */

final class SalesOrder
{
    // ...

    public function cancel(): void
    {
        if ($this->status->equals(Status::cancelled())) {
            return;
        }
    }

    // ...
}
