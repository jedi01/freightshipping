<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * InvoicePlane
 *
 * @author		InvoicePlane Developers & Contributors
 * @copyright	Copyright (c) 2012 - 2018 InvoicePlane.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 */

/**
 * Class Ajax
 */
class Ajax extends Admin_Controller
{
    public $ajax_controller = true;

    public function filter_invoices()
    {
        $this->load->model('invoices/mdl_invoices');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_invoices->like("CONCAT_WS('^',LOWER(invoice_number),invoice_date_created,invoice_date_due,LOWER(client_name),invoice_total,invoice_balance)", $keyword);
            }
        }

        $data = array(
            'invoices' => $this->mdl_invoices->get()->result(),
            'invoice_statuses' => $this->mdl_invoices->statuses()
        );

        $this->layout->load_view('invoices/partial_invoice_table', $data);
    }

    public function filter_quotes()
    {
        $this->load->model('quotes/mdl_quotes');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_quotes->like("CONCAT_WS('^',LOWER(quote_number),quote_date_created,quote_date_expires,LOWER(client_name),quote_total)", $keyword);
            }
        }

        $data = array(
            'quotes' => $this->mdl_quotes->get()->result(),
            'quote_statuses' => $this->mdl_quotes->statuses()
        );

        $this->layout->load_view('quotes/partial_quote_table', $data);
    }

    public function filter_clients()
    {
        $this->load->model('clients/mdl_clients');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_clients->like("CONCAT_WS('^',LOWER(client_name),LOWER(client_surname),LOWER(client_email),client_phone,client_active)", $keyword);
            }
        }

        $data = array(
            'records' => $this->mdl_clients->with_total_balance()->get()->result()
        );

        $this->layout->load_view('clients/partial_client_table', $data);
    }




    public function filter_moves()
    {
        $this->load->model('moves/mdl_moves');
        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_moves->like("CONCAT_WS('^',LOWER(shippingorderid),LOWER(shippername),LOWER(carriername),LOWER(receivername))", $keyword);
            }
        }
         $join['ip_shippers'] = 'ip_shippers.shipperid =  ip_moves.shipper';
       $join['ip_receivers'] = 'ip_receivers.receiverid =  ip_moves.receiver';
       $join['ip_carriers'] = 'ip_carriers.carrierid =  ip_moves.carrier';

        $data = array(
            'records' =>  $this->mdl_moves->get_data("*","","",$join)
        );

        $this->layout->load_view('moves/table', $data);
    }


    public function filter_tracking()
    {
        $this->load->model('tracking_detail/mdl_tracking_detail');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_tracking_detail->like("CONCAT_WS('^',LOWER(shippingorderid),LOWER(location),LOWER(type))", $keyword);
            }
        }

        $join['ip_tracktrace'] = 'ip_tracktrace.tracktraceid =  ip_trackingdetail.trackingstatus';
        $data = array(
            'records' => $this->mdl_tracking_detail->get_data("*","","",$join)
        );

        $this->layout->load_view('tracking_detail/table', $data);
    }



    public function filter_shipping()
    {
        $this->load->model('shipping/mdl_shipping');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_shipping->like("CONCAT_WS('^',LOWER(shippingorderid),LOWER(client_name),LOWER(type),LOWER(shippername),LOWER(receivername),LOWER(carriername),LOWER(bol),LOWER(orderdate),LOWER(customernumber),LOWER(etadate))", $keyword);
            }
        }

       $join['ip_clients'] = 'ip_clients.client_id = ip_shipping.customer';
       $join['ip_shippers'] = 'ip_shippers.shipperid = ip_shipping.shipper';
       $join['ip_receivers'] = 'ip_receivers.receiverid = ip_shipping.receiver';
       $join['ip_carriers'] = 'ip_carriers.carrierid = ip_shipping.origincarrier';
       $join['ip_trailersize'] = 'ip_trailersize.trailersizeid = ip_shipping.trailersize';
       $join['ip_trailertype'] = 'ip_trailertype.trailertypeid = ip_shipping.trailertype';
       $join['ip_custombrokers'] = 'ip_custombrokers.brokerid = ip_shipping.brokerid';

       $join['ip_dispatcher'] = 'ip_dispatcher.dispatcherid = ip_shipping.dispatcher';
       //$join['ip_orderstatus'] = 'ip_orderstatus.orderstatusid = ip_shipping.orderstatus';

        $data = array(
            'records' => $this->mdl_shipping->get_data("*","","",$join)
        );

        $this->layout->load_view('shipping/table', $data);
    }

     public function filter_additional_loads()
    {
        $this->load->model('additional_loads/mdl_additional_loads');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_additional_loads->like("CONCAT_WS('^',LOWER(additional_id),LOWER(pickupdate),LOWER(shipping_order_id),LOWER(punotes),LOWER(orderdate),LOWER(trailernum),LOWER(netweight),LOWER(seal))", $keyword);
            }
        }

        $join['ip_clients'] = 'ip_clients.client_id = ip_additional_loads.customer';
      

        $data = array(
            'records' => $this->mdl_additional_loads->get_data("*","","",$join)
        );

        $this->layout->load_view('additional_loads/table', $data);
    }



    public function filter_payments()
    {
        $this->load->model('payments/mdl_payments');

        $query = $this->input->post('filter_query');
        $keywords = explode(' ', $query);

        foreach ($keywords as $keyword) {
            if ($keyword) {
                $keyword = strtolower($keyword);
                $this->mdl_payments->like("CONCAT_WS('^',payment_date,LOWER(invoice_number),LOWER(client_name),payment_amount,LOWER(payment_method_name),LOWER(payment_note))", $keyword);
            }
        }

        $data = array(
            'payments' => $this->mdl_payments->get()->result()
        );

        $this->layout->load_view('payments/partial_payment_table', $data);
    }

}
