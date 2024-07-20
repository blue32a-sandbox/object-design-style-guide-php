<?php
/**
 * 例２－１５　Cacheのスタティックメソッドを使用する代わりに、Cacheインスタンスを注入する
 */

// 変更前：
final class DashboardController
{
    public function execute(): Response
    {
        $recentPosts = [];

        if (Cache::has('recent_posts')) {
            $recentPosts = Cache::get('recent_posts');
        }

        // ...
    }
}

// 変更後：
final class DashboardController
{
    private Cache $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function execute(): Response
    {
        $recentPosts = [];

        if ($this->cache->has('recent_posts')) {
            $recentPosts = $this->cache->get('recent_posts');
        }

        // ...
    }
}
