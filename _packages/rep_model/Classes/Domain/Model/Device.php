<?php
namespace REP\Model\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2022 Frédéric Haubold <frederic-haubold@web.de>, Repairfinder
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 * Info
 */
class Device extends AbstractEntity
{

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $manufacturer;

    /**
     * @var string
     */
    protected $name;

    /**
     * Categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\REP\Model\Domain\Model\Damage>
     * @lazy
     */
    protected $damages;

    /**
     * Initialize content element relation
     *
     */
    public function __construct()
    {
        $this->manufacturer = new ObjectStorage();
    }

    /**
     * @return ObjectStorage
     */
    public function getManufacturer(): ObjectStorage
    {
        return $this->manufacturer;
    }

    /**
     * @param ObjectStorage $manufacturer
     */
    public function setManufacturer(ObjectStorage $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Adds a Damage
     *
     * @param \REP\Model\Domain\Model\Damage $damage
     * @return void
     */
    public function addDamage(\REP\Model\Domain\Model\Damage $damage) {
        $this->damages->attach($damage);
    }

    /**
     * Removes a Damage
     *
     * @param \REP\Model\Domain\Model\Damage $damageToRemove The Damage to be removed
     * @return void
     */
    public function removeDamage(\REP\Model\Domain\Model\Damage $damageToRemove) {
        $this->damages->detach($damageToRemove);
    }

    /**
     * @return ObjectStorage
     */
    public function getDamages(): ObjectStorage
    {
        return $this->damages;
    }

    /**
     * @param ObjectStorage $damages
     */
    public function setDamages(ObjectStorage $damages): void
    {
        $this->damages = $damages;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
