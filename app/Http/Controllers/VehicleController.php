<?php
/**
 * @author mzac90
 * Date 21/07/2020
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CancellationProcessController extends BaseController
{
    public function __construct() {}

    public function fetchAll(Request $request) {
        $query = 'SELECT * FROM motors';
        $result = $this->db->query($query);
        if ($result) {
            return response()->json($result, 200);
        } else {
            return response()->json([], 404);
        }
    }

    public function updateVehicle(Request $request, $id) {
        if (!empty($request)) {
            $data = $request->input('data');
            $this->db->update('motors', $data, 'id = '. $id);
            return response()->json($data, 200, $headers);
        } else {
            return response()->json('No request data', 400);
        }
    }
}
