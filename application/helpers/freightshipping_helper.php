<?php 

function getTrackingDetails($shippingOrderId)
{
	$CI =& get_instance();
	$CI->load->model('tracking_detail/mdl_tracking_detail');
	$where['shippingorderid'] = $shippingOrderId;
    $join['ip_tracktrace'] = 'ip_tracktrace.tracktraceid =  ip_trackingdetail.trackingstatus';
    $tracking = $CI->mdl_tracking_detail->get_data("*",$where,"",$join);
    return $tracking;
}


function getMoves($shippingOrderId)
{
	$CI =& get_instance();
	$CI->load->model('moves/mdl_moves');
	$where['shippingorderid'] = $shippingOrderId;
	$join['ip_shippers'] = 'ip_shippers.shipperid =  ip_moves.shipper';
    $join['ip_receivers'] = 'ip_receivers.receiverid =  ip_moves.receiver';
    $join['ip_carriers'] = 'ip_carriers.carrierid =  ip_moves.carrier';
    $moves = $CI->mdl_moves->get_data("*",$where,"",$join);

    return $moves;
}
function getAdditional($shippingOrderId)
{
	$CI =& get_instance();
	$CI->load->model('additional_loads/mdl_additional_loads');
	$where['shipping_order_id'] = $shippingOrderId;
		
    $moves = $CI->mdl_additional_loads->get_data("*",$where,"");

    return $moves;
}


function getTrackingStatus($status)
{
	$CI =& get_instance();
	$CI->load->model('tracktrace/mdl_tracktrace');
	$where['tracktraceid'] = $status;
	$status = $CI->mdl_tracktrace->get_data("*",$where,true);
	return $status;
}


function getState($state)
{
	$CI =& get_instance();
	$CI->load->model('states/mdl_states');
	$where['state_id'] = $state;
	$state = $CI->mdl_states->get_data("*",$where,true);
	return $state;
}



function getOrderStatus($status)
{
	$CI =& get_instance();
	$CI->load->model('orderstatus/mdl_orderstatus');
	$where['orderstatusid'] = $status;
	$status = $CI->mdl_orderstatus->get_data("*",$where,true);
	return $status;
}




?>