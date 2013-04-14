<?php

namespace Blake\SymfonyExtensions\Entity;

use BadMethodCallException;

/**
 * Provides magic getters and setters for all properties.
 *
 * @author Blake Harley <blake@blakeharley.com>
 */
abstract class Entity
{
	/**
	 * This magic functionality will provide default getters and setters
	 * for all of the properties in any class that extends this. These
	 * getters and setters will follow the pattern "set{property}" where
	 * "property" is any property of this class with the first letter
	 * capitalized. E.g., "getId" will return the value of Entity::$id.
	 *
	 * To override this functionality, you can simply create a getter and
	 * setter of your own. Alternatively, any properties beginning with an
	 * underscore will be ignored.
	 *
	 * @param  string $method    The name of the method being called
	 * @param  array  $arguments The arguments given to the method
	 * @return mixed             The value of the request property or nothing
	 */
	public function __call($method, $arguments)
	{
		preg_match('@^(get|set)(.*)$@', $method, $matches);
		$action = $matches[1];
		$property = lcfirst($matches[2]);
		$skip = $property[0] == '_';

		if (strlen($property) > 0 && $property[0] != '_')
		{
			if (property_exists($this, $property))
			{
				if ($action == 'get')
				{
					return $this->{$property};
				}
				else
				{
					$this->{$property} = $arguments[0];
				}
			}
		}

		throw new BadMethodCallException(get_class($this) ." does not have method '$method'");
	}
}