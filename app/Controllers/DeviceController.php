<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class DeviceController extends BaseController
{
    protected $deviceModel;

    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Device',
            'device' => $this->deviceModel->getDevice()
        ];

        return view('device', $data);
    }
}
