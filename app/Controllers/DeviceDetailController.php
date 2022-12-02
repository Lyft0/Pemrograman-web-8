<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class DeviceDetailController extends BaseController
{
    protected $deviceModel;

    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Device Detail',
            'device' => $this->deviceModel->getDevice($id)
        ];
        return view('detail', $data);
    }
}
