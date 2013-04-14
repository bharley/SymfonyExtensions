<?php

namespace Blake\SymfonyExtensions\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

/**
 * An extension to Symfony 2's base controller class that provides some
 * extra functionality.
 *
 * @author Blake Harley <blake@blakeharley.com>
 */
class Controller extends BaseController
{
	/**
	 * Provides quick access to Doctrine's getRepository() method.
	 *
	 * @param  string                         $entityClass The entity class to fetch the repository of
	 * @return \Doctrine\ORM\EntityRepository              The entity repository attached to the requested entity class
	 */
	public function getRepository($entityClass)
	{
		return $this->getDoctrine()->getRepository($entityClass);
	}
}