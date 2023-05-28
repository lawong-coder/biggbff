<?php

class Withdraw_request_modal extends MY_Model {
	public $status_list = array(
        '0'  =>  'Pending',
        '1'  =>  'Approved',
        '2'  =>  'Rejected'
    );

    public function getRequests($filter = array())
	{
		$query = "SELECT wr.*,u.firstname,u.lastname,u.username,u.email,u.created_at as user_joined_date FROM withdraw_requests wr LEFT JOIN users u ON u.id=wr.user_id WHERE 1";

		if (isset($filter['date'])) {
			if (strpos($filter['date'], ' - ') !== false) {
				list($start_date, $end_date) = explode(" - ", $filter['date']);

				$start_date = date("Y-m-d", strtotime($start_date));
				$end_date = date("Y-m-d", strtotime($end_date));

				$query .= " AND DATE(wr.created_at) >= '{$start_date}'";
				$query .= " AND DATE(wr.created_at) <= '{$end_date}'";
			}
		}

		if (isset($filter['user_id'])) {
			$query .= ' AND wr.user_id = '. (int)$filter['user_id'];
		}

		return $this->db->query($query)->result_array();
	}
}