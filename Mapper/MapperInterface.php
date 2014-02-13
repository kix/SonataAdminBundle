<?php 

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Sonata\AdminBundle\Mapper;

use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Builder\BuilderInterface;

interface MapperInterface {

	/**
     * @param \Sonata\AdminBundle\Builder\BuilderInterface $builder
     * @param \Sonata\AdminBundle\Admin\AdminInterface     $admin
     */
	public function __construct(BuilderInterface $builder, AdminInterface $admin);
	
	public function add()

}