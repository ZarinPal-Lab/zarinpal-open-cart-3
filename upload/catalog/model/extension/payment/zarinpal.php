<?php 
class ModelExtensionPaymentZarinpal extends Model {
  	public function getMethod($address) {
		$this->load->language('extension/payment/zarinpal');

		if ($this->config->get('payment_zarinpal_status')) {
      		$status = true;
      	} else {
			$status = false;
		}

		$method_data = array();
		
		if ($status) {
      		$method_data = array( 
        		'code'       => 'zarinpal',
        		'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('payment_zarinpal_sort_order')
      		);
    	}
		
    	return $method_data;
  	}
}
?>