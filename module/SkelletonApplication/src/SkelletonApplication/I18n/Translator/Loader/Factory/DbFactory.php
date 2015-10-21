<?php

/*
 * Copyright (C) 2015 schurix
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace SkelletonApplication\I18n\Translator\Loader\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use SkelletonApplication\I18n\Translator\Loader\Db as DbLoader;
use Doctrine\ORM\EntityManager;

/**
 * Factory for Db Translation loader
 *
 * @author schurix
 */
class DbFactory implements FactoryInterface{
	
	public function createService(ServiceLocatorInterface $serviceLocator) {
		$loader = new DbLoader();
		$em = $serviceLocator->getServiceLocator()->get(EntityManager::class);
		$loader->setObjectManager($em);
		return $loader;
	}
	
}