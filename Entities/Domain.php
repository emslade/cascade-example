<?php
namespace Entities;

/**
 * @Entity
 * @Table(name="domain")
 */
class Domain
{
	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @Column(type="string")
	 */
	private $domain;

	/**
	 * @ManyToOne(targetEntity="Entities\Site")
	 */
	private $site;

	public function setDomain($domain)
	{
		$this->domain = $domain;
	}

	public function setSite($site)
	{
		$this->site = $site;
	}
}
