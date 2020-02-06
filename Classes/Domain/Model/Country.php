<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (TH)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameTh = '';

    /**
     * @return string
     */
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
