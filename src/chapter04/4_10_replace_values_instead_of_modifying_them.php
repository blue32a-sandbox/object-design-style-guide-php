<?php
/**
 * 例４－１０　値を変更するのではなく置き換える
 */

final class Journal
{
    private Year $currentYear;

    public function closeTheFinancialYear(): void
    {
        // ...

        $this->currentYear = $this->currentYear->next();
    }
}
