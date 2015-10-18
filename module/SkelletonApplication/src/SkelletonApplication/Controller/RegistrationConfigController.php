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

namespace SkelletonApplication\Controller;

use XelaxSiteConfig\Controller\SiteConfigController;

use SkelletonApplication\Options\SiteRegistrationOptions;
use SkelletonApplication\Options\Service\SiteRegistrationOptionsFactory;
use SkelletonApplication\Form\SiteRegistrationOptionsForm;

/**
 * Controller for registration configuration
 *
 * @author schurix
 */
class RegistrationConfigController extends SiteConfigController{
	public function getConfig() {
		$registration = $this->getServiceLocator()->get(SiteRegistrationOptions::class);
	}

	public function getConfigPrefix() {
		return SiteRegistrationOptionsFactory::CONFIG_PREFIX;
	}

	public function getEditTitle() {
		return 'Registration configuration';
	}

	public function getForm() {
		return $this->getServiceLocator()->get('FormElementManager')->get(SiteRegistrationOptionsForm::class);
	}

	public function getIndexTitle() {
		return $this->getEditTitle();
	}
}
