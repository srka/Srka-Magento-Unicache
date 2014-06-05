<?php
class Srka_Unicache_Model_Observer
{
	
	public function deleteExpired(){
		Mage::helper('unicache')->deleteExpired();
	}
	
}