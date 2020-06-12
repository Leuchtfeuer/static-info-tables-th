<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (TH)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

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
