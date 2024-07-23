<?php
/**
 * 例４－３　識別子を使用して、以前に作成したエンティティを変更する
 */

$salesInvoiceId = $this->salesInvoiceRepository->nextIdentity();
$salesInvoice = SalesInvoice::create($salesInvoiceId);
$this->salesInvoiceRepository->save($salesInvoice);

$salesInvoice = $this->salesInvoiceRepository->getBy($salesInvoiceId);
$salesInvoice->addLine(/* ... */);
$this->salesInvoiceRepository->save($salesInvoice);
