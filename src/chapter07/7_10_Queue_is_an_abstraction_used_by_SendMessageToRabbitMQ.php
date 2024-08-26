<?php
/**
 * 例７－１０　QueueはSendMessageToRabbitMQで使用される抽象
 */

interface Queue
{
    public function publishUserPasswordChangedEvent(
        UserPasswordChanged $event
    ): void;
}

final class RabbitMQQueue implements Queue
{
    // ...

    public function publishUserPasswordChangedEvent(
        UserPasswordChanged $event
    ): void {
        $this->rabbitMqConnection->publish(
            'user_events',
            'user_password_changed',
            json_encode([
                'user_id' => (string) $event->userId()
            ])
        );
    }
}

final class SendMessageToRabbitMQ
{
    private Queue $queue;

    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }

    public function whenUserChangedPassword(
        UserPasswordChanged $event
    ): void {
        $this->queue->publishUserPasswordChangedEvent($event);
    }
}
