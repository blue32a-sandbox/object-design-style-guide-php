<?php
/**
 * 例４－９　Yearクラス
 */

final class Year
{
    private int $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    public function next(): Year
    {
        return new Year($this->year + 1);
    }
}

use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    /**
     * @test
     */
    public function nextメソッドはYearを変更しない(): void
    {
        $year = new Year(2019);

        $year->next();

        $this->assertEquals(new Year(2019), $year);
    }

    /**
     * @test
     */
    public function nextメソッドの戻り値は新しいYearオブジェクト(): void
    {
        $year = new Year(2019);

        $nextYear = $year->next();

        $this->assertEquals(new Year(2020), $nextYear);
    }
}
