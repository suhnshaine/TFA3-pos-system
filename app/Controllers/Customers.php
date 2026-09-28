<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data['customers'] = $customerModel->findAll();

        return view('customers', $data);
    }

    public function new()
    {
        return view('customer_form');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (! $this->validate($rules)) {
            return view('customer_form', [
                'validation' => $this->validator
            ]);
        }

        $customerModel = new CustomerModel();

        $customerModel->save([
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $customerModel = new CustomerModel();

        return view('customer_form', [
            'customer' => $customerModel->find($id)
        ]);
    }

    public function update($id)
    {
        $customerModel = new CustomerModel();

        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone')
        ]);

        return redirect()->to('/customers');
    }
}
