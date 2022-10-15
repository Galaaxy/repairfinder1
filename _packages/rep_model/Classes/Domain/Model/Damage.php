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
class Damage extends AbstractEntity
{

    /**
     * @var string
     */
    protected $name;

    /**
     * devices
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\REP\Model\Domain\Model\Device>
     * @lazy
     */
    protected $devices;

    /**
     * Initialize content element relation
     *
     */
    public function __construct()
    {
        $this->manufacturer = new ObjectStorage();
    }

    /**
     * Adds a Device
     *
     * @param \REP\Model\Domain\Model\Device $device
     * @return void
     */
    public function addDevice(\REP\Model\Domain\Model\Device $device) {
        $this->devices->attach($device);
    }

    /**
     * Removes a Device
     *
     * @param \REP\Model\Domain\Model\Device $deviceToRemove The Device to be removed
     * @return void
     */
    public function removeDevice(\REP\Model\Domain\Model\Device $deviceToRemove) {
        $this->devices->detach($deviceToRemove);
    }

    /**
     * @return ObjectStorage
     */
    public function getDevices(): ObjectStorage
    {
        return $this->devices;
    }

    /**
     * @param ObjectStorage $devices
     */
    public function setDevices(ObjectStorage $devices): void
    {
        $this->devices = $devices;
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
