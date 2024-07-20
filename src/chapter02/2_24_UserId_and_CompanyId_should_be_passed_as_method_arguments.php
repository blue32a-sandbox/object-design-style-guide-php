<?php
/**
 * 例２－２４　UserIdとCompanyIdはメソッド引数として渡すべき
 */

final class ContactRepository
{
    public function getAllContacts(
        UserId $userId,
        CompanyId $companyId
    ): array {
        return $this->select()
            ->where([
                'userId' => $userId,
                'companyId' => $companyId,
            ])
            ->getResult();
    }
}
