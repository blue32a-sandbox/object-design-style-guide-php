<?php
/**
 * 例１０－８　ドメインイベントに応答するイベントリスナ
 */

final class NotifyGroupMembers
{
    public function whenMeetupRescheduled(
        MeetupRescheduled $event
    ): void {
        /**
         * イベントオブジェクトの情報を使ってグループメンバーにメールを送信する
         */
    }
}
