<?php
/**
 * 例１０－５　ライトモデルリポジトリのインターフェースとその実装
 */

namespace Domain\Model\Meetup;

interface MeetupRepository
{
    public function save(Meetup $meetup): void;

    public function nextIdentity(): MeetupId;

    /**
     * @throws MettupNotFound
     */
    public function getById(MeetupId $meetupId): Meetup;
}

namespace Infrastructure\Persistence\DoctrineOrm;

use Doctrine\ORM\EntityManager;
use Domain\Model\Meetup\Meetup;
use Domain\Model\Meetup\MeetupId;
use Ramsey\Uuid\UuidFactoryInterface;

final class DoctrineOrmMeetupRepository
    implements MeetupRepository
{
    private EntityManager $entityManager;
    private UuidFactoryInterface $uuidFactory;

    public function __construct(
        EntityManager $entityManager,
        UuidFactoryInterface $uuidFactory
    ) {
        $this->entityManager = $entityManager;
        $this->uuidFactory = $uuidFactory;
    }

    public function save(Meetup $meetup): void
    {
        return MeetupId::fromString(
            $this->uuidFactory->uuid4()->toString()
        );
    }

    // ...
}
