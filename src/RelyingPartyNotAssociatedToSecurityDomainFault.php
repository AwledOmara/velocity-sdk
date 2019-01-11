<?php
namespace Velocity;

class RelyingPartyNotAssociatedToSecurityDomainFault extends Error
{
	public function __construct() { 
		parent::__construct('Relying Party Not Associated To Security Domain', 'RelyingPartyNotAssociatedToSecurityDomainFault');
	}
}

