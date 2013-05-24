<?php
namespace Entities;

/**
 * @Entity
 * @Table(name="site")
 */
class Site
{
	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @OneToMany(targetEntity="Entities\Domain", mappedBy="site", cascade={"persist","remove"})
	 */
	private $domains;

	/**
	 * @OneToOne(targetEntity="Entities\Domain")
	 * @JoinColumn(name="primary_domain_id", referencedColumnName="id")
	 */
	private $primaryDomain;

	public function addDomain(Domain $domain)
	{
		$this->domains[] = $domain;
	}
}
