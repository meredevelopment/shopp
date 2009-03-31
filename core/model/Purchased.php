<?php
/**
 * Purchased class
 * Purchased line items for orders
 *
 * @author Jonathan Davis
 * @version 1.0
 * @copyright Ingenesis Limited, 28 March, 2008
 * @package shopp
 **/

class Purchased extends DatabaseObject {
	static $table = "purchased";

	function Purchased ($id=false,$key=false) {
		$this->init(self::$table);
		if ($this->load($id,$key)) return true;
		else return false;
	}
	
	function keygen() {
		$message = $this->name.$this->purchase.$this->product.$this->price.$this->download;
		$key = sha1($message);
		if (empty($key)) $key = md5($message);
		$this->dkey = $key;
		do_action_ref_array('shopp_download_keygen',array(&$this));
	}
	
	function exportcolumns () {
		return array(
			'name' => __('Product Name','Shopp'),
			'optionlabel' => __('Product Variation Name','Shopp'),
			'description' => __('Product Description','Shopp'),
			'sku' => __('Product SKU','Shopp'),
			'quantity' => __('Product Quantity Purchased','Shopp'),
			'unitprice' => __('Product Unit Price','Shopp'),
			'total' => __('Product Total Price','Shopp'),
			'data' => __('Product Data','Shopp'),
			'downloads' => __('Product Downloads','Shopp')
			);
	}

} // end Purchased class

?>