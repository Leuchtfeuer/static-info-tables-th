<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameTh = '';

    public function getShortNameTh(): string
    {
        return $this->shortNameTh;
    }

    /**
     * @param string $shortNameTh
     */
    public function setShortNameTh(string $shortNameTh)
    {
        $this->shortNameTh = $shortNameTh;
    }
}
